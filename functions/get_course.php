<?php
include_once "./utils/db.php";

$sql = "SELECT * FROM courses WHERE id=6";
$res = mysqli_query($connection, $sql) or die("Failed " . mysqli_error($connection));

return mysqli_fetch_assoc($res)["NAME"];
