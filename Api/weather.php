<?php

require_once '../actions/db_connect.php';
if (isset($_POST['latitude']) && isset($_POST['longitude'])) {

    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
};

function build_query_string(array $params)
{
    $query_string = http_build_query($params);
    return $query_string;
}
function curl_get($url)
{
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    curl_close($client);
    return $response;
}


$url = 'https://api.darksky.net/forecast/e329256a741df2bcccffedd3600287c2/' . $latitude . ',' . $longitude . '?exclude=minutely,hourly,daily,alerts,flags';
$result = curl_get($url);
$weather = json_decode($result);
$fahrenheit = $weather->currently->temperature;
$celsius = round(($fahrenheit - 32) * (5 / 9), 2);
if ($celsius <= 0) {
    $wbody1 = "<div class='card bg-dark w-75 m-auto shadow-lg' style='height:17vw;'><img src='pictures/meteo/ice.jpg' class='card-img' alt='Freezing Wheather'>";
} elseif ($celsius > 0 && $celsius <= 15) {
    $wbody1 = "<div class='card bg-dark w-75 m-auto shadow-lg' style='height:17vw;'><img src='pictures/meteo/melt.jpg' class='card-img' alt='Cold Wheather'>";
} elseif ($celsius > 15 && $celsius <= 30) {
    $wbody1 = "<div class='card bg-dark w-75 m-auto shadow-lg' style='height:17vw;'><img src='pictures/meteo/sun.jpg' class='card-img' alt='Warm Wheather'>";
} elseif ($celsius > 30) {
    $wbody1 = "<div class='card bg-dark w-75 m-auto shadow-lg' style='height:17vw;'><img src='pictures/meteo/hot.jpg' class='card-img' alt='Hot Wheather'>";
}
$wbody2 = "
            <div class='card-img-overlay text-center'>
                <h3 class='card-title meteo'>{$weather->timezone}</h1>
                <div class='card-body meteo'>
                    <p class='h5 meteo'>{$weather->currently->summary} </p>
                    <p class='h5 meteo'>{$celsius}°C</p>
                    <p class='h5 meteo'>{$fahrenheit}°F</p>
                </div>
            </div></div>";
echo $wbody1.$wbody2
?>