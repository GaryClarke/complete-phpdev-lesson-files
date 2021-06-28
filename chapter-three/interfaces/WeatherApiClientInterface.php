<?php

interface WeatherApiClientInterface
{
    public function getForecast(string $city);
}