<?php
$email=$_POST['email'];
$Username=$_POST['Username'];
$Password = $_POST['Password'];
$Cpassword = $_POST['Cpassword'];
    
//database connection
$conn = new mysqli('localhost','root','','signup_details3');
if($conn->connect_error){
    "$conn->connect_error";
    die("signup failed...".$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into userdetails2(email,Username,Password,Cpassword)values(?, ?, ?, ?)");
  $stmt->bind_param("ssss",$email,$Username,$Password,$Cpassword);
  $execval = $stmt->execute();
  echo $execval;
  if($execval===True){
    header("location:home1.html");
  }
  else{
    echo"invalid details";
  }
  $stmt->close();
  $conn->close(); 
}
?>