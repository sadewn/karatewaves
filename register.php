<?php
$username=$_GET['user'];
$mail=$_GET['email'];
$phone=$_GET['tel'];
$cls=$_GET['class'];
$gender=$_GET['gen'];

$con=new mysqli('localhost','root','usbw','login');
 if($con->connect_error){
     die("connection error");
 }
 else{echo "Authenticated";}
 $sql="INSERT INTO log(username,mail,phone,cls,gender)VALUES
                        ('$username','$mail','$phone','$cls','$gender')";
 $con->query($sql);
 $con->close();
 ?>                       
 