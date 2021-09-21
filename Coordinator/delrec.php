<?php 

include('dbcon.php');
$delete_id = $_GET['Delete'];



$sql = "delete  from `course` where id = $delete_id";

$result = mysqli_query($conn,$sql);

if ($result) {
	
	echo '<script>window.open("deletecourse.php?deleted=Record deleted successfully","_self")</script>';
}

 ?>