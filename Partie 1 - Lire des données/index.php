<?php
require "Controllers/indexController.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PDO POO</title>
</head>
<body>
    
<h1>Exercice 5</h1>
<p>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
Trier les noms par ordre alphabétique.</p>

<?php
foreach ($resultQueryAllClientsLastnamestartsWithM as $value) {
?>
    <div>
        <p><b>Nom :</b> <em><?= $value["lastName"] ?></em></p>
        <p><b>Prénom:</b> <em><?= $value["firstName"] ?></em><br><br></p>
    </div>
<?php
}
?>



<h1>Exercice 6</h1>
<p>Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.</p>

<?php
foreach ($resultQueryAllShows as $value) {
?>
    <div>
        <p><b>Spectacle : </b> <em><?= $value["title"] ?></em> / <b>Artiste : </b><em><?= $value["performer"] ?></em></p>
        <p><b>Date : </b> <em><?= $value["date"] ?></em> / <b>Heure : </b><em><?= $value["startTime"] ?></em><br><br></p>
    </div>
<?php
}
?> 



<h1>Exercice 7</h1>
<p>Afficher tous les clients.</p>

<?php
foreach ($resultQueryAllClients as $value) {
?>
    <div>
        <p><b>Nom :</b> <em><?= $value["lastName"] ?></em></p>
        <p><b>Prénom:</b> <em><?= $value["firstName"] ?></em></p>
        <p><b>Date de naissance :</b> <em><?= $value["birthDate"] ?></em></p>
        <p><b>Carte de fidélité:</b> <em><?= ($value["card"] > 0) ? "Oui" : "Non" ?></em></p>
        <p><b>Type de carte :</b> <em><?= ($value["card"] > 0) ? $value["type"] : "" ?></em></p>
        <p><b>Numéro de carte :</b> <em><?= ($value["card"] > 0) ? $value["cardNumber"] : "" ?></em><br><br></p>
    </div>
<?php
}
?>

</body>
</html>


