<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "feedback";
$conn = mysqli_connect($server, $username, $password, $database);
if (isset($_POST['submit'])) {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];
 $sql = "INSERT INTO feedback
(name,email,subject,message)VALUES('$name','$email','$subject','$message')";
 $result = mysqli_query($conn, $sql);
 if ($result == true) {
 echo "<script>alert('Feedback submitted successfully');</script>";
 } else {
 echo "<script>alert('Failed');</script>";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Feedback Form</title>
</head>
<body>
 <h2>Feedback Form</h2>
 <form action="" method="post">
 Name:<input type="text" id="name" name="name" required><br><br>
 Email:<input type="email" id="email" name="email" required><br><br>
 Subject:<input type="text" id="subject" name="subject"
required><br><br>
 Message:<textarea id="message" name="message"
required></textarea><br><br>
 <input type="submit" name="submi