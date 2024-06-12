<!DOCTYPE html>
<html>
<head>
 <title>Word Frequency Analyzer</title>
</head>
<body>
 <h1>Word Frequency Analyzer</h1>
 <form method="post">
 Enter a string: <input type="text" name="text" value="<?php echo
htmlspecialchars($_POST['text'] ?? ''); ?>">
 <button type="submit" name="submit">Analyze</button><br><br>
 <button type="submit" name="sort" value="ascending">Sort
Ascending</button>
 <button type="submit" name="sort" value="descending">Sort
Descending</button>
 </form>
 <?php
 if (!empty($_POST['text'])) {
 $text = strtolower(trim(preg_replace('/\W+/', ' ', $_POST['text'])));
 $wordCounts = array_count_values(explode(' ', $text));
 if ($_POST['sort'] === 'ascending') {
 asort($wordCounts);
 } else {
 arsort($wordCounts);
 }
 echo '<h2>Word Frequencies</h2><strong>Word:Count</strong><br>';
 foreach ($wordCounts as $word => $count) {
 echo "<strong>$word:$count</strong><br>";
 }
 $maxCount = max($wordCounts);
 $minCount = min($wordCounts);
 $mostUsedWords = array_keys($wordCounts, $maxCount);
 $leastUsedWords = array_keys($wordCounts, $minCount);
 echo "<br><strong>The most used word(s): " . implode(', ',
$mostUsedWords) . " (used $maxCount times)</strong>";
 echo "<br><strong>The least used word(s): " . implode(', ',
$leastUsedWords) . " (used $minCount times)</strong>";
 }
 ?>
</body>
</html>