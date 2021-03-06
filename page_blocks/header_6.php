<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
global $arTheme;
$bOrder = ($arTheme['ORDER_VIEW']['VALUE'] == 'Y' && $arTheme['ORDER_VIEW']['DEPENDENT_PARAMS']['ORDER_BASKET_VIEW']['VALUE']=='HEADER' ? true : false);
$bCabinet = ($arTheme["CABINET"]["VALUE"]=='Y' ? true : false);
$bPhone = (intval($arTheme['HEADER_PHONES']) > 0 ? true : false);
$logoClass = ($arTheme['COLORED_LOGO']['VALUE'] !== 'Y' ? '' : ' colored');
?>
<header class="<?=basename(__FILE__, ".php")?> long">
	<div class="logo_and_menu-row">
		<div class="logo-row top-fill">
			<div class="maxwidth-theme">
				<div class="row">
					<?//show search?>
					<div class="with-padding col-md-5">
						<div class="search-block">
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
					<?//show logo?>
					<div class="logo-block col-md-2 col-sm-2">
						<div class="logo<?=$logoClass?>">
							<?=CLandscape::ShowLogo();?>
						</div>
					</div>
					<?//show phone and callback?>
					<div class="col-md-5">
						<div class="right-icons">
							<div class="phone-block with_btn pull-right">
								<?//check phone text?>
								<?if($bPhone):?>
									<div class="inner-table-block p-block">
										<?CLandscape::ShowHeaderPhones('big', 'Phone_black.svg');?>
										<div class="schedule">
											<?$APPLICATION->IncludeFile(SITE_DIR."include/header-schedule.php", array(), array(
													"MODE" => "html",
													"NAME" => GetMessage('HEADER_SCHEDULE'),
													"TEMPLATE" => "include_area.php"
												)
											);?>
										</div>
									</div>
								<?endif?>
								<?if($arTheme["CALLBACK_BUTTON"]["VALUE"] == "Y"):?>
									<div class="inner-table-block">
										<span class="callback-block animate-load colored  btn-transparent-bg btn-default btn" data-event="jqm" data-param-id="<?=CLandscape::getFormID("aspro_landscape_callback");?>" data-name="callback"><?=GetMessage("S_CALLBACK")?></span>
									</div>
								<?endif;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><?// class=logo-row?>
	</div>
	<?//show menu?>
	<div class="menu-row with-color bg<?=strtolower($arTheme['MENU_COLOR']['VALUE'])?> <?=(in_array($arTheme['MENU_COLOR']['VALUE'], array("COLORED", "DARK")) ? "colored_all" : "colored_dark");?> sliced">
		<div class="maxwidth-theme">
			<div class="right-icons pull-right">
				<?if($bOrder):?>
					<div class="pull-right">
						<div class="wrap_icon inner-table-block">
							<?=CLandscape::showBasketLink('', '','');?>
						</div>
					</div>
				<?endif;?>
				<?if($bCabinet):?>
					<div class="pull-right">
						<div class="wrap_icon inner-table-block">
							<?=CLandscape::showCabinetLink(true, false);?>
						</div>
					</div>
				<?endif;?>
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
			<div class="lines"></div>
		</div>
	</div>
</header>