<?php
 
require_once ('../../connect/connection.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$time = time() + (2*60*60);
$intime = date('H:i:s d.m.y', $time); 

include('ip.php');
include('mail.php');

$query="INSERT INTO `request`(`name`, `phone`, `date`, `ip`, `city`) VALUES ('$name','$phone','$intime', '$result', '$result2')";



$result = mysqli_query($link,$query)
or die(mysqli_error($link));
 
mysqli_close($link);
?>