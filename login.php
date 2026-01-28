<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    // Stop execution if page is opened directly
    exit;
}

if (!isset($_POST['email'], $_POST['password'])) {
    echo "Form data missing";
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['PASSWORD'])) {
        echo "Login successful! Welcome, " . $row['full_name'];
    } else {
        echo "Incorrect password";
    }

} else {
    echo "No account found with this email";
}

mysqli_close($conn);
