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
		$titre = "Retour sur l’expérience en Junior Entreprise de Guillaume Guérin";
		$sstitre = "Président d’EjC en 2015 (Trésorier 2014)";
		$description = " Retour sur l’expérience en Junior Entreprise de Guillaume Guérin, président d'EjC en 2015 et trésorier en 2014. ";
		$urlimageaccueil = "http://ejc.fr/blog/src/2017/art17_016/gg.png";
		$num_arc = "17_016"; //AA_NNN
		$date_publ= mktime(0,0,0,8,29,2017); // heure minute seconde mois jour année
			
		// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');


		//type de l'article: marquer 'video' ou 'images' 
		$type = "video";
		
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2017/art17_012/confprismeaccueil.png",2=> "src/2017/art17_001/P1050476.JPG",3 => "src/2017/art17_008/amphi.JPG");
		$arrayLabel = array(1 => "Label 1",2=> "Label 2",3 => "Label 3");
		
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL =  "https://www.youtube.com/embed/YgRf1KmZsv0";
		
		//Auteur de l'article
		$booleanAuteur = true ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "le pôle communication"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = ""; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/com.png"; //URL de la photo de l'auteur
		$mail_ejc = "communication@ejc.fr";
		
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps= "
		<li style=\"color: #1E90FF;\">Pourquoi as-tu rejoint EjC ? </p></li>
Quand je suis arrivé à l’Ensai je voulais m’investir dans une association. [...] La JE, on savait pas trop ce que c’était au départ. J’ai assisté à une première réunion et ça m’a tout de suite plu. Cette relation qu’on a avec des personnes extérieures à l’école [...] m’a tout de suite intéressée. C’était la première raison qui m’a poussée à rejoindre cette association. La deuxième raison c’était que je voulais devenir trésorier [...]. EjC a vraiment un avantage: [...] la trésorerie est très intéressante parce qu’on apprend beaucoup de choses. C’est de la trésorerie assez sommaire mais on apprend tout ce qui est bilan comptable, déclarer les impôts, payer les étudiants donc ça, ça m’a beaucoup intéressé.</p>

</p>


		
		<li style=\"color: #1E90FF;\">As-tu trouvé des différences entre ce à quoi tu t’attendais et à la réalité ? </p></li>
Il faut savoir que la Junior-Entreprise de l’Ensai n’est pas seule et ça, c’est la première chose qui m’a frappée. En fait, il y a plein de Junior-Entreprises en France. [...] C’est un mouvement où il y a vraiment beaucoup de monde et on est accompagné par des grandes entreprises, par des partenaires assez prestigieux. On a EY, l’un des plus grands cabinets de conseil, Engie, BNP Paribas... On appartient à un grand mouvement et ça c’est ce qui m’a vraiment étonné. 		

</p>



<li style=\"color: #1E90FF;\">A-t-il été difficile de concilier EjC et études à l’Ensai ? </p></li>
Non, parce que tout simplement le travail à EjC ce n’est pas un travail. C’est un véritable plaisir et pour le plaisir on trouve toujours du temps. En plus, on a la chance d’avoir une scolarité qui est à nos côtés et donc on a pu avoir une dispense d’option qui permet de dégager 3 heures de plus par semaine; donc effectivement, l’impact sur nos études est réduit. Je pense que globalement il n’y a pas trop de soucis.

</p>



<li style=\"color: #1E90FF;\">Pourquoi as-tu voulu t’engager dans le pôle présidence ? </p></li>
Je voulais tout simplement continuer l’aventure au sein d’EjC. Un an ca passe très très vite et à la fin de cette première année j’avais encore envie, j’avais encore de l’énergie pour cette association. Le poste de président est assez différent de mon poste de trésorier et donc au final c’est une année à s’investir mais c’est une année où on va encore apprendre d’autres choses, des choses qui peuvent être très utiles dans le monde de l'entreprise. Donc ça m’a fait plaisir de m’investir un an de plus et ça m’a beaucoup apporté. 

</p>

 

<li style=\"color: #1E90FF;\">Quelles ont été les principales difficultés de ta présidence ?  </p></li>
La présidence est un pôle assez différent des autres pôles. [...] Je n’étais pas préparé à manager une vingtaine de personnes et c’est pas évident de se retrouver devant 20 personnes, de les mener, d’essayer de les convaincre de s’investir dans cette association qui leur prend beaucoup de temps. Ca, ça a été la plus grande difficulté car des fois on a des projets statistiques à faire, on a du travail à rendre, on a des examens mais l’association doit continuer à vivre et elle doit surtout aussi s’améliorer. Le but de la Junior-Entreprise c’est qu’on ne se repose pas sur nos acquis parce que les acquis, on les perd. On les perd parce que chaque année c’est une nouvelle équipe, et donc [...] il faut motiver les gens pour que ce qui a été accumulé les années précédentes ne se perde pas.  Donc il faut trouver les justes mots, il faut trouver les projets qui permettent à la Junior-Entreprise de toujours prospérer, de toujours aller de l’avant. 

</p>



<li style=\"color: #1E90FF;\">Quelle a été ta réaction à l’annonce de la L30 ? </p></li>
[...] C’est une émotion assez vive et intense parce qu’on est une Junior-Entreprise à taille modeste. On avait pas pour vocation à rayonner nationalement. On essaie de se maintenir, de progresser. De voir que le mouvement reconnaît notre travail et nous félicite pour ce travail [...] ça motive à poursuivre les efforts qui ont été faits les années précédentes et à tout faire pour ne pas décevoir nos prédécesseurs parce qu’ils se sont investis et c’est grâce à eux [...] qu’on a pu avoir cette liste des 30 et notre devoir c’est de poursuivre ainsi. 

</p>



<li style=\"color: #1E90FF;\">Quelle a été ta plus grande fierté à EjC ? </p></li>
Je pense que ce qui est très bien en Junior-Entreprise c’est de conserver les acquis des années précédentes.[...] Là où je suis déjà content c’est que [...] ce que les anciens nous ont transmis on l’a gardé et on l’a également transmis aux nouvelles générations. C’est déjà un point dont je suis fier. Le second point c’est qu’on a réussi à se rapprocher des élèves parce que quand je suis arrivé à l’école, l’association était dans le paysage associatif de l’Ensai, un peu exclue. Il y avait le BDE qui prenait une place assez importante et la JE ça paraissait un peu, de l'extérieur, une association où au final on ne fait que travailler [...] et où tu ne vas pas forcément t’amuser. Là où je suis content - et l’équipe à Florian Rocher l’a très bien fait aussi - c’est [qu’on a réussi à] nous rapprocher des élèves, leur montrer que même si on travaille, même si on est en relation avec des professionnels au jour le jour, [...] même si on a pas forcément un résultat direct -comme c’est le cas pour pôle prospection-, il y a quand même un intérêt, on s’amuse quand même dans cette association. C’est au final une vraie famille et je pense que maintenant les élèves ont conscience au final que l’association vit et est intéressante.

</p>



<li style=\"color: #1E90FF;\">Pourquoi s’engager (ou non) en JE ? </p></li>
[...] Si c’est pour mettre une ligne de plus dans son CV c’est pas la peine car l’investissement dans cette association prend du temps et de l’énergie. Mais [...] à côté, on va vraiment beaucoup apprendre, c’est vraiment considérable. [...] [En Junior-Entreprise]  il y a quand même de l’argent en jeu, il y a des contrats autour, tout un cadre juridique donc c’est quand même des responsabilités. [Donc] on en apprend énormément professionnellement mais également humainement parce qu’on côtoie tous les jours une vingtaine d’étudiants qui sont eux aussi motivés. [...] C’est vraiment le gros point positif. [...] C’est l'acquisition de compétences uniques que tu n’apprendras jamais sur les bancs de l’école à l’Ensai et qui auprès de professionnels fait tout de suite la différence, surtout quand on a pas d’expérience professionnelle autre et qu’on essaye d’avoir soit son premier poste, soit un stage de fin d’étude qui nous intéresse. 

</p>


<li style=\"color: #1E90FF;\">Ton expérience à EjC t’a-t-elle été utile lors d’entretiens d’embauche ? </p></li>
Je pense que c’est un atout considérable que ce soit en stage de 3eme année ou le premier emploi. On a juste fait l’école et cette expérience au sein de la Junior-Entreprise se valorise très facilement parce qu’ [...] on a mené des projets, et ça a un grand intérêt pour savoir d’où on part, qu’est ce qu’on va faire [...], quelles sont nos échéances, quels sont les moyens mis à notre disposition et comment surtout on va arriver jusqu’au bout et dans les délais impartis. Ca, on l’acquiert un peu avec les projets qu’on a dans l’école mais c’est complètement différent dans l’association et ça se valorise auprès de RH et les personnes qui recherchent un stagiaire ou un Junior, parce que c’est des choses qu’ils n’auront pas à leur apprendre. Donc cette expérience est un réel atout dans la recherche d’emploi et de stage. 

</p>


<li style=\"color: #1E90FF;\">Que vas-tu retenir de tes deux ans de mandat ? </p></li>
Ce que je vais retenir c’est avant tout cet aspect humain de l’association. C’est l’échange qu’on a, c’est le partage qu’on a avec des personnes et ca c’est une expérience unique [...]. Après je pense que ces deux ans, j’ai noué des amitiés avec des personnes qui je pense dureront longtemps. 

</p>



<li style=\"color: #1E90FF;\">Comment juges-tu l’évolution d’EjC ? </p></li>
L’association évolue dans le bon sens. [...] Comme je l’ai dit, l’une des problématiques des Junior-Entreprises c’est la passation, transmettre ses connaissances, donc on est pas à l’abri qu’un [mandat perde] un peu tout ce qui a été accumulé lors des années précédentes. Mais je pense que depuis quelques années ce n’est pas le cas. Je pense que les années sont toutes bonnes et elles arrivent à réussir les passations avec les nouvelles équipes. C’est-à-dire qu’on arrive à garder des fondements solides et chaque année les équipes arrivent à ajouter une petite pierre. [...] [Elles] ont organisé des choses exceptionnelles et je suis vraiment très fier d’elles.

</p>



<li style=\"color: #1E90FF;\">Envies-tu certains de tes successeurs pour leurs innovations ? </p></li>
Là où je suis vraiment très fier de l’équipe qui m’a succédée c’est l’organisation d’un congrès régional. Moi je me souviens [...] qu’on disait que c’était pas possible. Mathématiquement on peut pas faire rentrer 300 Junior-Entrepreneurs dans nos locaux mais cette équipe a réussi à organiser un évènement “exceptionnel”. Tout le mouvement était très content de cet évènement qui a été une réussite totale et je suis vraiment très fier d’eux.

</p>



<li style=\"color: #1E90FF;\">Un mot pour les élèves intéressés par EjC ? </p></li>
Rejoignez EjC. C’est une association à part entière où vous allez apprendre beaucoup humainement et professionnellement parlant. Investissez-vous dans cette association et surtout amusez-vous. Comme disait un ancien président d’EjC : “EjC c’est un peu comme un jouet. On peut jouer avec autant qu’on veux, il faut juste faire attention de ne pas la casser.” Vous êtes libres de faire ce que vous voulez, de mener vos projets [...] et l’école nous soutient là-dedans. Donc rejoignez EjC pour prendre du plaisir, vous amuser, que ce soit avec des personnes au sein de l’association ou des professionnels. Une année exceptionnelle vous attend.
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