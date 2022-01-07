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
		$titre = "Interview Alumni";
		$sstitre = "Clément, Florian, Guillaume, Pauline et Bastien reviennent sur leur expérience chez EjC";
		$description = "interview";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2019/art19_004/01.png";
		$num_arc = "19_004"; //AA_NNN
		$date_publ= mktime(0,0,0,2,28,2019); // heure minute seconde mois jour année
			
		// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "video";
		
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2019/art19_004/01.png");
		$arrayLabel = array(1 => "Clément, Florian, Guillaume, Pauline et Bastien reviennent sur leur expérience chez EjC" );
		
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = "https://www.youtube.com/embed/wEqOzDsvG6I";
		
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
<p style=\"color: #1E90FF;\"><strong> Présente-toi : </strong></p>
<li><u> Clément :  </u></li> Je m’appelle Clément, j’ai 22 ans et je suis la filière Gestion des risques (et Ingénierie financière) à l’ENSAI.<br>
<a href=\"http://www.ensai.fr/formation/id-3e-annee-ingenieur/filiere-gestion-des-risques-et-ingenierie-financiere.html\"> Gestion des risques et Ingénierie financière </a></p>
<p>
<li><u> Florian : </u></li> Florian Rochet, j’ai 23 ans, j'ai été diplômé de l'ENSAI en 2017, et j'ai fait la filière Marketing quantitatif et Revenue management.<br>
<a href=\"http://www.ensai.fr/formation/filiere-marketing-quantitatif-et-revenue-management.html\"> Marketing quantitatif et Revenue management </a></p>
<p>
<li><u> Guillaume : </u></li> Guillaume Guérin, 26 ans, et j'ai fait la filière Gestion des risques.<br>
<a href=\"http://www.ensai.fr/formation/id-3e-annee-ingenieur/filiere-gestion-des-risques-et-ingenierie-financiere.html\"> Gestion des risques et Ingénierie financière </a></p>
<p>
<li><u> Pauline : </u></li> Alors je m'appelle Pauline, j'ai 23 ans, j'ai fait prépa maths puis j'ai enchaîné avec l'ENSAI, et j'ai fait filière Biostat (Statistique pour les sciences de la vie).<br>
<a href=\"http://www.ensai.fr/formation/id-3e-annee-ingenieur/filiere-statistique-pour-les-sciences-de-la-vie.html\"> Statistique pour les sciences de la vie </a></p>
<p>
<li><u> Bastien : </u></li> Bastien, 24 ans, et j'ai fait la filière Statistique et ingénierie des données.<br>
<a href=\"http://www.ensai.fr/formation/id-3e-annee-ingenieur/filiere-statistique-et-ingenierie-des-donnees.html\"> Statistique et ingénierie des données </a></p>
<p></p>
<p style=\"color: #1E90FF;\"><strong> Où travailles-tu maintenant et que fais tu ? </strong></p>	
<li><u> Clément :  </u></li> Alors, la filière gestion des risques est une filière qui prépare particulièrement à travailler dans le domaine de la finance, donc la gestion des risques en banque, et je vais faire mon stage de fin d'étude chez LCL à Paris.</p>
<p>
<li><u> Florian : </u></li> Actuellement je suis consultant en Data Science, pour une société de conseil qui s'appelle « Soft Computing », j'ai réalisé diverses missions pour Fnac, Le Télégramme, ou encore bientôt, chez HSBC. </p>
<p>
<li><u> Guillaume : </u></li> Je suis analyste quantitatif à Natixis, la banque de financement et d'investissement du groupe Banque Populaire et Caisse d'épargne. </p>
<p>
<li><u> Pauline : </u></li> Je travaille au sein d'Amaris HEMA pour la mise sur le marché des médicaments et l'économie de la santé. </p>
<p>
<li><u> Bastien : </u></li> Je suis consultant en Data Science chez DataFab et leader du pôle Data Science. </p>
<p></p>
<p style=\"color: #1E90FF;\"><strong> Dans quel pôle étais-tu au sein d’EjC ? </strong></p>	
<li><u> Clément :  </u></li> J'ai été trésorier en 2017.</p>
<p>
<li><u> Florian : </u></li> J'ai fait une première année en tant que trésorier, puis j'ai continué ensuite l'aventure JE en étant à la présidence de l'équipe pour l'année des 20 ans de la JE. </p>
<p>
<li><u> Guillaume : </u></li> À EjC j'ai été tout d'abord trésorier en 2013, puis ensuite j'ai poursuivi l'aventure en tant que président. </p>
<p>
<li><u> Pauline : </u></li> J'ai fait un an à la trésorerie, donc en tant que trésorière, puis un an à la présidence. </p>
<p>
<li><u> Bastien : </u></li> J'ai fait un an en tant que chargé de mission informatique puis un an en tant que vice-président. </p>
<p></p>
<p style=\"color: #1E90FF;\"><strong> Quelles sont, selon toi, les raisons de rejoindre EjC ? </strong></p>	
<li><u> Clément :  </u></li> Je dirai que c'est vraiment une expérience unique, c'est vraiment l'occasion de travailler en équipe, de découvrir une première fois le monde professionnel dans un cadre assez sympathique. Et c'est l'occasion d'acquérir beaucoup de compétences dont certaines qu'on ne nous apprendra jamais à l'école, et de nous préparer pour la suite.</p>
<p>
<li><u> Florian : </u></li> Avant tout, EjC c'est d'abord une aventure un peu hors du commun, à mi-chemin entre le monde professionnel et le monde associatif étudiant, et c'est aussi en quelque sorte une manière de mettre un premier pied dans le monde professionnel, tout en s'éclatant et en rencontrant des personnes incroyables. </p>
<p>
<li><u> Guillaume : </u></li> L'aventure Junior-Entreprise est une magnifique aventure entrepreneuriale, donc si vous avez envie d'essayer des choses, d'expérimenter des projets, c'est l'endroit parfait, avant justement, d'entrer dans le monde professionnel. Dans le monde professionnel on n'aura pas forcément cette liberté pour entreprendre. Cette parenthèse Junior-Entrepreneur, elle est exceptionnelle pour tenter des choses. Donc lancez-vous, et vous n'avez rien à perdre. </p>
<p>
<li><u> Pauline : </u></li> Ça donne l'occasion de découvrir le monde professionnel tout en s'amusant en allant aux congrès et de faire partie d'une équipe et profiter, pour mon cas, de 2 années au sein d'EjC. </p>
<p>
<li><u> Bastien : </u></li> C'est apprendre autrement que via les cours, en faisant des projets concrets, et aussi avoir une superbe ambiance avec le reste de l'équipe. </p>
<p></p>
<p style=\"color: #1E90FF;\"><strong> Peux-tu nous parler de la CNJE dont tu fais partie ? </strong></p>
<li><u> Bastien : </u></li> J'ai fait un an au sein de la CNJE, au pôle formation où j'ai pu aller dans plein de congrès, qu'ils soient régionaux ou nationaux pour aller former pleins de junior-entrepreneurs partout en France, et c'était une expérience super enrichissante.
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