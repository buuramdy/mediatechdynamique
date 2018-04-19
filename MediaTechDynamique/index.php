<?php 


session_start();
if(isset ($_POST['submit'])){

	$db=mysqli_connect('localhost', 'root', 'root', 'MediaTechDynamique');

	$email = ($_POST['email']);
	$password = ($_POST['password']);

	$sql="SELECT * FROM utilisateur WHERE email='$email'AND password='$password'";
				mysqli_query($db, $sql);
				header ('location:pages/youtube.php') ;
					
				}
				
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body {
			background-image: url(img/fd.jpg);
		}
	</style>
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="index.php"><strong>ACCUEIL</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="pages/inscription.php"><strong>INSCRIPTION</strong><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><strong>VOTRE AVIS</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><strong>NOS VIDEOS</strong></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>	


	<center><h1><strong>CONNEXION</strong></h1></center>
						
						
						<center><form action="index.php" method="post">
							
							<input type="email" name="email" value="" placeholder="Email" id="" /><br>
							<input type="password" name="password" value="" placeholder="Password" id="" /><br>
							<input type="submit" name="submit" value="CONNEXION" placeholder="" id="" /><br>

						</form></center>

</body>
</html>
