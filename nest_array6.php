<?php
$people[]=['namae'=>"佐藤",'blood'=>'A'];
$people[]=['namae'=>"田中",'blood'=>'B'];
$people[]=['namae'=>"加藤",'blood'=>'O'];

foreach($people as $key=>$person){
    echo '名前は'.$person['namae'].'<br>';
}