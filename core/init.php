<?php
$db = mysqli_connect('127.0.0.1','root','','medistore');
if(mysqli_connect_errno()) {
	echo 'Database Conncetion Failed'.mysqli_connect_error();
	die();
}

define('BASEURL', '/medistore/');
?>