<?php
$con=mysqli_connect('localhost','root','','project1');

$book=$_POST['sn'];
$id=$_POST['sid'];
$price=$_POST['sp'];

$sql="delete from infor where Id=3";
mysqli_query($con,$sql);

echo "The data has been deleted successfully";
?>