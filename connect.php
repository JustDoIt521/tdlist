<?php 
$dbms="mysql";
$host="localhost";
$user="root";
$dbName="TDlist";
$pass="784863455";
$dsn="$dbms:host=$host;dbname=$dbName";
try
{
	$pdo=new pdo($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"set names utf8"));
}catch(PDOException $e)
{
	die("connect error !".$e->getMessage()."<br>");
}