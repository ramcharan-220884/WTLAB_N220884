<?php

echo "<h2>Task 2 - PHP File Functions</h2>";

$filename = "demo.txt";

file_put_contents($filename, "Hello Bookaroo!\n");
file_put_contents($filename, "New Booking Added\n", FILE_APPEND);

echo nl2br(file_get_contents($filename));

$file = fopen($filename, "a");
fwrite($file, "Using fwrite()\n");
fclose($file);

$file = fopen($filename, "r");
$content = fread($file, filesize($filename));
fclose($file);

echo "<br><br>";
echo nl2br($content);

$lines = file($filename);
echo "<br><br>";
foreach ($lines as $line) {
    echo $line . "<br>";
}

echo "<br>";
echo "File Exists: " . (file_exists($filename) ? "Yes" : "No") . "<br>";
echo "File Size: " . filesize($filename) . " bytes<br>";
echo "File Type: " . filetype($filename) . "<br>";
echo "Last Accessed: " . date("d-m-Y H:i:s", fileatime($filename)) . "<br>";
echo "Last Modified: " . date("d-m-Y H:i:s", filemtime($filename)) . "<br>";
echo "Created Time: " . date("d-m-Y H:i:s", filectime($filename)) . "<br>";
echo "Permissions: " . fileperms($filename) . "<br>";
echo "Owner ID: " . fileowner($filename) . "<br>";
echo "Group ID: " . filegroup($filename) . "<br>";
echo "Inode: " . fileinode($filename) . "<br>";

copy($filename, "copy_demo.txt");
rename("copy_demo.txt", "renamed_demo.txt");

if (!is_dir("test_folder")) {
    mkdir("test_folder");
}

echo "<br><br>";
$files = scandir(".");
foreach ($files as $file) {
    echo $file . "<br>";
}

unlink("renamed_demo.txt");
rmdir("test_folder");

echo "<br>Current Working Directory: " . getcwd() . "<br>";

$dir = opendir(".");
while (($file = readdir($dir)) !== false) {
    echo $file . "<br>";
}
closedir($dir);

$file = fopen($filename, "a");
if (flock($file, LOCK_EX)) {
    fwrite($file, "Locked Write Entry\n");
    flock($file, LOCK_UN);
}
fclose($file);

?>
