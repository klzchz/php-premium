<?php

require_once 'app/init.php';

if (isset($_POST['stripeToken']))
{

	$token = $_POST['stripeToken'];


	try {
	\Stripe\Charge::create([
	  "amount" => 2000,
	  "currency" => "BRL",
	  "source" => "tok_amex", // obtained with Stripe.js
	  "description"=>$user->email,
	  "metadata" => array("order_id" => "6735")
	]);


	$db->query("
		UPDATE users
		SET premium = 1
		WHERE id = {$user->id}
		");
		
	} catch (Stripe_CardError $e) {
		
	}

	header("Location: index.php");
}