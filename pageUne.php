<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/pageUne.css" rel="stylesheet">
    <title>Cinéma</title>
</head>

<body>
    <form method="GET" action="pageUne.php">
        <header id="header1">
            <div id="search">
                <input type="text" name="titre" placeholder="Rechercher un film" id="searchBarre">
                <input type="submit" value="Rechercher" name="submit" class="buttonRechercher">
            </div>
            <a class="linkMemberPage" href="pageDeux.php"><span><img id="iconMember" src="assets/iconsconnexion.png" alt="icons"></span>CONNEXION</a>
            <p id="logo">MY<br>CINEMA<br>PROJECT</p>
        </header>
        <h1 id="title">Bienvenue sur My Cinema</h1>
        <div id="button">
            <select name="genre" class="genre">
                <option hidden selected value="genre">Genres de films</option>
                <?php include("distributeur-genre/genre.php"); ?>
            </select>
            <select name="distributeur" class="distributeur">
                <option value="distributeur" hidden selected>Distributeurs de films</option>
                <?php include("distributeur-genre/distributeur.php"); ?>
            </select>
        </div>
        <table class="filmCss">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Date d'affiche</th>
                    <th>Durée du film</th>
                    <th>Genre</th>
                    <th>Distributeur</th>
                    <th>Synopsis et détails</th>
                </tr>
            </thead>
            <?php include("prenom-nom-recherche/recherche.php"); ?>
        </table>
</body>

</html>