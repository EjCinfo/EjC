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
		$titre = "Retour sur les congrès nationaux - Eté & Hiver 2018";
		$sstitre = "Des événements marquants dans l’année d’un Junior-Entrepreneur";
		$description = "";
		$urlimageaccueil = " URL IMAGE DE L'ACCUEIL DU BLOG";
		$num_arc = "19_002"; //AA_NNN
		$date_publ= mktime(0,0,0,02,05,2019); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2019/art19_002/1.PNG",2=> "src/2019/art19_002/2.PNG");
		$arrayLabel = array(1 => "EjC au CNE18",2=> "EjC au CNH18");
 
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
 
		//Auteur de l'article
		$booleanAuteur = false ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Arthur Quenéchdu"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = ""; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/arthur.png"; //URL de la photo de l'auteur
		$mail_ejc = "arthur.quenechdu@eleve.ensai.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="
<p> EjC a eu l’occasion cette année de participer à quatre congrès :
	<li style=\"padding-left:40px\"> deux congrès régionaux, les congrès de Printemps et d’Automne, qui ont respectivement été organisés par Ouest Insa (Junior-Entreprise de l’INSA Rennes) et Junior Atlantique (Junior-Entreprise de l’IMT Atlantique). Pour en savoir plus sur ces deux congrès, n’hésitez pas à consulter notre article sur le CRPO (Congrès Régional de Printemps - région Ouest) et à visionner notre <a href=\"https://www.youtube.com/watch?v=qcboDLYO8nw\"> vidéo </a> sur le CRAO (Congrès Régional d’Automne - région Ouest). </li>
	<li style=\"padding-left:40px\"> deux congrès nationaux (les congrès d'Été et d’Hiver) sur lesquels nous vous proposons aujourd’hui de revenir à travers l’article qui suit. </li>
</p>
 
 
<p style=\"text-indent: 40px;\"> <li style=\"color: #1E90FF;\"> Le Congrès National d'Eté (CNE) </li> </p>
 
<p style=\"text-indent: 40px;\">
	Alors certes, ce n’était pas encore vraiment l’été, puisque celui-ci s’est tenu du 4 au 6 mai, mais nous avons tout de même eu le droit au soleil rayonnant du Morbihan et à une météo plus que correcte. 15 des 19 administrateurs du mandat 2018 d’EjC se sont rendus sur les lieux du congrès (hôtel Belambra, à Guidel) dès le vendredi après-midi, afin de profiter autant que possible des activités proposées. En soirée, nous avons pu participer au cocktail qui était organisé et assister à la présentation des partenaires premium de la Confédération Nationale des Junior-Entreprises (CNJE) : BNP Paribas, Alten, EY et Engie (par ordre d’ancienneté), ainsi que Saint-Gobain (partenaire business).
</p>
<p style=\"text-indent: 40px;\">
	Le samedi était une journée consacrée aux formations : chacun des administrateurs a assisté à au moins deux formations d’1h30 parmi celles qui étaient proposées par la CNJE, ses partenaires, les Junior-Entreprises volontaires, ou bien même des intervenants extérieurs.
	<p style=\"text-indent: 40px;\">
	<li style=\"padding-left:20px\"> 
		Mélanie, par exemple, nous raconte la formation <span style=\"text-decoration:underline\"> Gestion des données personnelles </span>, donnée par IPSA Consult et SGS et à laquelle elle a participé : “À EjC, on manipule beaucoup de données clients et admin mais on a aussi accès à beaucoup de bases de données pour nos études, et je ne connaissais même pas l'existence du RGPD. Il est important de s'assurer que nous respectons les règles de protection des données que l'on recueille auprès de nos partenaires.” En effet, le RGPD stipule entre autres, que les DCP (données à caractère personnel) doivent être sécurisées et qu'il en va de la responsabilité pénale du gérant de l'organisation. </li>
	<li style=\"padding-left:20px\"> 
		Ismaël et Arthur ont, eux, réalisé le <span style=\"text-decoration:underline\"> test de personnalité PAPI </span> (=Personality And Preferences Inventory) dans le cadre d’une formation donnée par EY.
	</li>
	<li style=\"padding-left:20px\">
		Sandra Le Grand, de <span style=\"font-style:italic\">YAPUKA</span>, nouvelle start-up du web, a donné une formation sur Comprendre et maîtriser l’art de l’entretien d’embauche, à laquelle Floriane, Derek et Arthur ont assisté : “<span style=\"font-style:italic\">Cette formation était enrichissante car elle témoignait de l’importance du « pitch » dans les entretiens d’embauche, qu’il était important de savoir se mettre en valeur et de captiver l’intérêt de ses interlocuteurs. Nous avons ainsi pu bénéficier de nombreux conseils dispensés par Mme Le Grand sur la structure d’un pitch et nous espérons que cela nous servira dans l’avenir !</span>”
	</li>
	<li style=\"padding-left:20px\">
		Martin a lui, pris part à une formation <span style=\"text-decoration:underline\">Comment faire du networking</span>, toujours donnée par Sandra Le Grand. L’occasion pour lui de noter quelques conseils sur comment préparer une rencontre ou une discussion qui permettrait de se créer un réseau (préparer un pitch, se renseigner à l’avance, connaître ses objectifs, ne pas se dévaloriser…)
	</li>
	<li style=\"padding-left:20px\">
		Enfin, Guillaume témoigne de ce qu’a apporté, à lui et à la JE, la formation <span style=\"text-decoration:underline\">Être performant face à un prospect</span>, dispensée par <span style=\"font-style:italic\"> Alten </span> : excellente mise en situation du formateur, moyens mnémotechniques à base d’acronymes efficaces…
	</li>
	</p>

</p>
<p style=\"text-indent: 40px;\">
	Le superbe cadre du complexe nous a également permis de profiter de la plage en fin d’après-midi. Le soir se tenait aussi la soirée de gala, avec la remise des prix par la CNJE, dont le tant convoité prix d’excellence. Il a cette année été décerné à ENSAE Junior Etudes.
</p>
<p style=\"text-indent: 40px;\">
Enfin, après le brunch du dimanche et une matinée de repos, nous prenions la route dans l’après-midi pour retourner du côté de Rennes.
</p>

<p style=\"text-indent: 40px;\"> <li style=\"color: #1E90FF;\"> Le Congrès National d’Hiver (CNH) </li> </p>

<p style=\"text-indent: 40px;\">
	De même que les autres congrès CNJE de l’année, le CNH était légèrement en avance sur son temps (23 au 25 novembre). Il se déroule selon le même format que le CNE : activités le vendredi après-midi puis cocktail d’accueil le soir avec présentation des partenaires (dont une superbe vidéo d’EY, qui avait décidé d’innover, et que nous vous recommandons d’aller voir <a href=\"https://m.facebook.com/story.php?story_fbid=1587821297984089&id=142167089216191\"> ici </a>), journée de formations le samedi, soirée de gala et remise de prix annuels (prix différents de ceux du CNE), puis journée de repos le dimanche et départ des Junior-Entrepreneurs. Nous étions 11, cette année, à y participer.
</p>
<p>
Voici un bref retour sur les formations auxquelles nos administrateurs ont participées : 

<p style=\"text-indent: 40px;\">
	<li style=\"padding-left:20px\"> 
		<span style=\"text-decoration:underline\">Lutter contre les stéréotypes et le biais de sélection</span>. Julie, Derek et Mélanie ont pu, grâce à cette formation donnée par EY, prendre part à des tables rondes et réaliser un travail de groupe interactif : retour sur les réponses à un questionnaire passé en début de séance, exemples pris des stéréotypes sur les écoles d’ingénieur et les écoles de commerce. Ils en ont finalement conclu que les stéréotypes sont à l’origine naturels puisque issus d’un processus inconscient, mais qu’il existe des méthodes pour lutter contre.
	</li>
	<li style=\"padding-left:20px\"> 
		Derek et Julie, cette fois avec Floriane, ont également assisté à la formation <span style=\"text-decoration:underline\"> Comment bien recruter </span>, dispensée par le partenaire business Saint-Gobain. Il en ressort qu’une personne est très souvent jugée, à tort, par la première image qu’elle renvoie, lors d’un entretien. Un mauvais recruteur utiliserait cette première image comme une base, une idée dans laquelle il peut ensuite très facilement être conforté par d’autres impressions données par la personne. Nos administrateurs ont donc appris comment aller au delà de cette image, comment évaluer un candidat sur une certaine compétence sans avoir à lui poser des questions trop directes. <span style=\"font-style:italic\">“C’est tout un art !”</span>, d’après Floriane. <span style=\"font-style:italic\">“Il est toujours plus intéressant de placer le candidat dans un contexte spécifique, large au début, puis de resserrer l’étau petit à petit. Le but étant d’amener une idée précise en la gardant cachée le plus longtemps possible”</span>. Cette formation tombait au bon moment pour nous, puisqu’en pleine période de RFP (Recrutement-Formation-Passation), peu avant les entretiens de personnalité organisés pour les candidats au poste d’administrateur d’EjC.
	</li>
	<li style=\"padding-left:20px\">
		Alan, Ismaël et Arthur ont eux, pris part à la formation <span style=\"text-decoration:underline\">Data visualisation</span>, donnée par <span style=\"font-style:italic\">Le Sphinx</span>. Cette formation prenait en fait plus la forme d’une présentation d’outils en ligne (sphinxonline.com, DATAVIV’), facilitant l’analyse de données. En effet, l’utilisation d’une infographie interactive par exemple, facilite la compréhension avec un support ludique, implique le lecteur en le rendant acteur, captive le lecteur grâce à des résultats «en cascade», et permet de créer une communication virale de l’information.
	</li>
</p>
<p style=\"text-indent: 40px;\">
	Suite à cette journée de formation, nous avons pu, tout comme au CNE, assister à la soirée de Gala, lors de laquelle ont été remis certains prix. Malheureusement, si EjC a candidaté pour trois d’entre eux cette année (prix de l’Engagement, prix de la Meilleure Approche Commerciale, et prix Alumni), elle n’a pas été récompensée. Pour l’année prochaine, peut-être ! (C’est ce que nous souhaitons au nouveau mandat !)
</p>

<p style=\"text-indent: 40px;\"> <li style=\"color: #1E90FF;\"> Le mot de la fin </li> </p>
<p style=\"text-indent: 40px;\">
Les congrès, en particulier nationaux, sont pour sûr des événements marquants et à ne pas rater lorsqu’on est Junior-Entrepreneur. Autant pour les formations de qualité qui y sont dispensées, que pour l’opportunité qu’ils nous donnent de rencontrer d’autres Junior-Entreprises venues de la France entière et des professionnels à notre écoute et qui nous soutiennent. Nous espérons qu’EjC continuera de s’y rendre en grand effectif et d’y rayonner autant que possible ! 
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
La coloration syntaxique est réalisé par GeSHi
Aide | Forums| Licence