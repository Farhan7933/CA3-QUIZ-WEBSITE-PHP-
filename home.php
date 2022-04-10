<?php 
	session_start();
	include "connection.php";
	if (isset($_SESSION['id'])) {
	$query = "SELECT * FROM questions";
	$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
	$total = mysqli_num_rows($run);
	?>

	<html>
		<head>
			<title>CA3-Quiz-Website(PHP)</title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
		</head>

		<body>
			<header>
				<div class="container">
					<h1>CA3-Quiz-Website(PHP)</h1>
				</div>
			</header>

			<main>
				<div class="container">
					<h2>Welcome to CA3-Quiz-Website(PHP) !</h2>
					<p>This is a quiz website to test your basic knowledge of php.</p>
					<ul>
						<li><strong>Number of questions: </strong><?php echo $total; ?></li>
						<li><strong>Type: </strong>Multiple Choice</li>
						<li><strong>Estimated time : </strong><?php echo $total * 2; ?> minutes</li>
						<li><strong>Score: </strong>   &nbsp; +10 point for each correct answer</li>
					</ul>
					<a href="question.php?n=1" class="start">Start</a>
					<a href="exit.php" class="add">Exit</a>

				</div>
			</main>

			<footer>
				End...
			</footer>

		</body>
	</html>
	<?php unset($_SESSION['score']); ?>
	<?php }
	else {
		header("location: index.php");
	}
?>