<?php

include "connection.php";
// var_dump($_GET);
// echo $_GET['id'];
// die();



// sql to delete a record
$sql = "DELETE FROM user WHERE id='".$_GET['id']."'";

if ($conn->query($sql) === TRUE) {
    header("Location: database.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>