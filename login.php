<?php
session_start();
include "db.php";

if (isset($_SESSION['user_email'])) {
    echo "<h3>Welcome, " . $_SESSION['user_name'] . "</h3>";
    echo "<img src='" . $_SESSION['user_picture'] . "' width='60'><br><br>";
    echo "<a href='logout.php'>Logout</a>";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        die("All fields required");
    }

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {

            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_name']  = $row['full_name'];
            $_SESSION['user_picture'] = "";

            header("Location: login.php");
            exit;

        } else {
            echo "Incorrect password";
        }

    } else {
        echo "No account found";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST">
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>

<br><br>

<a href="google-login.php">
    <button type="button">Login with Google</button>
</a>

<br><br>

<a href="signup.php">Don't have account? Signup</a>

</body>
</html>
