<?php
$email=$_POST['email'];
$conn=new mysqli('localhost','root','','itproject');
if ($conn->connect_error) {
    die("Connection failure: ". $conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO `footer`(`email`) VALUES (?)");
    $stmt->bind_param('s',$email);
    $stmt->execute();
    echo"registerd succcesfully......";
    $stmt->close();
    $conn->close();
}
?>
