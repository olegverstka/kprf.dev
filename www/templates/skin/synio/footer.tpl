			{hook run='content_end'}
		</div> <!-- /content -->
	</div> <!-- /wrapper -->

<!--
	
	<footer id="footer">
		{if $oUserCurrent}
			<ul class="footer-list">
				<li class="footer-list-header word-wrap">{$oUserCurrent->getLogin()}</li>
				<li><a href="{$oUserCurrent->getUserWebPath()}">{$aLang.footer_menu_user_profile}</a></li>
				<li><a href="{router page='settings'}profile/">{$aLang.user_settings}</a></li>
				<li><a href="{router page='topic'}add/" class="js-write-window-show">{$aLang.block_create}</a></li>
				{hook run='footer_menu_user_item' oUser=$oUserCurrent}
				<li><a href="{router page='login'}exit/?security_ls_key={$LIVESTREET_SECURITY_KEY}">{$aLang.exit}</a></li>
			</ul>
		{else}
			<ul class="footer-list">
				<li class="footer-list-header word-wrap">{$aLang.footer_menu_user_quest_title}</li>
				<li><a href="{router page='registration'}" class="js-registration-form-show">{$aLang.registration_submit}</a></li>
				<li><a href="{router page='login'}" class="js-login-form-show sign-in">{$aLang.user_login_submit}</a></li>
				{hook run='footer_menu_user_item' isGuest=true}
			</ul>
		{/if}
		
		<ul class="footer-list">
			<li class="footer-list-header">{$aLang.footer_menu_navigate_title}</li>
			<li><a href="{cfg name='path.root.web'}">{$aLang.topic_title}</a></li>
			<li><a href="{router page='blogs'}">{$aLang.blogs}</a></li>
			<li><a href="{router page='people'}">{$aLang.people}</a></li>
			<li><a href="{router page='stream'}">{$aLang.stream_menu}</a></li>
			{hook run='footer_menu_navigate_item'}
		</ul>
-->		
		
		{* RU: Тут можно добавить свой блок со ссылками, расскоментируйте блок кода ниже и добавьте свои ссылки *}
		{* EN: You can add additional block with links here, just uncomment code below and add your links *}
		
		{*
		
	
			<ul class="footer-list">
				<li class="footer-list-header">{$aLang.footer_menu_project_title}</li>
				<li><a href="#">{$aLang.footer_menu_project_about}</a></li>
				<li><a href="#">{$aLang.footer_menu_project_contact}</a></li>
				<li><a href="#">{$aLang.footer_menu_project_advert}</a></li>
				<li><a href="#">{$aLang.footer_menu_project_help}</a></li>
				{hook run='footer_menu_project_item'}
			</ul>
		
			
		*}
		
		

								 
				 <img src="http://сокол-сао.рф/d.jpg" title="Мусаев Александр
адрес: Ул.Флотская, 82/6
телефон : 8(499)7470954">
		<br/><br/>
		
		
		
	
		<!--<div class="copyright">
			{hook run='copyright'}
			
			<div class="design-by">
				<img src="{cfg name='path.static.skin'}/images/xeoart.png" alt="xeoart" />
				Design by <a href="http://xeoart.com">xeoart</a> -->
				<div>Организатор проекта <a href="http://vk.com/id1798736">Тарасов Антон</a>
				 </div>
				 <div>Руководитель проекта <a href="https://www.facebook.com/profile.php?id=100007299644938">Удалов Сергей</a></div>
				 
		 <br/>
		{literal}			 
				 
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
 {/literal}
				 
				 
				 
			</div>
		</div>
		
		{hook run='footer_end'}
	</footer>
</div> <!-- /container -->

{include file='toolbar.tpl'}

{hook run='body_end'}

{literal}
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
{/literal}

</body>
</html>