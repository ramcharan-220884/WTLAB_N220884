<?php

echo "<h2>Task 3 - File Operation Modes</h2>";

file_put_contents("mode.txt", "Initial Content\n");

$file = fopen("mode.txt", "r");
echo nl2br(fread($file, filesize("mode.txt")));
fclose($file);

$file = fopen("mode.txt", "w");
fwrite($file, "Overwritten Content\n");
fclose($file);
echo "<br><br>";
echo nl2br(file_get_contents("mode.txt"));

$file = fopen("mode.txt", "a");
fwrite($file, "Appended Content\n");
fclose($file);
echo "<br><br>";
echo nl2br(file_get_contents("mode.txt"));

if (!file_exists("newfile.txt")) {
    $file = fopen("newfile.txt", "x");
    fwrite($file, "Created using x mode\n");
    fclose($file);
    echo "<br><br>newfile.txt created successfully.";
} else {
    echo "<br><br>newfile.txt already exists.";
}

$file = fopen("mode.txt", "r+");
fwrite($file, "R+ Mode Edit\n");
fclose($file);
echo "<br><br>";
echo nl2br(file_get_contents("mode.txt"));

$file = fopen("mode.txt", "w+");
fwrite($file, "W+ Mode Fresh Start\n");
fclose($file);
echo "<br><br>";
echo nl2br(file_get_contents("mode.txt"));

$file = fopen("mode.txt", "a+");
fwrite($file, "A+ Mode Added\n");
fclose($file);
echo "<br><br>";
echo nl2br(file_get_contents("mode.txt"));

if (!file_exists("newfile2.txt")) {
    $file = fopen("newfile2.txt", "x+");
    fwrite($file, "Created using x+ mode\n");
    fclose($file);
    echo "<br><br>newfile2.txt created successfully.";
} else {
    echo "<br><br>newfile2.txt already exists.";
}

?>
