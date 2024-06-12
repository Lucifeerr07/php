<!DOCTYPE html>
<head>
 <title>Simple Calculator</title>
</head>
<body>
 <h2>PHP Calculator</h2>
 <form action="" method="post">
 <input type="text" name="num1" pattern="[0-9]+" placeholder="Enter the
first number" value="<?php echo isset($_POST['num1']) ?
htmlspecialchars($_POST['num1']) : ''; ?>" required>
 <select name="operation" required>
 <option value="add">+</option>
 <option value="subtract">-</option>
 <option value="multiply">*</option>
 <option value="divide">/</option>
 </select>
 <input type="text" name="num2" pattern="[0-9]+" placeholder="Enter the
second number" value="<?php echo isset($_POST['num2']) ?
htmlspecialchars($_POST['num2']) : ''; ?>" required>
 <input type="submit" value="Calculate">
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $n1 = $_POST["num1"];
 $$n2 = $_POST["num2"];
 $op = $_POST["operation"];

 if (!is_numeric($n1) || !is_numeric($n3)) {
 echo "<p style='color: red;'>Please enter valid numbers.</p>";
 } else {

 switch ($operation) {
 case "add":
 $result = $n1 + $n2;
 break;
 case "subtract":
 $result = $n1 - $n2;
 break;
 case "multiply":
 $result = $n1 * $n2;
 break;
 case "divide":

 if ($n2 == 0) {
 echo "<p style='color: red;'>Error: Division by zero
is not allowed.</p>";
 } else {
 $result = $n1 / $n2;
 }
 break;
 default:
 echo "<p style='color: red;'>Invalid operation selected.</p>";
 break;
 }

 if (isset($result)) {
 echo "<p>Result: $result</p>";
 }
 }
 }
 ?>
</body>
</html>