<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?><!DOCTYPE html>
<?if(CModule::IncludeModule("aspro.landscape"))
	$arThemeValues = CLandscape::GetFrontParametrsValues(SITE_ID);
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>" class="<?=($_SESSION['SESS_INCLUDE_AREAS'] ? 'bx_editmode ' : '')?><?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie7' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0' ) ? 'ie ie8' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie9' : ''?>">
	<head>
		<?global $APPLICATION;?>
		<?IncludeTemplateLangFile(__FILE__);?>
		<title><?$APPLICATION->ShowTitle()?></title>
		<?$APPLICATION->ShowMeta("viewport");?>
		<?$APPLICATION->ShowMeta("HandheldFriendly");?>
		<?$APPLICATION->ShowMeta("apple-mobile-web-app-capable", "yes");?>
		<?$APPLICATION->ShowMeta("apple-mobile-web-app-status-bar-style");?>
		<?$APPLICATION->ShowMeta("SKYPE_TOOLBAR");?>
		<?$APPLICATION->ShowHead();?>
		<?$APPLICATION->AddHeadString('<script>BX.message('.CUtil::PhpToJSObject($MESS, false).')</script>', true);?>
		<?if(CModule::IncludeModule("aspro.landscape")) {CLandscape::Start(SITE_ID);}?>
	</head>
	
	<body class="<?=(CModule::IncludeModule("aspro.landscape") ? CLandscape::getConditionClass() : '');?> mheader-v<?=$arThemeValues["HEADER_MOBILE"];?> footer-v<?=strtolower($arThemeValues['FOOTER_TYPE']);?> fill_bg_<?=strtolower($arThemeValues['SHOW_BG_BLOCK']);?> header-v<?=$arThemeValues["HEADER_TYPE"];?> title-v<?=$arThemeValues["PAGE_TITLE"];?><?=($arThemeValues['ORDER_VIEW'] == 'Y' && $arThemeValues['ORDER_BASKET_VIEW']=='HEADER'? ' with_order' : '')?><?=($arThemeValues['CABINET'] == 'Y' ? ' with_cabinet' : '')?><?=(intval($arThemeValues['HEADER_PHONES']) > 0 ? ' with_phones' : '')?><?=(CSite::inDir(SITE_DIR.'index.php') ? ' index_page' : '')?>">
	<div class="body_wrapper">
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<?if(!CModule::IncludeModule("aspro.landscape")):?>
			<?$APPLICATION->SetTitle(GetMessage("ERROR_INCLUDE_MODULE_LANDSCAPE_TITLE"));?>
			<?$APPLICATION->IncludeFile(SITE_DIR."include/error_include_module.php");?>
			<?die();?>
		<?endif;?>

		<?CLandscape::SetJSOptions();?>
		<?global $arTheme;?>
		<?$arTheme = $APPLICATION->IncludeComponent("aspro:theme.landscape", "", array(), false);?>
		<?include_once('defines.php');?>

		<?CLandscape::get_banners_position('TOP_HEADER');?>
		<div class="visible-lg visible-md title-v<?=$arTheme["PAGE_TITLE"]["VALUE"];?><?=($isIndex ? ' index' : '')?>">
			<?CLandscape::ShowPageType('header');?>
		</div>

		<?CLandscape::get_banners_position('TOP_UNDERHEADER');?>

		<?if($arTheme["TOP_MENU_FIXED"]["VALUE"] == 'Y'):?>
			<div id="headerfixed">
				<?CLandscape::ShowPageType('header_fixed');?>
			</div>
		<?endif;?>

		<div id="mobileheader" class="visible-xs visible-sm">
			<?CLandscape::ShowPageType('header_mobile');?>
			<div id="mobilemenu" class="<?=($arTheme["HEADER_MOBILE_MENU_OPEN"]["VALUE"] == '1' ? 'leftside':'dropdown')?>">
				<?CLandscape::ShowPageType('header_mobile_menu');?>
			</div>
		</div>

		<div class="body <?=($isIndex ? 'index' : '')?> hover_<?=$arTheme["HOVER_TYPE_IMG"]["VALUE"];?>">
			<div class="body_media"></div>

			<div role="main" class="main banner-auto">
				<?if(!$isIndex && !$is404 && !$isForm):?>
					<?$APPLICATION->ShowViewContent('section_bnr_content');?>
					<?$APPLICATION->ShowViewContent('tizers');?>
					<?$APPLICATION->ShowViewContent('page_top');?>
					<?if($APPLICATION->GetProperty("HIDETITLE")!=='Y'):?>
						<!--title_content-->
						<?$APPLICATION->IncludeFile(SITE_DIR."include/header/page_top.php", Array(), Array("MODE" => "html", "NAME" => "Title"));?>
						<!--end-title_content-->
					<?endif;?>
					<?$APPLICATION->ShowViewContent('top_section_filter_content');?>
				<?endif; // if !$isIndex && !$is404 && !$isForm?>

				<div class="container <?=($isCabinet ? 'cabinte-page' : '');?><?=($isBlog ? ' blog-page' : '');?> <?=CLandscape::ShowPageProps("ERROR_404");?>">
					<?if(!$isIndex):?>
						<div class="row">
							<?if($APPLICATION->GetProperty("FULLWIDTH")!=='Y'):?>
								<div class="maxwidth-theme">
							<?endif;?>
							<?if($is404):?>
								<div class="content-md">
							<?else:?>
								<div class="content-md">
									<div class="right_block narrow_<?=CLandscape::ShowPageProps("MENU");?>">
									<?CLandscape::get_banners_position('CONTENT_TOP');?>

									<?ob_start();?>
										<?$APPLICATION->IncludeComponent(
											"bitrix:menu",
											"left",
											array(
												"ROOT_MENU_TYPE" => "left",
												"MENU_CACHE_TYPE" => "A",
												"MENU_CACHE_TIME" => "3600000",
												"MENU_CACHE_USE_GROUPS" => "N",
												"MENU_CACHE_GET_VARS" => array(
												),
												"MAX_LEVEL" => "4",
												"CHILD_MENU_TYPE" => "left",
												"USE_EXT" => "Y",
												"DELAY" => "N",
												"ALLOW_MULTI_SELECT" => "Y",
												"COMPONENT_TEMPLATE" => "left"
											),
											false
										);?>
									<?$sMenuContent = ob_get_contents();
									ob_end_clean();?>
							<?endif;?>
					<?endif;?>
					<?CLandscape::checkRestartBuffer();?>