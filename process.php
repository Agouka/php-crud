<?php
include("connect.php");
if (isset($_POST["create"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $sql = "INSERT INTO books (title, author, type, description) VALUES ('$title', '$author', '$type', '$description')";
    if (mysqli_query($conn, $sql)) {
        echo "Record created successfully";
    } else {
        die("Something went wrong");
    }
}
?>