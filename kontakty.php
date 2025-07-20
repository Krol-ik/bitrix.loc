<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Контакты");
$APPLICATION->SetTitle("Контакты");
?>Это страница контакты<br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"form_contact",
	Array(
		"EMAIL_TO" => "dobrositetask@mail.ru",
		"EVENT_MESSAGE_ID" => array("7"),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("NAME"),
		"USE_CAPTCHA" => "N"
	)
);?> <br>
<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => [0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",],
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.73829999999371;s:10:\"yandex_lon\";d:37.59459999999997;s:12:\"yandex_scale\";i:10;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.633777068827634;s:3:\"LAT\";d:55.75606433764596;s:4:\"TEXT\";s:23:\"Главный офис\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => [0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",]
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>