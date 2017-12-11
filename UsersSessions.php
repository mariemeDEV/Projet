<?php
session_start();
?>

<!DOCTYPE html>
	<html lang="fr">
		<meta charset="utf-8">
		<head>
			<title>Utilisateur</title>
		</head>
		<center>
		<body style="border:2px solid pink">
		<h1>Page pour la rediréction en fonction des autorisations</h1>
			<form method="POST" action="UsersSessions.php">
				<input type="text" name="login" placeholder="saisissez votre Login"/>
				<input type="password" name="pw" placeholder="saisissez votre Mot de passe"/>

				<select name="status">
					<option value="Admin">Admin</option>
					<option vaue="User">User</option>
				</select>

				<input type="submit" value="Valider" name="submit"/>


			</form>
			<?php
			extract($_POST);
			$conn_userOk=false;
			$conn_adminOk=false;
		
				if(isset($submit)){
		/*$_SESSION["Login_user"]="user";
        $_SESSION["password_user"]="user";
		$_SESSION["profil"];
        $_SESSION["Login_admin"]="admin";
		$_SESSION["password_admin"]="admin";*/
		
					if($login == $_SESSION["Login_user"] && $pw == $_SESSION["password_user"] && $status == "User"){
						$conn_userOk=true;
						//header('location:userPage.html');
					}else if($login == "admin" && $pw == "admin" && $status == "Admin"){
						$conn_adminOk=true;
						//header('location:adminPage.html');
					}else{
						echo("Identifiants erronés");
						header('location:UsersSessions.php');
					}

					if(	$conn_userOk==true){
						echo($login);
						echo($pw);
						header('location:userPage.html');
					}else if($conn_adminOk==true){
						echo($login);
						echo($pw);
						header('location:adminPage.html');
					}

				}
							
			?>
		</body>
		</center>
	</html>