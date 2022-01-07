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
		$titre = "Les statistiques et le sport";
		$sstitre = "Un combo performant";
		$description = "Application de la statistique au milieu sportif";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2018/art18_008/1.JPG";
		$num_arc = "18_008"; //AA_NNN
		$date_publ= mktime(0,0,0,06,14,2018); // heure minute seconde mois jour année
			
		// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');


		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
		
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2018/art18_008/2.png");
		 $arrayLabel = array(1 => "" );
		
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
		
	//Auteur de l'article
		$booleanAuteur = false ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Killian Poulain"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "membre du pôle communication"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/communication2018.JPG"; //URL de la photo de l'auteur
		$mail_ejc = "communicaton@ejc.fr";
		
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps= "
<p>
 Le 21ème siècle est une ère où les nouvelles technologies ne cessent de se développer, entraînant une omniprésence des données : elles interviennent aussi bien dans les domaines de la santé, du transport, que ceux de l’énergie, ou encore, du sport. 
 </p>
 
 <p>
 En effet, alors que 2018 est marqué par deux évènements sportifs majeurs, les Jeux Olympiques d’Hiver et la Coupe du monde de Football, il est intéressant de se pencher sur la place du Big Data dans le sport et d’analyser l’importance des statistiques dans ce milieu, révolutionné depuis leur utilisation.
 </p>
 
 <p>
<em> Le Stratège </em>, film réalisé par Bennett Miller, est un bel exemple d’application des statistiques dans le sport. On y voit un entraîneur d’une équipe de baseball avec peu de moyens financiers, contraint de faire appel à un statisticien afin d’optimiser son budget pour recruter l’équipe la plus compétitive possible. Bien que ce film ne soit aucunement tiré d’une histoire réelle, il faut savoir qu’aujourd’hui, de nombreuses équipes professionnelles font appel aux statistiques pour améliorer leurs résultats :
</p>

<p>
En 2006, les Houston Rockets (franchise de basket-ball en NBA) ont recruté Daryl Morey comme directeur général de l’équipe. Daryl Morey n’était alors qu’un diplomé en informatique, spécialisé en statistiques et n’avait bien sûr jamais entraîné une équipe de basket-ball auparavant. Et pourtant, il a révolutionné ce sport en faisant appel au data mining* pour analyser les performances de ses adversaires et adapter sa stratégie sportive (en considérant l’importance des shoots à 3 points par exemple). Effectivement, l’aide des statistiques s’avéra plus que payante pour les Rockets : depuis 2006, ils n’ont échoué que trois fois à se qualifier en play-offs.
 </p>

<p>
 L’analyse des données permet aux équipes de surveiller les performances de leurs joueurs au cours des entraînements, mais également au cours des matchs. Le « Smart sensing » est une technologie qui consiste à intégrer des micro boîtiers électroniques dans les maillots des joueurs afin que le staff puisse analyser en direct diverses données (rythme cardiaque, distance parcourue, vitesse, position moyenne sur le terrain). Ces données permettent ensuite d’adapter, voire de changer de stratégie en cours de match. Cette technologie permet également aux entraîneurs d’optimiser leurs sessions d'entraînement. Toutefois, elle nécessite le recrutement de spécialistes statisticiens capables d’analyser et d’exploiter toutes ces données. Ainsi de nos jours, de nombreux clubs et franchises de sport engagent des experts du Big Data dans leurs rangs : notamment, beaucoup de clubs de rugby et de football dans les championnats majeurs d’Europe ont des statisticiens qui travaillent en collaboration avec le staff (ex : le DFCO, club de football de Dijon ; les Tigres de Leicester, le club de la ligue professionnelle de rugby anglaise, etc.).
 </p>

<p>
 On retrouve également l’usage des statistiques dans le sport amateur. Les technologies connectées rencontrent de plus en plus de succès. Par exemple, les coureurs utilisent des montres connectées afin de recueillir toutes les données sur leurs courses du jour (distance, temps, vitesse moyenne, vitesse instantanée). Ils peuvent alors se fixer de nouveaux objectifs : leurs performances sont illustrées concrètement de manière quantitative et les motivent donc davantage à s’améliorer. De plus, les coureurs peuvent mettre en ligne leurs résultats et les partager avec d’autres joggers, faisant alors de la course à pied non plus un sport individuel mais bien un sport collectif !
 </p>

<p>
 Cependant, l’apport des statistiques dans le sport a des limites. En effet, le sport se caractérise par son aspect physique d’une part, mais également par son aspect mental. Aujourd’hui, les statistiques ne peuvent qu’améliorer ce côté physique propre à la pratique sportive. L’aspect mental est propre à chaque sportif et ne peut être quantifié. On a déjà pu observer ces limites lors de nombreux événements sportifs : par exemple, lors du Tournoi des VI nations 2014 (Rugby), alors que l’Angleterre menait face à la France, l'entraîneur Anglais Stuart Lancaster décide de remplacer Danny Care, qui semblait pourtant être le meilleur joueur anglais de la rencontre et le plus inspiré. En fait, ce sont les analyses statistiques sur la condition physique du joueur qui ont poussé son staff à le remplacer : sa vitesse de course diminuait et son rythme cardiaque ne baissait plus lors des phases de récupération. Suite à sa sortie, l’Angleterre n’a plus jamais montré le même visage et la même envie de gagner durant le match. C’est finalement la France qui l’emporta, face à une Angleterre méconnaissable suite à la sortie de son leader technique. 
 </p>

<p>
Finalement, il est indéniable qu’aujourd’hui, le Big Data constitue une révolution dans le sport : en effet, cela permet aux entraîneurs d’optimiser leurs entraînements, de constituer la meilleure équipe possible et de diminuer le risque de blessures des joueurs. Cependant, on a l’habitude de dire que « le sport se joue dans la tête », et c’est bien pour cela que les statistiques ont leurs limites. En sport, l’aspect psychologique est aussi important que l’aspect physique, mais il ne peut pas être amélioré par les sciences : aucune analyse statistique ne peut aider un tennisman à renverser un match ou encore un cycliste à se dépasser dans les derniers kilomètres d’une course. En effet, seules la motivation et l’envie propres à une personne et à un instant donné poussent à réaliser des exploits. C’est le dépassement de soi qui fait la beauté du sport.
 </p>

<p>
<em>
*Le Data Mining est le procédé permettant de trouver des corrélations ou des patterns entre de nombreuses bases de données relationnelles.
</em>
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
								<div class="social-icon social-facebook"><a href="<?php echo "http://www.facebook.com/sharer.php?u=www.bog.ejc.fr/art".$num_arc.".php" ?>" target="_blank" data-original-title="Facebook">Facebook</a></div>
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