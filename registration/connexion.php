<?php
//connexion à la bd
$servername="localhost";
$username="root";
$password="";
$bd="registration";
$link=mysqli_connect($servername,$username,$password,$bd);
if(mysqli_connect_error()){
    die("La connexion a échoué!!!!!");

}
//Récupération bd
$query="SELECT * from users";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "| Id:".$row['id']."| Utilisateur:".$row['username']."| Email:".$row['email']. "| Mot de passe:".$row['password']. "</br>";
    }
}

?>
