<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
global $arTheme;
$bOrder = ($arTheme['ORDER_VIEW']['VALUE'] == 'Y' && $arTheme['ORDER_VIEW']['DEPENDENT_PARAMS']['ORDER_BASKET_VIEW']['VALUE']=='HEADER' ? true : false);
$bCabinet = ($arTheme["CABINET"]["VALUE"]=='Y' ? true : false);
$bPhone = (intval($arTheme['HEADER_PHONES']) > 0 ? true : false);
$logoClass = ($arTheme['COLORED_LOGO']['VALUE'] !== 'Y' ? '' : ' colored');
?>
<header class="<?=basename(__FILE__, ".php")?> long">
	<div class="top-block">
		<div class="maxwidth-theme">
			<div class="header_wrap clearfix">
				<?//show phone and callback?>
				<div class="top-block-item pull-left">
					<div class="phone-block">
						<?if($bPhone):?>
							<div class="inline-block">
								<?CLandscape::ShowHeaderPhones();?>
							</div>
						<?endif?>
						<?if($arTheme["CALLBACK_BUTTON"]["VALUE"] == "Y"):?>
							<div class="inline-block">
								<span class="callback-block animate-load twosmallfont colored" data-event="jqm" data-param-id="<?=CLandscape::getFormID("aspro_landscape_callback");?>" data-name="callback"><?=GetMessage("S_CALLBACK")?></span>
							</div>
						<?endif;?>
					</div>
				</div>
				
				<?//show personal?>
				<?if($bCabinet):?>
					<div class="top-block-item pull-right personal">
						<div class="personal_wrap">
							<div class="personal top login twosmallfont">
								<?=CLandscape::showCabinetLink(true, true);?>
							</div>
						</div>
					</div>
				<?endif;?>
				
				<?//show social?>
				<div class="top-block-item col-md-4 pull-right text-center social">
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
				
				<?//check address text?>
				<?if(CLandscape::checkContentFile(SITE_DIR.'include/header/site-address.php')):?>
					<div class="top-block-item col-md-3 pull-right text-center visible-lg addr">
						<div class="address twosmallfont inline-block">
							<?$APPLICATION->IncludeFile(SITE_DIR."include/header/site-address.php", array(), array(
									"MODE" => "html",
									"NAME" => "Address",
									"TEMPLATE" => "include_area.php",
								)
							);?>
						</div>
					</div>
				<?endif;?>
			</div>
		</div>
	</div>
	<div class="logo_and_menu-row full-fill">
		<div class="logo-row">
			<div class="maxwidth-theme">
				<div class="wrap_border">
					<div class="row">
						<?//show logo?>
						<div class="logo-block col-md-2 col-sm-3">
							<div class="logo<?=$logoClass?>">
								<?=CLandscape::ShowLogo();?>
							</div>
						</div>
						<?//show menu?>
						<div class="col-md-10 menu-row">
							<div class="right-icons wide sm pull-right">
								<?if($bOrder):?>
									<div class="pull-right">
										<div class="wrap_icon wrap_basket">
											<?=CLandscape::showBasketLink('', 'big', '', '');?>
										</div>
									</div>
								<?endif;?>
								<div class="pull-right">
									<div class="wrap_icon inner-table-block">
										<button class="inline-search-show twosmallfont" title="<?=GetMessage("SEARCH_TITLE")?>">
											<?=CLandscape::showIconSvg("search", SITE_TEMPLATE_PATH."/images/svg/Search_big_black.svg");?>
										</button>
									</div>
								</div>
							</div>
							<div class="menu-only">
								<nav class="mega-menu sliced">
									<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
										array(
											"COMPONENT_TEMPLATE" => ".default",
											"PATH" => SITE_DIR."include/header/menu.php",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "",
											"AREA_FILE_RECURSIVE" => "Y",
											"EDIT_TEMPLATE" => "include_area.php"
										),
										false, array("HIDE_ICONS" => "Y")
									);?>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="lines"></div>
			</div>
		</div><?// class=logo-row?>
	</div>
	<div class="line-row"></div>
</header>