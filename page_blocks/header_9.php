<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
global $arTheme;
$bOrder = ($arTheme['ORDER_VIEW']['VALUE'] == 'Y' && $arTheme['ORDER_VIEW']['DEPENDENT_PARAMS']['ORDER_BASKET_VIEW']['VALUE']=='HEADER' ? true : false);
$bCabinet = ($arTheme["CABINET"]["VALUE"]=='Y' ? true : false);
$bPhone = (intval($arTheme['HEADER_PHONES']) > 0 ? true : false);
$logoClass = ($arTheme['COLORED_LOGO']['VALUE'] !== 'Y' ? '' : ' colored');
?>
<div class="mega_fixed_menu">
	<div class="maxwidth-theme">
		<div class="col-md-12">
			<div class="menu-only">
				<nav class="mega-menu">
					<i class="svg svg-close"></i>
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
<header class="<?=basename(__FILE__, ".php")?>">
	<div class="logo_and_menu-row full-fill">
		<div class="logo-row">
			<div class="maxwidth-theme">
				<div class="wrap_border clearfix">
					<div class="burger pull-left wrap_icon"><?=CLandscape::showIconSvg("burger", SITE_TEMPLATE_PATH."/images/svg/Burger_big_white.svg");?></div>
					<?//show logo?>
					<div class="logo-block pull-left paddings">
						<div class="logo<?=$logoClass?>">
							<?=CLandscape::ShowLogo();?>
						</div>
					</div>
					<?//check slogan text?>
					<?if(CLandscape::checkContentFile(SITE_DIR.'include/header/header-text.php')):?>
						<div class="col-md-2 visible-lg nopadding-right slogan with_burger">
							<div class="top-description">
								<?$APPLICATION->IncludeFile(SITE_DIR."include/header/header-text.php", array(), array(
										"MODE" => "html",
										"NAME" => "Text in title",
										"TEMPLATE" => "include_area.php",
									)
								);?>
							</div>
						</div>
					<?endif;?>
					<?//show icons?>
					<div class="right-icons wide sm pull-right with_burger">
						<?if($bOrder):?>
							<div class="pull-right">
								<div class="wrap_icon wrap_basket">
									<?=CLandscape::showBasketLink('', 'big', '', '');?>
								</div>
							</div>
						<?endif;?>
						<?if($bCabinet):?>
							<div class="pull-right">
								<div class="wrap_icon inner-table-block">
									<?=CLandscape::showCabinetLink(true, false, 'big');?>
								</div>
							</div>
						<?endif;?>
					</div>
					<?//show phone and callback?>
					<div class="right-icons pull-right with_burger">
						<div class="phone-block with_btn">
							<div class="inner-table-block">
								<?//check phone text?>
								<?if($bPhone):?>
									<?CLandscape::ShowHeaderPhones('big', 'Phone_black.svg');?>
								<?endif?>
								<?//check phone callback?>
								<?if($arTheme["CALLBACK_BUTTON"]["VALUE"] == "Y"):?>
									<div class="callback-wrapper">
										<span class="callback-block animate-load colored callback-link" data-event="jqm" data-param-id="<?=CLandscape::getFormID("aspro_landscape_callback");?>" data-name="callback"><?=GetMessage("S_CALLBACK")?></span>
									</div>
								<?endif;?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 search_wr with_burger">
						<div class="search-block inner-table-block">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/header/search.title.php",
									"EDIT_TEMPLATE" => "include_area.php"
								)
							);?>
						</div>
					</div>
				</div>
				<div class="lines"></div>
			</div>
		</div><?// class=logo-row?>
	</div>
	<div class="line-row"></div>
</header>