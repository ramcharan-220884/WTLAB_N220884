<?php
require __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");

$db = $client->bookaroo_db;

$users = $db->users;
$rooms = $db->rooms;
$bookings = $db->bookings;
?>