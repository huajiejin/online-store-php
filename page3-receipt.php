<?php
ini_set("display_errors", "1");
session_start();

$_SESSION['apples'] = $apples = empty($_SESSION['apples']) ? 0 : $_SESSION['apples'];
$_SESSION['oranges'] = $oranges = empty($_SESSION['oranges']) ? 0 : $_SESSION['oranges'];
$_SESSION['name'] = $name = empty($_SESSION['name']) ? "" : $_SESSION['name'];
$_SESSION['phone'] = $phone = empty($_SESSION['phone']) ? "" : $_SESSION['phone'];
$_SESSION['postcode'] = $postcode = empty($_SESSION['postcode']) ? "" : $_SESSION['postcode'];
$_SESSION['address'] = $address = empty($_SESSION['address']) ? "" : $_SESSION['address'];
$_SESSION['city'] = $city = empty($_SESSION['city']) ? "" : $_SESSION['city'];
$_SESSION['province'] = $province = empty($_SESSION['province']) ? "" : $_SESSION['province'];
$_SESSION['creditCard'] = $creditCard = empty($_SESSION['creditCard']) ? "" : $_SESSION['creditCard'];
$_SESSION['creditCardExpiryMonth'] = $creditCardExpiryMonth = empty($_SESSION['creditCardExpiryMonth']) ? "" : $_SESSION['creditCardExpiryMonth'];
$_SESSION['creditCardExpiryYear'] = $creditCardExpiryYear = empty($_SESSION['creditCardExpiryYear']) ? "" : $_SESSION['creditCardExpiryYear'];
$_SESSION['email'] = $email = empty($_SESSION['email']) ? "" : $_SESSION['email'];
$_SESSION['password'] = $password = empty($_SESSION['password']) ? "" : $_SESSION['password'];
$_SESSION['confirmPassword'] = $confirmPassword = empty($_SESSION['confirmPassword']) ? "" : $_SESSION['confirmPassword'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page 3 - Assignment 2</title>
	<link rel="stylesheet" type="text/css" href="./normalize.css">
	<link rel="stylesheet" type="text/css" href="./shared.css">
</head>
<body>
	<header>
		<h1>Welcome to Online Store - Page 3</h1>
		<section>
			<a href="./index.php">Back to Page 1</a>
			<a href="./page2-form.php">Back to Page 2</a>
		</section>
	</header>
	<main>
		<section class="pd-20">
			<h3>Receipt</h3>
			<section>
				<!-- TODO: Calculate and dispaly the receipt -->
				<p>Total Price Before Tax: $${totalPrice.toFixed(2)}</p>
				<p>The province: ${province}</p>
				<p>The tax rate: ${taxRate * 100}%</p>
				<p>Total Price After Tax: $${totalPriceAfterTax.toFixed(2)}</p>

				<h4>Form Data From Page 2</h4>
				<p>name: Hello</p>
				<p>phone: 1</p>
				<p>postcode: 12</p>
				<p>address: 12</p>
				<p>city: 12</p>
				<p>province: asdf</p>
				<p>creditCard: 1234123443214321</p>
				<p>creditCardExpiryMonth: SEP</p>
				<p>creditCardExpiryYear: 2000</p>
				<p>email: gf565@gmail.com</p>
				<p>password: 1234</p>
				<p>confirmPassword: 1234</p>
			</section>
			<!-- TODO: Display error message under proper condition -->
			<section class="error-message">the minimum purchase should not be less than $10.</section>
		</section>
	</main>
	<footer class="bg-6 color-1">&copy; Copyright 2022 Jay Huajie Jin - 8819478, Ravali krishna - 8826296</footer>
</body>
</html>
