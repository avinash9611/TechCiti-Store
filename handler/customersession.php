<?php
if(empty($_SESSION['email'] AND $_SESSION['password'])){
    echo "<script> alert('Please Log in first');
    window.location.href='customerforms.php';
    </script>";
}


?>