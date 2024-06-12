<!DOCTYPE html>
<html>
<head>
 <title>Age Calculator</title>
</head>
<body>
 <h2>Age Calculator</h2>
 <form method="post">
 <label>Enter your birth date:</label>
 <input type="date" name="birthdate" >
 <input type="submit" value="Calculate">
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["birthdate"])) {
 $diff = (new DateTime())->diff(new DateTime($_POST["birthdate"]));
 echo "<h3>Your age is: {$diff->y} years, {$diff->m} months, and
{$diff->d} days.</h3>";
 } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
 echo "<h3>Please enter your birth date</h3>";
 }
 ?>
</body>
</html>
