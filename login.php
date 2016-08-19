<?php 
header("Content_Type:text/html;charset=utf-8");
require("connect.php");
$data=json_decode(file_get_contents("php://input"),true);
$what=$data['what'];
switch($what)
{
	case"login":
		login();
		break;
	case"register":
		register();
		break;
	default:
		echo "errorMessage".$what;
}
function register()
{
	global $pdo,$data;
	$username=$data['username'];
	$sql="select * from userlist where name='$username'";
	$res=$pdo->query($sql);
	$res=$res->fetch();
	if(empty($res))
	{
		$password=$data['password'];
		$id=date("y-m-d H:i:s",time());
		$sql="insert into userlist values
			('$username','$password','$id')";
		$pdo->query($sql);
		echo "0";
	}
	else
	{
		echo "1";
	}
}
function login()
{
	global $pdo,$data;
	$username=$data['username'];
	$sql="select * from userlist  where name='$username'";
	$res=$pdo->query($sql);
	$res=$res->fetch();
	if(!empty($res))
	{
		$password=$data['password'];
		if($password==$res['password'])
		{
			echo "0";
		}
		else
		{
			echo "1";
		}
	}
	else
	{
		echo "1";
	}
}