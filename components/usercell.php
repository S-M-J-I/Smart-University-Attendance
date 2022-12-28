<?php

$course = $_GET['course'];

$sql = "SELECT * FROM attendance WHERE COURSE_ID=$course";
$res = mysqli_query($connection, $sql) or die("Failed" . mysqli_error($connection));

while ($row = mysqli_fetch_assoc($res)) {
    echo "
    <div style='display: flex;'>
        <h3>{$row['STUDENT_ID']}--</h3>
        <h3>{$row['IS_PRESENT']}</h3>
    </div>
    ";
}
