<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
$arResult["SHOW_FIELDS"] = [
    'NAME',
    'LAST_NAME',
    'PERSONAL_PHONE',
    'EMAIL',
    'PASSWORD',
    'CONFIRM_PASSWORD'
];

