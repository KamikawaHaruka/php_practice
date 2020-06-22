<?php
// PHP/Laravel04 課題1
    function double($max) {
        $result = $max * 2;
        return $result;
    }
    echo double(30);
    
    
// PHP/Laravel04 課題2
    function sum($a,$b) {
        $result = $a + $b;
        return $result;
    }
    echo sum(9,1);
    
    
// PHP/Laravel04 課題3
    $result = 1;
    $arr = array(1,3,5,7,9);
    foreach($arr as $brr) {
        $result *= $brr;
    }
    echo $result;
    
    
// PHP/Laravel04 課題4
function max_array($arr) {
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}
    $arr = array(1,50,100,72,300);
    echo max_array($arr);
    
    
// PHP/Laravel04 課題5
# strip_tags
// 文字列からHTMLおよびPHPタグを取り除く
$title = '<p>Hello World</p>';
echo strip_tags("{$title} こんにちは、世界");

#array_push
// 1つ以上の要素を配列の最後に追加する
$count = array("strike","ball");
array_push($count, "foul","out" );
print_r($count);

#array_merge
// 配列の要素の最後に1つまたは複数の配列を結合する
$money1 = array(100,200,300);
$money2 = array(1000,2000,3000);
$money3 = array(10000,20000,30000);
$totalMoney = array_merge($money1,$money2,$money3);
print_r($totalMoney);


#time,mktime
// time:現在のUNIXタイムスタンプを取得 mktime:指定した日時のUNIXタイムスタンプを取得する
// UNIXタイムスタンプ:コンピューターのシステム時刻の1種。協定世界時(UTC)での1970年1月1日(午前0時0分0秒)からの経過時間を指す。
$day = time();
echo "現在のUNIXタイムスタンンプ{$day}";

// mktime(時,分,秒,月,日,年)
$day = mktime(0,0,0,6,1,1994);
echo "自分が生まれた日のUNIXタイムスタンプ{$day}";


#date
// 日時を出力する date(フォーマット,UNIX TIMESTAMP) 第2引数は省略可能
// フォーマット:"Y/m/d" Y:year m:month d:day
echo '今日は'.date("Y/m/d");

    
?>