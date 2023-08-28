<?php
$md5=100;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into user6(md5)values(?)");
    $stmt->bind_param("i",$md5);
    $execval = $stmt->execute();
    echo $execval;
}
$sql = "UPDATE user6 SET md5=md5-1 WHERE md5>0";

if ($conn->query($sql) === TRUE) {
  header("location:billing2.html");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>