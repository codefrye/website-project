<?php
$md3=100;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into user6(md3)values(?)");
    $stmt->bind_param("i",$md3);
    $execval = $stmt->execute();
    echo $execval;
}
$sql = "UPDATE user6 SET md3=md3-1 WHERE md3>0";

if ($conn->query($sql) === TRUE) {
  header("location:billing3.html");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>