<?php
$md4=100;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into user6(md4)values(?)");
    $stmt->bind_param("i",$md4);
    $execval = $stmt->execute();
    echo $execval;
}
$sql = "UPDATE user6 SET md4=md4-1 WHERE md4>0";

if ($conn->query($sql) === TRUE) {
  header("location:billing2.html");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>