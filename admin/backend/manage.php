<?php 
require "../connection/database.php";
$query = "SELECT * FROM user where role = 2";
$result = mysqli_query($db, $query);
$db->close();
?>