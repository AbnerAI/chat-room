<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>��̨����</title>
<link rel="stylesheet" type="text/css" href="guanli.css">
</head>
<body>
		<div id="kuangjia"> 
		<div id="logo1"> </div>
			<div id="logo2"> </div>
			
	<div id="zuo"> 
	<form method="get" action="guanli.php">
	<table> 
	  <tr> <td><input type="submit"  style="width:150px;height:50px;font-size:20px" name="liulan" value="�����Ա��Ϣ" />  </td>  
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
			echo "<table border='1'><tr><td colspan='10' style='text-align:center;color:red'>������ע����Ϣ</td></tr><tr><td>��ʵ����</td><td>�û���</td><td>����</td><td>�Ա�</td><td>����</td><td>����</td><td>����˵��</td><td colspan='2' style='text-align:center'>����</td></tr>";
	while($stmt->fetch()){
		
		echo "<tr><td>$realname</td><td>$name</td> <td>$pass</td><td>$sex</td><td>$jiaxiang</td><td>$aihao</td><td>$gerenjianjie</td><td><a href='update.php?id=$id'>�޸� </a></td><td><a href='delete.php'>ɾ��</a></td></tr>";
		
	}
		echo " </table>";
			}
?>
			
	
			
			</div>
		
		
		
		<div id="di">   </div>
		
		  </div>
</body>
</html>