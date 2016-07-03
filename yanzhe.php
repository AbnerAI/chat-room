<?php
session_start();
$con=new mysqli( "qdm209094535.my3w.com", "qdm209094535", "sqlsmile123", "qdm209094535_db" );
$con->query("set names gbk");

$stmt=$con->stmt_init();
$sql="select * from liaotian where name=? and pass=? ";

$stmt->prepare($sql);

$stmt->bind_param("ss",$name,$pass);
$name=$_POST['yonghu'];
$pass=$_POST['mima'];
$stmt->execute();

		if($_POST['yonghu']<>""){
			if($stmt->fetch()){
				$_SESSION['realname']  = $name;
			header("location:cxx.php");
		
		}else{
			header("location:denglu.php?wrong=1");
		}
		}
	else{
			header("location:denglu.php?wrong=1");
		}
?>