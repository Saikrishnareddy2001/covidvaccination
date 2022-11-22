<?php
$link=mysqli_connect("localhost","root","") or die(mysqli_error($link));
mysqli_select_db($link,"php_connections")or die(mysqli_error($link));
?>