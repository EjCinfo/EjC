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
		$titre = "Salon Entreprendre dans l'Ouest";
		$sstitre = "Du 16 au 18 Octobre 2017";
		$description = "Du 16 au 18 Octobre dernier, nous étions présents au salon Entreprendre dans l'Ouest. La quasi totalité de l'équipe fut mobilisée pour représenter Ensai Junior Consultant devant les visiteurs du salon.";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/art17_017/team1.jpg";
		$num_arc = "17_017"; //AA_NNN
		$date_publ= mktime(0,0,0,10,20,2017); // heure minute seconde mois jour année
			
		// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
		
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2017/art17_017/team1.jpg",2 => "src/2017/art17_017/team3.jpg",3 => "src/2017/art17_017/team5.jpg",4 => "src/2017/art17_017/jules.png",5 => "src/2017/art17_017/team4.jpg");
		$arrayLabel = array(1 => "Mercredi: Clément, Damien, Marie, Coralie",2=> "Mardi: Valentin, Cédric, Martin et Maxence",3 => "Styve et Jules pendant le Startup Contest",4 => "Jules au Startup Contest",5 => "Valentin et Martin" );
		
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
		
		//Auteur de l'article
		$booleanAuteur = false; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Martin Masson"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "membre du pôle informatique"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/martin.png"; //URL de la photo de l'auteur
		$mail_ejc = "webmaster@ejc.fr";
		
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps= "<p>Depuis le premier salon <em>Entreprendre dans l’Ouest</em>, 106 237 visiteurs ont arpenté les allées et rencontré près de 1 600 exposants. Cette année les visiteurs de cette vingtième édition, ont pu profiter de 140 exposants et 190 animations pour se former, s’informer et innover. 
Qu’ils soient venus pour rencontrer des experts parmi les 300 présents, pour développer leur réseau, enrichir leurs connaissances ou capter de nouvelles tendances. Les 8 000 entrepreneurs espérés ont pu bénéficier d’un riche programme, soigneusement préparé par la <em>CCI d’Ile et Vilaine</em>, le <em>Club de Repreneur Entrepreneur</em>, et la <em>Chambre des Métiers et de l’Artisanat</em>.

</p>
Ces trois jours rythmés au son des multiples conférences ont vu se rencontrer entrepreneurs, startupers, repreneurs, étudiants pour ensemble s'entraider à la construction d’un projet.
</p>
Tout comme <em>Bretagne Conseil</em>, la <em>Junior-Entreprise</em> de <em>Rennes School of Business</em>, <em>Ensai Junior Consultant</em> avait son stand au Parc Expo de Rennes en face de <em>Ouest France</em>. La quasi-totalité de l’équipe s’est alors relayée pour aller à la rencontre des différents acteurs de ce salon.
</p>

Nous étions présents dès lundi matin pour préparer notre stand. Durant trois jours, notre équipe a répondu aux questions des entrepreneurs pour leur faire connaître le mouvement des <em>Junior-Entreprises</em>, leur présenter l’ensemble des compétences de nos consultants et proposer nos services.
</p>
Les entrepreneurs présents sur ce salon et avec qui nous avons eu la chance de discuter venaient de tous les horizons. Certains visiteurs préparaient un projet dans le graphisme, d’autres dans le coaching, le développement ou le conseil. 
</p>
Mercredi après-midi, l’équipe fut séparée en deux pour gérer en parallèle notre stand et le stand que nous avons pu ouvrir grâce à <em>UBL Pépite</em>. <em>UBL Pépite</em> est un organisme lié à l’Université Bretagne Loire faisant parti du réseau national pépite. Leur but est de guider les étudiants dans l’entreprenariat. Pour ce salon, <em>UBL Pépite</em> a invité les Junior-Entreprises rennaises (JER) à présenter leurs services à l’entrée du salon. 
</p>
En pleine période de RFP (recrutement, formation, passation), les mandats entrants et/ou sortants de <em>IAE Conseil</em>, <em>Science Po Rennes Junior Conseil</em>, <em>Ouest INSA</em>, et <em>Junior Centrale Supelec</em> ont pu, comme nous, profiter de la visibilité offerte par <em>UBL Pépite</em>. Nous avons pu par la même occasion rencontrer pour la première fois les nouveaux visages des équipes de nos confrères des JER.
</p>
Sur le plan personnel, ce salon fut l’occasion pour le pôle Développement Commercial d’EjC de transmettre aux autres administrateurs un peu de leur savoir en prospection. Après avoir reçu une formation en amont, ce fut pour la plupart d’entre nous, l’occasion de s’exercer aux techniques commerciales et d’acquérir un peu plus d’aisance dans la parole. 
</p>
Symbole de cet entrainement, la participation de Jules à <em>Pitch Boxing Day</em>, un exercice de promotion de son entreprise en public, au micro, devant les caméras des organisateurs. En coopération avec Styve, Jules a vendu <em>Ensai Junior Consultant</em> pendant 90 secondes sur le ring de boxe gonflable installé par <em>Startup Contest</em> et <em>Entrepreneur Engine</em>.
</p>
Durant ces 3 jours, nous avons également découvert certains des enjeux qu’impliquent l’entreprenariat et avons pu observer les différentes étapes de construction engendrées par la création d’un projet. Une entreprise naît d’une idée, il faut ensuite s’entourer de personnes et entreprises bienveillantes pour faire grandir le projet. C’est par ce moyen que, certains des entrepreneurs à qui nous avons parlé, ont pu finir leur carrière à la tête d’une entreprise de 100 employés après avoir quitté à 35 ans le monde des grandes-entreprises.
</p>
Cette expérience, nous la devons à l’Ensai, qui comme toujours, nous a encouragé dans nos démarches pour faire vivre <em>Ensai Junior Consultant</em>. Nous aimerions également remercier Geneviève Vaidie de <em>UBL Pépite</em> pour cette demi-journée sur leur stand, Pauline Roger d'Essentiel, la <em>CCI d’Ile et Vilaine</em>, <em>le Club de Repreneur Entrepreneur</em>, la <em>Chambre des Métiers et de l’Artisanat</em> pour l’organisation de ce salon. ";
		
		
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
							<p>Cet article a été rédigé par <?php if($booleanAuteur){echo $nom_auteur;}else{echo $nom_auteur.", ".$titreAuteur." chez Ensai Junior Consultant" ;} ?>.</p>
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
								<div class="social-icon social-linkedin"><a href="<?php echo "https://www.linkedin.com/sharing/share-offsite?mini=true&url=http://www.blog.ejc.fr/blog/art".$num_arc."&title=Blog de EjC - ".$titre."&summary=".$description."&source=ejc.fr" ?>" target=\"_blank\" data-original-title=\"LinkedIn\">LinkedIn</a></div>
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