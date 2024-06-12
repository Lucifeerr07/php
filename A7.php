<!DOCTYPE html>
<html>
 <head>
 <title>String Manipulation</title>
</head>
<body>
 <h2>string Manipulation</h2>
 <form method="post" action="<?php echo
htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 Enter a string:<input type="text" name="input string"required>
 <br><br>
 <input type="submit" name="get length" value="Get Length">
 <input type="submit" name="reverse" value="Reverse">
 <input type="submit" name="uppercase" value="Uppercase">
 <input type="submit" name="lowercase" value="Lowercase">
 <input type="submit" name="replace" value="Replace">
 <input type="submit" name="check_palindrome" value="Check Palindrome">
 <input type="submit" name="shuffle" value="Shuffle">
 <input type="submit" name="word count" value="Word Count">
 </form>
 <?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
 $input_string=$_POST["input_string"];
 if(isset($_POST["get_length"])){
 echo"Length of the string: ".strlen($input_string);
 }
 elseif(isset($_POST["reverse"])){
 echo"Reversed string: ".strrev($input_string);
 }
 elseif(isset($_POST["uppercase"])){
 echo"Uppercase string: ".strtoupper($input_string);
 }
 elseif(isset($_POST["lowercase"])){
 echo"Lowercase string: ".strtolower($input_string);
 }
 elseif(isset($_POST["replace"])){
 echo"replace string: ".str_replace('a','x',$input_string);
 }
 elseif(isset($_POST["check_palindrome"])){
 if($input_string==strrev($input_string)){
 echo"The string is a palindrome.";
 }else{
 echo"The string is not palindrome";
 }
 }
 elseif(isset($_POST["shuffle"])){
 echo"Shuffled string: ".str_shuffle($input_string);
 }
 elseif(isset($_POST["word_count"])){
 echo"Word count: ".str_word_count($input_string);
 }
 }
?>
</body>
</html>
