<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autoloading</title>
</head>
<body>
<?php

use App\Connection\MySqlConnection;
use App\Utility\RandomUtilityClass;

include 'autoload.php';

$mySqlConnection = new MySqlConnection();
$utility = new RandomUtilityClass();


?>
<p><?php echo $mySqlConnection->getDatabaseUrl() ?></p>
<p><?php echo $utility->status ?></p>
</body>
</html>





