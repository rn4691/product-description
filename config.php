<?php

$host = "";
$user = "";
$password = "";
$dbname = "";
$con = pg_connect("host=localhost dbname=loginform user=postgres password=India@123");

if (!$con) {

	die('Connection failed.');

}

