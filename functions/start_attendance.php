<?php
session_start();

$_SESSION['taking'] = 1;
$_SESSION['course'] = $_GET['course'];

// echo $_SESSION['taking'];
header("Location: ../index.php?course={$_SESSION["course"]}");
