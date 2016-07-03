<?php 
if(isset($_REQUEST['denglu'])){
session_start();
$con=new mysqli( "qdm209094535.my3w.com", "qdm209094535", "sqlsmile123", "qdm209094535_db" );
$con->query("set names gbk");

$stmt=$con->stmt_init();
$sql="select * from guanli where name=? and password=?";
$stmt->prepare($sql);

$stmt->bind_param("ss",$name,$password);
$name=$_POST['guanliyuan'];
$password=$_POST['password'];
$stmt->execute();
   if($stmt->fetch()){
   	header("location:guanli.php");
   }else{
   	header("location:houtai.php?wrong=1");
   }

}


?>





<html>
<head>
<title><font color="red">欢迎进入后台管理系统</font></title>

<link rel="stylesheet" type="text/css" href="houtai.css">
</head>


  <body>
  <div id="kuang">

  <div id="toubu">Abner聊天后台管理系统</div>
   <form method="post" action="houtai.php">
  <div id="text">
 
  <input type="text" name="guanliyuan" value="" size="34"/></div>
  </div>
  
  <div id="pass">
  <input type="password" name="password" value="" size="34"/></div>
  <div id="denglu">
  
  <input type="submit" name="denglu" value="登陆"/>
  <input type="button" name="fanhui" value="返回" onclick="location.href='denglu.php'"/> 
  <br/>
  
  <?php 
  		if(isset($_REQUEST['wrong']))
  		{

  echo '<p style="color:red"> 登录信息有误 </p> ';
  		}
  ?>

  </div>
  </form>
 </div>
  </body>
</html></body>
</html>
</html>