<?php

include_once "../utils/db.php";

$id = $_POST['student_id'];
$course = $_POST['course'];

$sql = "UPDATE attendance SET IS_PRESENT='true' WHERE STUDENT_ID=$id AND COURSE_ID=$course";
$res = mysqli_query($connection, $sql) or die("Failed " . mysqli_error($connection));

header("Location: ../index.php");