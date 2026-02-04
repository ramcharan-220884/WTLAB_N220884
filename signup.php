<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $name = strtolower($name);
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($name) || empty($email) || empty($password)) {
        die("All fields are required");
    }

    if (!ctype_alpha(str_replace(' ', '', $name))) {
        die("Name must contain only alphabets");
    }

    if (!str_contains($email, '@') || !str_contains($email, '.')) {
        die("Invalid email format");
    }

    if (strlen($password) < 6) {
        die("Password must be at least 6 characters long");
    }

    $name  = htmlspecialchars($name);
    $email = htmlspecialchars($email);

    echo "Registration Successful<br>";
    echo "Name: " . ucfirst($name) . "<br>";
    echo "Email: " . $email;
}


    $sql = "INSERT INTO users (full_name, email, password)
            VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Signup successful";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
