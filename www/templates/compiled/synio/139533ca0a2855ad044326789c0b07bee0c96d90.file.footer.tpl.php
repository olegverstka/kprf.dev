<?php /* Smarty version Smarty-3.1.8, created on 2015-06-10 11:38:25
         compiled from "/home/vxeeuesn/public_html/_sokol/templates/skin/synio/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10098131665577f78159c528-40352493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '139533ca0a2855ad044326789c0b07bee0c96d90' => 
    array (
      0 => '/home/vxeeuesn/public_html/_sokol/templates/skin/synio/footer.tpl',
      1 => 1430082322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10098131665577f78159c528-40352493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5577f7815cc685_82526752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f7815cc685_82526752')) {function content_5577f7815cc685_82526752($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/home/vxeeuesn/public_html/_sokol/engine/modules/viewer/plugs/function.cfg.php';
?>			<?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>

		</div> <!-- /content -->
	</div> <!-- /wrapper -->

<!--
	
	<footer id="footer">
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
		
		
		
		
		
		
		

								 
				 <img src="http://сокол-сао.рф/d.jpg" title="Мусаев Александр
адрес: Ул.Флотская, 82/6
телефон : 8(499)7470954">
		<br/><br/>
		
		
		
	
		<!--<div class="copyright">
			<?php echo smarty_function_hook(array('run'=>'copyright'),$_smarty_tpl);?>

			
			<div class="design-by">
				<img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/xeoart.png" alt="xeoart" />
				Design by <a href="http://xeoart.com">xeoart</a> -->
				<div>Организатор проекта <a href="http://vk.com/id1798736">Тарасов Антон</a>
				 </div>
				 <div>Руководитель проекта <a href="https://www.facebook.com/profile.php?id=100007299644938">Удалов Сергей</a></div>
				 
		 <br/>
					 
				 
				 <!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=29259100&amp;from=informer"
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
 
				 
				 
				 
			</div>
		</div>
		
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