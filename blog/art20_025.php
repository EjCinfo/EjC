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
		$titre = "Le Big Data à l'assaut du cinéma";
		$sstitre = "La science des données sous le feu des projecteurs !";
		$description = "";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2020/art20_025/1bis.png";
		$num_arc = "20_025"; //AA_NNN
		$date_publ= mktime(0,0,0,1,22,2020); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2020/art20_025/1.png");
		$arrayLabel = array(1 => "");
 
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
 
		//Auteur de l'article
		$booleanAuteur = false ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Timothée Dauxois"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Communication"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/communication2019.jpg"; //URL de la photo de l'auteur
		$mail_ejc = "communication@ejc.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="
<p>
Alors que nous créons 2,5 trillions d'octets de données chaque jour en envoyant des messages,
partageant des vidéos, ou en cliquant sur le lien d'un site, trouver de nouvelles manières de stocker,
partager, analyser les données est devenu un enjeu majeur. C'est ce qu'on appelle le Big Data : le fait
de sauvegarder un immense nombre de données, dans le but de les analyser et les exploiter ensuite.
Si les réseaux sociaux (Facebook, Instagram, Youtube...), une multitude d'entreprises ainsi que de
nombreux métiers utilisent déjà le Big Data, alors pourquoi pas le cinéma ?</p>

<p>
En effet, l'utilisation des données est on ne peut plus présente dans le milieu du cinéma. Le Big Data
trouve sa place dans l'inspiration de films, dans les campagnes marketing et parfois même dans
l'écriture ou la production !
Plongeons nous au coeur de l'industrie cinématographique afin de comprendre à quel point le Big
Data y joue un rôle important.
</p>
 




<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> Le Big Data comme source d'inspiration </li> </strong> </p>

<p>
Le Big Data s'invite dans les scénarios de vos films préférés ! Sans que vous le remarquiez, c'est ce
thème d'actualité qui a inspiré de nombreux films. Laissez moi vous en présenter quelque uns :
<li style=\"padding-left:40px\">
Classique parmi les classiques, la sulfureuse trilogie Matrix (1999/2003) imagine un monde
parallèle entièrement décrit par les données, la Matrice, dans laquelle Keanu Reeves dans le
rôle du badass Néo n'aura de cesse de se battre pour tenter de rétablir la paix. A une époque
ou les données n'avaient pas encore l'importance qu'elles ont aujourd'hui, Matrix se
positionne comme précurseur de ce que sera ensuite l'explosion du Big Data. 
</li>
<li style=\"padding-left:40px\">
Dans Minority Report (2002), le beau Tom Cruise est membre de la division précrime dont
le but est d'anticiper les meurtres et d'ainsi les empêcher. Il est amusant de constater qu'alors
que ce thriller traitait notamment d'analyse prédictive, c'est à dire le fait d'analyser des
données afin de prévoir et anticiper, plusieurs services de police exploitent aujourd'hui les
données de manière à prépositionner leurs brigades là où les crimes sont statistiquement les
plus susceptibles de se produire. Steven Spielberg n'en finit plus de nous impressionner : en
plus d'être l'un des plus grands réalisateur de tous les temps, ne pourrait-t-on pas le qualifier
de visionnaire en criminologie ?!
</li>
<li style=\"padding-left:40px\">
Je ne pourrais vous parler d'analyse de données dans le cinéma sans citer Le Stratège (2011),
dans lequel Billy Beane alias Brad Pitt prend les rênes de l’équipe de base-ball des A’s
d’Oakland ; alors qu'il dispose d'un budget très restreint, il décide de recruter ses joueurs sur
la base de statistiques, en tâchant d'optimiser au mieux le fonctionnement de celle-ci en
tenant compte des différentes compétences de chacun. Ce pari risqué est payant puisqu'il
parviendra à concurrencer certaines des plus grandes équipes ! Ce type de raisonnement est
extrêmement utilisé aujourd'hui dans le monde de la statistique : chercher l'optimisation à
partir de données, c'est un des enjeux majeurs de notre temps !
</li>
<li style=\"padding-left:40px\">
Enfin, le dernier exemple dont j'aimerais vous parler est la série Person of Interest,
considérée aujourd'hui comme l'une des meilleures séries de science-fiction. Elle s'inscrit
dans une thématique contemporaine, celle de la surveillance de masse, sujet controversé
depuis les révélations du lanceur d'alerte Edward Snowden concernant la surveillance de
masse des citoyens par les Etats-Unis. Alors qu'il a créé et confié au gouvernement un
système extrêmement performant de surveillance de masse permettant de prédire certains
actes terroristes dans le monde, Harold Finch, épaulé par notre héros John Reese, tâchera
également d'empêcher les crimes considérés comme mineurs par l'Etat et dont ce dernier ne
tient pas compte.
</li>
</p>

<p>
Le Big Data est un thème qui nous captive tous, tant par la curiosité qu'elle provoque que par la
crainte qu'elle peut susciter ! Dans un monde dans lequel les données deviennent de plus en plus
importantes et exploitées, il coulait de source que le cinéma se devait de s'attaquer à ce thème là !
</p>



<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> Les données, source à exploiter pour vendre des films : </li> </strong> </p>

<p>
Si le Big Data est un sujet qui fait vendre des films par l'attractivité qu'il créé, Hollywood en a
compris une autre utilité : les données peuvent être exploitées pour le marketing d'un film !
</p>

<p>
Mais de quelles données parle-t-on ici ? Et comment le cinéma hollywoodien fait-t-il pour se les
procurer, ou plus encore pour les exploiter ?
</p>

<p>
Les données pertinentes et utiles pour vendre un film sont nombreuses : il s'agit de connaître un
maximum d'informations sur le potentiel client d'un film – sexe, âge, classe sociale, centre
d'intérêts, genre de films favori... Ces données peuvent servir à adapter la promotion d'un film.
Intéressons-nous à certains cas plus concrets pour mieux comprendre :
</p>

<p>
le cinéma Hollywoodien utilise via des sociétés spécialisées les réseaux sociaux (Facebook, Twitter,
Youtube, Instagram, blogs cinéphiles) pour connaître les avis des utilisateurs concernant un film en
temps réel.
Lors de la promotion du film It Follows (2014), suite aux réactions des spectateurs sur Facebook
aux vues des bandes d'annonce ainsi que des premières projections, la cible marketing du film fut
alors modifiée ; les bandes d'annonces ainsi que le message mis en avant par l'équipe marketing
furent adaptés de manière à cibler une population plus âgée, qui, selon l'analyse des données, était
plus à même d'être attirée par ce film.
</p>

<p>
Netflix est également très friand de ces données : pour la série House of Cards (2013), plus d'une
dizaine de bandes d'annonces différentes furent créées, adaptées sur mesure au client en fonction de
son profil de consommation (genre des séries favorites, durée moyenne des épisodes regardés...)
</p>

<p>
Les manières de récolter des informations afin de vendre un film sont nombreuses, et vous avez
sûrement déjà été confronté à au moins l'une d'entre elle. Par exemple, UGC vous propose de
remplir un questionnaire dans le but de gagner des places de cinéma, Kinepolis offre pour le même
service un an d'abonnement pour leurs salles... D'autres sont plus originales : aux Pays-Bas, Pathé a
réutilisé le format amusant de Tinder, proposant aux utilisateurs une liste de films pour chacun
desquels ils pouvaient swiper vers la gauche ou vers la droite afin d' indiquer si le film leur plaisait
ou non, puis les incitait à remplir un formulaire afin de comparer leurs résultats à la moyenne
nationale.
</p>

<p>
Les données peuvent servir à adapter la campagne marketing d'un film, mais pas seulement. A partir
d'une base de données d'anciens films (genre, réalisateur, acteurs, sujets traités...), il est possible de
prévoir le succès d'un autre.
</p>

<p>
Le Big Data est une source intarissable à exploiter pour la vente d'un film, et vous êtes les premiers
fournisseurs de ces données. Vous contribuez sans le savoir à la réussite de l'industrie du cinéma !
</p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> L'utilisation des données pour faire des films </li> </strong> </p>

<p>
Sûrement moins populaire que le dernier Joker, j'aimerais vous parler du court-métrage Sunspring,
réalisé entièrement par Benjamin, une intelligence artificielle. A partir d'une gigantesque base de
données de films, Benjamin a monté le film de toutes pièces , du scénario aux dialogues en passant
par la mise en scène. C'est même lui qui a créé la bande son, dont les musiques sont adaptées aux
scènes dans lesquelles elles occurrent !
Cependant, le film est assez surprenant et déroutant, et son sens est difficile à saisir. Si le résultat
n'est pas concluant, c'est son processus de création qui est intéressant. On retrouve ici le principe
d'analyse prédictive : Benjamin a analysé de nombreux films afin d'essayer de créer et ainsi prédire
le prochain.
</p>

<p>
Le Big Data est également utilisé par Netflix lors de la création de nouvelles séries. A partir de leur
panel de séries, la plate-forme analyse en temps réel les attentes des utilisateurs afin d'y répondre le
plus précisément possible. En distinguant une multitude de caractéristiques sur chaque série (notes
attribuées, genre, nombre de saisons, durées des épisodes...), Netflix réussit à cerner ce qui plaît le
plus et s'en sert pour créer leurs prochaines séries.
</p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> Conclusion </li> </strong> </p>

<p>
Finalement, le Big Data a une place privilégiée dans l'industrie du cinéma. Tant intriguant que
fascinant, il est utilisé comme thème dans les films, mais trouve son utilité également lorsqu'il s'agit
de vendre les films via le marketing, et et même parfois exploité lors de la création de certains
films. Le Big Data, dont l'utilisation est grandissante, continuera sans aucun doute à se développer,
que ce soit dans le monde du cinéma ou dans de nombreux autres milieux.
</p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> Et la morale dans tout ça ? </li> </strong> </p>

<p>
Si le Big Data a su se rendre indispensable, il est important de souligner que son exploitation serait
obsolète sans l'homme ; à l'instar de Sunspring, les technologies dont nous disposons ne peuvent
suffire à créer un film réussit: l'homme est bien maître des données et des technologies qu'il
exploite, on ne vivra pas (encore) le scénario de Terminator !
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