<!DOCTYPE HTML>
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
		$titre = "Réalisez vos enquêtes";
		$sstitre = "Ensai junior Consultant réalise vos enquêtes";
		$description = "";
		$urlimageaccueil = " URL IMAGE DE L'ACCUEIL DU BLOG";
		$num_arc = "19_014"; //AA_NNN
		$date_publ= mktime(0,0,0,7,27,2019); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2019/art19_014/1.png");
		$arrayLabel = array(1 => "");
 
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
 
		//Auteur de l'article
		$booleanAuteur = false ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Léa Fortat"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Développement Commercial"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/lea.png"; //URL de la photo de l'auteur
		$mail_ejc = "lea.fortat@eleve.ensai.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="
<p>
Comment connaître la satisfaction de sa clientèle, l’opinion d’une population,
les effets d’un médicament ? Réaliser des enquêtes est sans doute le moyen le plus
efficace pour avoir une réponse à toutes ces interrogations. Néanmoins, quelle que
soit l’enquête réalisée, les données collectées sont riches mais brutes; les
statistiques constituent l’outil essentiel afin de révéler toute l’information qu’elles
contiennent.
</p>
	

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> Ensai junior Consultant révèle l’information contenue dans vos enquêtes
</li> </strong> </p>

<p> EjC réalise vos enquêtes de la conception jusqu'à l’exploitation :
	<li style=\"padding-left:40px\">  Conception de vos questionnaires </li>
	<li style=\"padding-left:40px\"> Création de vos plans de sondage </li>
	<li style=\"padding-left:40px\"> Econométrie de vos données de Panel </li>
</p>
 
<p> Afin d’obtenir des résultats satisfaisants, le questionnaire doit répondre
exactement à la problématique posée. En effet, des questions trop larges, ou au
contraire, trop précises, peuvent fausser l’enquête; notamment pour les enquêtes
déclaratives qui reposent en partie sur la compréhension que l’individu sondé a du
questionnaire. Par exemple, imaginons une enquête sur les habitudes des français,
si les questions, et surtout les réponses proposées, sont trop précises les individus
peuvent ne s’identifier à aucune proposition et répondre alors de manière aléatoire.
Durant cette étape décisive, EjC travaille conjointement avec vous pour comprendre
au mieux votre problématique. </br>
	La création des plans de sondage, à l’instar des questionnaires, est une
étape essentielle des enquêtes statistiques. Ils décrivent la méthodologie
d'échantillonnage utilisée, c’est-à-dire la méthode pour sélectionner la partie de la
population que l’on veut étudier. Ils répondent, par exemple, à la question suivante:
de quelle catégorie de la société je souhaite savoir l’opinion. </br>

L’exploitation de l’enquête correspond à la réalisation des statistiques à
partir des réponses au questionnaire. Lors de l’exploitation des réponses, les
étudiants sont d’abord amenés à traiter la non-réponse, qui peut parfois être assez
importante, notamment en ce qui concerne les questions politiques. En effet, un
mauvais traitement de la non-réponse peut, par exemple, conduire à sous-évaluer
la popularité d’un personnage politique. Ensuite, pour révéler toute l’information
contenue dans ces réponses, les étudiants réalisent des statistiques descriptives
qui permettent d’avoir une vue d’ensemble des résultats; des statistiques
multivariées afin d’étudier l’effet de toutes les variables (qui correspondent aux
questions du questionnaire) entre elles et de repérer des types d’individu; et voire
des régressions pour analyser l’effet précis d’une variable sur une autre. Les
étudiants peuvent aussi être amenés à manipuler des données de Panel,
c’est-à-dire des données qui contiennent plusieurs observations au cours du temps
pour un même individu. Par exemple, lors d’une enquête sur la tension des
individus, la tension sera alors mesurée plusieurs fois au cours du temps sur le
même individu. Pour ce type d’enquête, les étudiants réalisent une étude
économétrique des données. </p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> La spécialité de Ensai junior Consultant et de l’Ensai </li> </strong> </p>

<p> Si l’Ensai ne possède pas une filière spécialisée dans la réalisation et
l’exploitation des enquêtes, elle est spécialisée en statistiques dès la première
année. De ce fait, les étudiants de l’Ensai sont capables, dès la fin de la première
année, de mener à bien vos enquêtes. </br>

Lors de leur première année, les étudiants sont amenés à travailler en
autonomie à l’exploitation d’une enquête, en l'occurrence l’enquête PISA 2015 pour
l'année scolaire 2018/2019. Dans un premier temps, les élèves réalisent des
statistiques descriptives qui permettent d’éclairer le sujet choisi, par exemple
“niveau scolaire en sciences et implication parentale”. A la suite de ce premier
travail, ils réalisent des statistiques multivariées afin de compléter et approfondir les
premiers résultats. A travers ce projet, les étudiants apprennent également à utiliser
les logiciels de statistiques SAS et RStudio. A la suite de cette première expérience,
sont dispensés des cours de sondage (traitement de la non-réponse, etc)
d’échantillonnage en 2ème année. De plus, les compétences en statistiques
(notamment en économétrie, cartographie et statistiques spatiales, méthodes de
régression) et informatique sont approfondies. </br>

Néanmoins, si les étudiants sont compétents pour réaliser et exploiter des
enquêtes dès la première année, leur spécialisation de 3ème leur permet d’aborder
plus précisément certaines enquêtes. Par exemple, les étudiants issus de la filière
Statistiques pour les sciences de la vie sont plus compétents pour exploiter les
enquêtes relatives au domaine de la santé. </p>

<p> N’attendez plus pour révéler le potentiel de vos enquêtes ! </p>
";
 
 
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