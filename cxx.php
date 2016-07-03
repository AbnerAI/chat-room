<?php
session_start ();
//echo date('Y-m-d H:i:s',time());
if (isset ( $_SESSION ['realname'] )) {
	echo $_SESSION ['realname'] . '��ã�';
}
?>
<html>
<head>
<link rel='stylesheet' type='text/css' href='cxx.css'>
</head>
<body>
<form action="cxx.php" METHOD="POST">
<table border='1' style='margin-left: 450px'>
	<tr>
		<td><textarea cols='50' rows='4' name='shuru' value='' /> 
  	</textarea></td>
		<td><input type="submit" name="fayan" value="����" /></a></td>
	</tr>
  <?php
		if (isset ( $_POST ['fayan'] )) {
			$con = new mysqli ( "qdm209094535.my3w.com", "qdm209094535", "sqlsmile123", "qdm209094535_db" );
			$con->query ( "set names gbk" );
			$stmt = $con->stmt_init ();
			$sql = "insert into baocun values(?,?,?)";
			$stmt->prepare ( $sql );
			$stmt->bind_param ( "sss", $name, $xinxi, $date );
			$name = $_SESSION ['realname'];
			$xinxi = $_POST ['shuru'];
			$date = date ( 'Y-m-d H:i:s', time () );
			$stmt->execute ();
		}
		?>
  	<tr>
		<td>
		<div
			style="width: 400px; min-height: 300px; max-height: 300px; _height: 120px; margin-left: auto; margin-right: auto; padding: 3px; outline: 0; border: 1px solid #a0b3d6; font-size: 12px; word-wrap: break-word; overflow-x: hidden; overflow-y: auto; _overflow-y: visible;"
			contenteditable="true"><?php
			$con = new mysqli ( "qdm209094535.my3w.com", "qdm209094535", "sqlsmile123", "qdm209094535_db" );
			$con->query ( "set names gbk" );
			$stmt = $con->stmt_init ();
			$sql = "select * from baocun order by date desc";
			$stmt->prepare ( $sql );
			
			$stmt->bind_result ( $name, $xinxi, $date );
			//$name=$_POST['yonghu'];
			//$pass=$_POST['mima'];
			$stmt->execute ();
			
			if (empty ( $_POST ['shuru'] )) {
			} else {
				while ( $stmt->fetch () ) {
					echo "<p style='color:red;font-size:20px;'>$date   $name</p>" . "<p style='color:blue;font-size:25px;'>$xinxi</p>" . "<br/>";
				}
			}
			?>
		</div>
		</td>
	</tr>
</table>
</form>
</body>
</html>

