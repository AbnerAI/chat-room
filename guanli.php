<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="guanli.css">
</head>
<body>
		<div id="kuangjia"> 
		<div id="logo1"> </div>
			<div id="logo2"> </div>
			
	<div id="zuo"> 
	<form method="get" action="guanli.php">
	<table> 
	  <tr> <td><input type="submit"  style="width:150px;height:50px;font-size:20px" name="liulan" value="浏览会员信息" />  </td>  
	  </tr>
	  
	 
	 
	  </table>
	</form>
	</div>
			<div id="you"> 
			
			<?php

			if(isset($_REQUEST['liulan'])){
$con=new mysqli( "qdm209094535.my3w.com", "qdm209094535", "sqlsmile123", "qdm209094535_db" );
$con->query("set names gbk");

$stmt=$con->stmt_init();
$sql="select * from liaotian ";
$stmt->prepare($sql);

$stmt->bind_result($realname,$name,$pass,$sex,$jiaxiang,$aihao,$gerenjianjie,$id);

$stmt->execute();
			echo "<table border='1'><tr><td colspan='10' style='text-align:center;color:red'>聊天室注册信息</td></tr><tr><td>真实姓名</td><td>用户名</td><td>密码</td><td>性别</td><td>家乡</td><td>爱好</td><td>个人说明</td><td colspan='2' style='text-align:center'>操作</td></tr>";
	while($stmt->fetch()){
		
		echo "<tr><td>$realname</td><td>$name</td> <td>$pass</td><td>$sex</td><td>$jiaxiang</td><td>$aihao</td><td>$gerenjianjie</td><td><a href='update.php?id=$id'>修改 </a></td><td><a href='delete.php'>删除</a></td></tr>";
		
	}
		echo " </table>";
			}
?>
			
	
			
			</div>
		
		
		
		<div id="di">   </div>
		
		  </div>
</body>
</html>