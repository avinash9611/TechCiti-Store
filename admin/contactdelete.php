<?php
include("../partials/connect.php");
$newid=$_GET['del_id'];

$sql="DELETE from contact where id='$newid'";

if(mysqli_query($connect,$sql)){
    header('location: contactshow.php');
}else{
    echo "Not Deleted";
}
?>