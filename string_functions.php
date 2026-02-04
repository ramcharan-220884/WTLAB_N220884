<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php Strings</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="name" placeholder="Enter Full Name">
    <input type="text" placeholder="Enter Your Place" name="place">
    <input type="submit" value="submit" name="submit">
  </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $place = $_POST['place'];
  print("length of name is:". strlen($name)."<br>");
  print("word count of place is:". str_word_count($place)."<br>");
  print("reverse of name is:". strrev($name)."<br>");
  print("uppercase of place is:". strtoupper($place)."<br>");
  print("lowercase of name is:". strtolower($name)."<br>");
  print("position of 'a' in place is:". strpos($place, 'a')."<br>");
  print("replace 'r' with 'i' in name is:". str_replace('r', 'i', $name)."<br>");
  print("capitalize first letter of place is:". ucfirst($place)."<br>");
  print("capitalize first letter of each word in name is:". ucwords($name)."<br>");
  print("remove spaces from both sides of place is:". trim($place)."<br>");
  print("remove spaces from left side of name is:". ltrim($name)."<br>");
  print("remove spaces from right side of place is:". rtrim($place)."<br>");
  print("Substring of name from position 2 to 5 is:". substr($name, 2, 5)."<br>");
  print("String Compare between name and place is:". strcmp($name, $place)."<br>");
  print("String case compare between name and place is:". strcasecmp($name, $place)."<br>");


}
?>

