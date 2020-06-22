<?php
//1~10までを足した値を返す関数
function sum($max) {
    
    // $resultは結果を保存する変数
    $result = 0;
    
    // $iは1から始まり$maxより大きくなるまでループする
    for($i = 1; $i <= $max; $i++) {
        
        // $resultに$iを順番に足していく
        $result += $i;
        
    }
    
    // $resultを結果として返す
    return $result;
}

// 関数を実行する
echo sum(100);

?>