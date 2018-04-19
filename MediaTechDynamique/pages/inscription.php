
<?php
//include 'menu.php';
session_start();
if(isset ($_POST['submit'])){
	
	
				$db=mysqli_connect('localhost', 'root', 'root', 'MediaTechDynamique');

				$nom = ($_POST['nom']);
				$prenom = ($_POST['prenom']);
				$adresse = ($_POST['adresse']);
				$telephone = ($_POST['telephone']);
				$email = ($_POST['email']);
				$password = ($_POST['password']);

				$sql="INSERT INTO utilisateur(nom, prenom, adresse, telephone, email, password) VALUES ('$nom', '$prenom', '$adresse', '$telephone', '$email', '$password')";
				mysqli_query($db, $sql);
				header ('location:../index.php') ;
					
				}
				

?>


<?php 
include 'menu.php';
?>

<!DOCTYPE html>
	<html>
		
		<link rel="stylesheet" type="text/css" href="../css/style.css">

		<style type="text/css">
		body {
			background-image: url(../img/fd.jpg);
		}
		</style>

		<head>
			
			<title>Acceuil</title>

		</head>

			<body >

				<center><h1><strong>INSCRIPTION</strong></h1></center>
						
						
						<center><form action="inscription.php" method="post">
							
							<input type="text" name="nom" value="" placeholder="Nom" id="" /><br>
							<input type="text" name="prenom" value="" placeholder="Prénom" id="" /><br>
							<input type="text" name="adresse" value="" placeholder="Adresse" id="" /><br>
							<input type="text" name="telephone" value="" placeholder="Téléphone" id="" /><br>
							<input type="text" name="email" value="" placeholder="Email" id="" /><br>
							<input type="password" name="password" value="" placeholder="Password" id="" /><br>
							<input type="submit" name="submit" value="INSCRIPTION" placeholder="" id="" /><br>
							

						</form></center>
						

						

			</body>

	</html>

			
















































