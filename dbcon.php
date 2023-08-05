<?php

$con = mysqli_connect('localhost:3308', 'root', '', 'inventory');

if(!$con){
die('Connection Failed' . mysqli_connect_error());
}

?>