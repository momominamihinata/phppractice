<?php
//送信された身長体重を浮動小数点に変換
$height=(float) $_POST['height'];
$weight=(float) $_POST['weight'];

//入力された値の範囲を制限する
if(!((0<$height)&&($height<3))){
    echo '身長を正しく入力してください。';
    exit;
}
if(($weight<30)||(200<$weight)){
    echo '体重を正しく入力してください。';
    exit;
}

//適正体重の計算
$goal_weight=$height*$height*22;

//適正体重と現在の体重の差
//abs() => ()の絶対値を返す
$difference=abs($goal_weight - $weight);

echo '体重' . $weight . 'kg<br>';
echo '理想' . $goal_weight . 'kg<br>';
echo '後' . $difference . 'kgで適正体重です。<br>';