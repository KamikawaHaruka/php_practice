<?php
//　strlen　文字の長さを取得する
$string = "ABCDEF";
echo strlen($string);
//=> 6と表示される


// str_replace 文字列を置換する
$string = "I love Ruby!";

// Rubyという文字列をPHPに置換する
$new_string = str_replace("Ruby", "PHP", $string);

echo $new_string;
//=> I love PHP!


// count 配列の要素の個数を取得する
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);
//=> 10と表示される


// asort,arsort 配列をソート(並び替え)する
$array = array(2,5,9,7,3,1,8,6,4);

//　配列を昇順(小さい順)にソートする
asort($array);
// print_rで表示する
print_r($array);
//=> Array
//=> (
//=>        [5] => 1
//=>        [0] => 2
//=>        [4] => 3
//=>        [8] => 4
//=>        [1] => 5
//=>        [7] => 6
//=>        [3] => 7
//=>        [6] => 8
//=>        [2] => 9
//=> )
//=> と表示される

// $arrayを降順(大きい順)にソートする
arsort($array);
print_r($array);

?>