
<?php
include('db.php');
$id=$_GET['ide'];
if(isset($_GET['ide']))
{
$sql=mysql_query("SELECT * FROM tbl_p_details where id='{$id}'");
$result=mysql_fetch_array($sql);
}
?><?php
include_once('db.php');
if(isset($_POST['save']))
{
$Number=$_POST['Number'];
$Name=$_POST['Name'];
$Pin=$_POST['Pin'];
$Image=$_POST['Image'];
if(mysql_query("UPDATE tbl_p_details SET `Number`='$Number', `Name`='$Name', `Pin`='$Pin', `Image`='$Image' where id='{$id}'"))
{
	header('location: Details.php');
}else{
echo" Data Not saved";
}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
</head> 

<body style="margin:auto; padding:0px; width:1000px; ">
<form method="post">
	<table width="100%">
		<tr>
			<td align="center" style="height:100px">
				<img src="../images/AdminBanner.jpg" width="1000" height="100" />
			</td>
		</tr>
		<tr>
			<td style="width:100%;">
				<table style="width:100%; text-decoration:none">
					<tr>
						<td><a href="admin.php">Admin</a></td>
						<td><a href="Details.php">Personal Details</a></td>
						<td><a href="../index.php">LogOut</a></td>
					</tr>
				</table><hr />
			</td>
		</tr>
		<tr>
			<td align="center">
				<h2> Your Personal Details</h2>
			</td>
		</tr>
		<tr>
			<tr>
			<td style="width:100%">
			
				<table style="width:100%">
					<tr>
						<td>Enrolment Number/Aadhaar Number<span style="color:#FF0000"> *</span></td>
						<td><input type="text" name="Number" value="<?php echo $result['Number']; ?>" /></td>
					</tr>
					<tr>
						<td>Full Name <span style="color:#FF0000"> *</span></td>
						<td><input type="date" name="Name" value="<?php echo $result['Name']; ?>" /></td>
					</tr>
					<tr>
						<td>Pin Code<span style="color:#FF0000"> *</span></td>
						<td><input type="text" name="Pin" value="<?php echo $result['Pin']; ?>" /></td>
					</tr>					
					<tr>
						<td>Enter above Image Text<span style="color:#FF0000"> *</span></td>
						<td><input type="text" name="Image"  value="<?php echo $result['Image']; ?>"/></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="save" value="Update" /></td>
					</tr>
				</table>
				<hr />
			</td>
		</tr>
	</table>
	</form>
		</tr>
	</table>
</body>
</html>
