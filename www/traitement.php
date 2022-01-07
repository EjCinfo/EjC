<?php

/* Definition des variables utiles à l'envoi du mail */
$adresse = (isset($_REQUEST['Adresse'])) ? $_POST['Adresse']:'';
$nom = (isset($_POST['Nom'])) ? $_POST['Nom']:'';
$mail = (isset($_POST['Mail'])) ? $_POST['Mail']:''; 
$sujet = (isset($_POST['Sujet'])) ? $_POST['Sujet']:'';
$tel = (isset($_POST['Telephone'])) ? $_POST['Telephone']:'';
$message = "$mail";

/* tester si on peut envoyer l'email */
$test = isset($_REQUEST['Adresse']) AND isset($_POST['Nom']) AND isset($_POST['Mail']);

/* tester sur le mail est correct */
/* tester si les champ ne comporte pas d'injections sql (ou bail dégueu) */

if ($test) {
     /* Envoi de l'e-mail */
     mail("contact@ejc.fr","Contact de $nom , $adresse , $tel via le site",$sujet, $message,"Mail envoyé par $nom que l'on peut recontacter via $adresse");
     header('Location: merci.html'); 
} else {
     /* Message d'erreur */
     /* Pas besoin de gérer une façon propre pour l'utilisateur de retomber sur ces pattes. Le vérification en php sont là pour éviter que l'utilisateur fasse n'importe quoi et non pour le guider dans le remplissage du formulaire.*/
     /* Pour guider l'utilisateur lors du remplissage du formulaire, on privilégiera du ajaw */
     echo "<script type='text/javascript'>alert('Le mail n\'a pas été envoyé');</script>";
}

  
?>