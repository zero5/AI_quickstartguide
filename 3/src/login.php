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
					<a class="nav-link" href="open.php">Open</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Log out</a>
				</li>
			</ul>
			<div class="jumbotron">
				<h2>
					Login to view secured page
				</h2>
				<p>
					'Open' page can be accessed without authorization. 'Home' page contains the same form but secured by authorization.
				</p>
		<?php
			session_start();
			if (!isset($_SESSION['login'])) 
			{		
				if (!isset($_POST['login']) || !isset($_POST['password']))
				{
					echo '<form action="" method="post">
						<label>Login:</label><br/>
					  <input name="login" type="text" size="15" maxlength="15"><br/>
						<label>Password:</label><br/>
					  <input name="password" type="password" size="15" maxlength="15"><br/><br/>
					  <input type="submit" value="Submit"><br/><br/>
					</form>
					';
				}
				else
				{
					if ($_POST["login"] == "admin" && $_POST["password"] == "password")
					{
						$_SESSION['login'] = $_POST["login"];
						echo "<h3>Successfully authorized</h3>";
						echo '<br/><a href="index.php">To main page</a>';
					}
					else			
					{
						echo "Wrong login/password";
						echo '<br/><a href="login.php">Retry</a>';
					}
				}
			}
			else
			{
				echo "<h4>You're already successfully authorized</h4>";
				echo '<br/><a href="index.php">To main page</a>';				
			}
		?>
			</div>
		</div>
	</div>
</div>
  </body>
</html>

