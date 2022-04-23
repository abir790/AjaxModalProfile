
<?php
require '../config.php' ;


echo $email=$_POST['email'];
echo $password=$_POST['password'];

$sql="SELECT id FROM users WHERE email='$email' AND password='$password' ";
$result=$conn->query($sql);
//$result=mysqli_query($conn,$sql);
//$res=mysqli_fetch($result);



$rowcount=mysqli_num_rows($result);
if ($rowcount==1) {
	foreach ($result as $res) {
	$id=$res['id'];
	session_start();
	$_SESSION['login']='Login Successfully';
	header("location:login_id_base_profile.php?id=$id");
}
}elseif($rowcount !==1){
	session_start();
	$_SESSION['wrong']='wrong username and password';
	header('location: ../index.php');
}






?>



