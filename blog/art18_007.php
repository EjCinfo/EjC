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
		$titre = "Retour sur l'expérience en Junior Entreprise de Pauline Le Nouveau";
		$sstitre = "Présidente d'EJC en 2017 (Trésorière 2016)";
		$description = "Retour sur l'expérience en Junior Entreprise de Pauline Le Nouveau, présidente d'EJC en 2017 et Trésorière en 2016";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2018/art18_007/1.png";
		$num_arc = "18_007"; //AA_NNN
		$date_publ= mktime(0,0,0,6,03,2018); // heure minute seconde mois jour année
			
		// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');


		//type de l'article: marquer 'video' ou 'images' 
		$type = "video";
		
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2018/art18_006/1.png");
		$arrayLabel = array(1 => "Pauline Le Nouveau, anciene présidente d'EJC" );
		
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = "https://www.youtube.com/embed/QuX19GbA0Rw";
		
	//Auteur de l'article
		$booleanAuteur = true; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "le pôle communication"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = ""; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/communication2018.JPG"; //URL de la photo de l'auteur
		$mail_ejc = "communication@ejc.fr";
		
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps= "
<li style=\"color: #1E90FF;\"> Quel a été ton parcours au sein d’EjC?  </li></p>	
<p>
“J’ai commencé au sein d’EjC en 2016 en tant que trésorière. [...] 
Et après j’ai enchaîné avec une nouvelle année de Présidente. Donc j’ai fini fin janvier 2018.”
</p>	
<li style=\"color: #1E90FF;\">Pourquoi avoir choisi la Junior-Entreprise de ton école? Quelles étaient tes attentes en rentrant à EjC? </li></p>	
<p>“Je voulais faire partie de la vie associative. Je sortais de deux ans de prépa. [...] C’était [l’association] 
qui permettait d’allier le côté amusant et de participer à des évènements vraiment importants tout en ayant le côté professionnalisant [...] et découvrir ce qu’il y avait derrière l’ENSAI et tous les projet possibles.”
 </p>
<li style=\"color: #1E90FF;\">Pourquoi avoir choisi de faire une deuxième année à EjC en tant que Présidente?
</li></p>
<p>
“Après une année à EjC, je n’avais pas vraiment envie que ça s’arrête. [...]On venait d’organiser le Congrès 
régional d’Automne de l’Ouest et j’ai réfléchi à tout ce que ça m’a apporté.” 
</p>
<li style=\"color: #1E90FF;\">En quoi le rôle de chef de projet est-il différent des autres rôles que tu as occupés à EjC?
</li></p>
<p>“En chef de projet, on est au coeur des études. [..] Chef de projet, ça permet de tout voir, que
 ce soit côté administratif [...] mais surtout comprendre les attentes statistiques qui vont être faites 
 et voir comment on peut les résoudre en appliquant ce qui a été vu en cours.”
</p>
<li style=\"color: #1E90FF;\">As-tu eu du mal à associer ta vie associative à ta vie étudiante?
</li></p>
<p>“Quand on est dans une Junior-Entreprise, toute la vie étudiante se base sur [ce projet]. [...] 
J’ai organisé mes semaines autour des activités de la Junior-Entreprise. [...] Tout ce qui est plus extrascolaire,
 ça se faisait avec les gens de la JE lors des congrès [ou autres évènements d’équipe]. [..] Être Junior-Entrepreneur
 , ça permet d’avoir une vie étudiante plus complète.”
</p>
<li style=\"color: #1E90FF;\">En bout du compte, recommandes-tu EjC As-tu rencontré certaines difficultés au sein d’EjC?
?</li></p>
<p>[Sur l’expérience de Présidente] “On se retrouve à devoir gérer une équipe de 19 personnes [...], 
il y a tout ce côté relationnel ou inter-équipe qu’il faut gérer.”
</p>

<li style=\"color: #1E90FF;\">Pourquoi les entreprises doivent-elles faire confiance à EjC plutôt qu’à d’autres organismes pour traiter leurs données?
</li></p>
<p>“Il y a plein de data partout, de données que l’on peut étudier. A l’ENSAI, on nous apprend à prendre des précautions [sur le traitement des données] et interpréter les bons résultats. [On] peut éviter aux entreprises d’utiliser leurs données d’une mauvaise façon et surtout améliorer leurs activités en fonction des données qu’ils auront pu avoir.”


<li style=\"color: #1E90FF;\">Suite à tes deux années à EjC, es-tu intéressée par l'entrepreneuriat?

</li></p>
<p>“J’ai un domaine spécifique dans les biostatistiques et c’est difficile de monter sa boîte. Après je ne dis pas non à l’entreprenariat mais pas tout de suite.”


<li style=\"color: #1E90FF;\">Quels ont été les faits marquants de tes deux années à EjC?
</li></p>
<p>“Le plus marquant, c’est l’organisation du Congrès. On était 18 personnes à organiser un congrès de deux jours qui se [déroulait] à l’ENSAI.[...] C’était pour fêter nos 20 ans. On a accueilli 400 personnes le temps d’un weekend [...].”


<li style=\"color: #1E90FF;\">Un petit mot à passer au mandat actuel?
</li></p>
<p>Un petit mot à passer au mandat actuel?


<li style=\"color: #1E90FF;\">Comptes-tu rejoindre le réseau Alumni des anciens d’EjC?
</li></p>
<p>“Totalement, car il n’est pas encore exploité. Les anciens ne sont appelés que ponctuellement alors [...] que les anciens pourraient apporter énormément [notamment sur la participation à des prix] et même que la Junior peut apporter énormément aux anciens.”


<li style=\"color: #1E90FF;\">Si tu devais résumer ton expérience à EjC en un mot, lequel serait-ce?
</li></p>
<p>“Dépassement. [...] Essayer d’amener la JE un peu plus loin. Et côté dépassement de soi, [...] aller plus loin, c’est très enrichissant.”


<li style=\"color: #1E90FF;\">Si tu devais réinventer le sigle EjC, qu’est ce que ce serait?
</li></p>
<p>“Pour E, Equipe. [...] Le J, Joyeux [pour] tous les moments que l’on partage. [...] Et le C, Challenge car en tant que Présidente ou Trésorière, c’est plein de choses qu’il a fallu faire, des challenges auxquels on n’est pas confronté si on n’est pas Junior-Entrepreneur.”

</p>
</p>	
<br>
<br>
<p>
Encore un grand merci à Pauline Le Nouveau pour tout ce qu’elle a apporté à cette association. Le mandat 2018 lui souhaite le meilleur pour la suite de ses aventures.

Nous vous invitons à consulter son profil LinkedIn:
</p>
<p>Pauline  :<div class=\"social-icon social-linkedin\"><a href=\"https://www.linkedin.com/in/pauline-le-nouveau-89aa5b11b/\" target=\"_blank\" data-original-title=\"LinkedIn\">LinkedIn</a></div>
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