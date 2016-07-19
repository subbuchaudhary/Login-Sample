
<?php
$firstName = $_POST["fName"];
$lastName = $_POST["lName"];
$city = $_POST["city"];
$sex = $_POST["sex"];

mysql_connect("127.0.0.1","root","");
mysql_select_db("check");
mysql_query("insert into sample values('$firstName','$lastName','$city','$sex')");
?>
