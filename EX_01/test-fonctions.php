<?php
$nom_produit='T-shirt femme';
$couleur='Rouge';
$prix=15.50;
$disponible='true';
$quantité=10;
$nb_ajout=5;
$nb_achat=5;
include("affichage.php");
include("gestion-produit.php");

$disponible=update_dispo($quantité);
afficher_produit($nom_produit,$couleur,$prix,$disponible);
$nb_achat=achat($quantité,$nb_achat);

$disponible=update_dispo($quantité);
afficher_produit($nom_produit,$couleur,$prix,$disponible);
$nb_ajout=restockage($quantité,$nb_ajout);

$disponible=update_dispo($quantité);
afficher_produit($nom_produit,$couleur);

afficher_produit($nom_produit,$couleur,$prix,$disponible);

?>