<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
global $arTheme;
$bPhone = (intval($arTheme['HEADER_PHONES']) > 0 ? true : false);
?>
<footer id="footer">
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => SITE_DIR."include/footer/subscribe.php",
			"EDIT_TEMPLATE" => "include_area.php"
		)
	);?>

	<div class="container">
		<div class="row bottom-middle">
			<div class="maxwidth-theme">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
								"ROOT_MENU_TYPE" => "bottom1",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "3600000",
								"MENU_CACHE_USE_GROUPS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "2",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "N",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "Y"
								),
								false
							);?>
						</div>
						<div class="col-md-3 col-sm-3">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
								"ROOT_MENU_TYPE" => "bottom2",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "3600000",
								"MENU_CACHE_USE_GROUPS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "2",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "Y"
								),
								false
							);?>
						</div>
						<div class="col-md-3 col-sm-3">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
								"ROOT_MENU_TYPE" => "bottom3",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "3600000",
								"MENU_CACHE_USE_GROUPS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "2",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "Y"
								),
								false
							);?>
						</div>
						<div class="col-md-3 col-sm-3">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
								"ROOT_MENU_TYPE" => "bottom4",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "3600000",
								"MENU_CACHE_USE_GROUPS" => "N",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "",
								"USE_EXT" => "N",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "Y"
								),
								false
							);?>
						</div>
					</div>
	 			</div>
				<div class="col-md-4 contact-block">
					<div class="row">
						<div class="col-md-9 col-md-offset-2">
							<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/contacts-title.php", array(), array(
									"MODE" => "html",
									"NAME" => "Title",
									"TEMPLATE" => "include_area.php",
								)
							);?>
							<div class="info">
								<div class="row">
									<?//check phone text?>
									<?if($bPhone):?>
										<div class="col-md-12 col-sm-4">
											<div class="blocks phones">
												<?CLandscape::ShowHeaderPhones('', 'Phone_black.svg');?>
												<div class="schedule">
													<?$APPLICATION->IncludeFile(SITE_DIR."include/header-schedule.php", array(), array(
															"MODE" => "html",
															"NAME" => GetMessage('HEADER_SCHEDULE'),
															"TEMPLATE" => "include_area.php"
														)
													);?>
												</div>
											</div>
										</div>
									<?endif?>
									<?//check address text?>
									<?if(CLandscape::checkContentFile(SITE_DIR.'include/header/site-address.php')):?>
										<div class="col-md-12 col-sm-4">
											<div class="address blocks">
												<?=CLandscape::showIconSvg("address", SITE_TEMPLATE_PATH."/images/svg/Addres_black.svg");?>
												<?$APPLICATION->IncludeFile(SITE_DIR."include/header/site-address.php", array(), array(
														"MODE" => "html",
														"NAME" => "Address",
														"TEMPLATE" => "include_area.php",
													)
												);?>
											</div>
										</div>
									<?endif?>
									<?//check email text?>
									<?if(CLandscape::checkContentFile(SITE_DIR.'include/footer/site-email.php')):?>
										<div class="col-md-12 col-sm-4">
											<div class="email blocks">
												<?=CLandscape::showIconSvg("email", SITE_TEMPLATE_PATH."/images/svg/Email.svg");?>
												<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/site-email.php", array(), array(
														"MODE" => "html",
														"NAME" => "E-mail",
														"TEMPLATE" => "include_area.php",
													)
												);?>
											</div>
										</div>
									<?endif?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row bottom-under">
			<div class="maxwidth-theme">
				<div class="col-md-12 outer-wrapper">
					<div class="inner-wrapper">
						<div class="copy-block">
							<div class="copy">
								<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/copy.php", Array(), Array(
										"MODE" => "php",
										"NAME" => "Copyright",
										"TEMPLATE" => "include_area.php",
									)
								);?>
							</div>
							<div class="print-block"><?=CLandscape::ShowPrintLink();?></div>
							<div id="bx-composite-banner"></div>
						</div>
						<div class="social-block">
							<?$APPLICATION->IncludeComponent(
								"aspro:social.info.landscape",
								".default",
								array(
									"CACHE_TYPE" => "A",
									"CACHE_TIME" => "3600000",
									"CACHE_GROUPS" => "N",
									"COMPONENT_TEMPLATE" => ".default"
								),
								false
							);?>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</footer>