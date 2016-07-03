<?php 
	ob_start();
$max=0;
  $con=new mysqli( "qdm209094535.my3w.com", "qdm209094535", "sqlsmile123", "qdm209094535_db" );
$con->query("set names gbk");

$stmt=$con->stmt_init();
$sql="select * from liaotian";
$stmt->prepare($sql);

$stmt->bind_result($realname,$name,$pass,$sex,$jiaxiang,$aihao,$gerenjianjie,$id);

$stmt->execute();
  while($stmt->fetch()){
  			$zhongjie=$id;
  			if($zhongjie>$max){
  				$max=$zhongjie;
  			}
  			
  }
?>

<?php
ob_start();
if(empty($_REQUEST['yonghu'])){
	header('location:denglu2.php?wrong=3');
}elseif(empty($_REQUEST['mima1'])){
	header('location:denglu2.php?wrong=3');
}elseif(empty($_REQUEST['mima2'])){
	header('location:denglu2.php?wrong=3');
	
}elseif(empty($_REQUEST['jiaxiang'])){
	header('location:denglu2.php?wrong=3');
}elseif(empty($_REQUEST['gerenjianjie'])){
	header('location:denglu2.php?wrong=3');
}elseif(empty($_REQUEST['aihao'])){
	
		header('location:denglu2.php?wrong=3');
}elseif(empty($_REQUEST['realname'])){
	header('location:denglu2.php?wrong=3');
}
else{
ob_start();

$mima1=$_POST['mima1'];
$mima2=$_POST['mima2'];

if($mima1==$mima2){
$con=new mysqli( "qdm209094535.my3w.com", "qdm209094535", "sqlsmile123", "qdm209094535_db" );
$con->query("set names gbk");

$stmt=$con->stmt_init();
$sql="insert into liaotian values(?,?,?,?,?,?,?,?)";
$stmt->prepare($sql);
$stmt->bind_param("sssisssi",$realname,$name,$pass,$sex,$jiaxiang,$aihao,$gerenjianjie,$id);
$realname=$_REQUEST['realname'];
$name=$_POST['yonghu'];
$pass=$_REQUEST['mima1'];
$sex=$_REQUEST['sex'];
$jiaxiang=$_POST['jiaxiang'];
$aihao=$_POST['aihao'];
$gerenjianjie=$_POST['gerenjianjie'];

$id=$max+1;
$stmt->execute();
	header("location:denglu.php");
}else{
	
	header("location:denglu2.php?wrong=3");
}
}
?>