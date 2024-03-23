<?php
$fp=fopen('bookdata.csv','r');
if($fp===false){
    echo "ファイルのオープンに失敗しました";
    exit;
}

$row=fgetcsv($fp);
var_dump($row);