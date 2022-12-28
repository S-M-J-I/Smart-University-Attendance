<?php
session_start();
$course = $_SESSION["course"];

session_destroy();

header("Location: ../index.php?course=$course");
