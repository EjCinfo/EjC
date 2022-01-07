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
		$titre = "Devenir consultant";
		$sstitre = "Interviews d’Audrey Puaud et Marco Di Stasio";
		$description = "Audrey et Marco sont tous les deux consultants à EjC. Ils nous racontent leur expérience.";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2017/art17_019/1.jpg";
		$num_arc = "17_019"; //AA_NNN
		$date_publ= mktime(0,0,0,12,13,2017); // heure minute seconde mois jour année
			
		// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
		
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2017/art17_019/1.jpg");
		$arrayLabel = array(1 => "Audrey et Marco, deux consultants d'EjC" );
		
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
		
		//Auteur de l'article
		$booleanAuteur = false; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Dina Rabenjamina, François-Xavier Lepine, Guillaume Hofmann et Killian Poulain"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "étudiants en formation au pôle com souhaitant intégrer EjC"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		
		
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps= "
<li style=\"color: #1E90FF;\"> Devenir consultant : Interviews d’Audrey Puaud et de Marco Di Stasio </li></p>	
<p>Audrey et Marco sont actuellement en troisième année au sein de l’ENSAI. Audrey a été admise sur titre à l’ENSAI à la suite d’un DUT STID (Statistique et Informatique Décisionnelle). Elle est aujourd’hui en spécialisation sciences de la vie au sein de l’école. Quant à Marco, il vient d’un univers totalement différent : il a intégré l’ENSAI cursus ingénieur sur concours (via classe préparatoire MP) et s’est, cette année, spécialisé en gestion des risques. 

</p>	
<p>	Leur point commun : ils sont aujourd’hui consultants à EjC et ont tous les deux accepté de nous faire part de leur expérience. Marco réalise actuellement sa première étude, Audrey en compte déjà plusieurs à son actif.
</p>	
<li style=\"color: #1E90FF;\">Tout d’abord, pourquoi devenir consultant ? </li></p>	
<p>Audrey : <em>Je suis devenue consultante EjC dès que j’ai pu, donc à la fin de ma première année. Pour deux raisons principales : continuer à multiplier mes expériences professionnelles et avoir une source de revenus .</em></p>	
<p>En effet, EjC permet à ses étudiants de mettre à profit les compétences acquises lors du cycle ingénieur et favorise donc l’insertion sur le marché du travail (stages, opportunités de carrière…)
</p>	
<p>Marco : <em>Pour faire une étude pendant l’été tant que j’avais le temps et avoir un peu d’argent de poche […].</em>
</p>	
<p>	Tout travail mérite salaire. Audrey et Marco ne le cachent pas : être consultant vous permet en plus de multiplier vos expériences, de gagner de l’argent, ce qui est toujours bénéfique lorsque vous n’avez qu’une vingtaine d’années et que vous n’êtes pas encore sur le marché du travail.
</p>	
<li style=\"color: #1E90FF;\">Pour qui as-tu réalisé les études? </li></p>	
<p>Audrey : <em>Été 2016, j’ai réalisé une étude pour l’Étudiant (création de questionnaires en français et en anglais, suivi du nombre de réponses, calcul des taux minima de réponses et constitution de la base de données). Été 2017, même étude pour le même client mais cette fois j’ai effectué l’analyse des résultats.</em></p>	
<p>	Audrey a eu la chance de travailler avec l’Étudiant. Mais d’autres consultants ont pu collaborer avec d’autres grands groupes tels que Danone ou encore la SNCF. Ainsi EjC dispose d’un large panel de clients. Les études sont donc nombreuses et restent très différentes.
	De plus, EjC est un partenaire fiable pour les entreprises : les clients n’hésitent pas à refaire appel à nos consultants d’une année sur l’autre. C’est le cas d’Audrey mais également d’autres étudiants.
</p>	
<li style=\"color: #1E90FF;\">Combien de temps te prend ton rôle de consultant(e) ?
 </p></li>
<p>Audrey : <em>Le temps à consacrer est défini avant le début de l’étude et il est souvent fidèle à la réalité et raisonnable. J’y ai consacré 2-3 heures par soir étalées sur plusieurs semaines selon les deadlines. J’ai pu réaliser mon stage tranquillement en parallèle.</em></p>	
<p>En plus d’être enrichissant d’un point de vue professionnel ou financier, le temps de travail requis pour être consultant est gérable en parallèle des enseignements de l’école. Un travail régulier et efficace est suffisant pour devenir un bon consultant. Un chef de projet vous accompagne lors de l’étude et est chargé d’organiser l’étude et d’optimiser votre efficacité.
</p>	
<li style=\"color: #1E90FF;\">Être consultant, qu’est-ce que ça t’apporte ?
 </p></li>
<p>Audrey : <em>Au niveau des apports de l’étude, je dirais que c’est surtout en terme de compétences stats, de synthèse de résultats et de rédaction de rapport mais pas tellement en terme de développement de réseau pro car en tant que consultant je ne suis pas au contact des clients. Mais c’est une belle expérience sur le CV qui est appréciée.</em></p>	
<p>Marco met lui en avant le côté professionnel du consultant qui permet de sortir du cadre scolaire des projets réalisés dans sa formation à l’ENSAI :
	<em>Je dirais que le principal avantage, c’est que tu mets en pratique ce que tu apprends en cours/TP, d’une manière plus proche de la réalité d’un job que dans un cours ou un TP où tout est fait pour que ça se passe bien. </em></p>	
<p>
En fait, travailler pour EjC, c’est aussi prendre de l’avance sur les autres étudiants quant aux demandes du monde professionnel.
</p>	
<li style=\"color: #1E90FF;\">Finalement recommandez-vous EjC ?
 </p></li>
<p>Audrey :  <em>Je recommande EjC évidemment et je ne regrette pas d’être consultante !</em></p>	
<p>En fin de compte, être consultant à EjC vous permet de faciliter votre insertion dans le monde professionnel en mettant en application les compétences acquises lors de votre cycle ingénieur tout en étant rémunéré. 
</p>	
<p>Alors n’attendez plus, devenez consultant à EjC !
</p>	
<br>
<br>
<p>
Linkedin de nos deux consultants :
</p>	
<p>Audrey : <div class=\"social-icon social-linkedin\"><a href=\"https://www.linkedin.com/in/audrey-puaud-67286a12b/\" target=\"_blank\" data-original-title=\"LinkedIn\">LinkedIn</a></div>

</p>	
<p>Marco  :<div class=\"social-icon social-linkedin\"><a href=\" https://www.linkedin.com/in/marco-di-stasio-99a096123/\" target=\"_blank\" data-original-title=\"LinkedIn\">LinkedIn</a></div>
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
						
							<p>Cet article a été rédigé par Dina Rabenjamina, François-Xavier Lepine, Guillaume Hofmann et Killian Poulain, étudiants souhaitant intégrer le pôle communication d'EjC.</p>
							
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