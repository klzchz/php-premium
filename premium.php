<?php
	require_once "app/init.php";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Premium</title>
</head>
<body>
	<p>You're about to go premium.</p>
	<form action="premium_charge.php" method="POST">
	  	<script
	    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	    data-key="pk_test_47e5sGTLuACySOXzhuIoI8fX"
	    data-amount="2000"
	    data-name="Demo Site"
	    data-description="Widget"
	    data-email="<?php echo $user->email; ?>"
	    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
	    data-currency="BRL"
	    data-locale="auto">
	  </script>
</form>

</body>
</html>