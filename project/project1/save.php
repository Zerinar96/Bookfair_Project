<?php
$con=mysqli_connect('localhost','root','','project1');

$book=$_POST['sn'];
$id=$_POST['sid'];
$price=$_POST['sp'];

$sql="insert into infor (Book,Id,Price) values ('$book','$id','$price')";
mysqli_query($con,$sql);
?>
