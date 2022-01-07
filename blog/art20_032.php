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
		$titre = "DATA & FOOT";
		$sstitre = "Le contre pied du ballon rond";
		$description = "";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2020/art20_032/Vignette.png";
		$num_arc = "20_032"; //AA_NNN
		$date_publ= mktime(0,0,0,08,25,2020); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2020/art20_032/1.png", 2 => "src/2020/art20_032/2.png", 3 => "src/2020/art20_032/3.png");
		$arrayLabel = array(1 => "Illustration parue sur un article relatif à Matthew Benham, président du FC Brentford et ne jurant que « par le pouvoir des algorithmes ».",2=> "Thomas Muller soulevant la coupe de monde remportée par la Mannschaft en 2014. Pourquoi une telle image ? Parce que bien que remplie de talents, la Mannschaft ne fut pas étrangère à l’utilisation des données pour soulever ce trophée. Il a été révélé que l’équipe nationale utilisait le dispositif d’Adidas miCoach Elite Team System lors de ses sessions d’entraînement.", 3 => "- PETER BRAND, MONEYBALL");
 
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
 
		//Auteur de l'article
		$booleanAuteur = true ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Gaël Raffy"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Gaël Raffy"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/gael.jpg"; //URL de la photo de l'auteur
		$mail_ejc = "gael.raffy@ejc.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="

<p>
Et si les matchs ne se gagnaient plus sur les terrains mais en dehors ? Et
si les « big data » devenaient le 12ème homme qui pourrait changer la
donne en compétition ? Cette idée pourrait à première vue vous paraître
dérisoire ou plus encore vous déplaire. En effet, le football est un sport
qui ne se joue pas sur des ordinateurs mais sur les terrains. Si les joueurs
en viennent à penser plus à leurs statistiques individuelles qu’à la
performance collective, cela tuerait le jeu. Certains observateurs
critiquent même l’assistance vidéo à l’arbitrage, alors présente pour des
raisons différentes, comme dénaturant le football. Le football demeure
avant tout un sport de continuité et non de séquences. Mais un
phénomène est bien en marche entre le football et la science des
données. C’est en effet ce que semblent indiquer les multiples articles et football est une science (in)exacte parle de « datafication » du sport. </p>




<p>
<li style=\"padding-left:40px\">
Comment jongler avec les données ?
</li>
</p> 

<p> Mais comment ça marche ? Quelles données sont
récupérées et de quelle manière ? Je ne pense pas que vous
imaginiez le nombre de données qui peuvent être collectées.
Ce à quoi vous êtes amenés à penser et qui demeure le plus
utilisé est le système mondial de navigation par satellites
(GNSS) qui retrace le mouvement des joueurs. Mais rien qu’à
ce dernier se greffent de multiples autres systèmes pour plus
de performance comme des capteurs de fréquence
cardiaque. Dès lors, il faut considérer la collecte de
nombreuses autres données tel le suivi physiologique
recueillant rythme cardiaque, distance parcourue, vitesse,
accélération et puissance du joueur. Ces données sont alors
récupérées directement du corps des athlètes par de
multiples capteurs qui s’intègrent de mieux en mieux aux
tenues des joueurs. Google et Adidas sont en ce moment
même en train de lancer une semelle connectée pour
footballeurs. Comme nous l’avons dit, les « big data » sont en
pleine extension dans ce domaine. </p> 


<p>
Une date est révélatrice du pas dans cette nouvelle ère des données :
juillet 2015. Cette dernière marque l’annonce via une note par FIFA de
l’ « autorisation du port de systèmes électroniques de suivi et
d’évaluation de la performance » lors des matchs. Avant cette date,
tous ces dispositifs de suivi, relevant de la catégorie des systèmes
électroniques de suivi et d’évaluation des performances (EPTS),
n’étaient autorisés qu’à l’entrainement.
</p> 

<p>
Dès lors, se multiplient les plateformes recueillant les données des
rencontres officielles. Par exemple, le système TRACAB, une
technologie de traitement d’images avancée pour identifier la position
et la vitesse de tous les objets en mouvement au sein d’un stade de
football, a le vent en poupe. Elle est installée dans plus de 300 stades
et utilisée lors de plus de 4 500 matchs par an par la Premier League, la
Bundesliga et la Liga espagnole.
</p> 

<p>
<li style=\"padding-left:40px\">
L’aide à la décision en ligne de mire</li>
</p> 

<p>
Ces données ont deux principales utilisations. Tout d’abord, comme ce fut le cas à l’origine
même de l’introduction de la data dans le sport avec l’équipe de baseball des Athletics
d’Oakland : le recrutement. Il existe plus de 100 catégories de
statistiques spécifiques, individuelles sur les joueurs telles que
tirs, buts, passes décisives… Ces données peuvent alors
orienter l’action des clubs pour composer ou compléter une
équipe. Mais à condition qu’elles soient utilisées à bon escient
avec des statisticiens spécialisés dans ce domaine qui puissent
croiser au maximum les données.
</p> 

<p>
En effet, que faudrait-il relever de la performance de Neymar,
nommé homme du match lors du choc PSG-Atlanta mercredi 12 août ? Ne considérer que ses
échecs « faciles » face aux buts faisant chuter ses propres statistiques d’ « expected goals* » ?
Ou alors regarder son record de 16 dribbles réussis sur 23, sa distance parcourue, ses sprints…
Les chiffres sont multiples et doivent être méticuleusement reliés pour être utilisés. Les
systèmes se servant de la science des données ont surtout servi à repérer des joueurs « souscôtés
» en relevant chez eux des performances non directement visibles comme l’est le fait de
marquer un but.
</p> 

<p> L’autre pendant de ces statistiques est l’analyse de la performance des joueurs lors de
rencontres. Ces analyses représentent un atout de poids pour tout entraîneur. Lors d’un
entrainement avec des données arrivant en temps réel ou même après un match (la FIFA
interdisant le recueil de données en temps réel durant les rencontres), l’entraîneur peut lire l’état
de forme de ses joueurs. C’est un réel appui à la décision à la fois pour la composition mais
aussi pour la stratégie à mettre en place afin de valoriser au maximum les atouts de chaque
joueur. Là encore, toute statistique appelle à être utilisée avec parcimonie. C’est pourquoi de
plus en plus de clubs se constituent de véritables équipes de statisticiens qui permettent de
révéler le potentiel de ces données.
</p>

<p> * nombre de buts qu’un joueur aurait dû marquer selon une probabilité basée sur les milliers de tirs tentés lors des
saisons précédentes. </p>
";
 
 
	?>
 
	<!-- META DATA -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="UTF-8">
	<title>Blog d'EjC - <?php echo $titre ?></title>
	<!-- Description du site-->
	<meta name="description" content="<?php echo $description ?>"/>
	<!-- Mots clés pour la recherche-->
	<meta name="keywords" content="Ensai, junior, entreprise, junior-entreprise, JER, étude, big data, statistique, statistiques, stats, analyse, information, sport, football, foot , xg goal, but, goal, informatique, mathémathiques, maths"/>
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
 
 
 
					<?php echo"<p align=\"right\" style=\"margin-bottom: 60px\">Mis en ligne le 25 août 2020</p>" ?>	
 
 
 
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