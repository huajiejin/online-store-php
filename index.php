<?php
ini_set("display_errors", "1");
session_start();

$_SESSION['apples'] = empty($_SESSION['apples']) ? 0 : $_SESSION['apples'];
$_SESSION['oranges'] = empty($_SESSION['oranges']) ? 0 : $_SESSION['oranges'];

$apples = $_SESSION['apples'];
$oranges = $_SESSION['oranges'];

if (isset($_GET["apples"])) {
	$apples = $_GET["apples"];
	$_SESSION['apples'] = $_GET["apples"];
}
if (isset($_GET["oranges"])) {
	$oranges = $_GET["oranges"];
	$_SESSION['oranges'] = $_GET["oranges"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page 1 - Assignment 2</title>
	<link rel="stylesheet" type="text/css" href="./normalize.css">
	<link rel="stylesheet" type="text/css" href="./shared.css">
</head>
<body>
	<header>
		<h1>Welcome to Online Store - Page 1</h1>
	</header>
	<main>
		<section class="pd-20">
			<h3>Please select products</h3>
			<ul>
				<li>
					<span>Apples</span>
					<span>$1/kg</span>
					<button><a href="index.php?apples=<?php echo $apples+1 ?>">Add to Cart</a></button>
				</li>
				<li>
					<span>Oranges</span>
					<span>$2/kg</span>
					<button><a href="index.php?oranges=<?php echo $oranges+1 ?>">Add to Cart</a></button>
				</li>
			</ul>
		</section>
		<section class="pd-20">
			<h3>Cart</h3>
			<ul id="cart-item-list">
				<li>Apples, Total Weight <?php echo $apples ?>kg, Price $<?php echo $apples * 1?></li>
				<li>Oranges, Total Weight <?php echo $oranges ?>kg, Price $<?php echo $oranges * 2?></li>
			</ul>
			<button><a href="index.php?apples=0&oranges=0">Clear the Cart</a></button>
		</section>
		<section class="pd-20">
			<a href="./page2-form.php">Next Step</a>
		</section>
	</main>
	<footer class="bg-6 color-1">&copy; Copyright 2022 Jay Huajie Jin - 8819478, Ravali krishna - 8826296</footer>
</body>
</html>