<?php

require_once 'vendor/autoload.php';

/**************************************** DateTime ****************************************/

$dateTime = new DateTime('last day of May');

$dateTime = new DateTime('tomorrow', new DateTimeZone('Asia/Damascus'));
//dd($dateTime->format('Y-m-d'));

/**************************************** Comparisons ****************************************/

$today = date_create('today');
$nextWeek = date_create('next week');
//dd($nextWeek > $today); # greater means later
//dd($nextWeek < $today); # greater means later

/**************************************** Format ****************************************/

$dateTime = DateTime::createFromFormat('j-M-Y', '21-Jan-2010');
$dateTime = date_create_from_format('j-M-Y', '04-Nov-2026');
//dd($dateTime);

/**************************************** Date Diff ****************************************/

$past = date_create('1999-12-31');
$present = date_create();

$interval = new DateInterval('P21Y3M15D');
$past->add($interval);


$plusThreeDays = new DateInterval('P3D');
$plusThreeDays->invert = 1;
//$present->add($plusThreeDays);
//dd($present->format('Y-m-d'));

$interval = date_interval_create_from_date_string('-3 days');
$date = $present->modify('-5 days')->format('ga jS M Y');


/**************************************** DateTimeImmutable ****************************************/

$start = new DateTimeImmutable('2021-01-01');
$finish = $start->add(new DateInterval('P3D'));

/**************************************** Timezone ****************************************/

$chita = new DateTime('now', new DateTimeZone('Asia/Chita'));
$utc = new DateTime('now', new DateTimeZone('UTC'));













