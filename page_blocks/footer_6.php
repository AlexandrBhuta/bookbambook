<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
global $arTheme;
$bPhone = (intval($arTheme['HEADER_PHONES']) > 0 ? true : false);
?>
<footer id="footer" class="compact footer-grey">	
	<div class="container">
		<div class="row bottom-middle">
			<div class="maxwidth-theme">
				<div class="col-md-3 col-sm-3 copy-block">
					<div class="copy blocks">
						<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/copy.php", Array(), Array(
								"MODE" => "php",
								"NAME" => "Copyright",
								"TEMPLATE" => "include_area.php",
							)
						);?>
					</div>
					<div class="print-block blocks"><?=CLandscape::ShowPrintLink();?></div>
					<div id="bx-composite-banner" class="blocks"></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/contacts-title.php", array(), array(
							"MODE" => "html",
							"NAME" => "Title",
							"TEMPLATE" => "include_area.php",
						)
					);?>
					<div class="row info">
						<?$bEmail = CLandscape::checkContentFile(SITE_DIR.'include/footer/site-email.php');
						$bAddr = CLandscape::checkContentFile(SITE_DIR.'include/header/site-address.php');
						$break = false;?>
						<div class="col-md-6">
							<?if($bPhone || $bEmail):?>
								<?//check phone text?>
								<?if($bPhone):?>
									<div>
										<div class="blocks phones">
											<?CLandscape::ShowHeaderPhones('', 'Phone_black.svg');?>
										</div>
									</div>
								<?endif?>
								<?//check email text?>
								<?if($bEmail):?>
									<div>
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
							<?elseif($bAddr):?>
								<?$break = true;?>
								<div>
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
						</div>
						<?//check address text?>
						<?if($bAddr && !$break):?>
							<div class="col-md-6">
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
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="social-block">
						<?$APPLICATION->IncludeComponent(
							"aspro:social.info.landscape",
							".default",
							array(
								"CACHE_TYPE" => "A",
								"CACHE_TIME" => "3600000",
								"CACHE_GROUPS" => "N",
								"COMPONENT_TEMPLATE" => ".default",
								"SOCIAL_TITLE" => GetMessage("SOCIAL_TITLE")
							),
							false
						);?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>