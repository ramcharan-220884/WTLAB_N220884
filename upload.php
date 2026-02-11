<?php

if(isset($_POST['upload'])) {
  $target_dir = "uploads/";
  $file_name = $_FILES['myfile']['name'];
  $target_file = $target_dir . basename($file_name);
  if(move_uploaded_file($_FILES['myfile']['tmp_name'], $target_file)) {
    echo "File uploaded successfully.";
  } else {
    echo "Error uploading file.";
  }

 echo "<br> <a href='file-manager.php'>Go Back</a>";
}
?>