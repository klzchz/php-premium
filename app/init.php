<?php

session_start();

//Composer autoload
require_once "vendor/autoload.php";

$_SESSION['user_id'] = 1;

$stripe =[
	'publishable'=>'pk_test_47e5sGTLuACySOXzhuIoI8fX',
	'private'=>'sk_test_2dxz0kE2w8Em9Fo2IZ1pHymE'
];

// Stripe::setApiKey($stripe['private']);

$db = new PDO('mysql:host=127.0.0.1;dbname=premium','root','');

$userQuery = $db->prepare("
		SELECT id, username,email, premium 
		FROM users
		WHERE id = :user_id
	");

$userQuery->execute(['user_id' =>$_SESSION['user_id']]);

$user =  $userQuery->fetchObject();



