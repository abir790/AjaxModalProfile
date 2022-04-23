<?php
include '../config.php';

echo $id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];



$sql="UPDATE users SET name='$name',address='$address',email='$email',password='$password' WHERE id='$id' ";
$result=$conn->query($sql);

// if ($result) {
//     echo 1;
// }else{
//     echo 0;
// }
return $result;


?>