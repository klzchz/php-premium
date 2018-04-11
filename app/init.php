<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:host=127.0.0.1;dbname=premium','root','');

$userQuery = $db->prepare("
		SELECT id, username,email, premium 
		FROM users
		WHERE id = :user_id
	");

$userQuery->execute(['user_id' =>$_SESSION['user_id']]);

$user =  $userQuery->fetchObject();



