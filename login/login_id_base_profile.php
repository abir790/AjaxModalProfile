<?php session_start(); ?>

<?php if (!isset($_SESSION['login'])) {
	session_start();
	$_SESSION['warning']='please login 1st';

	header('location:../index.php');
	}
	 ?>

	<?php 
	$id=$_GET['id'];
	
	?>

	<?php 
	include '../config.php';
	$sql="SELECT * FROM users WHERE id=$id";
	$result=$conn->query($sql);
	 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/Profile.css">
</head>
<body>
<div class="personal-profile">
	<div class="logout">
			<h1 style="font-size: 50px;">Profile</h1>
			<a class="a" href="logout.php">Logout</a>
	</div>

	<p style="font-size: 20px;"><?php echo "Your id is :".$id;?></p>

	<div class="details">

	<?php foreach ($result as $res) { ?>
	<h1 style="text-transform: capitalize;">Hellow <?php echo $res['name'] ?></h1>
	<h2>Its your personal profile</h2>
	<h1>Your Address : <?php echo $res['address'] ?></h1>
	<h1>Your Email : <?php echo $res['email'] ?></h1>
    <?php } ?>

	</div>
</div>



</body>
</html>