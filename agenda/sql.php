<?php

$host = "localhost";//caso esteja usando o xampp ou wamp

$user = "root";// padr�o para xampp ou wamp � root

$pass = "";// padr�o para xampp ou wamp � ""

$db = "easyserv_db";// � o nome do banco que vc criou no phpmyadmin

$conn = mysql_connect($host, $user, $pass) or die (mysql_error());



@mysql_select_db($db);



?>
