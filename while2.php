<?php
$fp=fopen('bookdata.csv','r');
if($fp===false){
    echo "ファイルのオープンに失敗しました";
    exit;
}
echo "<pre>";
while($row=fgetcsv($fp)){
    echo "書籍：".$row[0]."<br>";
    echo "著者名：".$row[4]."<br><br>";
}
echo "</pre>";
