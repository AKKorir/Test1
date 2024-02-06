<?php
ini_set('date.timezone',"Africa/Nairobi");
date_default_timezone_set('Africa/Nairobi');
session_start();

require_once('connection.php');
require_once('');
require_once('');

$db = new DBconnection;
$conn= $db->conn;



?>