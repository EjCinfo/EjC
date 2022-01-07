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
		$titre = "Des statistiques ethniques en France?";
		$sstitre = "Des statistiques ethniques en France?";
		$description = "";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2021/art21_001/miniature.jpg";
		$num_arc = "21_001"; //AA_NNN
		$date_publ= mktime(0,0,0,01,21,2021); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2021/art21_001/1.png");
		$arrayLabel = array(1 => "");
 
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
 
		//Auteur de l'article
		$booleanAuteur = true ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Clara Baudry"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Clara Baudry"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/clara.JPG"; //URL de la photo de l'auteur
		$mail_ejc = "clara.baudry@ejc.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="

<p>
La mort de George Floyd le 25 mai dernier et la récente altercation avec la police en France a ravivé
un débat ancien. Pour ou contre les statistiques ethniques ? Des grands noms s’opposent sur la
question Héran face à Le Bras. Mais pas seulement il semble que tous les français aient un avis sur la
question. Posez la question à un dîner de famille et rapidement votre cousine se révoltera face aux
propos indécents de son oncle. Cet article ne prétend pas clore le débat mais donner des clés de
réflexion et surtout faire un bilan de ce qui existe déjà ainsi que de ce qui est légal ou non. </p>




<p>
<li style=\"padding-left:40px\">
Pourquoi font-elles débat en France ?
</li>
</p> 

<p> Les statistiques « ethniques » font débat en France depuis plusieurs décennies déjà. Certains
souhaitent leur généralisation afin de pouvoir « mesurer pour alerter, piloter, évaluer et avancer » en
ce qui concerne les discriminations. D’autres craignent une légitimation par la statistique officielle
d’une grille de lecture ethno-raciale de la société menant à une essentialisation des catégories et le
renforcement des stéréotypes. </p> 

<p>
<li style=\"padding-left:40px\">
C’est interdit en France, non ?
</li>
</p> 


<p>
Non bien qu’on entende souvent qu’il est illégal de produire des statistiques ethniques en France, ce
n’est pas le cas. Il existe déjà de nombreuses enquêtes ! Cependant, l’élaboration de telles
statistiques est strictement encadrée du point de vue juridique. 
</p> 


<p>
<li style=\"padding-left:40px\">
Alors qu’est-ce qu’on a le droit de faire ?</li>
</p> 

<p>
Il est interdit de traiter des données à caractère personnel faisant apparaître directement ou
indirectement les origines raciales des personnes. L’utilisation des variables de race ou de religion
dans les fichiers administratifs est interdite. Cependant, la statistique publique peut réaliser des
études sur la mesure de la diversité des origines des personnes, de la discrimination et de
l’intégration en se fondant sur des données objectives telles que le nom, l’origine géographique ou la
nationalité antérieure à la nationalité française. Des données subjectives peuvent aussi être
recueillies dans des enquêtes statistiques. 
</p> 

<p>
<li style=\"padding-left:40px\">
Comment collecte-t-on ces données ?</li>
</p> 

<p>
Il existe quatre principales façons de récolter des données sur les origines ethniques. L’autodéclaration, la perception directe par autrui, le reclassement a posteriori et l’auto-hétéro-perception.
L’auto-déclaration s’apparente à une déclaration identitaire, on demande aux enquêtés qu’elle est,
selon eux, leur appartenance ethnique. Elle reflète donc en partie la façon dont l’individu se définit,
mais également son intériorisation des représentations le concernant. Dans la perception directe par
autrui le chercheur tente de se mettre à la place du « catégorisant » pour reproduire la logique de
son classement à vue. Le reclassement a posteriori est une méthode « objective » puisqu’elle utilise
des données d’état civil qui sont censées ne pas varier selon les perceptions individuelles. Enfin,
l’auto-hétéro-perception consiste à déclarer comment l’on pense être perçu par autrui.
</p> 

<p>
<li style=\"padding-left:40px\">
Quelles enquêtes existent déjà ?</li>
</p>

<p>
Comme le souligne l’Insee sur son site, « la statistique publique produit régulièrement et depuis
longtemps des statistiques intégrant le pays de naissance, la nationalité à la naissance et la
nationalité actuelle des personnes. Le croisement du pays de naissance et de la nationalité à la
naissance permet de dire si une personne est immigrée (née étrangère à l'étranger et résidant en
France) ou s’il n’est pas ». C’est le cas pour le recensement de la population, l'enquête emploi,
l’enquête budget des familles et l’enquête logement.
L'Insee et les services statistiques ministériels mènent plus rarement des enquêtes sur des données
subjectives. Cependant, l'Insee a mené avec l'Ined une enquête sur l'impact des origines sur les
conditions de vie et les trajectoires sociales, «<i> Trajectoires et Origines </i>» (TeO) en 2009 puis en 2019-
2020. Dans le questionnaire de cette enquête figuraient des questions sur le ressenti de la
discrimination, le ressenti d'appartenance et la religion.
</p>

<p>
<li style=\"padding-left:40px\">
Que font nos voisins ? </li>
</p>

<p>
Enfin, pour mieux comprendre les enjeux de ce type de statistiques en France il est intéressant de se
pencher sur ce qu’il se passe à l’étranger. Au Canada les statistiques « raciales » ou des « minorités
visibles » sont politiquement légitimées parce que les pouvoirs publics ont fait le choix de mettre en
œuvre des politiques publiques pour promouvoir la diversité basée sur un critère ethno-racial. Le but
est de réduire les inégalités sur le marché de l’emploi en recensant les « minorités visibles ». C’est-àdire toutes les personnes, autres que les Autochtones, qui ne sont pas de race blanche ou qui n'ont
pas la peau blanche. Statistiques Canada a donc ajouté une question à ce sujet dans le recensement
afin de pouvoir mettre en place une discrimination positive. L’exemple canadien montre le rôle
moteur de politiques publiques qui ont été décidées avant l’évolution du questionnaire du
recensement. Les catégories retenues ne semblent pas résulter d’une démarche scientifique mais
d’un processus politique et administratif.
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
	<meta name="keywords" content="Ensai, junior, entreprise, junior-entreprise, JER, étude, big data, statistique, statistiques, stats, analyse, information, ethnique, droit, origines , racisme, raciales, Insee, informatique, mathémathiques, maths"/>
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
 
 
 
					<?php echo"<p align=\"right\" style=\"margin-bottom: 60px\">Mis en ligne 22 janvier 2021</p>" ?>	
 
 
 
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