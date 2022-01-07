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
		$titre = "CRP";
		$sstitre = "Congrès Régional de Printemps";
		$description = "CRP organisé par Ouest Insa";
		$urlimageaccueil = "http://www.blog.ejc.fr/src/2018/art18_005/1.jpg";
		$num_arc = "18_005"; //AA_NNN
		$date_publ= mktime(0,0,0,03,31,2018); // heure minute seconde mois jour année  
			
		// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');


		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
		
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2018/art18_005/1.jpg",2=> "src/2018/art18_005/2.JPG",3=>"src/2018/art18_005/3.jpg");
		$arrayLabel = array(1 => "l'équipe de EJC",2=> "Les JE de l'Ouest",3=> "Alan et Tanguy au tir à l'arc");
		
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
		
		//Auteur de l'article
		$booleanAuteur = true ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "le pôle communication"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = ""; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/communication2018.JPG"; //URL de la photo de l'auteur
		$mail_ejc = "communicaton@ejc.fr";
		
		
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps= "

<p> 
Les 17 et 18 mars 2018, le rendez-vous des Juniors-Entreprises de l’Ouest avait lieu à l’INSA de Rennes ! Celles-ci étaient toutes conviées au Congrès régional de Printemps (CRP), organisé cette année par Ouest Insa. Retour sur cet événement haut en couleur, apprécié à sa juste valeur par EjC et tous les participants :
</p>	

	

<p>Tous les ans, la CNJE organise quatre congrès, un par saison. Ceux d’été et hiver ont un rayonnement national (un seul lieu, en France) tandis que ceux de printemps et d’automne ont un rayonnement régional*, ils se déroulent dans 8 endroits différents de toute la France. Ainsi le CRP est, tout comme le CNE (Congrès National d’Eté), un week-end “pour se former, échanger, partager, découvrir et célébrer le mouvement des Junior-Entreprises” (Juliette Murris, vice-présidente du mandat 2017 d’EjC - article - <a href=\"http://www.blog.ejc.fr/art17_010.html\"> EjC au Congrès National d'Été 2017 </a>. Le samedi fut l’occasion pour nos administrateurs de prendre part à des formations dispensées par la CNJE et les Junior-Entreprises volontaires. Dans une ambiance moins studieuse mais tout aussi conviviale, le dimanche permit aux Junior-Entrepreneurs les plus courageux de pratiquer différents sports et de se détendre.
</p>	

<p><em>NB : Cette année est exceptionnelle pour les Junior-Entreprises bretonnes puisqu’après avoir appris que Ouest Insa avait été choisie pour accueillir le CRP 2018, la CNJE a révélé que le CNE aurait lieu à Guidel, dans le Morbihan !
</em></p>
	
<p>Retour à présent, sur quelques-unes des formations dispensées le samedi : 
</p>
	
<p><li> formation <em>communication</em>,  dispensée par Arnaud Perez, membre du pôle communication de la CNJE : Alan F, Kilian P et Arthur Q y avons assisté et ce fut l’occasion pour nous d’en apprendre plus quant à l’utilité et l’usage conseillé de chaque réseau, d’enrichir notre bibliothèque de sites et logiciels utiles à la création de visuels / vidéos. Nous souhaitons également profiter de l’expérience de la CNJE concernant la planification de la communication.<\li>

</p>

<p><li>	formation <em>Start up et business model - Bring own your device</em> : l’occasion d’entendre parler d’une structure professionnelle susceptible d’intéresser les Juniors-Entrepreneurs et de son fonctionnement.<\li>
</p>


<p><li> formation <em>“Comment réagir face à vos Datas ?”</em>, dispensée par Juliette M,  d’Ensai junior Consultant (merci à elle !) : à travers cette formation, Juliette tenait à partager le savoir statistique que l’on aquiert à l’Ensai. Des termes techniques, souvent évoqués dans notre milieu, tels que “Data mining”, “Analyses descriptive et exploratoire”, “Causalité” vs. “Corrélation”, ont été abordés.</li>
</p>

<p><li>formation <em>Image de marque et Communication externe</em>, dispensée par Antoine Schauli, vice-président de la CNJE, et dont Julie M (responsable de notre pôle communication) ressortait toute enjouée, “On a appris plein de choses !” : comment valoriser nos compétences à travers les différents réseaux aux yeux des entreprises et montrer notre expertise à travers un contenu adapté, notamment.
</p></li>


<p><li>formation <em>Maîtriser son suivi d’étude</em>, suivie par Mariem B et Mathilde L : exploration des origines possibles d’un litige, processus de résolution d’un problème, abord d’un RDV-client, clotûre et finalisation d’une étude tels étaient les thèmes présentés lors de cette formation.
</p></li>

<p>De nombreuses autres formations eurent lieu, Martin M et Maricke G ont par exemple passé leur après-midi en compagnie de consultants d’EY et d’autres Juniors-Entrepreneurs, mettant en scène un jeu de rôle sur le thème <em>Management de consultants</em>.</p>;

<p>Un petit mot pour Ouest Insa :</p>
<p>La JE de l’Insa de Rennes fait, tout comme Ensai junior Consultant, partie des Junior-Entreprises Rennaises (communément appelées JER). Cette organisation récente (créée en novembre 2015) rassemble cinq Junior-Entreprises, qui, malgré leurs domaines de compétences différents, s’entraident et travaillent ensemble dans le but de faire rayonner le mouvement et de promouvoir leurs prestations. N’hésitez pas à consulter leur site,<a href=\"http://jer.bzh/\">jer.bzh</a>, pour plus d’informations.
Mais ne nous égarons pas, nous tenions surtout à remercier une fois de plus, à travers cet article, Ouest Insa, qui a réalisé un superbe travail pour l’accueil de cet événement. Ouest Insa - <a href=\"http://www.ouest-insa.fr/\">www.ouest-insa.fr</a> - est une Junior comparable à Ensai junior Consultant, dans la mesure où elle est issue d’une école d’ingénieur (son domaine d’activité est plus généraliste, cependant) et est de taille similaire. La Junior-Entreprise bretonne a profité de l’accueil de ce CRP18 pour prospecter, redorer son image et se rapprocher des autres JE de l’Ouest, tout cela sous les yeux des administrateurs de la CNJE**. Nous ne pouvons que les féliciter pour cette belle performance !
</p>

<p>Le mot de la fin :</p>
<p>Enfin, les administrateurs d’EjC ont pu durant ce week-end consolider leurs compétences et engranger de l’expérience nécessaire pour notre rayonnement, mais également tisser des liens avec des Juniors-Entrepreneurs, voire souder ceux déjà existants, avec Ouest Insa notamment. De plus, la quasi totalité de notre équipe était présente, ce qui montre la volonté de s’inscrire davantage dans le mouvement des JE de la part de notre équipe ! 
</p>

<p><em>
*la CNJE a ses propres régions : le Nord, le Nord-Ouest, l’Ouest, le Sud-Ouest, l’Île-de-France, l’Est, le Centre-Est & la Méditerranée.
</em></p>
<p><em>**CNJE : Confédération Nationale des Junior-Entreprises - <a href=\"http://www.junior-entreprises.com\">www.junior-entreprises.com</a>
</em></p>
	"	
		
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