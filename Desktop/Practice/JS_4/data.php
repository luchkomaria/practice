<?php
$bg=$_POST['background'];
$box=$_POST['box'];
$servername = "localhost";
$username = "root";
$password = "";
$database = "practice";

$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO colors (backgroundcolor, boxcolor)
VALUES ('$bg','$box')";

if (mysqli_query($conn, $sql)) {
    echo "coooool";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>