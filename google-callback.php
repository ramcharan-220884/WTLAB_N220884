<?php
require 'vendor/autoload.php';
session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$client = new Google_Client();
$client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
$client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
$client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']);

if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $oauth = new Google_Service_Oauth2($client);
    $userInfo = $oauth->userinfo->get();

    $email   = $userInfo->email;
    $name    = $userInfo->name;
    $picture = $userInfo->picture;

    include "db.php";

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        $stmt2 = $conn->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
        $emptyPassword = password_hash("google_user", PASSWORD_DEFAULT);
        $stmt2->bind_param("sss", $name, $email, $emptyPassword);
        $stmt2->execute();
        $stmt2->close();
    }

    $_SESSION['user_email']   = $email;
    $_SESSION['user_name']    = $name;
    $_SESSION['user_picture'] = $picture;

    header("Location: login.php");
    exit;

} else {
    echo "Authentication failed.";
}
