<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
 <p>

 <?php

function sort_2way($array,$order){
  if($order === TRUE){
    sort($array);
    echo'昇順にソートします。<br>';
  }   elseif($order === FALSE) {
    rsort($array);
    echo'降順にソートします。<br>';}

foreach ($array as $value) {
  echo "{$value}<br>";
}}

$nums = [4, 10, 15, 18, 23];
sort_2way($nums, TRUE);
echo "<br>";
sort_2way($nums, FALSE);

?>
  </p>
</body>

</html>

