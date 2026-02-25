<?php
session_start();
require "db.php";

/* If already logged in, go to home */
if (isset($_SESSION['user_email'])) {
    header("Location: index.php");
    exit;
}

$loginError = "";
$signupError = "";

/* ================= LOGIN ================= */
if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $loginError = "All fields required";
    } else {

        $user = $users->findOne(['email' => $email]);

        if ($user && password_verify($password, $user['password'])) {

            session_regenerate_id(true);

            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_name']  = $user['full_name'];

            header("Location: index.php");
            exit;

        } else {
            $loginError = "Invalid email or password";
        }
    }
}

/* ================= SIGNUP ================= */
if (isset($_POST['signup'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($name) || empty($email) || empty($password)) {
        $signupError = "All fields required";
    } else {

        $existingUser = $users->findOne(['email' => $email]);

        if ($existingUser) {
            $signupError = "Email already registered";
        } else {

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $users->insertOne([
                'full_name' => $name,
                'email' => $email,
                'password' => $hashedPassword
            ]);

            header("Location: auth.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Bookaroo</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="auth.php">Login</a></li>
  </ul>
</nav>

<div class="auth-wrapper" style="margin-top:70px;">

    <!-- LOGIN FORM -->
    <div class="auth-card" id="loginForm">
        <h2>Login</h2>

        <?php if($loginError): ?>
            <div class="error"><?= $loginError ?></div>
        <?php endif; ?>

        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>

        <div class="switch-link">
            Don't have account? 
            <a href="#" onclick="showSignup()">Sign Up</a>
        </div>
    </div>

    <!-- SIGNUP FORM -->
    <div class="auth-card hidden" id="signupForm">
        <h2>Sign Up</h2>

        <?php if($signupError): ?>
            <div class="error"><?= $signupError ?></div>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="signup">Sign Up</button>
        </form>

        <div class="switch-link">
            Already have account? 
            <a href="#" onclick="showLogin()">Login</a>
        </div>
    </div>

</div>

<script>
function showSignup(){
    document.getElementById("loginForm").classList.add("hidden");
    document.getElementById("signupForm").classList.remove("hidden");
}
function showLogin(){
    document.getElementById("signupForm").classList.add("hidden");
    document.getElementById("loginForm").classList.remove("hidden");
}
</script>

</body>
</html>