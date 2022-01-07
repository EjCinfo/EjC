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
		$titre = "Big Data sur le podium";
		$sstitre = "Qui aurait pu prédire que le nuage (cloud) serait un jour tendante?";
		$description = "";
		$urlimageaccueil = "/blog/src/2020/art_formation_info/1.png";
		$num_arc = "20_025"; //AA_NNN
		$date_publ= mktime(0,0,0,11,10,2020); // heure minute seconde mois jour année
 
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
		$nom_auteur = "Iris Godinot"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Communication"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/communication2019.jpg"; //URL de la photo de l'auteur
		$mail_ejc = "communication@ejc.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="
<p>
De plus en plus, le monde de la mode embrasse l'ère numérique. En effet, il suffit de regarder le
défilé automne-hiver 2018 de Dolce & Gabbana, où les drones ont remplacé les humains sur le
podium. Mais ce ne sont pas tous des modèles de robots et des sacs à main volants: le mot à la mode,
le big data. </p>

<p>
Le big data est un sujet d'actualité dans le monde des affaires, et à juste titre. L'avancée de l'ère
numérique a permis aux entreprises de tous les secteurs de rassembler une mine d'informations utiles.
Avec le Big Data, les entreprises ont la possibilité de réaliser des économies, de suivre des processus, de
développer de nouveaux produits et bien plus encore. </p>

<p>Naturellement, les entreprises du monde entier utilisent cette tendance à leur avantage, et le
secteur de la mode ne fait pas exception. Les concepteurs, les fabricants et les détaillants du vêtement
adoptent le Big Data de manière nouvelle et innovante. </p>

<p>Auparavant, l’industrie de la mode s’appuyait sur l’intuition et l’instinct pour décider de sa
direction créative pour la saison. Toutefois, la mode représentant 2% du PIB mondial et avec
seulement 211 millions de consommateurs en ligne aux États-Unis, le marketing et le secteur de la
mode réussissent à tirer profit des opportunités offertes par le big data. </p>

<p>Les différentes directions administratives des entreprises sont souvent déconcertées par la
stratégie à adopter pour le traitement de leurs données. Seulement 22% des entreprises de RFA
(Remises de fin d'Années) ont adopté des produits de Business Intelligence (BI), ce qui est inférieur à
celui des autres industries.</p>

<p>Les entreprises de mode qui tirent parti de la BI ont des marges d’exploitation supérieures de
54% en moyenne, selon WhichERP.com. Mais cette solution nécessite une attention constante pour
gérer, classer et analyser les données disponibles afin d’obtenir un retour sur investissement. </p>

<p style=\"text-indent: 40px;\"><strong>Comment les entreprises de mode peuvent-elles profiter des avantages du Big Data? </strong></p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> STREAMLINING GESTION DU CYCLE DE VIE DES PRODUITS  </li> </strong> </p>

<p>Grâce à l'accès à une telle richesse de données sur les consommateurs, les fabricants et les
développeurs peuvent rationaliser le cycle de vie de leurs produits à presque tous les niveaux, en
supprimant les stocks superflus. </p>

<p>Les marques de mode peuvent mesurer la réaction des clients aux échantillons et aux idées, puis
ajuster leur produit en conséquence. En ce sens, les consommateurs participent littéralement et
activement au processus de conception. Un tel niveau d’adhésion des consommateurs est la garantie
du succès d’un produit.</p>

<p>Le Big Data contribue directement à la socialisation du design. Traditionnellement, les
entreprises conservaient toute la conception en interne (des frais généraux importants). Cependant,
avec l’arrivée des marchés numériques, le design peut maintenant être sous-traité à des designers du
monde entier. Et le Big Data aide les marques à gérer tout le processus de feedback et d'itération avec
facilité. </p>

<p>Dans une usine intelligente, toutes les machines et tous les systèmes nécessaires à la création d'un
produit sont connectés les uns aux autres, plutôt que via une unité de contrôle centrale. </p>

<p>De nos jours, les composants de production peuvent communiquer les problèmes liés aux stocks
bas ou défectueux directement aux systèmes de chargement, qui peuvent alors réagir de manière
autonome et résoudre le problème. Un meilleur traitement des données est au cœur de
l’automatisation. </p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> SEGMENTS CLIENTS PLUS DÉTAILLÉS  </li> </strong> </p>

<p>Les entreprises peuvent classer leurs consommateurs en fonction de leur âge, sexe, appartenance
ethnique, lieu, etc. C’est un outil marketing très utilisé et qui offre d’énormes avantages. </p>

<p>Mais le Big Data va encore plus loin. Il peut être utilisé pour analyser le comportement des
clients sur une variété stupéfiante de facteurs. L’usage des réseaux sociaux peut être utilisé pour
mesurer l’engagement des consommateurs, le temps d’achat pour déterminer le moment où les gens
 sont le plus susceptibles d’acheter, et les points de contact peuvent être testés pour voir comment les
clients s’engagent avec une marque.</p>

<p>Des informations telles que celle-ci peuvent être utilisées pour créer des segments de clientèle
incroyablement détaillés, qui peuvent ensuite être utilisés pour adapter et cibler les efforts marketing
avec des résultats beaucoup plus précis. Qu'il s'agisse de peaufiner les objets des mails ou de
sélectionner des testeurs de produits gratuits, la segmentation de la clientèle est essentielle pour les
marques qui cherchent à améliorer leur capital et à affiner leurs communications. </p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> CAMPAGNES DE COMMERCIALISATION PERSONNALISÉES   </li> </strong> </p>

<p>Tous les spécialistes du marketing savent que la personnalisation est essentielle à la création
d'une campagne marketing, en particulier dans le secteur de la mode. </p>

<p>Le Big Data peut capturer bien plus que des informations de base sur les clients. Il est possible
d’enregistrer et de mesurer toute une gamme de comportements des acheteurs, ce qui ne correspond
pas seulement à qui est un client, mais également à sa nature. </p>

<p>Les marques peuvent donc utiliser des données client détaillées pour créer des campagnes
d'emails hautement personnalisées. </p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> POPULARITÉ DU GOÛT ET DU DESIGN    </li> </strong> </p>

<p>Cette analyse du comportement de la clientèle conduira également à une approche plus
scientifique de la prévision - et de la valorisation des tendances à la mode. L'industrie de la mode
pourra utiliser le Big Data pour visualiser les tendances de la popularité à un niveau plus précis, en
déterminant qui achète quoi et pourquoi. </p>

<p>Là où auparavant les fashionistas dévouées attendaient avec impatience le défilé de la fashion
week ou la dernière édition de Vogue pour les tendances les plus actuelles, elles se tournent
aujourd'hui vers les réseaux sociaux. Les designers publient régulièrement des instantanés de leurs
collections sur Facebook, Instagram ou Pinterest, où leurs fans fidèles (et clients payants) aiment,
partagent et commentent. Ces données sont analysées au niveau microscopique par le biais de
sondages d'opinion et sont utilisées pour évaluer la réaction des consommateurs à toutes les étapes, de
la couleur à la coupe, en passant par la forme et le style. Cela fournit une approche de leurs activités
basées sur les données, et qui apportera inévitablement de plus grands avantages. </p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> COMMERCE MOBILE / M-COMMERCE     </li> </strong> </p>

<p>Globalement, nous pouvons nous attendre à ce que le Big Data profite non seulement au
consommateur, mais également aux marques de mode. Là où les clients peuvent s’attendre à des
produits personnalisés qui répondent à leurs exigences, les entreprises pourront rationaliser leurs
processus et réduire leurs coûts de production.</p>


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