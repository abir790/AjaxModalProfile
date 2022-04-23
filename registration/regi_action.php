<?php 
include '../config.php';

echo "<br> is action page";

echo $name=$_POST['name'];
echo $address=$_POST['address'];
echo $email=$_POST['email'];
echo $password=$_POST['password'];
echo $conpass=$_POST['conpass'];


 $sql="INSERT INTO users VALUES(NULL,'$name','$address','$email','$password')";
 $result=$conn->query($sql);

 if ($result){
  echo 0;
// 	header('location:registration.php');
	
 }else{
  echo 1;
// 	echo "not successfully user add";
 }

 ?>
