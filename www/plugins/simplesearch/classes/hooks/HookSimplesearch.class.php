<?php
/*
  Simplesearch plugin
  (P) PSNet, 2008 - 2013
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
  http://livestreetguide.com/developer/PSNet/
*/

class PluginSimplesearch_HookSimplesearch extends Hook {

  public function RegisterHook () {
    $this -> AddHook ('engine_init_complete', 'AddStylesAndJS');
    $this -> AddHook ('template_body_begin', 'BodyBegin');
    $this -> AddHook ('template_blog_info', 'BlogInfo');
  }
  
  // ---

  public function AddStylesAndJS () {
    $sTemplateWebPath = Plugin::GetTemplateWebPath (__CLASS__);
    $this -> Viewer_AppendStyle ($sTemplateWebPath . 'css/style.css');
  }
  
  // ---
	
  public function BodyBegin () {
    if (Config::Get ('plugin.simplesearch.Enable_Auto_Completer')) {
      return $this -> Viewer_Fetch (Plugin::GetTemplatePath (__CLASS__) . 'body_begin.tpl');
    }
    return false;
  }
  
  // ---
	
  public function BlogInfo ($aVars) {
    $this -> Viewer_Assign ('aReq', array ('sType' => 'topics', 'q' => ''));
    $this -> Viewer_Assign ('iSearchInOneBlogSelected', $aVars ['oBlog'] -> getId ());
    
    //
    // --- Blogs selectors ---
    //
    // Check up user and get accessible blogs for this user
    $aBlogsData = $this -> PluginSimplesearch_Simplesearch_GetOpenClosePersonalBlogsByUser (
      $this -> User_GetUserCurrent (),
      array ('open', 'close')
    );
    // set list of blogs for template
    $this -> Viewer_Assign ('aOpenCloseBlogsForCurrentUserObj', $this -> Blog_GetBlogsAdditionalData ($aBlogsData ['openclose'], array ()));
    
    return $this -> Viewer_Fetch (Plugin::GetTemplatePath (__CLASS__) . 'search_form_wrapper.tpl');
  }

}

?>