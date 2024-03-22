<?php
$people[]=['namae'=>"佐藤",'blood'=>'A'];
$people[]=['namae'=>"田中",'blood'=>'B'];
$people[]=['namae'=>"加藤",'blood'=>'O'];

foreach($people as $people_key => $person){
    echo '順番は'.$people_key."<br>";
    foreach($person as $person_key => $value){
        echo 'キーは'.$person_key."、値は".$value."<br>";
    }
}