<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	<title>FUMSECK.com</title>
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		

		<div class="single-book">
		<h3>Vous voulez mettre un place une authentification radius dans un point d’accès avec windows server, j'ai ce qu'il vous faut.
</h3>
		<p>
		RADIUS (Remote AuthenticationDial-In User Service) est un protocole client_serveur permettant 
		 de centraliser des données d’authentification. Le fonctionnement du service RADIUS est basé 
		 sur un système client/serveur qui va avoir pour rôle de définir  les accès d’utilisateurs distants 
		à un réseau.
</p>	
					<a href="../cours/radius.pdf" class="single-book__img">
					<h4 class="single-book__title">Télécharger</h4>					
					</a>
					
		</div>

<p>----------------------------------------------------------------------------------------------------------------------------------------</p>
		
		<div class="single-book">
		<h3>Vous voulez mettre un place un serveur web sécurisé avec Nginx.
</h3>
		<p>
		   Nginx est l’un des serveurs web les plus populaires au monde, il est aussi
		responsable d’héberger certains des sites les plus gros et les plus visités d’internet.
		Dans la plupart des cas, il utilise moins de ressources qu’Apache et peut être utilisé
		en tant que serveur web ou proxy inverse.

</p>	
					<a href="../cours/nginx.pdf" class="single-book__img">
					<h4 class="single-book__title">Télécharger</h4>					
					</a>
					
		</div>
<p>----------------------------------------------------------------------------------------------------------------------------------------</p>
<div class="single-book">
		<h3>PROJET SYMFONY
</h3>
<p>
		   Symfony est l'un des framework php les plus populaires au monde , il permet de créer des sites web et application web.</p>
	
					<a href="../cours/TP1.pdf" class="single-book__img">
					<h4 class="single-book__title">Partie 1</h4>					
					</a>
					<a href="../cours/TP2.pdf" class="single-book__img">
					<h4 class="single-book__title">Partie 2</h4>					
					</a>
					<a href="../cours/TP3.pdf" class="single-book__img">
					<h4 class="single-book__title">Partie 3</h4>					
					</a>
					<a href="../cours/TP4.pdf" class="single-book__img">
					<h4 class="single-book__title">Partie 4</h4>					
					</a>
					<a href="../cours/TP5.pdf" class="single-book__img">
					<h4 class="single-book__title">Partie 5</h4>					
					</a>
					<a href="../cours/TP6.pdf" class="single-book__img">
					<h4 class="single-book__title">Partie 6</h4>					
					</a>
					<a href="../cours/TP7.pdf" class="single-book__img">
					<h4 class="single-book__title">Partie 7</h4>					
					</a>
					<a href="../cours/TP8.pdf" class="single-book__img">
					<h4 class="single-book__title">Partie 8</h4>					
					</a>
					<a href="../cours/TP9.pdf" class="single-book__img">
					<h4 class="single-book__title">Partie 9</h4>					
					</a>

					
		</div>
<p>----------------------------------------------------------------------------------------------------------------------------------------</p>
<div class="single-book">
		<h3>PROJET JAVASCRIPT
</h3>
	
					<a href="../cours/TP JS.pdf" class="single-book__img">
					<h4 class="single-book__title">Projet 1</h4>					
					</a>
					
					
		</div>
<p>----------------------------------------------------------------------------------------------------------------------------------------</p>		
<div class="single-book">
		<h3>Les Cours PHP
</h3>
	
					<a href="../cours/PHP.pdf" class="single-book__img">
					<h4 class="single-book__title">Cour1</h4>					
					</a>
					<a href="../cours/PHP1.pdf" class="single-book__img">
					<h4 class="single-book__title">Cour2</h4>					
					</a>
					<a href="../cours/PHP MYSQL.pdf" class="single-book__img">
					<h4 class="single-book__title">Cour3</h4>					
					</a>
					<a href="../cours/poo php.pdf" class="single-book__img">
					<h4 class="single-book__title">Cour4</h4>					
					</a>
					
		</div>
<p>----------------------------------------------------------------------------------------------------------------------------------------</p>
<div class="single-book">
		<h3>Les Cours SYMFONY
</h3>
	
					<a href="../cours/PHP NEW COUR.pdf" class="single-book__img">
					<h4 class="single-book__title">Cour1</h4>					
					</a>
					<a href="../cours/PHP NEW COUR (2).pdf" class="single-book__img">
					<h4 class="single-book__title">Cour2</h4>					
					</a>
					<a href="../cours/symfony.pdf" class="single-book__img">
					<h4 class="single-book__title">Cour3</h4>					
					</a>
					<a href="../cours/poo php.pdf" class="single-book__img">
					<h4 class="single-book__title">Cour4</h4>					
					</a>
					
		</div>
<p>----------------------------------------------------------------------------------------------------------------------------------------</p>
<div class="single-book">
		<h3>Les Cours JAVASCRIPT
</h3>
	
					<a href="../cours/Cours JS.pdf" class="single-book__img">
					<h4 class="single-book__title">Cour1</h4>					
					</a>
					
					
		</div>
<p>----------------------------------------------------------------------------------------------------------------------------------------</p>		

		<a href="logout.php">Déconnexion</a>
		</div>
	</body>
</html>