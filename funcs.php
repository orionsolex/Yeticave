<?php
function include_template($name, $array = []): string
{
foreach ($array as $key=>$value )
{
print_r($value);
}
    ob_start();
    $isExist = require_once($name);
    if ($isExist != null) {
        $result = ob_get_clean();
        if (!$result) {

            return '';
        } else {
            return $result;
        }
    } else {
        return '';
    }

//    return $result??'';
}

function getPrice($price): string
{
    $price = ceil($price);
    if ($price > 1000) {
        $price = number_format($price, 0, '.', ' ');
    }
    return $price . ' P';
}

?>

