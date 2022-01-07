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
		$titre = "Interview Consultant";
		$sstitre = "Pierre, Clément, Pierre-Guilhem et Sacha reviennent sur leur expérience de consultant";
		$description = "interview";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2019/art19_005/01.png";
		$num_arc = "19_005"; //AA_NNN
		$date_publ= mktime(0,0,0,4,18,2019); // heure minute seconde mois jour année
			
		// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "video";
		
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2019/art19_005/01.png");
		$arrayLabel = array(1 => "Pierre, Clément, Pierre-Guilhem et Sacha reviennent sur leur expérience de consultant" );
		
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = "https://www.youtube.com/embed/8g_Jrsjw8go";
		
	//Auteur de l'article
		$booleanAuteur = true; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "le pôle communication"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "vice-président"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/communication2019.jpg"; //URL de la photo de l'auteur
		$mail_ejc = "communicaton@ejc.fr";
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps= "
<p style=\"color: #1E90FF;\"><strong> En quoi consistait le rôle de consultant dans ton étude ? </strong></p>
<p>
<li><u> Pierre Adam : </u></li> Clément et moi avons travaillé avec une institution financière en Afrique pour le score d’un octroi de crédit. </p>

<p>
<li><u> Clément Ducroquetz : </u></li> L’idée du score d’octroi de crédit, c’est de mettre une note à un client en fonction de ses caractéristiques afin de savoir s’il est plus ou moins risqué et pour que l’institution puisse décider si elle accorde le crédit ou non. </p>
<p>
<li><u> Pierre-Guilhem Riff : </u></li> J’ai réalisé une étude de questionnaires pour la mairie de Malakoff qui souhaitait réaménager un territoire et voulait demander l’opinion aux citoyens à travers des questionnaires. </p>
<p>
<li><u> Sacha Simonnet : </u></li> J’ai traité et exploité des données INSEE pour faire un panorama historique des activités de réparation en France, c’est-à-dire l’ensemble des activités qui consistent à réparer des objets comme, par exemple, une voiture ou un téléphone. Il fallait faire une typologie de ces activités-là par secteur, c’est-à-dire quels types d’objets sont réparés, par zone géographique et également par type d’entreprise (PME, un auto-entrepreneur, etc).</p>

<p style=\"color: #1E90FF;\"><strong> Quelle a été la durée de ton étude ? </strong></p>

<p> <li><u> Sacha Simonnet : </u></li> Environ 2 mois. </p>
<p> <li><u> Pierre Adam : </u></li> L’étude était initialement prévue pour une durée de 15 semaines mais, lorsqu’on a reçu les données, elles étaient incomplètes et difficilement exploitables. Cela demandait un travail de pré-traitement conséquent. On a donc rajouté 2 semaines à l’étude ce qui l’a amenée à durer 17 semaines. </p>
<p> <li><u> Pierre-Guilhem Riff : </u></li> L’étude devait durer 3 mois mais finalement, avec les aléas de l’étude, elle a dépassé d’environ 3 semaines. </p>

<p style=\"color: #1E90FF;\"><strong> Quelles ont été les méthodes statistiques utilisées ? </strong></p>

<p> <li><u> Pierre-Guilhem Riff :  </u></li> On était 2 consultants dans l’étude. Je me suis occupé de la partie uni et bivariée et l’autre consultante a fait la partie multivariée. On a pu partager ce qu’il fallait faire.
 </p>
<p> <li><u> Sacha Simonnet : </u></li> Il s’agissait de statistiques descriptives, notamment univariées, à la portée de tous, notamment des premières années.
 </p>
 <p> <li><u> Pierre Adam : </u></li> Tout d’abord, j’ai fait une étude descriptive des données. J’ai calculé les statistiques de Kruskal-Wallis et de V de Cramer pour croiser le défaut avec les différentes variables qui étaient à notre disposition.
 </p>
 <p> <li><u> Clément Ducroquetz : </u></li> J’ai fait le modèle, ici, une régression logistique. L’idée était d’expliquer une variable binaire (ici le défaut ou non) selon différentes variables comme l’âge par exemple. A partir de ça, on obtient des coefficients pour chaque variable et pour chaque modalité. On peut, alors, calculer un score qui pourra être utilisé par l’entreprise pour décider si un client est risqué ou non. La dernière étape était la rédaction du rapport qu’on a faite à deux, chacun sa partie.
 </p>

<p style=\"color: #1E90FF;\"><strong> Que retires-tu de cette expérience ? </strong></p>

<p> <li><u> Clément Ducroquetz : </u></li> J’avais déjà eu l’occasion de faire une étude de scoring dans le cadre de mes cours, donc c’était là l’occasion de voir une 2e fois une étude de scoring. Je me suis rendu compte que c’était totalement différent, il y avait des réalités complètement différentes. C’était intéressant de voir qu’il ne faut pas juste se cantonner à ce qu’on apprend en cours,  que, dans le monde professionnel, il y a plein d’autres réalités, et qu’il faut s’ouvrir et faire plein de recherches pour s’adapter.
 </p>
 <p> <li><u> Pierre Adam : </u></li> C’était ma première étude avec EjC et c’était la première fois aussi que je réalisais un score. Ça m’a permis de mettre en application des choses que je ne connaissais pas encore et donc ça m’a permis de découvrir de nouvelles méthodologies tout simplement.
 </p>
 <p> <li><u> Sacha Simonnet : </u></li> Ça m’a aidé à travailler dans une structure qui ressemble à un cabinet de conseil à savoir avec des consultants et un chef de projet. Ça m’a également apporté au niveau professionnel étant donné que, quand j’avais des entretiens pour obtenir mon stage de fin d’études, on me parlait souvent de cette expérience, et principalement en bien.
 </p>
 <p> <li><u> Pierre-Guilhem Riff : </u></li> Être consultant chez EjC, c’est pouvoir mettre en pratique les compétences qu’on voit à l’ENSAI, par exemple faire un projet statistique. Ça fait plaisir de se sentir valorisé et de pouvoir aider le monde professionnel grâce à ce qu’on voit à l’ENSAI.
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
	<meta name="keywords" content="Ensai, junior, entreprise, junior-entreprise, JER, étude, big data, statistique, statistiques, stats, analyse, information, informatique, mathémathiques, maths, consultant, L30"/>
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