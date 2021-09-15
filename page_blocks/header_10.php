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
<header class="<?=basename(__FILE__, ".php")?>">
	<div class="logo_and_menu-row full-fill">
		<div class="logo-row">
			<div class="maxwidth-theme">
				<div class="wrap_border">
					<div class="row">
						<div class="col-md-5">
							<div class="burger pull-left wrap_icon"><?=CLandscape::showIconSvg("burger", SITE_TEMPLATE_PATH."/images/svg/Burger_big_white.svg");?></div>
							<?//show phone and callback?>
							<div class="right-icons pull-left">
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
						</div>
						<?//show logo?>
						<div class="logo-block col-md-2">
							<div class="logo<?=$logoClass?>">
								<?=CLandscape::ShowLogo();?>
							</div>
						</div>
						<div class="col-md-5">
							<?//show icons?>
							<div class="right-icons wide sm pull-right with_burger">
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
								<?if($bCabinet):?>
									<div class="pull-right">
										<div class="wrap_icon inner-table-block">
											<?=CLandscape::showCabinetLink(true, false, 'big');?>
										</div>
									</div>
								<?endif;?>
							</div>
						</div>
						<div class="lines"></div>
					</div>
				</div>
			</div>
		</div><?// class=logo-row?>
	</div>
	<div class="line-row"></div>
</header>