<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "back";

$comm = new mysqli('localhost', 'root', '', 'back');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $password = $_POST["password"];

    $sql = "insert into 1 (name, mail, password) values ($name, $mail, $password)";

    if ($conn -> querySQL === true){
        echo "welcome";
    } else {
        echo "Access denied". $sql . "<br>" . $conn->error;
    }
}

$conn -> close();

?>
