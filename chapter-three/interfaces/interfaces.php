<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interfaces</title>
</head>
<body>
<?php

    require 'DarkSkyApiClient.php';
    require 'OpenWeatherMapClient.php';

    $weatherApiClient = new OpenWeatherMapClient();
    $forecast = $weatherApiClient->getForecast('New York');

?>
<h1>Weather App</h1>
<p><?php echo $forecast; ?></p>
</body>
</html>