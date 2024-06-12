
index.php
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if ($_POST["username"] === "anvith" && $_POST["password"] === "1234") {
 $_SESSION['username'] = $_POST["username"];
 header("Location: welcome.php");
 exit();
 } else {
 $error_message = "Please try again.";
 }
}
?>
<!DOCTYPE html>
<head>
 <title>Login</title>
</head>
<body>
 <h2>Login</h2>
 <form action="" method="post">
 <label >Username:</label>
 <br>
 <input type="text" name="username" required>
 <br><br>
 <label>Password:</label>
 <br>
 <input type="password" name="password" required>
 <br><br>
 <input type="submit" value="Login">
 <br>
 <?php if (isset($error_message)) { ?>
 <p style="color: red;"><?php echo $error_message; ?></p>
 <?php } ?>
 </form>
</body>
</html>

welcome.php
<?php
session_start();
if (!isset($_SESSION['username'])) {
 header("Location: index.php");
 exit();
}
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
 $_SESSION = array();
 session_destroy();
 header("Location: index.php");
 exit();
}
?>
<!DOCTYPE html>
<head>
 <title>Welcome</title>
</head>
<body>
 <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
 <br>
 <p>This is a secured area. You are logged in.</p>
 <br>
 <a href="welcome.php?logout=1">Logout</a>
</body>
</html>
