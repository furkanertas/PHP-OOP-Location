<?php
require 'Geo.php';
$ip=$_SERVER['REMOTE_ADDR'];
$geo=new Geo ();
$geo->request($ip);
echo $geo->country;
echo "<br>";
echo $geo->continent_code;
echo "<br>";
echo $geo->city;
?>