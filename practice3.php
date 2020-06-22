<?php
//PHP/Laravel03 課題1
    $name = "Haruka";
    
    if ($name != "Haruka") {
        echo "私はあなたの名前です";
    }else{
        echo "あなたの名前ではありません";
    }
    
//php/Laravel03 課題2
    for($i = 1; $i <= 1000; $i++){
        echo $i;
    }
    
//php/Laravel03 課題3
    $fruits = array("apple","banana","grape","Watermelon","melon");
    
    foreach($fruits as $fruit) {
        echo $fruit;
    }
    
?>