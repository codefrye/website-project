<?php
$md1=100;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into user6(md1)values(?)");
    $stmt->bind_param("i",$md1);
    $execval = $stmt->execute();
    echo $execval;
}
$sql = "UPDATE user6 SET md1=md1-1 WHERE md1>0";

if ($conn->query($sql) === TRUE) {
  header("location:billing1.html");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>