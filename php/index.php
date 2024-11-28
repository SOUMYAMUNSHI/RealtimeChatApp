<?php

echo date_default_timezone_get() . "</br>";
date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get() . "</br></br>";










$pastTime = strtotime("13-10-2024 23:00");
$timeNow = time();


echo date($pastTime) . "</br>";
echo date($timeNow) . "</br>";
echo ($timeNow - $pastTime) / 3600;


// echo date("h a", time());
?>








<h1>No page found</h1>