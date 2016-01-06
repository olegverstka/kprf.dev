<?php//===============================================================class PluginReceptiondesk_ModuleTools extends Module{//===============================================================	protected $oMapper;//===============================================================	public function Init(){		$this->oMapper=Engine::GetMapper(__CLASS__);	}//===============================================================	public function GetFileSize($sFileSize){		if($sFileSize>0){			$sCount=0;			$sSizes=array('Byte','KB','MB','GB','TB','PB');			while(($sFileSize/1024)>0.9){				$sFileSize=$sFileSize/1024;				$sCount++;			}			return round($sFileSize,2).' '.$sSizes[$sCount];		}else return 0;	}//===============================================================	public function GetTranslit($sText,$bLower=true){		$aConverter=array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'zh','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'sch','ь'=>"'",'ы'=>'y','ъ'=>"'",'э'=>'e','ю'=>'yu','я'=>'ya','А'=>'A','Б'=>'B','В'=>'V','Г'=>'G','Д'=>'D','Е'=>'E','Ё'=>'E','Ж'=>'Zh','З'=>'Z','И'=>'I','Й'=>'Y','К'=>'K','Л'=>'L','М'=>'M','Н'=>'N','О'=>'O','П'=>'P','Р'=>'R','С'=>'S','Т'=>'T','У'=>'U','Ф'=>'F','Х'=>'H','Ц'=>'C','Ч'=>'Ch','Ш'=>'Sh','Щ'=>'Sch','Ь'=>"'",'Ы'=>'Y','Ъ'=>"'",'Э'=>'E','Ю'=>'Yu','Я'=>'Ya'," "=>"_","."=>"","/"=>"-",":"=>"-");		$sRes=strtr($sText,$aConverter);		if($sResIconv=@iconv("UTF-8","ISO-8859-1//IGNORE//TRANSLIT",$sRes)) $sRes=$sResIconv;		if(preg_match('/[^A-Za-z0-9_\-]/',$sRes)){			$sRes=preg_replace('/[^A-Za-z0-9_\-]/','',$sRes);			$sRes=preg_replace('/\-+/','-',$sRes);		}		if($bLower) $sRes=strtolower($sRes);		return $sRes;	}//===============================================================	public function SendQuestionMail(PluginReceptiondesk_ModuleQuestion_EntityQuestion $oQuestion){		if(!$oQuestion->getAuthorMail()) return false;		$sName=$oQuestion->getAuthorName() ? $oQuestion->getAuthorName() : $this->Lang_Get('plugin.receptiondesk.receptiondesk_send_mail_guest');		$this->SendMail($oQuestion->getAuthorMail(),$sName,'notify.answer_mail.tpl',$this->Lang_Get('plugin.receptiondesk.receptiondesk_send_mail_title'),array('sUserName'=>$sName,'oQuestion'=>$oQuestion,));		return true;	}//===============================================================	public function SendNewQuestionMail(PluginReceptiondesk_ModuleQuestion_EntityQuestion $oQuestion){		$this->SendMail(Config::Get('plugin.receptiondesk.receptiondesk_create_send_admin_mail'),'Admin','notify.question_mail.tpl',$this->Lang_Get('plugin.receptiondesk.receptiondesk_send_mail_title'),array('oQuestion'=>$oQuestion,));		return true;	}//===============================================================	public function SendMail($sMail,$sName,$sTemplate,$sSubject,$aAssign=array()){		$oViewer=$this->Viewer_GetLocalViewer();		foreach($aAssign as $sKey=>$sValue) $oViewer->Assign($sKey,$sValue);		$sBody=$oViewer->Fetch($this->Notify_GetTemplatePath($sTemplate,'receptiondesk'));		$this->Mail_SetAdress($sMail,$sName);		$this->Mail_SetSubject($sSubject);		$this->Mail_SetBody($sBody);		$this->Mail_setHTML();		$this->Mail_Send();	}//===============================================================	public function getFilesByTargetTmp($sTargetTmp){		return $this->oMapper->getFilesByTargetTmp($sTargetTmp);	}//===============================================================	public function getCountFilesByTargetTmp($sTargetTmp){		return $this->oMapper->getCountFilesByTargetTmp($sTargetTmp);	}//===============================================================	public function UploadFile($aFile){		if(!is_array($aFile) || !isset($aFile['tmp_name'])) return false;		$sFileName=func_generator();		$sPath=Config::Get('plugin.receptiondesk.receptiondesk_create_file_path_uploads').date('Y/m/d/H/i/s').'/';		if(!is_dir(Config::Get('path.root.server').$sPath)) mkdir(Config::Get('path.root.server').$sPath,0755,true);		$sFileTmp=Config::Get('path.root.server').$sPath.$sFileName;		if(!move_uploaded_file($aFile['tmp_name'],$sFileTmp)) return false;		$aParams=$this->Image_BuildParams('receptiondesk');		$oImage=$this->Image_CreateImageObject($sFileTmp);		if($sError=$oImage->get_last_error()){			$this->Message_AddError($sError,$this->Lang_Get('error'));			@unlink($sFileTmp);			return false;		}		if(($oImage->get_image_params('width')>Config::Get('plugin.receptiondesk.receptiondesk_create_file_max_width')) || ($oImage->get_image_params('height')>Config::Get('plugin.receptiondesk.receptiondesk_create_file_max_height'))){			$this->Message_AddError($this->Lang_Get('plugin.receptiondesk.receptiondesk_admin_question_create_author_files_error_size'),$this->Lang_Get('error'));			@unlink($sFileTmp);			return false;		}		$aFileInfo=pathinfo($aFile['name']);		$sFileRealName=$this->GetTranslit($aFileInfo['filename']);		$sFile=$sFileRealName.'.'.$oImage->get_image_params('format');		rename($sFileTmp,$sFile);		if($sFileImage=$this->Image_Resize($sFile,$sPath,$sFileRealName,Config::Get('view.img_max_width'),Config::Get('view.img_max_height'),Config::Get('view.img_resize_width'),null,true,$aParams)) {			foreach(Config::Get('plugin.receptiondesk.receptiondesk_create_file_array_size') as $aSize){				$sNewFileName=$sFileRealName.'_'.$aSize['w'];				$oImage=$this->Image_CreateImageObject($sFile);				if($aSize['crop']){					$this->Image_CropProportion($oImage,$aSize['w'],$aSize['h'],true);					$sNewFileName.='crop';				}				$this->Image_Resize($sFile,$sPath,$sNewFileName,Config::Get('plugin.receptiondesk.receptiondesk_create_file_max_width'),Config::Get('plugin.receptiondesk.receptiondesk_create_file_max_height'),$aSize['w'],$aSize['h'],true,$aParams,$oImage);			}		}		$oFile=Engine::GetEntity('PluginReceptiondesk_ModuleTools_EntityFile');		$oFile->setPath($this->Image_GetWebPath($sFileImage));		$oFile->setName($sFile);		@unlink($sFile);		return $oFile;	}//===============================================================	public function AddFile(PluginReceptiondesk_ModuleTools_EntityFile $oFile){		if($sFileId=$this->oMapper->AddFile($oFile)){			$oFile->setId($sFileId);			return $oFile;		}		return false;	}//===============================================================	public function DeleteFile(PluginReceptiondesk_ModuleTools_EntityFile $oFile){		if($this->oMapper->DeleteFile($oFile)){			$this->RemoveAdditionalData($oFile);			return true;		}		return false;	}//===============================================================	public function GetFileByTargetTmp($sFileId,$sTarget){		return $this->oMapper->GetFileByTargetTmp($sFileId,$sTarget);	}//===============================================================	public function GetFiles($sQuestionId){		return $this->oMapper->GetFiles($sQuestionId);	}//===============================================================	public function UpdateFile($sQuestionId,$sTarget){		return $this->oMapper->UpdateFile($sQuestionId,$sTarget);	}//===============================================================	public function RemoveAdditionalData(PluginReceptiondesk_ModuleTools_EntityFile $oFile){		$this->Image_RemoveFile($this->Image_GetServerPath($oFile->getWebPath()));		foreach(Config::Get('plugin.receptiondesk.receptiondesk_create_file_array_size') as $aSize){			$sSize=$aSize['w'];			if($aSize['crop']) $sSize.='crop';			$this->Image_RemoveFile($this->Image_GetServerPath($oFile->getWebPath($sSize)));		}	}//===============================================================}?>