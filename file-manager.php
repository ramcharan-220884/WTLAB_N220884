<!DOCTYPE html>
<html>
<head>
    <title>Mini File Manager - Bookaroo</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: #0F766E;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        margin: 40px auto;
        background: #ffffff;
        padding: 30px;
        border-radius: 10px;
    }

    h2 {
        color: #0F766E;
        margin-bottom: 20px;
    }

    form {
        margin-bottom: 30px;
    }

    input[type="file"] {
        padding: 8px;
        margin-right: 10px;
    }

    button {
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }

    button:hover {
        opacity: 0.9;
    }

    .upload-btn {
        background: #0F766E;
        color: white;
    }

    .file-card {
        background: #f9fafc;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 15px;
        border-left: 5px solid #0F766E;
    }

    .file-card a {
        text-decoration: none;
        margin-right: 15px;
        font-weight: bold;
    }

    .download {
        color: #0F766E;
    }

    .delete {
        color: #0F766E;
    }

    .info {
        color: #0F766E;
        font-size: 14px;
    }
</style>

</head>
<body>

<div class="container">

<h2>Upload File</h2>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="myfile" required>
    <button type="submit" name="upload" class="upload-btn">Upload</button>
</form>

<hr>

<h2>Uploaded Files</h2>

<?php
$folder = "uploads/";

if (is_dir($folder)) {
    $files = scandir($folder);

    foreach ($files as $file) {
        if ($file != "." && $file != "..") {

            $filepath = $folder . $file;
            $size = filesize($filepath);
            $modified = date("d-m-Y H:i:s", filemtime($filepath));

            echo "<div class='file-card'>";
            echo "<strong>$file</strong><br>";
            echo "<span class='info'>Size: $size bytes</span><br>";
            echo "<span class='info'>Last Modified: $modified</span><br><br>";

            echo "<a class='download' href='download.php?file=$file'>Download</a>";
            echo "<a class='delete' href='delete.php?file=$file'>Delete</a>";
            echo "</div>";
        }
    }
}
?>

</div>

</body>

</html>
