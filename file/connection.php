<?php

$conn=mysqli_connect('localhost','root','') or die('Cannot connect to server');
mysqli_select_db($conn,'bloodbank') or die ('Cannot found database');

?>
