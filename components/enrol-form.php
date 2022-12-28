<?php include "../utils/db.php";

session_start();

?>
<?php


if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $stuid = $_POST["id"];

    $sql = "INSERT INTO `students`(`STUDENT_ID`, `STUDENT_NAME`) VALUES ('$stuid', '$name')";
    // echo $sql;
    $res = mysqli_query($connection, $sql) or die("Failed " . mysqli_error($connection));

    $sql = "SELECT * FROM students ORDER BY id DESC LIMIT 1";
    $res = mysqli_query($connection, $sql) or die("Failed " . mysqli_error($connection));

    $id = mysqli_fetch_assoc($res)["id"];

    $_SESSION["req"] = $id;
}

?>

<h1>Enrol</h1>

<form action="enrol-form.php" method="POST">
    <label>Name: </label>
    <input name="name" placeholder="Add student name" />
    </br>
    </br>
    <label>ID</label>
    <input name="id" placeholder="Add Student ID" />
    </br>
    </br>
    <input type="submit" name="submit" />
</form>