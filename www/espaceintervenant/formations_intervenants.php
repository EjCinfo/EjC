<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42906120-1', 'auto');
  ga('send', 'pageview');
</script>
<?php
// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');
?>

	<!-- META DATA -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="UTF-8">
	<title>ENSAI junior Consultant</title>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="author" content=""/>
        <meta name="theme-color" content="#1e90ff">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="../faviconne.ico" type="image/x-icon">

	<!-- GOOGLE WEB FONTS INCLUDE -->
	<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans:400,600' rel='stylesheet' type='text/css'>

	<!-- JARVIS THEME STYLESHEETS -->

	<link rel="stylesheet" href="../css/skeleton.css" type="text/css">
	<link rel="stylesheet" href="../css/reset.css" type="text/css">
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link rel="stylesheet" href="../css/social.css" type="text/css">
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css">
	<link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" media="screen"/><!-- PrettyPhoto -->
	<link rel="stylesheet" href="../css/font-awesome.css" type="text/css"/><!-- PrettyPhoto -->
	<link rel="stylesheet" href="../css/shortcodes.css" type="text/css"/>
	<link rel="stylesheet" href="../css/media.css"><!-- Media Queries -->


 	<link id="layout_color" href="../css/light.css" rel="stylesheet" type="text/css"/>
        <link id="primary_color_scheme" href="../css/colors/dodgerBlue.css" rel="stylesheet" type="text/css"/>

    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body class="onepage" data-spy="scroll" data-target=".navigation">
    <!-- <div id="load"></div> -->

    <!-- START PAGE WRAP -->
    <div class="page-wrap">


  	<!-- START HOME SECTION -->
  	<div id="home" class="home-parallax">
        <div class="home-text-wrapper" style="min-height:0px;"> <!-- ajout de style="min-height:0px;" à cause du pb d'affichage image sous ie (cf mail L.DiCarlo)alors que par défaut style="min-height:6000px;" -->
            <div class="container clearfix">
                <div class="home-quote">
  	           <center> <img src="../images/logoEJCblanc.png" alt="logoEJC" width=50% height=auto  class="slabtext flotte img">
  		   <h1>
                      <span class="slabtext second-child">"Révélez le potentiel de vos données"</span>
  		      <span class="slabtext tree-child">ENSAI junior Consultant, Junior-Entreprise de l'ENSAI</span>
                  </h1>
                </div>
             </div><!-- END CONTAINER -->
          </div><!-- END HOME TEXT WRAPPER -->
       </div><!-- END HOME SECTION -->

    <!-- START NAVIGATION -->
    <nav class="light sticky-nav navigation">
     <!-- START CONTAINER -->
      <div class="container clearfix">
          <div class="four columns">
              <!-- START LOGO -->
              <div class="logo large" style="width:130px">
               <a href="../index.php"><img src="../images/logo_top2.png" title="logo" alt="Logo"/></a>
              </div>
              <!-- END LOGO -->
          </div><!-- END FOUR COLUMNS -->

          <div class="twelve columns">
              <!-- START NAVIGATION MENU ITEMS -->
              <ul class="main-menu large nav" id="nav">
                  <li><a href="../index.php">Retour à l'accueil</a></li>
              </ul>
              <!-- END NAVIGATION MENU ITEMS -->
          </div><!-- END TWELVE COLUMNS -->
      </div><!-- END CONTAINER -->
    </nav>
    <!-- END NAVIGATION -->

    <div class="container">
      <div class="row">
	<div class="sixteen columns">
	   <!-- START TITLE -->
	   <div class="title">
	   </br> </br>
	      <h1>Espace intervenant</h1>
                <div class="subtitle subtitle1"> <br />
                <p>Bienvenue dans l'espace intervenant d'ENSAI <em>junior</em> Consultant. Cet espace est dédié aux intervenants de la <span class="highlight">Junior Entreprise</span>.</p>
<?php
  try
  {
  	// On se connecte à MySQL
  	$pdo = new PDO('mysql:host=ejc9wsmcespinter.mysql.db;dbname=ejc9wsmcespinter;charset=utf8', 'ejc9wsmcespinter', 'mdpEJCs3cur3');
  }
  catch(Exception $e)
  {
  	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
  }
  $requete = "SELECT * FROM intervenant WHERE identifiant = ?";
  $reponse = $pdo->prepare($requete);
  $reponse->execute(array($_POST['identifiant']));
  $enregistrements = $reponse->fetchAll();
  $nombreReponses = count($enregistrements);
  // La personne est inscrite (on considère qu'un email peut être utilisé par un utilisateur uniquement)
  if ($nombreReponses > 0)
  {
    // On vérifie que c'est le bon mot de passe
    if ($enregistrements[0]['motdepasse'] == $_POST['motdepasse'])
    {
    ?>
      <!--<p>Vous êtes bien connecté</p>-->
    <?php
    } else { ?>
      <p>Le mot de passe est incorrect.</p>
  <?php
    }
  } else // La personne n'est pas inscrite
  { ?>
    <p>Vous n'êtes pas inscrit dans nos fichiers, cet espace n'est donc pas accessible.</p>
  <?php
  }
  ?>
            </div><!-- END SUBTITLE -->
        </div><!-- END TITLE -->
      </div><!-- END SIXTEEN COLUMNS -->
    </div><!-- END ROW -->
  </div><!-- END CONTAINER -->
     

        <?php
        if ($nombreReponses > 0)
        {
           // On vérifie que c'est le bon mot de passe
           if ($enregistrements[0]['motdepasse'] == $_POST['motdepasse'])
           { ?>
              <div class="container">
                <div class="row">
                  <div class="sixteen columns" style="display:inline-block;">

                      <div class='team-member' style="padding-right:1px;">
                        <div class='team-thumb img-wrp'>
                        <img src="images/cadre_legal_reglementaire.png" alt='logo'>
                        <div class='team-overlay'>
                          <div class='img-overlay'></div>
                          <div class='overlay-content'>
                            <p>Cadre Légal & Réglementaire</p> <!-- SOUS TITRE -->
		            <p><a href="formations/[2022-03-17] Cadre Légal & Réglementaire.pdf" class='modal-popup-link view-profile' target="_blank">Lire</a></p>
			  </div>
		        </div>
                      </div>
                    </div>

                    <div class='team-member' style="padding-right:1px;">
                        <div class='team-thumb img-wrp'>
                        <img src="images/linkedin.png" alt='logo'>
                        <div class='team-overlay'>
                          <div class='img-overlay'></div>
                          <div class='overlay-content'>
                            <p>Faire de LinkedIn votre meilleur allié</p> <!-- SOUS TITRE -->
		            <p><a href="formations/[2021-11-02] Faire de LinkedIn votre meilleur allié.pdf" class='modal-popup-link view-profile' target="_blank">Lire</a></p>
			  </div>
		        </div>
                      </div>
                    </div>

                    <div class='team-member'>
                        <div class='team-thumb img-wrp'>
                        <img src="images/comprendre_suivi_etudes.png" alt='logo'>
                        <div class='team-overlay'>
                          <div class='img-overlay'></div>
                          <div class='overlay-content'>
                            <p>Comprendre le suivi d'études</p> <!-- SOUS TITRE -->
		            <p><a href="formations/[2022-03-17] Comprendre le suivi d'études.pdf" class='modal-popup-link view-profile' target="_blank">Lire</a></p>
			  </div>
		        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
           <?php
           } 
         } ?> 

     </div>


     <!-- JARVIS THEME SCRIPTS -->
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
     <!--<script type="text/javascript" src="../js/jquery.tweet.js"></script>-->
     <script type="text/javascript" src="../js/jquery.form.js"></script>
     <script type="text/javascript" src="../js/jquery.queryloader2.js"></script>
     <script type="text/javascript" src="../js/modernizr-2.6.2.min.js"></script>
     <script type="text/javascript" src="../js/jquery.fitvids.js"></script>
     <script type="text/javascript" src="../js/jquery.appear.js"></script>
     <script type="text/javascript" src="../js/jquery.slabtext.min.js"></script>
     <script type="text/javascript" src="../js/jquery.fittext.js"></script>
     <script type="text/javascript" src="../js/jquery.easing.min.js"></script>
     <script type="text/javascript" src="../js/jquery.parallax-1.1.3.js"></script>
     <script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>
     <script type="text/javascript" src="../js/jquery.sticky.js"></script>
     <script type="text/javascript" src="../js/selectnav.min.js"></script>
     <script type="text/javascript" src="../js/SmoothScroll.js"></script>
     <script type="text/javascript" src="../js/jquery.flexslider-min.js"></script>
     <script type="text/javascript" src="../js/isotope.js"></script>
     <script type="text/javascript" src="../js/bootstrap-modal.js"></script>
     <script type="text/javascript" src="../js/shortcodes.js"></script>
     <script type="text/javascript" src="../js/scripts.js"></script>

 </body>

 </html>
								