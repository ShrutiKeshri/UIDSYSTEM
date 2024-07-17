<?php
include('db.php');
$id=$_GET['idd'];
if(isset($_GET['idd']))
{
mysql_query("DELETE FROM tbl_p_details where id='{$id}'");
header('location: Details.php');
}
?>