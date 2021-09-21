<?php 

include('dbcon.php');
$delete_id = $_GET['Delete'];



$sql = "delete  from `addcourse` where id = $delete_id";

$result = mysqli_query($conn,$sql);

if ($result) {
	
	echo '<script>window.open("dropcourse.php?deleted=Course Dropped Successfully","_self")</script>';
}

 ?>