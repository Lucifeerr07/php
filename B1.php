index.php

<!DOCTYPE html>
<html>
<head>
 <title>Student Registration Form</title>
</head>
<body>
 <h2>Student Registration Form</h2>
 <form method="post" action="form.php">
 <label for="firstname">First Name:</label>
 <input type="text" id="firstname" name="firstname"><br><br>

 <label for="lastname">Last Name:</label>
 <input type="text" id="lastname" name="lastname"><br><br>

 <label for="address">Address:</label>
 <textarea id="address" name="address"></textarea><br><br>

 <label for="email">E-Mail:</label>
 <input type="text" id="email" name="email"><br><br>

 <label for="mobile">Mobile:</label>
 <input type="text" id="mobile" name="mobile"><br><br>

 <label for="city">City:</label>
 <input type="text" id="city" name="city"><br><br>

 <label for="state">State:</label>
 <input type="text" id="state" name="state"><br><br>

 <label for="gender">Gender:</label>
 <input type="radio" id="male" name="gender" value="Male">
 <label for="male">Male</label>
 <input type="radio" id="female" name="gender" value="Female">
 <label for="female">Female</label><br><br>

 <label for="hobbies">Hobbies:</label><br>
 <input type="checkbox" id="hobby1" name="hobbies[]" value="Reading">
 <label for="hobby1">Reading</label><br>
 <input type="checkbox" id="hobby2" name="hobbies[]" value="Sports">
 <label for="hobby2">Sports</label><br>
 <input type="checkbox" id="hobby3" name="hobbies[]" value="Music">
 <label for="hobby3">Music</label><br><br>
<label for="bloodgroup">Blood Group:</label>
<select id="bloodgroup" name="bloodgroup">
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select><br><br>

<input type="submit" value="Submit">
</form>
</body>
</html>


form.php   
<!DOCTYPE html>
<html>
<head>
 <title>Registration Details</title>
</head>
<body>
 <h2>Registration Details</h2>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 echo "<p><strong>First Name:</strong> " . $_POST["firstname"] .
"</p>";
 echo "<p><strong>Last Name:</strong> " . $_POST["lastname"] . "</p>";
 echo "<p><strong>Address:</strong> " . $_POST["address"] . "</p>";
 echo "<p><strong>E-Mail:</strong> " . $_POST["email"] . "</p>";
 echo "<p><strong>Mobile:</strong> " . $_POST["mobile"] . "</p>";
 echo "<p><strong>City:</strong> " . $_POST["city"] . "</p>";
 echo "<p><strong>State:</strong> " . $_POST["state"] . "</p>";
 echo "<p><strong>Gender:</strong> " . $_POST["gender"] . "</p>";

 echo "<p><strong>Hobbies:</strong> ";
 if(isset($_POST['hobbies'])) {
 foreach($_POST['hobbies'] as $hobby) {
 echo $hobby . ", ";
 }
 }
 echo "</p>";

 echo "<p><strong>Blood Group:</strong> " . $_POST["bloodgroup"] .
"</p>";
 }
 ?>
</body>
</html>