

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>Insert title here</title>
<style type="text/css">
	body{
		background-color:#f0f7ee;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="dibu.css">
</head>
<body>
<div style="margin-top:-300px;margin-left:-200px;">
	<form method="post" action="zhuce.php">
  <table style="border:outset 1px red;margin-left:750px;margin-top:400px;width:300px;">
   <tr>
   
   <td style="text-align:center;color:red" colspan="2">
        &nbsp  ע��ҳ��
   </td>
   </tr>
<tr>
	<td style="text-align:center;width:80px">��ʵ������</td>  <td><input type='text' name='realname' value='' size='15'/></td>
	
	</tr>
   <tr>
   
   <td style="text-align:center;width:80px">
        �û���:
   </td>
   <td> <input type="text" name="yonghu" value="" size="15"/> 
  
   
   
    </td>
   </tr>
   <tr>
   
   <td style="text-align:center;width:80px">
        ����:
   </td>
   
   <td> <input type="password" name="mima1" value="" size="15"/></td>
   </tr>
    <tr>
   
   <td style="text-align:center" style="width:80px">
        �������룺
   </td>
   
   <td> <input type="password" name="mima2" value="" size="15"/></td>
   </tr>
   <tr>
    <td style="width:80px;text-align:center">�Ա�:</td><td> <label for='1'>��</label> <input type='radio' name='sex' value='nan' id='1' checked/> <label for='2'>Ů</label> <input type='radio' name='sex' value='nv' id='2' /></td>
   
   </tr>
   <tr>
   <td style="width:80px;text-align:center">�ҵļ���:</td><td><select name='jiaxiang' >
   <option value='anhui'>����</option>
    <option value='anhui'>����</option>
   
   
   </select>
   </td>
  <!--  <td>
   
   <select name='suoshu' >
   <option value='lingbi'>���</option>
   
   
   
   </select>
   
   
   
   </td> -->
   
   
   </tr>
  
   <tr>
   <td style="width:80px;text-align:center">���ã�</td>
   
   <td><input type='checkbox' name='aihao' value='�˶�'/>�˶�
 <input type='checkbox' name='aihao' value='����'/>����
   </td>
   
   
   </tr>
   
   
   <tr>
   <td style="width:80px;text-align:center">���˼��:</td>
   <td>
   <textarea cols='15' rows='10' name='gerenjianjie' value=''>
   
   
   </textarea>
   
   </td>
   
   
   </tr>
  <tr>
  	
	<td colspan="2" style="text-align:center"> <input type="submit" name="deng" value="ע��"/><input type="button" name="fanhui" value="����" onclick="location.href='denglu.php'"></td>
	
	</tr>
  <tr>
  <td colspan="2">
  <?php if(isset($_GET['wrong'])){
  	
  echo '<font color="red">������Ϣ������Ҫ��</font>';
  }
  
  ?></td>
  
  </tr>
  </table>
  </form>
  </div>
  <div id="dibu"><a href="houtai.php"><img src="imgs/guanliyuan.jpg"/> </a> </div>
</body>
</html>

