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
					Anonymous usage allowed
				</h2>
				<p>
					Next block contains Reflected XSS vulnerability without checking authorization. <br />
					GET-parameter 'name' and GET-parameter 'text' will be printed to the page.
				</p>
				<?php
						
					echo "<div>";
					if (isset($_GET["name"])) echo "<p>Name is  " . $_GET["name"] ."</p>";
					if (isset($_GET["text"])) echo "<br />Text: " . $_GET["text"];
					echo '
					<form action="open.php" method="GET">
			<label>Text:</label> <input name="text" type="text" size="15" /> <input type="submit" value="Send"><br/><br/>
					</form>
					</div>
					';
					
				?>
			</div>
		</div>
	</div>
</div>
  </body>
</html>