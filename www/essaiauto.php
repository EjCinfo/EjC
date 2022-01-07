<?php
header('Content-Type: text/html; charset=utf-8');
$json_source = file_get_contents('http://www.ejc.fr/android/jarticle.html');
$json_data = json_decode($json_source, true);
$idArticle = array();
$titreArticle = array();
$urlArticle = array();
$urlImage = array();
$auteurArticle = array();

foreach($json_data as $v){
  $idArticle[] = $v['idArticle'];
  $titreArticle[$v['idArticle']] = $v['titre'];
  $urlArticle[$v['idArticle']] = $v['url'];
  $urlImage[$v['idArticle']] = $v['urlImage'];
  $auteurArticle[$v['idArticle']] = $v['auteur'];
}


?>

<html>
<head>
<meta name="author" content="Albert Einstein">

<title> On fait du PHP ! </title>

</head>
<body>


<hr>

<?php 
   echo "<h1> test 1 : afficher le titre et le numéro de l'article, et l'image </h1>";
   echo $idArticle[0];
   echo $titreArticle[$idArticle[0]]."</p>";
   echo "<img src=".$urlImage[$idArticle[0]]." height=100px>";
   echo "<hr>";
?>

<?php

echo "<h1> test 2 : afficher seulement les articles de 2018 </h1>";

foreach ($idArticle as $i => $value) {
    if(substr($idArticle[$i],0,2)=="18"){
       echo $titreArticle[$idArticle[$i]]."</p>";
    }
}

echo "<hr>";

?>

</p>

<?php

echo "<h1> test 3 : afficher le nom des 10 derniers articles </h1>";

$nbArticle = sizeof($idArticle);

for($i = $nbArticle-10; $i<$nbArticle ; $i++){
   echo $titreArticle[$idArticle[$i]]."</p>";  
}

echo "<hr>";

?>


</body>
</html>
