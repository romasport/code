<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О магазине");

error_reporting(E_ERROR | E_WARNING | E_PARSE);
set_time_limit(0);

$arSelect = Array('*');
$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "ID"=>45947);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>10000), $arSelect);

$i = 0;

while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
	//echo "<pre>";
	//print_r($arFields['ID']);
	//echo "</pre>";
	$arProps = $ob->GetProperties();
	echo "<pre>";
	//print_r($arProps);
	echo "</pre>";

/*
	if (!empty ($arProps['RECOMMEND']['VALUE']) ) {

		$PROPERTY_CODE = "RECOMMEND"; 
		$PROPERTY_VALUE = array_unique($arProps['RECOMMEND']['VALUE']);

		if(count($PROPERTY_VALUE)<count($arProps['RECOMMEND']['VALUE'])){

			$update = CIBlockElement::SetPropertyValuesEx($arFields['ID'], 3, array($PROPERTY_CODE => $PROPERTY_VALUE)); 

			echo $arFields['ID']."<br>";
			$i++;
		}

	}
*/

}

echo '<br>end '.$i;

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>