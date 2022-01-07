<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
<head>
	<!-- Code pour justifier le texte -->
	<style>
		.justifier {
  		text-align: justify;
  		text-justify: inter-word;
		}
	</style>

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
		$titre = "Data & Santé : une interview de Julie Roïz";
		$sstitre = "Data & Santé";
		$description = "";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2021/art21_004/miniature.png";
		$num_arc = "21_004"; //AA_NNN
		$date_publ= mktime(0,0,0,06,16,2021); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2021/art21_004/miniature.png");
		$arrayLabel = array(1 => "");
 
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
 
		//Auteur de l'article
		$booleanAuteur = true ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Lucille Bourdoiseau"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Lucille Bourdoiseau"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/lucille.jpeg"; //URL de la photo de l'auteur
		$mail_ejc = "lucille.bourdoiseau@ejc.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="

<div class=\"justifier\">

<p>
Les statistiques sont très utiles dans divers domaines dont la santé. Nous avons interviewé Julie Roiz, marraine de la promotion 2023 qui évolue depuis sa sortie de l'Ensai (filière ISTS) dans l'évaluation économique des produits de santé, dans le conseil principalement.
</p>

<p>
Nous avons voulu notamment comprendre le rôle des statistiques lors d'une épidémie.
</p>

<li style=\"padding-left:40px\">
Quel rôle joue les statistiques au début d'une épidémie? Est-ce que les statistiques ont un rôle dans la prévision de l'évolution d'une épidémie ?
</li>

<p>
Quand dans une épidémie il commence à y avoir plusieurs cas, il y a des outils statistiques et épidémiologiques qui servent à essayer de comprendre si c'est un cluster de cas localisés qui va disparaître de lui-même, ou si ce nombre de cas va augmenter de façon incontrôlable. La statistique et l'épidémiologie sont deux domaines qui, ensemble, permettent d'essayer de comprendre, avec les cas observés, les tendances et les prédictions. Ce sont des outils qui, par la suite, vont être utilisés par les autorités pour prendre des décisions (à quel moment il faut confiner, fermer les écoles...). Ils vont prendre en compte plusieurs indicateurs pour prendre leurs décisions : 
<ul>
	<li> - Le R0 : le nombre de cas secondaires qu'un cas va introduire dans une population complètement susceptible (c'est-à-dire avec aucune immunité). Sa valeur nous donne vraiment une indication sur la vitesse à laquelle l'épidémie va se propager. Ce nombre est estimé de façon statistique à partir des données observées et de façon épidémiologique à l'aide de modélisation. Quand on commence à avoir un certain nombre de cas, ce R0 devient moins pertinent car il n'y a plus une population totale susceptible donc on va utiliser le R effectif. </li>
	<li> - Le R effectif : le nombre de cas secondaire mais dans une population qui n'est pas totalement susceptible. </li>
</ul>
</p>

<li style=\"padding-left:40px\">
Comment sont utilisés les statistiques en épidémiologie et dans l'étude d'un virus ? 
</li>

<p>
Les statistiques sont utilisés dans plusieurs cas.
</p>

<p>
Pour les modèles de prédiction, on peut faire un modèle hybride entre un modèle de régression de statistique et un modèle épidémiologique où l'on force certaines dynamiques pour que la courbe monte et redescende. On va essayer d'estimer des paramètres de croissance et de décroissance.
</p>

<p>
Une question qui s'est beaucoup posé plus d'un point de vue économique au début de la crise du Covid était : combient cette crise va coûter? Il y a donc eu plusieurs études qui on été faites avec des données hospitalières, plutôt avec des modèles économétriques pour mesurer le coût de la crise, la durée des traitements etc.
</p>

<p>
Les statistiques vont aussi être utilisées pour toute la partie clinique, au niveau de la virologie, la compréhension des anticorps, la compréhension virologique de la réponse au virus, la réponse immunitaire... Aujourd'hui avec la crise sanitaire actuelle, on essaye de comprendre, à l'aide des statistiques, quelle est l'immunité conférée par la Covid en comparaison avec l'immunité conférée par le vaccin, à quel taux ces 2 immunités décroîssent... Il ya des études où l'on va suivre des patients soit vacciné soit qui ont eu la maladie et on va suivre leur taux d'anticorps à des intervalles réguliers. Ensuite, on va utiliser des outils statistiques pour comprendre à quelle vitesse leur taux d'anticorps décroit et quelle est la durée de protection prédite.
</p>

<li style=\"padding-left:40px\">
Est-ce que les statistiques sont des indicateurs solides pour prévoir l'évolution de l'épidémie ou est-ce qu'il y a trop de facteurs qui entrent en jeu ?
</li>

<p>
La pandémie actuelle est compliquée. Si la population continue de se conduire comme elle le fait, si le virus continue de se conduire comme il le fait, on peut faire des modèles qui peuvent prédire plus ou moins bien la trajectoire de la pandémie. Techniquement on a les moyens de le faire, on l'a fait pour d'autres pandémies.
</p>

<p>
Mais avec la Covid-19, il y a pleins de facteurs qui entrent en jeu, notamment deux principaux:
<ul>
	<li> - Les attitudes des gens et les décisons des autorités changent constamment et ne sont pas prévisibles. </li>
	<li> - Les différents variant au virus, que l'on commence seulement à comprendre. Il n'y a pas un seul modèle qui peut prédire l'émergence d'un nouveaut variant. </li>
	</ul>
</p>

<p style=\"font-style:italic\">
Cette courte interview nous montre une partie de l'utilisation qui peut être faite des statistiques. Ce n'est qu'un exemple parmi la multitude d'ouvertures que nous offre l'Ensai à notre sortie de l'école.
</p>

</div>







";
 
 
	?>
 
	<!-- META DATA -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="UTF-8">
	<title>Blog d'EjC - <?php echo $titre ?></title>
	<!-- Description du site-->
	<meta name="description" content="<?php echo $description ?>"/>
	<!-- Mots clés pour la recherche-->
	<meta name="keywords" content="Ensai, junior, entreprise, junior-entreprise, JER, étude, big data, statistique, statistiques, stats, analyse, information, Covid, Covid-19, santé, biologie, médecine, étude, virus, épidémie, maladie, vaccin, Insee, informatique, mathémathiques, maths"/>
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
 
 
 
					<?php echo"<p align=\"right\" style=\"margin-bottom: 60px\">Mis en ligne le 16 juin 2021</p>" ?>	
 
 
 
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