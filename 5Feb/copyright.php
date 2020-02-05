
&copy; 2010-
<?php
//Copyright 
echo date("Y");
echo"<br>";
echo"<br>";

 //2020-06-19 13:44:02 into 19/06/2020 01:44:02 am
// Convert current date into timestamp
 echo strtotime("now"), "\n";  
echo date("Y-m-d H:m:s", strtotime("now"))."<br>";
echo date("d/m/Y h:m:sa") ;

echo"<br>";
echo"<br>";
//Convert current timestamp into date (Y-m-d)
echo date("Y-m-d");

echo"<br>";
echo"<br>";
//Add 1 month into current date
echo date("Y-m-d", strtotime("+1 month"))."<br>";

echo"<br>";
echo"<br>";
//Add 2 days into current date
echo date("Y-m-d", strtotime("+2 days"))."<br>";

echo"<br>";
echo"<br>";
//Find the difference between 2 dates: 2020-06-19 13:44:02 and 2020-10-13 23:04:22
$date1=date_create("2020-06-19 13:44:02");
$date2=date_create("2020-10-13 23:04:22");
$diff=date_diff($date1,$date2);
echo $diff->format("%a days");

echo"<br>";
echo"<br>";
//UTC
$the_date = strtotime("2010-01-19 00:00:00");
echo(date_default_timezone_get() . "<br />");
echo(date("Y-d-mTG:i:sz",$the_date) . "<br />");
echo(date_default_timezone_set("UTC") . "<br />");
echo(date("Y-d-mTG:i:sz", $the_date) . "<br />");


echo"<br>";
echo"<br>";
echo gmdate('d.m.Y H:i', strtotime('2012-06-28 23:55'));
?>