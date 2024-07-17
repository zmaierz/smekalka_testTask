<?php

AddEventHandler("iblock", "OnAfterIBlockElementUpdate", Array("IBElementChange", "changeElementOnUpdate"));
AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("IBElementChange", "changeElementOnUpdate"));
class IBElementChange
{
	public static function changeElementOnUpdate(&$arFields)
	{
        if ($arFields["IBLOCK_ID"] == 5) {
            if ($arFields["PROPERTY_VALUES"][9][0]["VALUE"] == 5) {
                $newName = "Смекалка " . addDaysToDate(18);
                
                $el = new CIBlockElement;
                $res = $el->Update(
                    $arFields["ID"],
                    ['NAME' => $newName],
                    true
                );
            }
        }
	}
}

?>