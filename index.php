<?php
	require_once "app/init.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Home</title>
</head>
<body>
	<?php if ($user->premium): ?>
		<p>You are Premium</p>
	<?php else: ?>
		<p>You are not Premium.<a href="premium.php">Go premium</a></p>
	<?php endif; ?>


</body>
</html>