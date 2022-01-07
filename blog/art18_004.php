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
		$titre = "Women’s Talk";
		$sstitre = " pour les junior-entreprises 2018";
		$description = "Women’s Talk pour les junior-entreprises 2018";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2018/art18_004/1.jpg";
		$num_arc = "18_004"; //AA_NNN
		$date_publ= mktime(0,0,0,03,15,2018); // heure minute seconde mois jour année  
			
		// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');


		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
		
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2018/art18_004/2.png");
		$arrayLabel = array(1 => "Programme");
		
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
		
		//Auteur de l'article
		$booleanAuteur = false ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Maricke Geffroy "; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Vice-Présidence"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/maricke.jpg"; //URL de la photo de l'auteur
		$mail_ejc = "president@ejc.fr";
		
		
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps= "

<p> 
Le 15 février dernier, la Confédération Nationale des Junior-Entreprises (CNJE) et Ecole du Louvre Junior Conseil ont organisé la seconde édition du Women’s Talk pour les Junior-Entreprises. Un événement labellisé #JamaisSansElles qu’EjC a suivi sur les réseaux sociaux. Cette conférence donnait la parole aux femmes mais pas seulement. Au programme : 3 tables rondes, animées par 14 intervenants femmes et hommes autour des sujets suivants : <em>“L'entreprenariat féminin, existe-t-il des freins ?”, “L’essor des femmes dirigeantes, un nouveau leadership ?”, “Révolutionner son domaine et dépasser les idées reçues” </em>. Retrospective.


</p>	
<p>	Selon Jamais Sans Elles, <em>“le féminisme est un humanisme, c’est par la collaboration qu’on peut arriver à l’égalité” </em>. Créée en 2016, cette association a pour but de promouvoir la mixité. Ainsi, ses membres, des acteurs du numérique, des médias et de la politique,  s’engagent à suivre une règle simple : ne pas participer aux débats dans lesquels aucune femme n’est invitée à s’exprimer. L’entreprenariat féminin est en marche, les intervenants de la première table ronde de la soirée constatent que <em>“163 millions de femmes ont créé leurs entreprises dans le monde ces deux dernières années” </em>. Cependant, craintes, stéréotypes, risques financiers sont des freins pour ces femmes pleines d’ambitions. Pour Goretty Ferreira, fondatrice et dirigeante de l’Agence Pour l’Entreprenariat Féminin, ils proviennent de la “méconnaissance de soi” et des croyances transmises par l’éducation et les stéréotypes sociaux. C’est de la connaissance de soi que résulte une plus ou moins grande confiance en soi. Pourtant, gardons à l’esprit que la confiance ne peut jamais atteindre les 100%. 

</p>	

<p>Dans le monde de l’entreprenariat, la peur est alors omniprésente, mais il s’agit d’une émotion positive qui offre la possibilité de prendre du recul et de sortir de sa zone de confort, ajoute Axelle Tessandier, fondatrice d’AXL Agency. <em>“Il faut valoriser le courage car la confiance en soi, on en manque.” </em> À chaque fois qu’une femme ose s’exprimer dans sa sphère professionnelle, elle devient rôle modèle, et inspire les autres. C’est par exemple le cas d’Ada Lovelace, créatrice du premier programme informatique au monde. Pour Tiphaine Hecketsweiler, directrice de la communication du groupe AccorHotels, il est essentiel que ces rôles modèles soient concrets et reflètent des carrières accessibles.

</p>	

<p>Pour Célia Poncelin, fondatrice de Lunestist, si un projet d’entreprenariat ne perdure pas, on en garde au moins un réseau professionnel. Alizée Doumerc, co-fondatrice de Guestviews précise que l’entreprenariat est une question de personnalité, volonté, résilience plus que de genre. Pour entreprendre, il faut avoir conscience de ses forces, s’entourer d’un réseau professionnel, ne pas s’auto-censurer, suivre ses envies et ses rêves avant de se persuader d’en être capable. Faire en sorte qu’être une femme dans un milieu d’hommes soit une force, tels sont les conseils donnés par les intervenants, car “vous pouvez tout faire”. La mixité dans le monde professionnel favorise la créativité, la performance et le pragmatisme dans l’innovation. Xavier Alberti ajoute : <em>\"les femmes sont la moitié de l’humanité, à partir de là elles devraient être la moitié de tout ce qu’on fait\"</em>.
</p>	
<p>La démocratisation de la mixité est un enjeu majeur pour révolutionner son domaine et dépasser les idées reçues. Aujourd’hui, seules 15% des femmes travaillent dans le secteur du numérique et 6% uniquement exercent les métiers techniques de l’intelligence artificielle, du deep learning et du machine learning par exemple. Ainsi, dans plusieurs domaines il est difficile de se professionnaliser ou d’accéder à un poste à responsabilités lorsque l’on est une femme. Selon Camille Morineau, pour réécrire le futur, il faut réécrire l’Histoire à travers les femmes, reconnaître leur travail, les rendre visibles, leur apporter une certaine reconnaissance. Le leadership au féminin est pourtant d’actualité mais toujours rare : Engie est la seule entreprise du CAC40 dirigée par une femme. Ana Busto, directrice de la communication, explique que cela a été rendu possible grâce à la décision prise il y a 10 ans par l’entreprise de progresser sur la place des femmes. Aujourd’hui, seulement un quart des employés de Engie sont des femmes, mais elles représentent 56% du conseil d’administration. Selon une enquête réalisée auprès des employés d’Engie, avoir une femme dirigeante est un facteur de motivation.

</p>	
<p>“Mixité”, “courage”, “peur”, “rôle modèle”, “réseau professionnel” et “Histoire” étaient les maîtres mots de cette édition du Women’s Talk des Junior-Entreprises. 
Ensai junior Consultant, fière de faire partie du mouvement des Junior-Entreprises mais aussi d’avoir depuis 2 ans, une femme à sa présidence, attend avec impatience la prochaine édition de ce Women’s talk.

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