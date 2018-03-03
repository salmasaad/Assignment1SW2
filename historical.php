
<html>
<body style="background-color:pink;">
</html>

<?php

$weather_ID="fe14574d5ad341bf82f9ae0a8c94741a";
$Country=$_GET["Country"];
$City=$_GET["City"];
$StartDate=$_GET["StartDate"];
$EndDate=$_GET["EndDate"];


$history_Weather="http://api.weatherbit.io/v2.0/history/hourly?key=".$weather_ID."&City=".$City."&Country=".$Country."&StartDate=".$StartDate."&EndDate=".$EndDate;
if ($City!=""&&StartDate!=""&&EndDate!=""){

$Weather_json=file_get_contents($history_Weather);
$Weather_Array=json_decode($Weather_json,true);

echo "rh:".($Weather_Array["data"][0]["rh"])."<br>";
echo "timezone:".($Weather_Array["timezone"])."<br>";


}


?>