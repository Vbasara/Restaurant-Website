<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Eden of the Rock Menu</TITLE>
<META charset="UTF-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="css//Estyle.css" />
</HEAD>
<BODY>

		<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="logo.png">
				<ul>
					
					
				<li><a href="index.php">Home</a></li>
                <li><a href="loginForm.php">Login</a></li>
                <li><a href="Eden_menu.php">Menu</a></li>
				<li><a href="payment_portal.php">Cart</a></li>
                <li><a href="#services">Blogs</a></li>
				<li><a href="admin_entr.php"> Admin Login</a></li>
				<ul/>
			</nav>


			

			<div class="center">
				<h1> Eden of the Rock: </h1>
				<h2> Menu</h2>

					<div class="container">
						<form method="post" action="search.php" >
							<input name="searchField" type="text" placeholder="Search the Menu" >
							<button name="searchButton" type="submit" value="search">Search</button>
						</form>
					</div>
					<br><br>
					<div class="scroll">
					</div> 
			</div>
				
<?php
include_once('dbinc.php');
$link = new mysqli($dbhost,$dbuser,$dbpassword,$dbname); 

if ($link->connect_error) {
	print "There was a problem connecting to the database.<BR />";
	print $link->connect_errno.": {$link->connect_error}";
} else {
	print "Database connection established.<BR />";
	
	
	//$link->close();
	
}
?>
</BODY>
</HTML>
