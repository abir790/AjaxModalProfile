<?php
include '../config.php';

$id=$_POST['id'];

$sql="DELETE FROM users WHERE id='$id'";
$result=$conn->query($sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}

?>