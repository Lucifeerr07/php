<!DOCTYPE html>
<html>
<head>
 <title>Dictionary</title>
</head>
<body>
 <h1>Dictionary</h1>
 <form method="post" action="">
 <label>Enter a word:</label>
 <input type="text" name="word" required>
 <input type="submit" name="submit" value="Search">
 </form>
 <?php
 $dictionary = array("apple" => "a round fruit with red or green skin
and a whitish interior",
 "computer" => "an electronic device for storing and processing data"
 );
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (array_key_exists($_POST["word"], $dictionary)) {
 echo "<p><strong>Meaning of \"{$_POST["word"]}\":</strong> " .
$dictionary[$_POST["word"]] ."</p>";
 } else {
 echo "<p><strong>{$_POST["word"]} Word not
found.</strong></p>";
 }
 }
 ?>
</body>
</html>