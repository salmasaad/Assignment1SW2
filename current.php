<html>

<body style="background-color:pink;">
</html>
<?php

$weather_ID="fe14574d5ad341bf82f9ae0a8c94741a";

$City=$_GET["City"];
$Country=$_GET["Country"];

$current_weather_url="http://api.weatherbit.io/v2.0/current?key=".$weather_ID."&Country=".$Country."&City=".$City;

$weather_json=file_get_contents($current_weather_url);
$weather_Array=json_decode($weather_json,true);

echo "rh:".($weather_Array["data"][0]["rh"]);
echo"<br>";
echo "wind_cdir:".($weather_Array["data"][0]["wind_cdir"]);
echo"<br>";
echo "pod:".($weather_Array["data"][0]["pod"]);
echo "timezone:".($weather_Array["data"][0]["timezone"])."<br>";
echo "ob_time:".($weather_Array["data"][0]["ob_time"])."<br>";
echo "country_code:".($weather_Array["data"][0]["country_code"])."<br>";
echo "clouds:".($weather_Array["data"][0]["clouds"])."<br>";
echo "vis:".($weather_Array["data"][0]["vis"])."<br>";
echo "wind_cdir_full:".($weather_Array["data"][0]["wind_cdir_full"])."<br>";
echo "app_temp:".($weather_Array["data"][0]["app_temp"])."<br>";
echo "state_code:".($weather_Array["data"][0]["state_code"])."<br>";
echo "ts:".($weather_Array["data"][0]["ts"])."<br>";
echo "h_angle:".($weather_Array["data"][0]["h_angle"])."<br>";
echo "dewpt:".($weather_Array["data"][0]["dewpt"])."<br>";
echo "city_name:".($weather_Array["data"][0]["city_name"])."<br>";
echo "sunrise:".($weather_Array["data"][0]["sunrise"])."<br>";

echo"weather:["."<br>";

echo "icon:".($weather_Array["data"][0]["weather"]["icon"])."<br>";

?>