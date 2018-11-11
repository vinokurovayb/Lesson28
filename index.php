<?php
require_once 'User.php';
// $user = new User('Vasya', 2);
// $user->role = 'Vasya';
// var_dump($user->getRole());
$users = User::getAllUsers();
var_dump($users);
