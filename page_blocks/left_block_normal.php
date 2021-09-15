<?global $sMenuContent, $isCabinet;?>
<div class="left_block">
	<?if($isCabinet):?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:menu",
			"left",
			array(
				"ROOT_MENU_TYPE" => "cabinet",
				"MENU_CACHE_TYPE" => "A",
				"MENU_CACHE_TIME" => "3600000",
				"MENU_CACHE_USE_GROUPS" => "Y",
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
	<?else:?>
		<?=$sMenuContent;?>
	<?endif;?>
	<div class="sidearea">
		<?$APPLICATION->ShowViewContent('under_sidebar_content');?>
		<?CLandscape::get_banners_position('SIDE');?>
	</div>
</div>