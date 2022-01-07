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
		$titre = "Gérez vos bases de données";
		$sstitre = "Ensai junior Consultant gère vos bases de données";
		$description = "";
		$urlimageaccueil = " URL IMAGE DE L'ACCUEIL DU BLOG";
		$num_arc = "19_013"; //AA_NNN
		$date_publ= mktime(0,0,0,7,7,2019); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2019/art19_013/1.png");
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
<p>Chaque minute, des milliers de données sont créées à travers le monde, de
ce fait les entreprises génèrent des bases de données de plus en plus
volumineuses. Mais alors, comment exploiter ces mines d’or et révéler l’information
qu’elles contiennent ? Les statistiques, et plus particulièrement la data science, sont
les outils de demain pour exploiter toutes vos données.
	

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> Ensai junior Consultant révèle le potentiel de vos données </li> </strong> </p>

<p> Les études d’EjC à partir de vos bases de données sont réalisées en deux étapes :
	<li style=\"padding-left:40px\"> mise en forme de la base de données </li>
	<li style=\"padding-left:40px\"> exploitation des données </li>
</p>
 
<p> Si la première étape de nos études peut sembler factuelle, elle est, en réalité,
essentielle. Le bon déroulé de l’étude repose sur cette étape préliminaire, et ce
d’autant plus que vos bases de données sont volumineuses. Durant cette étape, les
consultants vont chercher à comprendre le fonctionnement de vos données
(comment elles sont obtenues, quelle est leur mesure, leur ordre de grandeur, etc)
de façon à optimiser leur stockage. Une fois la logique de la base de données mise
en place, les consultants peuvent, au besoin, automatiser cette base de données.
Cela consiste à mettre en place des processus et procédures pour exécuter
l’administration d’une base de données automatiquement.
	</br> Les consultants peuvent aussi être amenés à constituer des systèmes
d’information (SI). Dans le cadre d’une étude, cette étape peut être reliée à celle de
la mise en forme de la base de données, dans le sens où elle constitue une étape
préliminaire. Les systèmes d’information correspondent aux ressources pour
collecter, stocker, traiter et communiquer les informations, c’est-à-dire tous les
éléments essentiels pour élaborer une base de données performante.
</br>
Une fois l’ingénierie des données réalisées, l’exploitation des données et leur
analyse statistique sont facilitées. Ainsi, EjC peut réaliser tout type d’étude statistique,
et ce même à partir de bases de données volumineuses. Par exemple, EjC réalise
des segmentations clients à partir de vos données de clientèle, établit des plans de
performance à partir de vos données de rendements et d’efficacité ou encore
analyse les réponses à vos sondages et questionnaires de satisfaction.
</p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> Une spécialisation à l’Ensai : Statistique et ingénierie des données </li> </strong> </p>

<p> Face à ces bases de données toujours plus volumineuses, une nouvelle
discipline se développe, la <em>data science</em>. Cette science mêle connaissances
statistiques et maîtrise de l’informatique. En effet, pour exploiter les données issues
du Big Data, les deux ne sont plus dissociables.
	</br> EjC propose une filière de spécialisation <em>Statistique et ingénierie des données</em>
afin de former les data scientist et data analyst de demain. Cette filière a la
particularité d’être à la fois générale, les étudiants ayant suivi cette filière sont
compétents pour traiter tous types de données (biostatistiques, statistiques
financières, enquêtes déclaratives, etc) et spécifique. En effet, elle offre aux
étudiants un approfondissement en informatique unique. La filière s’articule autour
de quatre grandes thématiques : Big Data et ingénierie des données, data mining,
systèmes et réseaux, et développement d’application.
</br>
Les étudiants sont amenés à mettre en pratique ces connaissances tout au
long de l’année à travers différents projets. Par exemple, ils réalisent un projet web
en autonomie où ils implémentent une application en JavaEE. En ce qui concerne
les statistiques, les élèves manipulent les technologies sémantiques, NoSQL, les
grandes masses de données sur Cloud et, bien-sûr, maîtrisent le machine learning.
Cette dernière technologie, qui repose sur l’intelligence artificielle, est nécessaire
pour pouvoir exploiter les données issues du Big Data. En effet, le machine learning
permet de s’adapter à tous types et volumes de données et donc d’exploiter
pleinement le potentiel du Big Data.
</br>
Enfin, les élèves de la filière <em>Statistique et ingénierie des données</em> sont
particulièrement sensibilisés à la confidentialité et au respect des données,
notamment de la vie privée (opinions politiques, religieuses, etc). Si les flux de
données sont toujours plus nombreux et variés, ils ne doivent pas pour autant perdre
en qualité.
</br>
Cette filière est celle qui offre la plus vaste palette de débouchés. Cela est
notamment dû à la pluralité des entreprises partenaires de l’ENSAI qui dispensent
des séminaires variés aux étudiants et leurs permettent de réaliser leur projet de fin
d’étude sur leurs propres données issues du Big Data. On peut nommer, entre
autres, les laboratoires Servier, la Société Générale ou encore Médiamétrie.
</p>

<p> C’est le moment de révéler le potentiel de vos données ! </p>

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
La coloration syntaxique est réalisé par GeSHi
Aide | Forums| Licence