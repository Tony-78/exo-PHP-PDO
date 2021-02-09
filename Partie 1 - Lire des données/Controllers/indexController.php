<?php

require "Models/Database.php";
require "Models/Client.php";
require "Models/ShowType.php";
require "Models/Show.php";

$client = new Client();
$showType = new ShowType();
$show = new Show();


// Afficher tous les clients.
// var_dump($client->displayClients());

// Afficher tous les types de spectacles possibles.
// var_dump($showType->displayShowTypes());

// Afficher les 20 premiers clients.
// var_dump($client->displayFirst20Clients());

// N'afficher que les clients possédant une carte de fidélité.
// var_dump($client->displayClientsWithCard());

// Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Trier les noms par ordre alphabétique.
$resultQueryAllClientsLastnamestartsWithM = $client->displayAllClientsLastnameStartsWithM();

// Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.
$resultQueryAllShows = $show->displayShows();

// Afficher tous les clients.
$resultQueryAllClients = $client->displayAllClients();