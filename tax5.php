<?php
function tax($price){
    return $price*1.1;
}

$sample_price=tax('文字列');
echo '消費税込み値段：'.$sample_price.'円';