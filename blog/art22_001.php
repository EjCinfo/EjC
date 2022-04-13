﻿<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
<head>
	<!-- SCRIPT Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42906120-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<!-- FIN SCRIPT Google Analytics -->

	<!-- INITIALISATION DES VARIABLES PHP-->
	<?php
		//informations de base utilisées à plusieurs endroits (mise en forme, info google, info facebook)
		$titre = "Data & Médias";
		$sstitre = "Comment se servir des données pour comprendre les médias ?";
		$description = "";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2022/art22_001/miniaturebis.png";
		$num_arc = "22_001"; //AA_NNN
		$date_publ= mktime(0,0,0,1,13,2022); // heure minute seconde mois jour année


		//type de l'article: marquer 'video' ou 'images'
		$type = "images";

		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2022/art22_001/01.png");
		$arrayLabel = array(1 => "");

		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";

		//Auteur de l'article
		$booleanAuteur = false ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Gaëtan Carrère"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Gaëtan Carrère"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/gaetan.png"; //URL de la photo de l'auteur
		$mail_ejc = "gaetan.carrere@ejc.fr";

		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps= "<p>Lorsqu’on entend dans la même phrase les mots « data » et « médias », de très nombreuses
images nous apparaissent à l’esprit. On imagine des dizaines de terras de données utilisées par les
médias les plus influents afin de comprendre avec précision quel est leur public, pour leur proposer
le contenu le plus adapté et faire la plus grande audience possible. C’est en effet un aspect
particulièrement important de ce couple data-média et nous nous y intéresserons dans un prochain
article.</p>
		<p>Néanmoins, il est intéressant de prendre le sujet dans l’autre sens. La nature de la data peut
en effet être si différente que ce serait une erreur de ne pas considérer les données que l’on peut
extraire des médias eux-mêmes. Plusieurs preuves permettent de témoigner de cette possibilité de
production non seulement de « data », mais également de « big data ».</p>
		<ul>
			<li>Les supports multiples : presse, radio, télévision, pages internet, réseaux sociaux…</li>
			<li>Leur interconnexion : une publication facebook peut renvoyer à un article via un lien, tandis que tous les sites affichent leurs réseaux sociaux...</li>
			<li>Les sources variées : des sources professionnelles telles que Le Monde, Marianne, Le Figaro, Libération, l’Etudiant ou amatrices, par des blogs ou des comptes d’opinion</li>
			<li>Le nombre faramineux d’articles publiés chaque jour, la télévision et la radio en continu </li>
			<li>Et encore plein d’autres éléments !</li>
		</ul>
		<p>Tout cela semble impossible à quantifier, tant la production paraît immense. Utiliser des
mots tels que « beaucoup » n’est certainement pas très scientifique, et j’ai moi-même eu du mal à
rédiger cette petite introduction : il est tout bonnement impossible de comprendre et de saisir
l’ampleur des données qu’il est possible d’extraire des médias sans recourir à un travail de
statisticien. La formation dispensée à l’ENSAI offre ainsi les outils permettant de comprendre tout
cela.</p>
		<img src=\"src/2022/art22_001/02.png\" width=\"400\" height=\"150\"  />
		<p>De fait, je me suis penché sur un site en particulier, qui propose effectivement une analyse
des médias. Deux options sont disponibles. La première permet de vérifier la fiabilité d’un site, et
permet simplement en copiant-collant le lien de l’article de vérifier s’il provient d’un site de
confiance. La deuxième est un moteur de recherche, qui, à partir de quelques mots clés, permet de
trouver à la fois des éléments provenant de sources fiables, et de sources qui ne le sont pas.</p>
		<img src=\"src/2022/art22_001/03.png\" width=\"850\" height=\"307\"/>
		<p>Ainsi, de petites indications permettent de comprendre ce qui accorde à l’article cette place
dans les « Sources controversées » : complotisme, intolérance et piège à clic sont les arguments les
plus récurrents. Ce site permet ainsi au lecteur de travailler son esprit critique et l’aiguille dans le
choix des sources qui méritent sa confiance.
</p>
		<p>Si cet objectif d’honnêteté journalistique, de médias plus « justes » est tout à fait louable, ce
qui nous intéresse est plutôt la façon dont ces informations sont triées. En effet, s’il est évident que
le « tri » effectué par le site n’est pas parfait, il obéit tout de même à une méthodologie précise et à
des règles pré-établies. J’ai ainsi décidé de contacter le créateur du site, qui m’a permis de
comprendre comment tout cela fonctionnait.</p>
		<img src=\"src/2022/art22_001/04.png\" />";

// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');
	?>

	<!-- META DATA -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="UTF-8">
	<title>Blog d'EjC - <?php echo $titre ?></title>
	<!-- Description du site-->
	<meta name="description" content="<?php echo $description ?>"/>
	<!-- Mots clés pour la recherche-->
	<meta name="keywords" content="Ensai, junior, entreprise, junior-entreprise, JER, étude, big data, statistique, statistiques, stats, analyse, information, informatique, mathémathiques, maths"/>
	<meta name="author" content="<?php echo $auteur ?>"/>
        <meta name="theme-color" content="#1e90ff">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="shortcut icon" href="faviconne.ico" type="image/x-icon">
	<!-- PARTAGE RESEAUX SOCIAUX -->
	<meta property="og:title" content="Blog d'EjC - <?php echo $titre ?>"/>
	<meta property="og:description" content="<?php echo $description ?>"/>
	<meta property="og:image" content="<?php echo $urlimageaccueil ?>"/>
	<!-- GOOGLE WEB FONTS INCLUDE -->
	<link href='http://fonts.googleapis.com/css?family=Oswald|Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<!-- JARVIS THEME STYLESHEETS -->
	<link rel="stylesheet" href="css/skeleton.css" type="text/css">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/social.css" type="text/css">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/><!-- PrettyPhoto -->
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css"/><!-- PrettyPhoto -->
	<link rel="stylesheet" href="css/shortcodes.css" type="text/css"/>
	<link rel="stylesheet" href="css/media.css"><!-- Media Queries -->
	<link id="layout_color" href="css/light.css" rel="stylesheet" type="text/css"/>
	<link id="primary_color_scheme" href="css/colors/dodgerBlue.css" rel="stylesheet" type="text/css"/>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body class="multipage">
	<!-- START NAVIGATION -->
	<nav class="light sticky-nav">
		<!-- START CONTAINER -->
		<div class="container clearfix">
			<div class="four columns">
				<!-- START LOGO -->
				<div class="logo large" style="width:130px">
					<a href="http://www.ejc.fr/#home"><img src="images/logo_top2.png" title="logo" alt="Logo"/></a>
				</div>
				<!-- END LOGO -->
			</div><!-- END FOUR COLUMNS -->
			<div class="twelve columns">


				<!-- START NAVIGATION MENU ITEMS -->
				<ul class="main-menu large nav" id="nav">
				<?php
				echo $menu_source
  				?>
</ul>
				<!-- END NAVIGATION MENU ITEMS -->

			</div><!-- END TWELVE COLUMNS -->
		</div><!-- END CONTAINER -->
	</nav>
	<!-- END NAVIGATION -->


	<!-- DEBUT DE LA PAGE -->
	<div id="blog-single" class="page-wrap">
		<div class="page multipage">
			<div class="container">

				<!-- TITRE ET SOUS-TITRE DE L'ARTICLE -->
				<div class="twelve columns">
					<div class="title">
						<h3 style="color: #1E90FF;"> <?php echo $titre ?></h3>
						<h4 style="color: #1E90FF;"> <?php echo $sstitre ?></h4>
					</div>


				<div class="post">

					<!--CONTENU MULTIMEDIA-->

					<?php if ($type == "video"){

						echo "<iframe width=\"560\" height=\"315\" src=\"".$youtubeURL."\" frameborder=\"0\" allowfullscreen></iframe>";
					}elseif($type == "images"){

						echo "<div class=\"post-media\">
								<div class=\"flexslider\">
									<ul class=\"slides\">";
										for ($i = 1; $i <= count($arrayURL); $i++) {
											echo "<li>
													<img src=\"".$arrayURL[$i]."\" alt=\"portfolio slider\" />";
													/// grâce au php, on affiche la légende que sil y en a une
													if ($arrayLabel[$i] != ""){echo "<p class=\"flex-caption\">".$arrayLabel[$i]."</p>";}
											echo "</li>";
										}
						echo "
								</ul>
						  </div>
						</div>";

					}else{}

					?>



					<?php echo"<p align=\"right\" style=\"margin-bottom: 60px\">Mis en ligne le ".date("d/m/y",$date_publ)."</p>" ?>



					<!-- TEXTE EN DESSOUS DU CONTENU MULTIMEDIA-->
						<div class="post-content" style="font-size:125%;line-height: 180%;"><?php echo $corps ?></div>
				</div>

					<!-- SIGNATURE DE L'ARTICLE-->
					<div id="blog-author" class="clearfix">
						<h3 class="heading"><span>L'Auteur :</span></h3>
						<img src="<?php echo $imgAuteur ?>" alt="author">
							<p>Cet article a été rédigé par <?php if(booleanAuteur){echo $nom_auteur;}else{echo $nom_auteur.", ".$titreAuteur." chez Ensai Junior Consultant." ;} ?>.</p>
							<p>Vous pouvez contacter <?php echo $nom_auteur ?> via cette adresse : <?php echo $mail_ejc ?></p>
							<p>  </p>
					</div>
					<!-- FIN SIGNATURE DE L'ARTICLE-->
				</div>

				<!-- PARTAGE -->
				<div class="four columns">
					<div class="sidebar">
						<div class="widget">
							<div class="widget-title">Partager l'article</div>
								<div class="social-icon social-facebook"><a href="<?php echo "http://www.facebook.com/sharer.php?u=www.blog.ejc.fr/art".$num_arc.".php" ?>" target="_blank" data-original-title="Facebook">Facebook</a></div>
								<div class="social-icon social-twitter"><a href="<?php echo "https://twitter.com/intent/tweet?text=www.blog.ejc.fr/art".$num_arc.".php" ?>" target="_blank" data-original-title="Twitter">Twitter</a></div>
								<div class="social-icon social-linkedin"><a href="<?php echo "https://www.linkedin.com/sharing/share-offsite?mini=true&url=http://www.blog.ejc.fr/art".$num_arc."&title=Blog de EjC - ".$titre."&summary=".$description."&source=ejc.fr" ?>" target=\"_blank\" data-original-title=\"LinkedIn\">LinkedIn</a></div>
						</div>
					</div>
				</div>
				<!-- FIN PARTAGE -->

			</div>


			<div class="clear"></div>


			  <!-- START COPYRIGHT SECTION -->
				<div class="copyright clearfix">
					<div class="container clearfix">
						<div class="sixteen columns"></div>
						<center><img src="images/logo_top.png" title="logo" alt="logo"/>
					</div>
					<div class="social-icons">
						<div class="social-icon social-email"><a href="mailto:contact@ejc.fr" target="_blank" data-original-title="Email">Email</a></div>
						<div class="social-icon social-facebook"><a href="https://www.facebook.com/Ensai-junior-Consultant-122804694508292/?fref=ts" target="_blank" data-original-title="Facebook">Facebook</a></div>
						<div class="social-icon social-linkedin"><a href="https://www.linkedin.com/company/ensai-junior-consultant" target="_blank" data-original-title="LinkedIn">LinkedIn</a></div>
						<div class="social-icon social-twitter"><a href="https://twitter.com/EjC_35" target="_blank" data-original-title="Flickr">Flickr</a></div>
					</div>
					<p>&copy; <?php echo date('Y'); ?> Tous droits réservés. E<em>j</em>C</br>
					Ensai <em>junior</em> Consultant</br>
					Campus de Ker-Lann, Rue Blaise Pascal - BP 37203</br>
					35172 BRUZ cedex</p>
				</div>
				<!-- FIN SECTION COPYRIGHT-->

			  </div>
			</div> <!-- FIN DE LA PAGE -->


			<div id="back-to-top"><a href="#">Back to Top</a></div>



			<!-- JARVIS THEME SCRIPTS -->
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
			<!--<script type="text/javascript" src="js/jquery.tweet.js"></script>-->
			<script type="text/javascript" src="js/jquery.form.js"></script>
			<script type="text/javascript" src="js/jquery.queryloader2.js"></script>
			<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
			<script type="text/javascript" src="js/jquery.fitvids.js"></script>
			<script type="text/javascript" src="js/jquery.appear.js"></script>
			<script type="text/javascript" src="js/jquery.slabtext.min.js"></script>
			<script type="text/javascript" src="js/jquery.fittext.js"></script>
			<script type="text/javascript" src="js/jquery.easing.min.js"></script>
			<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
			<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
			<script type="text/javascript" src="js/jquery.sticky.js"></script>
			<script type="text/javascript" src="js/selectnav.min.js"></script>
			<script type="text/javascript" src="js/SmoothScroll.js"></script>
			<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
			<script type="text/javascript" src="js/shortcodes.js"></script>
			<script type="text/javascript" src="js/isotope.js"></script>
			<script type="text/javascript" src="js/scripts.js"></script>
		</body>
	</html>
