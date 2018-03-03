
<html>
<body style="background-color:pink;">

</html>

<?php

$weather_ID="fe14574d5ad341bf82f9ae0a8c94741a";

$City=$_GET['City'];
$Country=$_GET['Country'];

$forcast_Weather="http://api.weatherbit.io/v2.0/forecast/3hourly?key=".$weather_ID."&City=".$City."&Country".$Country;
$Weather_json=file_get_contents($forcast_Weather);
$Weather_Array=json_decode($Weather_json,true);


echo "rh:".($Weather_Array["data"][0]["rh"])."<br>";
echo "wind_cdir:".($Weather_Array["data"][0]["wind_cdir"])."<br>";
echo "snow:".($Weather_Array["data"][0]["snow"]);
echo"<br>";
echo "dewpt:".($Weather_Array["data"][0]["dewpt"]);
echo"<br>";
echo "snow_depth:".($Weather_Array["data"][0]["snow_depth"]);
echo"<br>";
echo"Weather:{";
echo"<br>";
echo "icon:".($Weather_Array["data"][0]["weather"]["icon"])."<br>";
echo "code:".($Weather_Array["data"][0]["weather"]["code"])."<br>";
echo "description:".($Weather_Array["data"][0]["weather"]["description"])."<br>";
echo "uv:".($Weather_Array["data"][0]["uv"])."<br>";
echo "wind_dir:".($Weather_Array["data"][0]["wind_dir"])."<br>";

?>