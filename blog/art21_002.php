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
		$titre = "Data Science et environnement";
		$sstitre = "Data science et environnement";
		$description = "";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2021/art21_002/data.png";
		$num_arc = "21_002"; //AA_NNN
		$date_publ= mktime(0,0,0,05,11,2021); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2021/art21_002/data.png");
		$arrayLabel = array(1 => "");
 
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
 
		//Auteur de l'article
		$booleanAuteur = true ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Maëlle Cosson"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Maëlle Cosson"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/maelle.jpeg"; //URL de la photo de l'auteur
		$mail_ejc = "maelle.cosson@ejc.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="






<p>
<li style=\"padding-left:40px\">
Les données au secours de la planète
</li>
</p> 

<p> 
Depuis le 22 août 2020, nous vivons à crédit. Cette date est calculée chaque année et correspond au Jour du Dépassement, c’est-à-dire la date à laquelle l’humanité a consommé toutes les ressources que la Terre peut offrir en une  année. En 2019, elle était estimée au 31 juillet. Il semble donc que nous ayons été plus raisonnable cette année puisque nous avons gagné trois semaines par rapport à l’an passé.  Mais  attention, il ne faut pas s’y méprendre: c’est une conséquence de la crise sanitaire mondiale que nous traversons, car d’habitude la tendance est plutôt à l’avancement de cette date symbolique. Certains irréductibles nient encore le réchauffement climatique ou l’impact  néfaste  de l’activité humaine sur notre environnement, mais globalement ce n’est plus un secret. La planète bleue va mal et il faut agir. Oui, mais comment? En changeant nos habitudes quotidiennes, certes, mais à grande  échelle  comment  mieux  comprendre, et donc mieux anticiper et mieux s’adapter aux défis environnementaux? Pour certains, la réponse tient en deux mots (trois si vous préférez le français): data science, ou science des données. Dynamique et prometteuse, elle fait déjà des miracles dans les domaines de la finance, du marketing, de la santé ... mais pourrait-elle vraiment sauver notre planète? Explorons ensemble quelques pistes intéressantes.
 </p> 

<p>
<li style=\"padding-left:40px\">
Révéler nos comportements
</li>
</p> 


<p>
La data science, comme son nom l’indique, c’est d’abord des données. Le monde connecté et digitalisé dans lequel nous vivons est très propiceà leur collecte. Tous les jours, en utilisant notre téléphone, en prenant les transports, en faisant nos courses ... nous partageons des données sur nous et nos comportements.  Pourquoi  ne  pas  tirer  profit  de  certaines  de  ces  informations  afin  de  prendre conscience  de  nos  mauvaises  habitudes  environnementales?  De  la  même  manière  que  nous  sous-estimons  souvent  le  temps  passé  sur  nos  écrans,  nous  avons  aussi  tendance  à  sous-estimernotre empreinte écologique, c’est-à-dire l’impact que nous avons sur l’environnement. Aujourd’hui, il est désormais possible sur la plupart des téléphones d’avoir le temps total passé sur l’appareil et même le détail par application. Imaginons avoir accèsà notre quantité de déchets ou l’empreinte écologique de notre panier de courses par exemple: nous apprendrions sûrement bien des choses! Quantifier d’une telle manière notre impact nous inciterait peut-être davantage à modifier nos modes de vie. 
</p> 


<p>
<li style=\"padding-left:40px\">
Optimiser la production d’énergies renouvelables</li>
</p> 

<p>
La data science permet également d’estimer et prédire de nombreux phénomènes. L’application de ces techniques à la production et la gestion des énergies renouvelables représente un enjeu majeur. Elles permettent entre autres de déterminer les emplacements les plus adéquats, de s’assurer du bon fonctionnement du matériel, d’anticiper les pannes éventuelles, les maintenances nécessaires ... Cela conduit donc à une production d’énergie renouvelable plus importante, àdes  coûts  minimisés.  Le secteur gagne ainsi en compétitivité par rapport aux productions d’énergies non renouvelables, qui demeurent notre principale source d’énergie (70% de l’électricité provenaitdu nucléaire en France en 
2019 contre à peine 20% pour l’hydrolien, l’éolien et le solaire cumulés). C’est dans cette démarche qu’Engie a créé en 2017 la plateforme Darwin, qui permet au groupe de rassembler et d’analyser les données de toutes ses centrales de production d’énergies renouvelables. Si leur travail s’est jusqu’alors principalement porté sur l’éolien, ils ont désormais pour objectif d’approfondir leur travail sur le solaire et l’hydrolien.
</p> 

<p>
<li style=\"padding-left:40px\">
Préserver la biodiversité</li>
</p> 

<p>
La science des données réalise aussi des prouesses pour la biodiversité. L’augmentation du volume de données disponibles et des techniques comme le machine learning ont notamment permis de créer la première carte de végétation du monde. Ce sont des chercheurs de l’Université de Valence, en Espagne, qui l’ont mise au point à l’aide des images satellites de Google et de l’intelligence artificielle. Cette carte apporte une meilleure compréhension de notre biodiversité et de son évolution. Elle est aussi utilisée pour déterminer quelles sont les zones les plus touchées par le réchauffement climatique ou  les  zones  les  plus  propices  à  l’agriculture.  Ces  avancées  permettent  de  comprendre,  et éventuellement  prédire,  l’impact  de  notre  activité  et  peuvent  jouer  un  rôle  important  dans l’élaboration de politiques environnementales plus efficaces. 
</p> 


<p>
La data science est donc un outil précieux pour répondre aux enjeux environnementaux actuels. S’agit-il pour autant de la solution miracle? La science des données a elle aussi un impact environnemental, et pas des moindres. Il lui faut de grandes infrastructures, capables de stocker et de traiter les données. Les data centers, ces bâtiments regroupant serveurs, disques durs et autres installations nécessaires, sont très gourmands en énergie: ils ont besoin d’électricité pour alimenter les machines, mais aussi pour les refroidir! Il est bien sûr toujours possible d’utiliser des énergies renouvelables ou d’opter pour des stratagèmes comme Facebook, qui possède un data center en Suède afin de bénéficier d’un refroidissement naturel. Malheureusement, cela n’est pas encore suffisamment répandu. Nul n’est parfait, pas même la data science. Elle reste néanmoins une piste prometteuse pour vivre de manière plus durable et n’a pas encore dévoilé toutes ses cartes.
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
 
 
 
					<?php echo"<p align=\"right\" style=\"margin-bottom: 60px\">Mis en ligne le 13 mai 2021</p>" ?>	
 
 
 
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