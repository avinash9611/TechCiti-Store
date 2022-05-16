<?php
include("../partials/connect.php");

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO contact(name,email,msg) VALUES ('$name','$email','$msg')";

$connect->query($sql);

echo "<script>alert('Message sent successfully');
	window.location.href='../contact.php';
	</script>"


?>