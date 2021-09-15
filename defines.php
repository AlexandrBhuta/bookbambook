<?
global $arSite, $isMenu, $isIndex, $isCabinet, $is404, $bBigBannersIndex, $bServicesIndex, $bPortfolioIndex, $bPartnersIndex, $bTeasersIndex, $bInstagrammIndex, $bReviewsIndex, $bConsultIndex, $bCompanyIndex, $bTeamIndex, $bNewsIndex, $bMapIndex, $bFloatBannersIndex, $bCatalogIndex, $bBlogIndex, $bActiveTheme, $bCatalogSectionsIndex;
global $bBigBannersIndexClass, $bServicesIndexClass, $bPartnersIndexClass, $bTeasersIndexClass, $bFloatBannersIndexClass, $bPortfolioIndexClass, $bCatalogIndexClass,  $bBlogIndexClass, $bInstagrammIndexClass, $bReviewsIndexClass, $bConsultIndexClass, $bCompanyIndexClass, $bTeamIndexClass, $bNewsIndexClass, $bMapIndexClass, $bCatalogSectionsIndexClass;
global $sMenuContent;

$sMenuContent = '';
$is404 = defined('ERROR_404') && ERROR_404 === 'Y';
$arSite = CSite::GetByID(SITE_ID)->Fetch();
$isMenu = ($APPLICATION->GetProperty('MENU') !== 'N' ? true : false);
$isForm = CSite::inDir(SITE_DIR.'form/');
$isBlog = (CSite::inDir(SITE_DIR.'articles/') || $APPLICATION->GetProperty('BLOG_PAGE') === 'Y');
$isCabinet = CSite::inDir(SITE_DIR.'cabinet/');
$isIndex = CSite::inDir(SITE_DIR.'index.php');
$bActiveTheme = ($arTheme['THEME_SWITCHER']['VALUE'] === 'Y');

if($isIndex = CSite::inDir(SITE_DIR.'index.php')){
	$indexType = $arTheme['INDEX_TYPE']['VALUE'];
	$bBigBannersIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['BIG_BANNER_INDEX']['VALUE'] === 'Y'));
	$bServicesIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['SERVICES_INDEX']['VALUE'] === 'Y'));
	$bStaffIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['STAFF_INDEX']['VALUE'] === 'Y'));

	$bPartnersIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['PARTNERS_INDEX']['VALUE'] === 'Y'));
	$bTeasersIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['TEASERS_INDEX']['VALUE'] === 'Y'));
	$bPortfolioIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['PORTFOLIO_INDEX']['VALUE'] === 'Y'));
	$bBlogIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['BLOG_INDEX']['VALUE'] === 'Y'));
	$bCatalogIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['CATALOG_INDEX']['VALUE'] === 'Y'));
	$bCatalogSectionsIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['CATALOG_SECTIONS_INDEX']['VALUE'] === 'Y'));
	$bWorkIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['WORK_INDEX']['VALUE'] === 'Y'));
	$bInfoBlockIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['INFOBLOCK_INDEX']['VALUE'] === 'Y'));

	if(isset($arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['INSTAGRAMM_INDEX'])){
		$bInstagrammIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['INSTAGRAMM_INDEX']['VALUE'] === 'Y'));
	}
	else{
		$bInstagrammIndex = true;
	}
	$bReviewsIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['REVIEWS_INDEX']['VALUE'] === 'Y'));
	$bConsultIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['CONSULT_INDEX']['VALUE'] === 'Y'));
	$bCompanyIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['COMPANY_INDEX']['VALUE'] === 'Y'));
	$bTeamIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['TEAM_INDEX']['VALUE'] === 'Y'));
	$bNewsIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['NEWS_INDEX']['VALUE'] === 'Y'));
	$bMapIndex = ($bActiveTheme || (!$bActiveTheme && $arTheme['INDEX_TYPE']['SUB_PARAMS'][$indexType]['MAP_INDEX']['VALUE'] === 'Y'));
}

$GLOBALS['arrPopularSections'] = array('UF_SHOW_ON_INDEX_PAG' => 1);
$GLOBALS['arFrontFilter'] = array('PROPERTY_SHOW_ON_INDEX_PAGE_VALUE' => 'Y');
$GLOBALS['arFilterLeftBlock'] = array('PROPERTY_SHOW_ON_LEFT_BLOCK_VALUE' => 'Y');
$GLOBALS['arFilterBestItem'] = array('PROPERTY_BEST_ITEM_VALUE' => 'Y');
?>