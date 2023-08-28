<?php
$md7=100;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping7";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into user6(md7)values(?)");
    $stmt->bind_param("i",$md7);
    $execval = $stmt->execute();
    echo $execval;
}
$sql = "UPDATE user6 SET md7=md7-1 WHERE md7>0";

if ($conn->query($sql) === TRUE) {
  header("location:billing2.html");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>