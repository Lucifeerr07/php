<html>
<head>
 <title>Login Form</title>
</head>
<body>
 <h2>Login Form</h2>
 <form method="post" name="Form">
 Username:<input type="text" name="username" required><br><br>
 Password:<input type="password" name="password" required><br><br>
 <input type="submit" id="login" value="Login">
 </form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
function validate_credentials($conn, $username, $password) {
 $sql = "SELECT * FROM user WHERE username='$username' AND
password='$password'";
 $result = $conn->query($sql);

 if ($result && $result->num_rows > 0) {
 return true;
 } else {
 return false;
 }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $username = $_POST['username'];
 $password = $_POST['password'];
 if (validate_credentials($conn, $username, $password)) {
 echo "Login successful. Welcome, $username!";
 } else {
 echo "Invalid username or password. Please try again.";
 }
}
?>
<?php
$co