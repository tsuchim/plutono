<?php
/**
 * 冥王星カレンダー
 */


$baseyear_offset = mktime(0,0,0,6,6,1859); // 冥王歴2000年元旦
// $now_time = mktime(0,0,0,7,13,2015); // ニューホライズンズ接近日(この時10時頃であって欲しい->2000/ 8/667  9:45:45 )
$now_time = time(); // 現在
$y_sec_earth = $now_time - $baseyear_offset;
$y_sec = $y_sec_earth/6.387230; // 冥王歴の時刻
$y_day = floor( $y_sec / (24*60*60) ); // 冥王歴での今年何日目-1
$d_sec = $y_sec % (24*60*60);
$hour = floor( $d_sec / 3600 );
$min = floor( floor($d_sec/60 ) % 60 );
$sec = $y_sec % 60;
$mon = floor($y_day/1180); // 冥王歴の月(1ヶ月1180日)
$day = $y_day - $mon*1180;
$year = 2000;
printf("%4u/% 2u/% 2u % 2u:%02u:%02u\n", $year, $mon+1, $day+1, $hour, $min, $sec);


?>
