<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "it_project1";

$conn = new mysqli($servername,$username, $password);

$sql = "CREATE DATABASE it_project1";
if ($conn->query($sql) == TRUE) {
echo "Database with name it project";
} else {echo "Error: " . $conn->error;
}



$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE searchbar (
search VARCHAR(30) NOT NULL
)";
if ($conn->query($sql) === TRUE) {echo "Table searchbar has been created successfully<br>";
} else {
echo "Error creating table: " . $conn->error;
}
$sql = "CREATE TABLE footer (
    email VARCHAR(30) NOT NULL
    )";
    if ($conn->query($sql) === TRUE) {echo "Table footer has been created successfully<br>";
    } else {
    echo "Error creating table: " . $conn->error;
    }
    $sql = "CREATE TABLE contact (
        name VARCHAR(30) NOT NULL,
        num VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        feedback VARCHAR(30) NOT NULL
        )";
        if ($conn->query($sql) === TRUE) {echo "Table contact has been created successfully<br>";
        } else {
        echo "Error creating table: " . $conn->error;
        }  
$conn->close();
?>