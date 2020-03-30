<?php

$Fname = $_POST['fname'];
$Lname = $_POST['lname'];
$Email = $_POST['email'];
$Gender = $_POST['gender'];
$Date = $_POST['dob'];
$Title = $_POST['select'];
$Address = $_POST['addr'];
$PhNo = $_POST['telephone'];

$hostname = "127.0.0.1";
$username = "root";
$dbname = "prac5";
$password = "";


$con = mysqli_connect($hostname, $username, $password, $dbname) or die(mysqli_error($con));

$sql = "Insert into assign5 (Fname,Lname,Email,Gender,DateOfBirth,Title,Address,ContactNo) values ('$Fname','$Lname','$Email','$Gender','$Date','$Title','$Address','$PhNo')";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));
if ($result) {
	echo "New Record entered successfully";
} else {
	echo "Not inserted";
}
