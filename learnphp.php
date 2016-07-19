<?php
$mysql_hostname = "127.0.0.1";
$mysql_user ="root";
$mysql_password = "";
$mysql_database = "data";
$prefix = "practice";


$firstName = $_POST["fName"];
$lastName = $_POST["lName"];
$email = $_POST["email"];
$password = $_POST["password"];
$don = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("could not connect to database");
mysql_select_db($mysql_database, $don) or die("could not select database");
mysql_query("insert into practice values('$firstName','$lastName','$email','$password')");
?>