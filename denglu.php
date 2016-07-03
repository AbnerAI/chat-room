


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>Insert title here</title>
<style type="text/css">
	body{
		background-color:#f0f7ee;

	background:url('imgs/denglu.jpg');
		
		
		
	
	}
	</style>
	<link rel="stylesheet" type="text/css" href="dibu.css">
</head>
<body>
<div style="margin-left:-220px;margin-top:-100px;">
	
	<form method="post" action="yanzhe.php">
  <table style="border:outset 1px red;margin-left:750px;margin-top:400px;width:200px;">
   <tr>
   
   <td style="text-align:center;color:red" colspan="2">
        &nbsp   登录窗口
   </td>
   </tr>
   <tr>
   
   <td style="text-align:center;width:60px">
        用户名
   </td>
   <td> <input type="text" name="yonghu" value="" size="12"/>  </td>
   </tr>
   <tr>
   
   <td style="text-align:center">
        密码
   </td>
   
   <td> <input type="password" name="mima" value="" size="12"/></td>
   </tr>
  <tr>
  	
	<td colspan="2" style="text-align:center"> <input type="submit" name="deng" value="登录"/><input type='button'  value='注册' onclick="location.href = 'denglu2.php'" /> </td>
	
	</tr>
	<tr>
	
	<td>
	<?php 
		if(isset($_GET['wrong'])){
			echo "用户名或密码错误";
			
		}
	
	
	?>
	
	</td></tr>
  
  </table>
  </form></div>
</body>
</html>
<div id="dibu"><a href="houtai.php"><img src="imgs/guanliyuan.jpg"/> </a> 
<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=1360363374&amp;site=qq&menu=yes" rel="nofollow" target="_blank"><img src="http://wpa.qq.com/pa?p=2:1360363374:1" alt="客服" /></a>
</div>
