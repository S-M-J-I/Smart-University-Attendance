<?php


function getStudentDetails($id)
{
    global $connection;
    $sql = "SELECT * FROM students WHERE id=$id";
    $res = mysqli_query($connection, $sql) or die("Failed " . mysqli_error($connection));
    return mysqli_fetch_assoc($res);
}



$course = 6;

$sql = "SELECT * FROM attendance WHERE COURSE_ID=$course";
$res = mysqli_query($connection, $sql) or die("Failed" . mysqli_error($connection));

echo "<table class='table table-striped' style='text-align: center;'>";
echo "
    <thead>
        <th scope='col'>Student ID</th>    
        <th scope='col'>Student Name</th>    
        <th scope='col'>Is Present?</th>    
    </thead>
";
echo "<tbody>";
while ($row = mysqli_fetch_assoc($res)) {
    $student = getStudentDetails($row['STUDENT_ID']);
    echo "
    <tr>
    <td>{$student['STUDENT_ID']}</td>
    <td>{$student['STUDENT_NAME']}</td>
    <td><strong>{$row['IS_PRESENT']}</strong></td>
    </tr>
    ";
}
echo "</tbody>";
echo "</table>";
