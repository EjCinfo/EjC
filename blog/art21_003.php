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
		$titre = "Le rôle de l'intervenant";
		$sstitre = "Le rôle de l'intervenant";
		$description = "";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2021/art21_003/miniature.jpeg";
		$num_arc = "21_003"; //AA_NNN
		$date_publ= mktime(0,0,0,05,31,2021); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2021/art21_003/miniature.jpeg");
		$arrayLabel = array(1 => "");
 
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
 
		//Auteur de l'article
		$booleanAuteur = true ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Clara Baudry"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Clara Baudry"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/clara.JPG"; //URL de la photo de l'auteur
		$mail_ejc = "clara.baudry@ejc.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="

<p>
Ensai junior Consultant permet aux élèves de réaliser des études pour des entreprises en échange d’une indemnité. Ces élèves deviennent des intervenants (auparavant appelés consultants).
</p>

<p>
Tu étudies à l’Ensai en 1A, 2A ou 3A ? Tu cherches à avoir une expérience professionnelle qui te permet d’appliquer tes connaissances en statistiques, programmation et économie ? N’hésite plus et rejoins les intervenants d’Ensai junior Consultant ! 
</p>

<p>
Si malgré tout il te reste des doutes ou que tout simplement tu veux en savoir plus sur le rôle d’intervenant cet article est fait pour toi. Solène Venezia et Samuel Goutin ont réalisé des études pour des entreprises grâce à Ensai junior Consultant (EjC). Aujourd’hui ils t’expliquent en quoi consiste le rôle d’intervenant et quels sont ses avantages.
</p>

<p>
Solène Venezia est devenue intervenante à Ensai junior Consultant en janvier 2021.
</p>



<p>
<li style=\"padding-left:40px\">
Pourquoi es-tu devenue intervenante ?
</li>
</p> 

<p> 
Je suis devenue consultante à EjC pour pouvoir mettre en application les enseignements de l'Ensai dans une étude concrète, et pour me familiariser encore plus avec les méthodes statistiques utilisées.
 </p> 

<p>
<li style=\"padding-left:40px\">
Quel était le sujet et les principales missions de ton étude ?
</li>
</p> 


<p>
Dans le cadre de mon étude j’ai analysé un questionnaire afin d'établir des profils d’hôpitaux en ce qui concerne la prise en charge des parents avec des enfants nés prématurés. Pour cela, on a utilisé des analyses statistiques uni, bi et multivariées.

</p> 


<p>
<li style=\"padding-left:40px\">
Qu’est-ce que l’étude t’a apporté personnellement et scolairement parlant ?
</li>
</p> 

<p>
Au niveau professionnel ça m’a permis de répondre à une problématique concrète, et d'utiliser un vocabulaire adapté pour que le client comprenne toutes les analyses réalisées. Par rapport aux cours, ça m’a permis d'expérimenter réellement différentes méthodes utilisées et de se rendre compte que ce qu'on étudie est vraiment utile.

</p> 

<p>
<li style=\"padding-left:40px\">
As-tu trouvé tes missions chronophages ?
</li>
</p> 

<p>
Non personnellement ça ne m’a pas pris trop de temps.
</p> 

<p>
<li style=\"padding-left:40px\">
Quel était le niveau de ton indemnité ?
</li>
</p>

<p>
J’ai reçu environ 700€ net à la fin de mon étude. Cependant, l’indemnité varie en fonction du type de mission et du client. 
</p>

<p>
Samuel Goutin est devenu intervenant à Ensai junior Consultant en décembre 2020.
</p>

<p>
<li style=\"padding-left:40px\">
Pourquoi es-tu devenu intervenant ?
 </li>
</p>

<p>
J’avais envie d’acquérir une 'vraie' expérience professionnelle. Être intervenant dans une Junior Entreprise c'est être considéré par le client comme un professionnel capable de répondre à un besoin réel, et en étant facturé comme tel. À la différence du rôle de stagiaire qui nous protège encore des exigences du monde professionnel en nous plaçant dans une bulle.
</p>

<p>
<li style=\"padding-left:40px\">
Quel était le sujet et les principales missions de ton étude ?
 </li>
</p>

<p>
J’ai dû développer, tester, documenter et assurer l'intégration continue d'une librairie python dédiée aux équipes Marketing du client.
</p>

<p>
<li style=\"padding-left:40px\">
Qu’est-ce que l’étude t’a apporté personnellement et scolairement parlant ?
 </li>
</p>

<p>
D'un point de vue personnel, j'ai appris à organiser mon temps pour gérer à la fois mon rôle de consultant (charge de travail, réunions hebdomadaires avec le client) et mon activité d'étudiant (cours, stage de fin d'études). D'un point de vue technique, j'ai pu approfondir des notions que j'avais rapidement survolé en cours.
</p>

<p>
<li style=\"padding-left:40px\">
As-tu trouvé tes missions chronophages ?
 </li>
</p>

<p>
Oui car beaucoup des tâches qui m'ont été confiées étaient nouvelles pour moi. J'ai dû prendre un temps supplémentaire pour me former sur des notions comme les tests unitaires où les chaînes d'intégration continue. À Ensai junior Consultant, si le travail confié est chronophage, c'est qu'il est formateur. Si ce n'est pas le cas, alors c'est de l'argent de poche 'facile'.
</p>

<p>
<li style=\"padding-left:40px\">
Quel était le niveau de ton indemnité ?
 </li>
</p>

<p>
L'étude aura duré quasiment 6 mois. J’ai ensuite été rémunéré à hauteur d’environ 1065€ net.
</p>





";
 
 
	?>
 
	<!-- META DATA -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="UTF-8">
	<title>Blog d'EjC - <?php echo $titre ?></title>
	<!-- Description du site-->
	<meta name="description" content="<?php echo $description ?>"/>
	<!-- Mots clés pour la recherche-->
	<meta name="keywords" content="Ensai, junior, entreprise, junior-entreprise, JER, étude, big data, statistique, statistiques, stats, analyse, information, ethnique, droit, origines , racisme, raciales, Insee, informatique, mathémathiques, maths"/>
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
 
 
 
					<?php echo"<p align=\"right\" style=\"margin-bottom: 60px\">Mis en ligne le 31 mai 2021</p>" ?>	
 
 
 
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