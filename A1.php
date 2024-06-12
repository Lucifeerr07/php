
index.html
<!DOCTYPE html>
<head>
 <title>Contact Form</title>
</head>
<body>
 <h2>Contact Form</h2>
 <form action="submit.php" method="post">
 <label>Name:</label> <br>
 <input type="text" name="name" required> <br>
 <label>Email:</label> <br>
 <input type="email" name="email" required> <br>
 <label>Message:</label> <br>
 <textarea id="message" name="message" required></textarea> <br>
 <input type="submit" value="Submit"> <br>
 </form>
</body>
</html>

submit.php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 echo "<h2>Form Submission Result</h2>";
 echo "<p><strong>Name:</strong> {$_POST['name']}</p>";
 echo "<p><strong>Email:</strong> {$_POST['email']}</p>";
 echo "<p><strong>Message:</strong> {$_POST['message']}</p>";
} else {
 echo "<p>Access denied.</p>";
}
?>
