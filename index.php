<?php

$host= 'localhost';
$user= 'root';
$pass= '';
$db= 'mydb';

$con= mysqli_connect($host,$user,$pass,$db);
if($con)
	echo 'connceted successfully';

$sql= "insert into table1 (username,password,email) values ('Adhar',12345,'adsharma95@gmail.com')";
$sql= "insert into table1 (username,password,email) values ('Abhi',12468,'rajabhishanu@gmail.com')";
$sql= "insert into table1 (username,password,email) values ('Akash',12357,'akash.kumar@gmail.com')";
$query= mysqli_query($con,$sql);
if($query)
	echo 'data inserted';

?>