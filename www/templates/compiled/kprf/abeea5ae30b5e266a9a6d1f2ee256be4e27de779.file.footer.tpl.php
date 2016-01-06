<?php /* Smarty version Smarty-3.1.8, created on 2016-01-04 22:10:08
         compiled from "D:\OpenServer\domains\kprf.dev\www/templates/skin/kprf\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2163568a93125cb7d0-26923931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abeea5ae30b5e266a9a6d1f2ee256be4e27de779' => 
    array (
      0 => 'D:\\OpenServer\\domains\\kprf.dev\\www/templates/skin/kprf\\footer.tpl',
      1 => 1451934607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2163568a93125cb7d0-26923931',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_568a9312634f67_85764045',
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a9312634f67_85764045')) {function content_568a9312634f67_85764045($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_cfg')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.cfg.php';
if (!is_callable('smarty_function_router')) include 'D:\\OpenServer\\domains\\kprf.dev\\www/engine/modules/viewer/plugs\\function.router.php';
?>			<?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>

				</main>
			</div>
		</div>


	
	<footer class="footer">
		<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="logo-foot">
							<img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
images/logo_foot.png" alt="">
						</div>
					</div>
					<div class="col-md-10">
						<p class="copy">&#169; 2015 Все права защищены</p>
					</div>
				</div>
			</div>
<!--
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
			<ul class="footer-list">
				<li class="footer-list-header word-wrap"><?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getLogin();?>
</li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_user_profile'];?>
</a></li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
profile/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_settings'];?>
</a></li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/" class="js-write-window-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
</a></li>
				<?php echo smarty_function_hook(array('run'=>'footer_menu_user_item','oUser'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value),$_smarty_tpl);?>

				<li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
exit/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['exit'];?>
</a></li>
			</ul>
		<?php }else{ ?>
			<ul class="footer-list">
				<li class="footer-list-header word-wrap"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_user_quest_title'];?>
</li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" class="js-registration-form-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_submit'];?>
</a></li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" class="js-login-form-show sign-in"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</a></li>
				<?php echo smarty_function_hook(array('run'=>'footer_menu_user_item','isGuest'=>true),$_smarty_tpl);?>

			</ul>
		<?php }?>
		
		<ul class="footer-list">
			<li class="footer-list-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_navigate_title'];?>
</li>
			<li><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_title'];?>
</a></li>
			<li><a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
</a></li>
			<li><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people'];?>
</a></li>
			<li><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu'];?>
</a></li>
			<?php echo smarty_function_hook(array('run'=>'footer_menu_navigate_item'),$_smarty_tpl);?>

		</ul>
-->		
		
		
		
		
		
		<!--<div class="copyright">
			<?php echo smarty_function_hook(array('run'=>'copyright'),$_smarty_tpl);?>

			
			<div class="design-by">
				<img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/xeoart.png" alt="xeoart" />
				Design by <a href="http://xeoart.com">xeoart</a> -->
					 
				 
<!-- Yandex.Metrika informer -->
<a class="ya" href="https://metrika.yandex.ru/stat/?id=29259100&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/29259100/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:29259100,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter29259100 = new Ya.Metrika({id:29259100,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/29259100" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
 
		
		<?php echo smarty_function_hook(array('run'=>'footer_end'),$_smarty_tpl);?>

	</footer>
</div> <!-- /container -->

<?php echo $_smarty_tpl->getSubTemplate ('toolbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>



<!-- Yandex.Metrika counter -->
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
<script type="text/javascript">
try { var yaCounter23864602 = new Ya.Metrika({id:23864602,
          webvisor:true,
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true});
} catch(e) { }
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23864602" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


</body>
</html><?php }} ?>