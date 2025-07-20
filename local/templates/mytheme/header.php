<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
 <!doctype html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <?$APPLICATION->ShowHead();?>
            <title><?$APPLICATION->ShowTitle();?></title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/css/foundation.min.css">
        </head>
        <body>
        <div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <div class="page-wrapper">
            <header class="header dark">
                <div class="grid-container">
                    <div class="grid-x grid-margin-x align-stretch">
                        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"topmenu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "topmenu"
	),
	false
);?>
                    </div>
                </div>
            </header>
            <main>
                <div class="grid-container">
            <h1><?$APPLICATION->ShowTitle('h1');?></h1>