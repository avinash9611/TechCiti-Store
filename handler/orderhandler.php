<?php
session_start();
include('../partials/connect.php');

$name=$_POST['name'];

$total=$_POST['total'];

$phone=$_POST['phone'];

$address=$_POST['address'];
$customerid=$_SESSION['customerid'];

$sql="INSERT INTO orders(name,customer_id, address, phone, total) VAlUES('$name','$customerid','$address','$phone', '$total')";
$connect->query($sql);


$sql2="Select id from orders order by id DESC limit 1";
$result=$connect->query($sql2);
$final=$result->fetch_assoc();
$orderid=$final['id'];



foreach ($_SESSION['cart'] as $key => $value) {
	$proid=$value['item_id'];
	$quantity=$value['quantity'];


	$sql3="INSERT Into order_details(order_id,product_id,quantity) VAlUES('$orderid','$proid','$quantity')";
	$connect->query($sql3);
}
echo "<script> alert('ORDER IS PLACED');
		window.location.href='../index.php';
		</script>";

unset($_SESSION['cart']);
?>