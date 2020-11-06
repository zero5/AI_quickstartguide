<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Auth test application</title>
    <meta name="description" content="AI testing">
    <link href="style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					<small>Test form-based authentication</small>
				</h1>
			</div>
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link active" href="index.php">Home</a>
				</li
				<li class="nav-item">
					<a class="nav-link" href="open.php">Open page</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Log out</a>
				</li>
			</ul>
			<div class="jumbotron">
				<h2>
					Authorized users only
				</h2>
				<p>
					You can view this page after authorization only. <br />
					Next block contains Reflected XSS vulnerability. <br />
					GET-parameter 'name' and GET-parameter 'text' will be printed to the page.
				</p>
				<?php
	session_start();
	
	if (!isset($_SESSION['login'])) 
	{		
		echo "<h4>Authorization required</h4>";
		echo 'Go to <a href="login.php">Login</a> page';
	} 
	else  
	{	
		echo "<div>";
		echo "<p><h3>Welcome,  " . htmlspecialchars($_SESSION["login"]) . "!</h3>";
		if (isset($_GET["name"])) echo $_GET["name"] ."</p>";
		if (isset($_GET["text"])) echo "<br />Text: " . $_GET["text"];
		echo '
		<form action="index.php" method="GET">
			<label>Text:</label> <input name="text" type="text" size="15" /> <input type="submit" value="Send"><br/><br/>
		</form>
		</div>
		';
	}
?>
			</div>
		</div>
	</div>
</div>
  </body>
</html>