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
		$titre = "Votre expertise santé";
		$sstitre = "Ensai junior Consultant vous apporte son expertise santé";
		$description = "";
		$urlimageaccueil = " URL IMAGE DE L'ACCUEIL DU BLOG";
		$num_arc = "19_009"; //AA_NNN
		$date_publ= mktime(0,0,0,6,5,2019); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2019/art19_009/1.png");
		$arrayLabel = array(1 => "");
 
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
 
		//Auteur de l'article
		$booleanAuteur = false ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Léa Fortat"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Développement Commercial"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/lea.png"; //URL de la photo de l'auteur
		$mail_ejc = "lea.fortat@eleve.ensai.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="
<p>Comment être sûr qu’un produit cosmétique n’est pas dangereux pour la peau ?
Qu’il est de qualité ? Des tests sont réalisés sur ces produits avant qu’ils ne soient
commercialisés, les statistiques constituent un outil essentiel au traitement de ces
tests. La santé est un de nos biens les plus précieux, les statistiques nous aident à
la protéger.
	

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> Ensai junior Consultant réalise des tests de qualité sur vos produits
pharmaceutiques, cosmétiques ou encore issus de l’industrie agroalimentaire. </li> </strong> </p>

<p> L’expertise santé recouvre plusieurs types d’étude :
	<li style=\"padding-left:40px\"> l’épidémiologie </li>
	<li style=\"padding-left:40px\"> les essais cliniques </li>
	<li style=\"padding-left:40px\"> les tests d’efficacité de traitement </li>
	<li style=\"padding-left:40px\"> les évaluations médico-économiques </li>
</p>
 
<p> Les essais cliniques ou les tests d’efficacité ont pour but de mesurer les
effets que peut avoir un médicament, un produit cosmétique, ou encore un produit
alimentaire. La qualité de ces études repose sur la collaboration entre le
biostatisticien et le clinicien. Tout d’abord ils doivent réaliser, ensemble, un
protocole précis qui définit le déroulé des opérations, ensuite le clinicien effectue
les essais cliniques et le biostatisticien les analyse. Les données analysées sont
généralement des données socio-démographiques, biologiques, cliniques ou
encore sémiologiques. À la fin du protocole, le biostatisticien et le clinicien doivent
être capables de juger de l’efficacité (soigner une maladie) et de la qualité (n’est pas
dangereux pour la santé) d’un produit, donc s’il est commercialisable ou non.
	</br> Les études d'épistémologie fonctionnent différemment, même si elles
reposent également sur la collaboration de professionnels de la santé et de
statisticiens. Le but ici est de mesurer l’influence de certains facteurs
socio-environnementaux (mode de vie, caractéristiques individuelles, milieu social,
etc) sur les pathologies (leur évolution, fréquence, lieux d’apparition, etc). Ce
secteur des statistiques de la santé est en expansion depuis les épisodes
d’épidémie tragiques comme Ebola ou la vache folle mais aussi depuis la prise de
conscience mondiale de l’urgence climatique. En effet, les
statisticiens-épidémiologistes mesurent également l’influence de facteurs polluants,
comme les émissions de gazs à effet de serre ou le trafic routier, sur
l’environnement.
</br>
Quant aux évaluations médico-économiques, leur but n’est pas de mesurer
la qualité d’un produit mais plutôt d’analyser l’influence de sa commercialisation. À
travers ces études, l’objectif est de pouvoir décrire les liens entre systèmes de
santé et politiques économiques et publiques. Les études médico-économiques
sont plus globales et demandent moins d’analyses médicales ou biologiques que
les études présentées ci-dessus mais tous ces types d’études restent très liés.
</p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> Une spécialisation à l'ENSAI : Statistiques pour les sciences de la vie </li> </strong> </p>

<p> La commercialisation d’un produit dangereux peut avoir de graves
conséquences sur la santé des individus, de même que les épidémies non
contrôlées peuvent décimer une partie de la population mondiale. Il est alors
essentiel de former des biostatisticiens compétents.
	</br> Les étudiants issus de la filière Statistiques pour les sciences de la vie
reçoivent une formation complémentaire en statistiques de la santé (cours d’essais
cliniques, d’épidémiologie et de données Omics), qui font d’eux des ingénieurs très
convoités sur le marché du travail du fait de leur spécialisation unique. De plus,
chacun de ces cours est accompagné d’un projet que les étudiants réalisent en
autonomie. Ce projet est en partie jugée par des professionnels de la santé.
L’ENSAI compte, d’ailleurs, parmi ses partenaires Amaris, Inserm, Quintiles, Servier
et Keyrus. Avant même leur entrée sur le marché du travail, les étudiants de l’ENSAI
ont, alors, déjà été confrontés à une problématique réelle du domaine de la santé et
y ont apporté une solution efficace.
</br>
Le 2ème atout des étudiants de cette filière est qu’ils sont très diversifiés
dans leur spécialité. Si l’industrie pharmaceutique est le premier recruteur de ces
étudiants, certains diplômés de l’ENSAI ont réalisé des travaux dans les
cosmétiques, le traitement des déchets, secteurs qui prennent de plus en plus
d’importance, mais aussi dans le génotypage ou encore la mesure des risques de
produits alimentaires.
</br>
Enfin une autre filière de l’Ensai permet de réaliser des expertises santé :
Ingénierie statistiques et territoire de la santé. Cette filière n’est pas autant
spécialisée dans le domaine de la santé que la filière présentée ci-dessus mais elle
permet aux étudiants d’avoir un regard plus politico-économique sur les
problématiques de la santé. Ainsi, EjC privilégie les étudiants issus de cette filière
pour les études d’analyse médico-économique.
</p>

<p> Comme EjC, faites confiance aux étudiants de l’ENSAI ! </p>

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
La coloration syntaxique est réalisé par GeSHi
Aide | Forums| Licence