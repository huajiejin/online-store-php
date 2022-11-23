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

$TotalBeforeTax = 0;
$ProvinceTax = 0;
$TaxRate = 0;
$TotaLAfterTax = 0;
 
$TotalBeforeTax = $apples * 1 + $oranges * 2;
if ($province == "Alberta"){
	$TaxRate = 0.05;
}
else if ($province == "British Columbia"){
	$TaxRate = 0.12;
}
else if ($province == "Manitoba"){
	$TaxRate = 0.12;
}
else if ($province == "New Brunswick"){
	$TaxRate = 0.15;
}
else if ($province == "Newfoundland and Labrador"){
	$TaxRate = 0.15;
}
else if ($province == "Northwest Territories"){
	$TaxRate = 0.05;
}
else if ($province == "Nova Scotia"){
	$TaxRate = 0.15;
}
else if ($province == "Nunavut"){
	$TaxRate = 0.05;
}
else if ($province == "Ontario"){
	$TaxRate = 0.13;
}
else if ($province == "Prince Edward Island"){
	$TaxRate = 0.15;
}
else if ($province == "Quebec"){
	$TaxRate = 0.14;
}
else if ($province == "Saskatchewan"){
	$TaxRate = 0.11;
}
else if ($province == "Yukon"){
	$TaxRate = 0.05;
}

$ProvinceTax = $TaxRate * $TotalBeforeTax;

$TotaLAfterTax = $ProvinceTax + $TotalBeforeTax;

if ($TotalBeforeTax <10){

}
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
			<section class="<?php if($TotalBeforeTax <10) { echo 'hidden'; }?>">
				<!-- Calculate and dispaly the receipt -->
				<p>Total Price Before Tax: $<?php echo $TotalBeforeTax?></p>
				<p>The province: <?php echo $province?></p>
				<p>The tax rate: <?php echo $TaxRate?></p>
				<p>Total Price After Tax: $<?php echo $TotaLAfterTax?></p>

				<h4>Form Data From Page 2</h4>
				<p>name: <?php echo $name ?></p>
				<p>phone: <?php echo $phone ?></p>
				<p>postcode: <?php echo $postcode ?></p>
				<p>address: <?php echo $address ?></p>
				<p>city: <?php echo $city ?></p>
				<p>province: <?php echo $province ?></p>
				<p>creditCard: <?php echo $creditCard ?></p>
				<p>creditCardExpiryMonth: <?php echo $creditCardExpiryMonth ?></p>
				<p>creditCardExpiryYear: <?php echo $creditCardExpiryYear ?></p>
				<p>email: <?php echo $email ?></p>
				<p>password: <?php echo $password ?></p>
				<p>confirmPassword: <?php echo $confirmPassword ?></p>
			</section>
			<!-- Display error message under proper condition -->
			<section class="error-message"><?php if($TotalBeforeTax <10) { echo "the minimum purchase should not be less than $10."; }?></section>
		</section>
	</main>
	<footer class="bg-6 color-1">&copy; Copyright 2022 Jay Huajie Jin - 8819478, Ravali krishna - 8826296</footer>
</body>
</html>


