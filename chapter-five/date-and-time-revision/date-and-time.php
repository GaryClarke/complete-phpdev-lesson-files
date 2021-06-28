<?php

/**************************************** date() ****************************************/

echo date('Y') . PHP_EOL;
echo date('H:i', 1618350000) . PHP_EOL;
echo date('d F Y, h:i:s A') . PHP_EOL;

/**************************************** time() ****************************************/

echo time() . PHP_EOL;

/**************************************** strtotime() ****************************************/

$timestamp = strtotime('last day of December');
echo date('Y-m-d', $timestamp) . PHP_EOL; // 2021-12-31
echo date('Y-m-d (L)', strtotime('-1 year')) . PHP_EOL;

/**************************************** timezones ****************************************/

$tz = date_default_timezone_get();
echo $tz . PHP_EOL;

echo '----------------------------------' . PHP_EOL;
echo 'The time in ' . date_default_timezone_get() . ' is ' . date('H:i:s') . PHP_EOL;
date_default_timezone_set('Asia/Damascus');
echo 'The time in ' . date_default_timezone_get() . ' is ' . date('H:i:s') . PHP_EOL;

/**************************************** mktime() ****************************************/

$time = mktime(5, 30, 0, 4, 15, 2021);
echo date('Y-m-d H:i:s', $time) . PHP_EOL;











