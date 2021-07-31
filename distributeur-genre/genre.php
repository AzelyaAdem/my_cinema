<?php
try {//Connexion à la base de donnée.
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=cinema', "root", "");
}
catch (Exception $var){//Déconnexion de la base de donnée.
    die ('Error: '.$var->getMessage());
}
//Requête préparées pour les genre de films ou par distributeur.
if(isset($_GET["genre"])){
$requete = $bdd->query("SELECT * FROM genre ORDER BY nom ASC");

while ($resultat = $requete->fetch()){
    echo "<option>" . $resultat['nom'] . "</option>";
} 
}