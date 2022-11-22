<?php
ini_set("display_errors", "1");
session_start();

$name = isset($_SESSION["name"]) ? trim($_SESSION["name"]) : "";
$phone = isset($_SESSION["phone"]) ? trim($_SESSION["phone"]) : "";
$postcode = isset($_SESSION["postcode"]) ? trim($_SESSION["postcode"]) : "";
$address = isset($_SESSION["address"]) ? trim($_SESSION["address"]) : "";
$city = isset($_SESSION["city"]) ? trim($_SESSION["city"]) : "";
$province = isset($_SESSION["province"]) ? trim($_SESSION["province"]) : "";
$creditCard = isset($_SESSION["creditCard"]) ? trim($_SESSION["creditCard"]) : "";
$creditCardExpiryMonth = isset($_SESSION["creditCardExpiryMonth"]) ? strtoupper(trim($_SESSION["creditCardExpiryMonth"])) : "";
$creditCardExpiryYear = isset($_SESSION["creditCardExpiryYear"]) ? trim($_SESSION["creditCardExpiryYear"]) : "";
$email = isset($_SESSION["email"]) ? trim($_SESSION["email"]) : "";
$password = isset($_SESSION["password"]) ? trim($_SESSION["password"]) : "";
$confirmPassword = isset($_SESSION["confirmPassword"]) ? trim($_SESSION["confirmPassword"]) : "";

$_SESSION['name'] = $name = isset($_POST["name"]) ? trim($_POST["name"]) : $name;
$_SESSION['phone'] = $phone = isset($_POST["phone"]) ? trim($_POST["phone"]) : $phone;
$_SESSION['postcode'] = $postcode = isset($_POST["postcode"]) ? trim($_POST["postcode"]) : $postcode;
$_SESSION['address'] = $address = isset($_POST["address"]) ? trim($_POST["address"]) : $address;
$_SESSION['city'] = $city = isset($_POST["city"]) ? trim($_POST["city"]) : $city;
$_SESSION['province'] = $province = isset($_POST["province"]) ? trim($_POST["province"]) : $province;
$_SESSION['creditCard'] = $creditCard = isset($_POST["creditCard"]) ? trim($_POST["creditCard"]) : $creditCard;
$_SESSION['creditCardExpiryMonth'] = $creditCardExpiryMonth = isset($_POST["creditCardExpiryMonth"]) ? strtoupper(trim($_POST["creditCardExpiryMonth"])) : $creditCardExpiryMonth;
$_SESSION['creditCardExpiryYear'] = $creditCardExpiryYear = isset($_POST["creditCardExpiryYear"]) ? trim($_POST["creditCardExpiryYear"]) : $creditCardExpiryYear;
$_SESSION['email'] = $email = isset($_POST["email"]) ? trim($_POST["email"]) : $email;
$_SESSION['password'] = $password = isset($_POST["password"]) ? trim($_POST["password"]) : $password;
$_SESSION['confirmPassword'] = $confirmPassword = isset($_POST["confirmPassword"]) ? trim($_POST["confirmPassword"]) : $confirmPassword;

$nameInvalid = false;
$phoneInvalid = false;
$postcodeInvalid = false;
$addressInvalid = false;
$cityInvalid = false;
$provinceInvalid = false;
$creditCardInvalid = false;
$creditCardExpiryMonthInvalid = false;
$creditCardExpiryYearInvalid = false;
$emailInvalid = false;
$passwordInvalid = false;
$confirmPasswordInvalid = false;

if (isset($_POST['submit'])) {
	// Validate Mandatory fields
	$nameInvalid = empty($name);
	$phoneInvalid = empty($phone);
	$postcodeInvalid = empty($postcode);
	$addressInvalid = empty($address);
	$cityInvalid = empty($city);
	$provinceInvalid = empty($province);

	// Validate Fields with specific format
	$creditCardInvalid = !preg_match("/^\d{4}[\s-]?\d{4}[\s-]?\d{4}[\s-]?\d{4}$/", $creditCard);
	$creditCardExpiryMonthInvalid = !preg_match("/^JAN|FEB|MAR|APR|MAY|JUN|JUL|AUG|SEP|SEP|NOV|DEC$/", $creditCardExpiryMonth);
	$creditCardExpiryYearInvalid = !preg_match("/^\d{4}$/", $creditCardExpiryYear);
	$emailInvalid = !preg_match("/^[\w|\.]+@[\w|\.]+\.[\w|\.]+$/", $email);

	// Validate Password and Confirm Password
	$passwordInvalid = empty($password);
	$confirmPasswordInvalid = $password != $confirmPassword;
	
	$formInvalid = $nameInvalid || $phoneInvalid || $postcodeInvalid || $addressInvalid || $cityInvalid || $provinceInvalid || $creditCardInvalid || $creditCardExpiryMonthInvalid || $creditCardExpiryYearInvalid || $emailInvalid || $passwordInvalid || $confirmPasswordInvalid;

	if (!$formInvalid) {
		header("location: page3-receipt.php");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page 2 - Assignment 2</title>
	<link rel="stylesheet" type="text/css" href="./normalize.css">
	<link rel="stylesheet" type="text/css" href="./shared.css">
</head>
<body>
	<header>
		<h1>Welcome to Online Store - Page 2</h1>
		<section>
			<a href="./index.php">Back to Page 1</a>
		</section>
	</header>
	<main>
		<form action="page2-form.php" method="post" class="pd-20">
			<h3>Please provide your information</h3>
			<h4>Mandatory fields</h4>
			<section class="form-item">
				<span>Name</span>
				<input type="text" placeholder="Full Name" name="name" value="<?php echo $name ?>">
				<p class="error-message <?php echo $nameInvalid ? '' : 'hidden' ?>">Name is required</p>
			</section>
			<section class="form-item">
				<span>Phone</span>
				<input type="text" placeholder="(xxx) yyy-zzzz"  name="phone" value="<?php echo $phone ?>">
				<p class="error-message <?php echo $phoneInvalid ? '' : 'hidden' ?>">Phone is required</p>
			</section>
			<section class="form-item">
				<span>Postcode</span>
				<input type="text" placeholder="xxx yyy" name="postcode" value="<?php echo $postcode ?>">
				<p class="error-message <?php echo $postcodeInvalid ? '' : 'hidden' ?>">Postcode is required</p>
			</section>
			<section class="form-item">
				<span>Address</span>
				<input type="text" placeholder="Street" name="address" value="<?php echo $address ?>">
				<p class="error-message <?php echo $addressInvalid ? '' : 'hidden' ?>">Address is required</p>
			</section>
			<section class="form-item">
				<span>City</span>
				<input type="text" placeholder="City" name="city" value="<?php echo $city ?>">
				<p class="error-message <?php echo $cityInvalid ? '' : 'hidden' ?>">City is required</p>
			</section>
			<section class="form-item">
				<span>Province</span>
				<select name="province" value="<?php echo $province ?>">
					<option value="Alberta">Alberta</option>
					<option value="British Columbia">British Columbia</option>
					<option value="Manitoba">Manitoba</option>
					<option value="New Brunswick">New Brunswick</option>
					<option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
					<option value="Northwest Territories">Northwest Territories</option>
					<option value="Nova Scotia">Nova Scotia</option>
					<option value="Nunavut">Nunavut</option>
					<option value="Ontario">Ontario</option>
					<option value="Prince Edward Island">Prince Edward Island</option>
					<option value="Quebec">Quebec</option>
					<option value="Saskatchewan">Saskatchewan</option>
					<option value="Yukon">Yukon</option>
				</select>
				<p class="error-message <?php echo $provinceInvalid ? '' : 'hidden' ?>">Province is required</p>
			</section>
			<h4>Fields with specific format</h4>
			<section class="form-item">
				<span>Credit Card</span>
				<input type="text" placeholder="xxxx-xxxx-xxxx-xxxx" name="creditCard" value="<?php echo $creditCard ?>">
				<p class="error-message <?php echo $creditCardInvalid ? '' : 'hidden' ?>">Please check the format of Credit Card, Good cases: 1234-1234-4321-4321, 1234 1234 4321 4321, 1234123443214321</p>
			</section>
			<section class="form-item">
				<span>Credit Card Expiry Month</span>
				<input type="text" placeholder="MMM" name="creditCardExpiryMonth" value="<?php echo $creditCardExpiryMonth ?>">
				<p class="error-message <?php echo $creditCardExpiryMonthInvalid ? '' : 'hidden' ?>">Please check the format of Credit Card Expiry Month, Good cases: JAN, FEB, MAR, APR, MAY, JUN, JUL, AUG, SEP, SEP, NOV, DEC</p>
			</section>
			<section class="form-item">
				<span>Credit Card Expiry Year</span>
				<input type="text" placeholder="yyyy" name="creditCardExpiryYear" value="<?php echo $creditCardExpiryYear ?>">
				<p class="error-message <?php echo $creditCardExpiryYearInvalid ? '' : 'hidden' ?>">Please check the format of Credit Card Expiry Year, Good cases: 1990, 2000, 2022</p>
			</section>
			<section class="form-item">
				<span>Email</span>
				<input type="text" placeholder="x@y.z" name="email" value="<?php echo $email ?>">
				<p class="error-message <?php echo $emailInvalid ? '' : 'hidden' ?>">Please check the format of Email, Good cases: abc@gmail.com, abc123@cc.on.ca</p>
			</section>
			<h4>Password and Confirm Password</h4>
			<section class="form-item">
				<span>Password</span>
				<input type="password" placeholder="" name="password" value="<?php echo $password ?>">
				<p class="error-message <?php echo $passwordInvalid ? '' : 'hidden' ?>">Password is required</p>
			</section>
			<section class="form-item">
				<span>Confirm Password</span>
				<input type="password" placeholder="" name="confirmPassword" value="<?php echo $confirmPassword ?>">
				<p class="error-message <?php echo $confirmPasswordInvalid ? '' : 'hidden' ?>">Password and Confirm Password does not match</p>
			</section>
			<input type="submit" name="submit" value="Submit">
		</form>
	</main>
	<footer class="bg-6 color-1">&copy; Copyright 2022 Jay Huajie Jin - 8819478, Ravali krishna - 8826296</footer>
</body>
</html>
