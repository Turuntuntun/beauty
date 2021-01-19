<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$strReturn .= '  <div class="breadcrumbs"><div class="mycontainer">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
				<a  class="breadcrumbs__item" href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">'
                    .$title.'
				</a>
				<svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L4 4.5L1 8" stroke="#B5B5B5"/>
                </svg>';
	}
	else
	{
		$strReturn .= '
			<div class="breadcrumbs__item">'.$title.'</div>';
	}
}

$strReturn .= '</div></div>';

return $strReturn;
