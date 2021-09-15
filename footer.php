					<?if(!$isIndex):?>
						<?CLandscape::checkRestartBuffer();?>
					<?endif;?>
					<?IncludeTemplateLangFile(__FILE__);?>
					<?global $arTheme, $isIndex, $is404;?>
					<?if(!$isIndex):?>
							<?if($is404):?>
								</div>
							<?else:?>
									<?CLandscape::get_banners_position('CONTENT_BOTTOM');?>
									</div> <?// class=right_block?>
									<?if($APPLICATION->GetProperty("MENU") != "N" && !defined("ERROR_404")):?>
										<?CLandscape::ShowPageType('left_block');?>
									<?endif;?>
								</div><?// class=col-md-12 col-sm-12 col-xs-12 content-md?>
							<?endif;?>
							<?if($APPLICATION->GetProperty("FULLWIDTH")!=='Y'):?>
								</div><?// class="maxwidth-theme?>
							<?endif;?>
						</div><?// class=row?>
					<?else:?>
						<?CLandscape::ShowPageType('indexblocks');?>
					<?endif;?>
				</div><?// class=container?>
			</div><?// class=main?>
<script type="text/javascript" src="https://izvonok.com/callback_api?key=d6600fa45a9f429d08d5313aab7ec847"></script>
		</div><?// class=body?>
		<?CLandscape::get_banners_position('FOOTER');?>
		<?CLandscape::ShowPageType('footer');?>
		<div class="bx_areas">
			<?CLandscape::ShowPageType('bottom_counter');?>
		</div>
		<?CLandscape::SetMeta();?>
		<?CLandscape::ShowPageType('search_title_component');?>
		<?CLandscape::ShowPageType('basket_component');?>
		<?CLandscape::AjaxAuth();?>

	</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(66053602, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/66053602" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!--LiveInternet counter--><script>
new Image().src = "//counter.yadro.ru/hit?r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,150))+
";"+Math.random();</script><!--/LiveInternet-->

	</body>
</html>