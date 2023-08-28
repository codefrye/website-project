<?php
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$fb=$_POST['feedback'];

$conn=new mysqli('localhost','root','','itproject');
if ($conn->connect_error) {
    die("Connection failure: ". $conn->connect_error);
}
else{
    $stmt = $conn->prepare('INSERT INTO `contactpage`(`name`, `number`, `email`, `feedback`)
     VALUES (?,?,?,?)');
    $stmt->bind_param('siss',$name,$number,$email,$fb);
    $stmt->execute();
    echo"contact details registerd succcesfully......";
    $stmt->close();
    $conn->close();
}
?>