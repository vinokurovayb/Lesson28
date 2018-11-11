<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'vinokurova';
$mysqli = new mysqli($host, $user, $pass, $db);
$mysqli->set_charset('utf8');
$result = $mysqli->query("SELECT * FROM users");
$users = [];
while ($user = $result->fetch_assoc()) {
    $users[] = $user;
}
var_dump($users);
