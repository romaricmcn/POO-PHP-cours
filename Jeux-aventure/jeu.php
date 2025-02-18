<?php
require_once "Personnage.php";
require_once "Guerrier.php";
require_once "Magicien.php";
require_once "Voleur.php";
require_once "Epee.php";
// require_once "Arc.php";
// require_once "ProjectileMagique.php";

// Création des armes
$epee = new Epee(5, "Acier");
// $arc = new Arc(3, "Longbow");
// $projectile = new ProjectileMagique("Feu");

// Création des personnages
$guerrier = new Guerrier("Arthur", $epee, "Guerrier");
// $magicien = new Magicien("Merlin", $projectile, 3);
// $voleur = new Voleur("Robin", $arc, "Voleur");

// Affichage des personnages
$guerrier->afficher();
// $magicien->afficher();
// $voleur->afficher();

$guerrier->attaquer();