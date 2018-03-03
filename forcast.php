<html>

<body style="background-color:pink;">
</html>
<?php


$weather_ID="fe14574d5ad341bf82f9ae0a8c94741a";
$City=$_GET['City'];

$forcast_weather_url="http://api.weatherbit.io/v2.0/forecast/hourly?key=".$weather_ID."&City=".$City;
$weather_json=file_get_contents($forcast_weather_url);
$weather_Array=json_decode($weather_json,true);

 echo "wind_spd:".($weather_Array["data"][0]["wind_spd"])."<br>";
 echo "dewpt:".($weather_Array["data"][0]["dewpt"])."<br>"; 
  echo "snow:".($weather_Array["data"][0]["snow"])."<br>"; 
   echo "snow_depth:".($weather_Array["data"][0]["snow_depth"])."<br>"; 
    echo "datatime:".($weather_Array["data"][0]["datatime"])."<br>"; 
	 echo "temp:".($weather_Array["data"][0]["temp"])."<br>"; 
	  echo "slp:".($weather_Array["data"][0]["slp"])."<br>"; 
	   echo "clouds:".($weather_Array["data"][0]["clouds"])."<br>"; 

?>