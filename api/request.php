<?php
session_start();

// echo $_SESSION['taking'];

if (isset($_SESSION["req"])) {
    $doc["request"] = 2;
    $doc["student_id"] = $_SESSION["req"];
    echo json_encode($doc);
    return;
} else {
    $doc['request'] = 1;
    $doc['course'] = 6;
    echo json_encode($doc);
    return;
}
             