<!DOCTYPE html>
<html>
<head>
 <title>Distance Calculator</title>
</head>
<body>
 <h2>Distance Claculator</h2>
 <form action="" method="post">
 Distance 1: <br>
 Feet: <input type="number" id="feet1" name="feet1" required><br>
 Inches: <input type="number" id="inches1" name="inches1"
required><br><br>
 Distance 2: <br>
 Feet: <input type="number" id="feet2" name="feet2" required><br>
 Inches : <input type="number" id="inches2" name="inches2"
required><br><br>
 <input type="submit" value="Calculate">
 </form>
</body>
</html>
<?php
class DistanceCalculator
{
 public function addDistance($feet1, $inches1, $feet2, $inches2)
 {
 $totalfeet = $feet1 + $feet2;
 $totalinches = $inches1 + $inches2;
 if ($totalinches >= 12) {
 $totalfeet += floor($totalinches / 12);
 $totalinches %= 12;
 }
 return [$totalfeet, $totalinches];
 }
 public function findDifference($feet1, $inches1, $feet2, $inches2)
 {
 $totalFeet1 = $feet1 + $inches1 / 12;
 $totalFeet2 = $feet2 + $inches2 / 12;
 $difference = abs($totalFeet1 - $totalFeet2);
 $differenceFeet = floor($difference);
 $differenceInches = floor($difference - $differenceFeet) * 12;
 return [$differenceFeet, $differenceInches];
 }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $feet1 = $_POST["feet1"];
 $inches1 = $_POST["inches1"];
 $feet2 = $_POST["feet2"];
 $inches2 = $_POST["inches2"];
 $calculator = new DistanceCalculator();
 echo "<br><br><h2>Result:</h2><br>";
 [$sumFeet, $sumInches] = $calculator->addDistance($feet1, $inches1,
$feet2, $inches2);
 echo "Sum: $sumFeet' $sumInches'' <br>";
 [$diffFeet, $diffInches] = $calculator->findDifference($feet1, $inches1,
$feet2, $inches2);
 echo "Difference: $diffFeet' $diffInches'' <br>";
}
?>