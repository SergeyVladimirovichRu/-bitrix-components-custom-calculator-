<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = array(
    "PARAMETERS" => array(
        "CALCULATOR_TYPE" => array(
            "NAME" => "Тип калькулятора",
            "TYPE" => "LIST",
            "VALUES" => array(
                "loan" => "Кредитный калькулятор",
                "deposit" => "Депозитный калькулятор",
                "construction" => "Строительный калькулятор",
                "custom" => "Пользовательский калькулятор"
            ),
            "DEFAULT" => "loan",
            "REFRESH" => "Y"
        ),
        "CACHE_TIME" => array("DEFAULT" => 3600),
    )
);
?>
