<?php
$username =$_POST["username"];
$password =$_POST["password"];

$conn = mysqli_connect("localhost","root","","login") or
die("could not connect :" . mysqli_error());

$sql = "insert into login values('$username','$password')";

if (mysqli_query($conn,$sql))
    echo"Thank you, login sucessful ";
else
    echo"Error".mysqli_error();

mysqli_close($conn);

?>