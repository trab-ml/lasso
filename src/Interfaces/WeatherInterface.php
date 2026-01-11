<?php
namespace Lasso\Interfaces;

interface WeatherInterface {
    function fetch_weather_data(): array;
}
