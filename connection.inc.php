<?php
session_start();

//Use the below $con command if you are deploying website using AWS RDS, EC2
$con=mysqli_connect("database-1.c3qndl3vpxk2.eu-north-1.rds.amazonaws.com","samadmin","somesh123","Sam_ecom");

define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/Electronix-Website/ecom/');

define('SITE_PATH','http://16.170.251.175/Electronix-Website/ecom/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>
