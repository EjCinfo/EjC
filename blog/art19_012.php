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
		$titre = "Cybersécurité et Géopolitique";
		$sstitre = "Quels enjeux stratégiques autour de nos données ?";
		$description = "";
		$urlimageaccueil = " URL IMAGE DE L'ACCUEIL DU BLOG";
		$num_arc = "19_012"; //AA_NNN
		$date_publ= mktime(0,0,0,06,24,2019); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');
 
		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2019/art19_012/1.png");
		$arrayLabel = array(1 => "Affiche de la conférence");
 
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
 
		//Auteur de l'article
		$booleanAuteur = false ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Clément Soulignac"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = ""; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/clement.jpg"; //URL de la photo de l'auteur
		$mail_ejc = "clement.soulignac@eleve.ensai.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="
<p> 	Le 24 avril 2019 se tenait au sein de l’ENSAI une table ronde. Celle-ci était animée par Hugo Zylberberg, manager Cyber Intelligence chez PwC France, et accueillait Mme BOMONT, doctorante en géographie et géopolitique à l’Université Panthéon-Sorbonne, M. CHEVALIER du Ministère de l’Intérieur, M. DANET, directeur du Master de Cyber Défense à l’école militaire de Saint-Cyr, et enfin M. ERARD, Délégué Général Adjoint du Pôle d’Excellence Cyber. Cet événement qui portait sur les thèmes de la cybersécurité et de la géopolitique a permis aux élèves de l’ENSAI de découvrir certains enjeux sur des sujets qui ne leur sont pas forcément familiers mais auxquels ils pourront être confrontés dans leur vie future, notamment en tant que data scientists.
</p>
 
 
<p style=\"text-indent: 40px;\"> <li style=\"color: #1E90FF;\"> Une problématique d’actualité </li> </p>
 
<p style=\"text-indent: 40px;\">
	L'avènement des nouvelles technologies, de plus en plus présentes au quotidien et dans les moindres tâches que nous effectuons, doit nous questionner sur la cybersécurité. En effet, les cyberattaques, définies comme des atteintes à des systèmes informatiques réalisées dans un but malveillant, ne s’arrêtent pas aux frontières. Elles sont maintenant fréquentes et peuvent avoir des conséquences bien réelles. Un exemple récent est la vague de ransomwares, virus exigeant un virement d’une somme souvent importante pour débloquer l’ordinateur sur lequel il est installé, a bloqué les systèmes informatiques de plusieurs hôpitaux anglais, mettant en péril les patients demandant un suivi permanent.
</p>
<p style=\"text-indent: 40px;\">
	En parallèle les relations géopolitiques prennent une place de plus en plus importante dans un monde vivant au rythme de la mondialisation. En effet, les pays se révèlent être en relation, plus ou moins étroite entre eux, suivant des accords ou des traités de différents types. Ainsi, à l’heure de l’ultra-connexion, n’importe quel individu, ayant un accès à Internet, peut discuter avec un citoyen d’un pays étranger ou encore acheter des produits venant de l’autre bout de la planète, tout cela sans même sortir de chez lui.
	</p>
<p style=\"text-indent: 40px;\">

		Ainsi les problématiques de ces deux domaines (cyberattaques et géopolitique) sont de nos jours fortement liées. Il devient alors nécessaire pour les États de prendre des décisions communes et d’agir ensemble à travers la mise en place des programmes de cybersécurité afin de lutter contre le “cyberterrorisme”, ou plus globalement les cyberattaques. En outre, on connaît généralement les pays d’origine de ces attaques et on peut en relever certains, comme la Russie ou la Chine, desquels partent une grande partie d’entre elles. Les récents scandales d’ingérence russe dans les élections présidentielles française et nord américaines sont tous en lien avec des cyberattaques visant des partis politiques ou encore des personnalités politiques. L’enjeu géopolitique y est ainsi davantage souligné.
	</p>
 
<p style=\"text-indent: 40px;\"> <li style=\"color: #1E90FF;\"> Le rôle du data scientist </li> </p>
 
<p style=\"text-indent: 40px;\">
	Ces nouvelles technologies exploitent de plus en plus les opportunités et la puissance offertes par le Big Data. Ces nouveaux ensembles de données regroupent des informations souvent précieuses et en grande quantité sur des individus ou encore des entreprises. Elles sont ainsi les cibles de nombreuses cyberattaques. En 2013, Yahoo a subit une de ces attaques, touchant plus de trois milliards de ses comptes d’utilisateurs. Plus récemment, en ce début d’année 2019, les villes américaines de Baltimore et Philadelphie ont subi des cyberattaques affectant directement le fonctionnement administratif en paralysant une partie de son système informatique durant plusieurs semaines. En outre ces attaques ont un coût pour ces municipalités étant données les fréquentes rançons qu’exigent les hackers pour débloquer la situation.
</p>
<p style=\"text-indent: 40px;\">
Ainsi il est nécessaire de protéger ces données. Ceci se fera grâce, notamment, à la Data Science et aux data scientists. En effet, la “défense” des données peut se faire en temps réel, comme un jeu du chat et de la souris entre les hackers et les ingénieurs en charge des données. Mais il est fréquent que ces attaques aient lieu de nuit, lorsque personne n’est présent. Cela a pour conséquence de devoir réfléchir différemment à la protection des bases de données. Dans un premier temps, il est nécessaire d’améliorer la sécurité des systèmes informatiques mais il existera certainement toujours des failles. Dès lors, une défense d’un nouveau type est à mettre en place et celle-ci pourrait venir du Machine Learning. Elle permettrait, à partir de statistiques sur les attaques comme les données les plus ciblées, de créer des algorithmes de défense face aux cyberattaques. Ces algorithmes pourraient, à terme, détecter les failles d’un système et les corriger ou encore lutter en temps réel face aux hackers comme le ferait un individu.
</p>

<p style=\"text-indent: 40px;\"> <li style=\"color: #1E90FF;\"> Un secteur d’avenir </li> </p>

<p style=\"text-indent: 40px;\">

La protection des données, davantage sensibles et importantes, face aux cyberattaques, de plus en plus fréquentes et de grande envergure, est un enjeu de taille pour permettre un développement plus important de ces nouvelles technologies. Les solutions seront probablement issues d’une maîtrise accrue du Big Data ainsi que du Machine Learning afin de protéger ces données mais également d’une coopération internationale afin d’aboutir à des solutions efficaces. Pour un avenir meilleur, l’étude de ces domaines est essentielle pour former des Data Scientists possédant les outils nécessaires à l’évolution des ces technologies.
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