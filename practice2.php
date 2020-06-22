<?php
##PHP/Laravel02 課題5
$calendar_2018 = [ #変数の1文字目に数字は使えない、{ }を[ ]に変更
  "January" => "1月",
  "February" => "2月", #、から、に修正
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月", #=に>を追加
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",#10月に" "を追加
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"]; #上記の通り変数を修正、Decemberに" "を追加
?>