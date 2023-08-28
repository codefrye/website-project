<?php
$search=$_POST['search'];
$conn=new mysqli('localhost','root','','itproject');
if ($conn->connect_error) {
    die("Connection failure: ". $conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO `searchtable`(`search`) VALUES (?)");
    $stmt->bind_param('s',$search);
    $stmt->execute();
    echo"searched succcesfully......";
    $stmt->close();
    $conn->close();
}
?>