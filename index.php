<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("title", "Главная Title");
$APPLICATION->SetTitle("Главная");
?><div class="album py-5 bg-light">
	<div class="container">
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<div class="col">
				<div class="card shadow-sm">
					<div class="card-body">
						<p class="card-text">
							 Это более широкая карточка с вспомогательным текстом ниже как естественный ввод к дополнительному контенту. Этот контент немного длиннее.
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
 <button type="button" class="btn btn-sm btn-outline-secondary">Смотреть</button> <button type="button" class="btn btn-sm btn-outline-secondary">Редактировать</button>
							</div>
 <small class="text-muted">9 mins</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card shadow-sm">
					<div class="card-body">
						<p class="card-text">
							 Это более широкая карточка с вспомогательным текстом ниже как естественный ввод к дополнительному контенту. Этот контент немного длиннее.
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
 <button type="button" class="btn btn-sm btn-outline-secondary">Смотреть</button> <button type="button" class="btn btn-sm btn-outline-secondary">Редактировать</button>
							</div>
 <small class="text-muted">9 mins</small>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card shadow-sm">
					<div class="card-body">
						<p class="card-text">
							 Это более широкая карточка с вспомогательным текстом ниже как естественный ввод к дополнительному контенту. Этот контент немного длиннее.
						</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
 <button type="button" class="btn btn-sm btn-outline-secondary">Смотреть</button> <button type="button" class="btn btn-sm btn-outline-secondary">Редактировать</button>
							</div>
 <small class="text-muted">9 mins</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <br>
<div class="container">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"bootstrap_v4", 
	[
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => [
			0 => "TAGS",
			1 => "",
		],
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => [
			0 => "DATE",
			1 => "",
		],
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "bootstrap_v4",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	],
	false
);?>
</div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>