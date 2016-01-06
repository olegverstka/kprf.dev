<?php
//===============================================================
class PluginReceptiondesk_ModuleTools_EntityFile extends Entity{
//===============================================================
	public function getId(){
		return $this->_getDataOne('file_id');
	}
	public function setId($data){
		$this->_aData['file_id']=$data;
	}
	public function getName(){
		return $this->_getDataOne('file_name');
	}
	public function setName($data){
		$this->_aData['file_name']=$data;
	}
	public function getSize(){
		return $this->_getDataOne('file_size');
	}
	public function getFullSize(){
		return $this->PluginReceptiondesk_Tools_GetFileSize($this->getSize());
	}
	public function setSize($data){
		$this->_aData['file_size']=$data;
	}
	public function getQuestionId(){
		return $this->_getDataOne('question_id');
	}
	public function setQuestionId($data){
		$this->_aData['question_id']=$data;
	}
	public function getTargetTmp(){
		return $this->_getDataOne('file_target_tmp');
	}
	public function setTargetTmp($data){
		$this->_aData['file_target_tmp']=$data;
	}
	public function getPath(){
		return $this->_getDataOne('file_path');
	}
	public function getWebPath($sWidth=null){
		if($this->getPath()){
			if($sWidth){
				$aPathInfo=pathinfo($this->getPath());
				return $aPathInfo['dirname'].'/'.$aPathInfo['filename'].'_'.$sWidth.'.'.$aPathInfo['extension'];
			}else return $this->getPath();
		}else return null;
	}
	public function setPath($data){
		$this->_aData['file_path']=$data;
	}
//===============================================================
}
?>