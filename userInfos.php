<?php
//$ageUser = $_POST["userAge"];
echo("<html>
<h4>USER</h4><br>
<a href='Users.html'><button type='submut'>Retour</button></a>
</html>");
extract($_POST);
if(is_numeric($userAge)){
	if($userAge<=0 || $userAge>100){
		echo("L'age ne peut etre ni inf�rieure � 0 ni sup�rieure � 100");
	}else{
	if($userAge>0 || $userAge<=100 ){
		if($userAge<18){
			echo("Bienvenue"." ".$userName." "."Vous etes ag� de"." ".$userAge." "."ans"." "."Donc vous etes mineur");
		}else if($userAge>=18){
			echo("Bienvenue"." ".$userName." "."Vous etes ag� de"." ".$userAge." "."ans"." "."Donc vous etes majeur");
		}
	}
}
}
else{
	echo("<center><h1>Veuillez saisir une valeur correcte au niveau du champs age s'il vous plait</h1></center>");

}
?>