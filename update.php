<?php 
			if(isset($_REQUEST['ddeng'])){
				
			if(empty($_REQUEST['yonghu'])){
	header('location:update.php?wrong=3');
}elseif(empty($_REQUEST['mima1'])){
	header('location:update.php?wrong=3');
}elseif(empty($_REQUEST['mima2'])){
	header('location:update.php?wrong=3');
	
}elseif(empty($_REQUEST['jiaxiang'])){
	header('location:update.php?wrong=3');
}elseif(empty($_REQUEST['gerenjianjie'])){
	header('location:update.php?wrong=3');
}elseif(empty($_REQUEST['aihao'])){
	
		header('location:update.php.php?wrong=3');
}elseif(empty($_REQUEST['realname'])){
	header('location:update.php?wrong=3');
}else{
$con=new mysqli( "qdm209094535.my3w.com", "qdm209094535", "sqlsmile123", "qdm209094535_db" );
$con->query("set names gbk");

$stmt=$con->stmt_init();
$sql="update liaotian set realname=?,name=?,pass=?,sex=?,jiaxiang=?,aihao=?,gerenjianjie=? where id=?";
$stmt->prepare($sql);
$stmt->bind_param("sssisssi",$realname,$name,$pass,$sex,$jiaxiang,$aihao,$gerenjianjie,$id);
$realname=$_REQUEST['realname'];
$name=$_REQUEST['yonghu'];
$pass=$_REQUEST['mima1'];
$sex=$_REQUEST['sex'];
$jiaxiang=$_REQUEST['jiaxiang'];
$aihao=$_REQUEST['aihao'];
$gerenjianjie=$_REQUEST['gerenjianjie'];
$id=$_REQUEST['id'];

$stmt->execute();
		if(true){	
       
	header("location:update.php?wo=2");
		}
			
else{
	
	header("location:update.php?wo=1");
}
			}
			}
?>
<?php
$con=new mysqli( "qdm209094535.my3w.com", "qdm209094535", "sqlsmile123", "qdm209094535_db" );
$con->query("set names gbk");

$stmt=$con->stmt_init();
$sql="select * from liaotian where id=?  ";

$stmt->prepare($sql);
$stmt->bind_param('i',$id);
$id=$_REQUEST['id'];
$stmt->bind_result($realname,$name,$pass,$sex,$jiaxiang,$aihao,$gerenjianjie,$id);
$stmt->execute();
  while($stmt->fetch()){
  	
  }
?>













<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>Insert title here</title>

	<link rel="stylesheet" type="text/css" href="dibu.css">
</head>
<body>
<div style="margin-top:-300px;margin-left:-200px;">
	<form method="post" action="update.php?id=$id">
  <table style="border:outset 1px red;margin-left:750px;margin-top:400px;width:300px;">
   <tr>
   
   <td style="text-align:center;color:red" colspan="2">
        &nbsp  �޸��û���Ϣҳ��
   </td>
   </tr>
   <tr><td style='text-align:center'>ID:</td><td><input type='text' name='id' value='<?php echo $id ;?>' size='15' readonly='readonly''/></td></tr>
<tr>
	<td style="text-align:center;width:80px">��ʵ������</td>  <td><input type='text' name='realname' value="<?php echo $realname ;?>" size='15'/></td>
	
	</tr>
   <tr>
   
   <td style="text-align:center;width:80px">
        �û���:
   </td>
   <td> <input type="text" name="yonghu" value="<?php echo $name; ?>" size="15"/> 
  
   
   
    </td>
   </tr>
   <tr>
   
   <td style="text-align:center;width:80px">
        ����:
   </td>
   
   <td> <input type="password" name="mima1" value='<?php echo $pass ?>' size="15"/></td>
   </tr>
    <tr>
   
   <td style="text-align:center" style="width:80px">
        �������룺
   </td>
   
   <td> <input type="password" name="mima2" value='<?php echo $pass ?>' size="15"/></td>
   </tr>
   <tr>
    <td style="width:80px;text-align:center">�Ա�:</td><td> <label for='1'>��</label> <input type='radio' name='sex' value='nan' <?php if($sex==0) echo 'checked'?> id='1' checked/> <label for='2'>Ů</label> <input type='radio' name='sex' value='nv'  <?php if($sex==1) echo 'checked'?> id='2' /></td>
   
   </tr>
   <tr>
   <td style="width:80px;text-align:center">�ҵļ���:</td><td><select name='jiaxiang' >
   <option value='anhui' >����</option>
    <option value='beijing' >����</option>
   
   
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
   
   <td><input type='checkbox' name='aihao' value='�˶�' <?php if($aihao=='�˶�') echo 'checked'?>/>�˶�
 <input type='checkbox' name='aihao' value='����' <?php if($aihao=='����') echo 'checked'?>/>����
   </td>
   
   
   </tr>
   
   
   <tr>
   <td style="width:80px;text-align:center">���˼��:</td>
   <td>
   <textarea cols='15' rows='10' name='gerenjianjie' value=''>
   
   <?php echo $gerenjianjie ?>
   </textarea>
   
   </td>
   
   
   </tr>
  <tr>
  	
	<td colspan="2" style="text-align:center"> <input type="submit" name="ddeng" value="�ύ"/><input type="button" name="fanhui" value="����" onclick="location.href='guanli.php'"></td>
	
	</tr>
  <tr>
  <td colspan="2">
  <?php if(isset($_REQUEST['wrong'])){
  	
  echo '<font color="red">��Ϣ�޸�ʧ��</font>';
  }
  
  ?> <?php if($_REQUEST['wo']==1){
  	
  echo '<font color="red">��Ϣ�޸�ʧ��</font>';
  }elseif($_REQUEST['wo']==2){
  	echo '<font color="red">��Ϣ�޸ĳɹ�</font>';
  }
  
  ?></td>
  
  </tr>
  </table>
  </form>
  </div>
  <div id="dibu"><a href="houtai.php"><img src="imgs/guanliyuan.jpg"/> </a> </div>
</body>
</html>
