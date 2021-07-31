<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinéma</title>
</head>

<body>
    <form method="GET" action="pageDeux.php">
    <header>
            <div>
                <input type="text" name="nom" placeholder="Nom">
                <input type="submit" value="recherche" name="membre">       
            </div>
            <div>
                <input type="text" name="prenom" placeholder="Prenom">
                <input type="submit" value="recherche" name="membre">       
            </div>
            <a href="pageUne.php">FILM</a>
            <p>MY<br>CINEMA<br>PROJECT</p>
        </header>
        <div>
    <table>
            <thead>
                <tr>
                    <th>nom</th>
                    <th>date de naissance</th>
                    <th>email</th>
                    <th>code postal</th>
                    <th>ville</th>
                </tr>
            </thead>
            <?php include("prenom-nom-recherche/nom.php"); ?>
        </table>
        <table>
            <thead>
                <tr>
                    <th>prénom</th>
                    <th>date de naissance</th>
                    <th>email</th>
                    <th>code postal</th>
                    <th>ville</th>
                </tr>
            </thead>
            <?php include("prenom-nom-recherche/prenom.php"); ?>
        </table>
        </div>
    </form>
</body>
</html>