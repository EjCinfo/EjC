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
		$titre = "Retour sur l’expérience en Junior Entreprise de Bastien Luneteau";
		$sstitre = "Vice-président de EjC en 2014 et membre du comité senior 2015";
		$description = "Retour sur l’expérience Junior-Entrepreneur de Bastien Luneteau Vice-Président 2014 d’EjC et membre du Comité Sénior 2015";
		$urlimageaccueil = "http://ejc.fr/blog/src/2017/art17_015/interviewbastien.png";
		$num_arc = "17_015"; //AA_NNN
		$date_publ= mktime(0,0,0,7,31,2017); // heure minute seconde mois jour année
			
		// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');


		//type de l'article: marquer 'video' ou 'images' 
		$type = "video";
		
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2017/art17_012/confprismeaccueil.png",2=> "src/2017/art17_001/P1050476.JPG",3 => "src/2017/art17_008/amphi.JPG");
		$arrayLabel = array(1 => "Label 1",2=> "Label 2",3 => "Label 3");
		
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = "https://www.youtube.com/embed/xH1gqAa7BOs";
		
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
J’avais beaucoup regardé la plaquette alpha quand je suis rentré à l’école en 2012 et une des associations que j’ai trouvée la plus intéressante c’était l’EjC parce qu’il y avait tout cet aspect de professionnalisation. Ce pont entre ce que l’on peut apprendre à l’école et ce que les entreprises vont nous demander[...] je trouvais ça super intéressant. [...] et aussi rencontrer des clients et leur apprendre que ce qu’on fait à l’ENSAI c’est utile pour eux et leurs futurs clients.
</p>
<li style=\"color: #1E90FF;\">En venant à EjC, quel pôle t’intéressait le plus? </p></li>
J’ai commencé par le pôle informatique en 2013, c’était le pôle pour lequel j’avais le plus d'appétence [...] on a redéveloppé le site internet de EjC [...] c’était le travail entre la comm’ et la présidence pour réussir à passer les bons vecteurs de communication sur le site internet et réussir à développer le business, essayer de développer toutes les opportunités en communication externe [...].
</p>
<li style=\"color: #1E90FF;\">As-tu trouvé des différences entre ce à quoi tu t’attendais et la réalité ? </p></li>
J’ai été étonné que ça soit aussi professionnel [...] Quand je suis rentré dedans, [...] savoir que c’était aussi bien cadré pour des raisons notamment légales, et aussi bien formé par des congrès régionaux, confédération et même par des anciens qui venaient de temps en temps, tout cet aspect formation et passation d’une équipe à une autre qui se fait de manière très élaborée [...] ça m’a étonné de découvrir une structure plus professionnelle que ce que j’imaginais qui demandais du coup plus de travail [...] Mais c’était du travail où je me sentais utile, donc je ne considérais pas ça comme une perte de temps, ça m'amusait de faire ce que je faisais et c’est important.
</p>
<li style=\"color: #1E90FF;\">A-t-il été difficile de concilier EjC et études à l’ENSAI? </p></li>
Pas forcément car on a eu la chance avec le directeur des études de l’époque, qui était Laurent Di Carlo, de pouvoir bénéficier d’une dispense de cours optionnels du jeudi après-midi, donc de pouvoir vraiment consacrer une après-midi pleine dans la semaine au développement de la JE [...]. Cette libération du temps de travail permet de passer du temps dans la JE, après c’est vrai qu’en période de partiels [..] faut essayer de faire comprendre aux clients qu’on reste malgré tout des étudiants, et qu’un étudiant ça a des contraintes, et notamment des contraintes de cours et que si on veut dispenser le meilleur service possible, il faut aussi que les étudiants passent le plus de temps possible sur les cours afin de rendre les meilleures études possibles. [...] L’association d’une école qui nous a aidés et de clients très compréhensifs a fait que ce n’était finalement pas très dur de marier les deux.
</p>
<li style=\"color: #1E90FF;\">Pourquoi as-tu voulu t’engager dans le pôle présidence? </p></li>
A la fin de mon mandat, j’avais une grande frustration: ne m’être occupé “que” de l’informatique. [...] Avec Roxanne qui était présidente et moi-même vice-président on a décidé de continuer, moi notamment sur tout ce qui était poursuites de relations avec les partenaires [...] et le reste du monde des Juniors. Réussir à avoir relancer ce mouvement, l’intégration de la Junior au sein du monde des Junior-Entreprises, c’est aussi ce qui me motivait à continuer en tant que vice-président.
</p>
<li style=\"color: #1E90FF;\">Quelle a été ta plus grande fierté à EjC ? </p></li>
Je pense que ce dont je suis le plus fier, ce n’est pas forcément ce qui a été fait pendant mon mandat, c’est la dynamique qu’on a réussi à relancer. [...] On est passé après un très gros mandat, c’était un peu dur de relancer la machine, de remotiver tout le monde.[...] Donc justement ce dont je suis le plus fier c’est d’avoir réussi à participer à la relance, d’avoir réussi à réintégrer le mouvement, d’avoir réussi à envoyer la Junior dans la L30, avoir réussi à  aujourd’hui faire que l’Ensai Junior Consultant organise un Congrès Régional. [...]
</p>
<li style=\"color: #1E90FF;\">Que penses-tu avoir appris en tant qu’administrateur EjC ? </p></li>
J’ai appris tout ce qui était dialogue avec des clients d’un point de vue professionnel. Essayer de comprendre leurs attentes c’est quelque chose que je fais aujourd’hui tous les jours dans le cadre de mon travail, c’est essayer de comprendre ce que le client veut[...] de l’appliquer, le développer, de comprendre ce qu’il veut nous demander, savoir présenter…
</p>
<li style=\"color: #1E90FF;\">Ton expérience à EjC t’a-t-elle été utile lors d’entretiens d’embauche ? </p></li>
Ça a pu m’aider: déjà quand on parle de Junior-Entreprises à un RH, soit il connaît et il va trouver ça bien parce que c’est des profils qui sont souvent recherchés. S’ils ne connaissent pas, on leur présente le concept et ils trouvent ça génial parce qu’ils comprennent que c’est [...] une expérience qui donne quasiment des mois d’avance par rapport [aux autres], parce qu’il comprendra ce qu’est le monde professionnel, et quels sont les enjeux derrière. [...] En plus, on a une aisance à l’oral qu’on a pu développer en entretien client qui fait que l’on comprend mieux ce qui nous est demandé et on sait souvent mieux répondre.
</p>
<li style=\"color: #1E90FF;\">As-tu apprécié former les futurs Juniors-Entrepreneurs ? </p></li>
C’est non seulement quelques chose que j’ai aimé, mais c’est quelque chose que j’ai voulu poursuivre par la suite. En tant que membre du Comité Sénior [...], j’ai du faire entre 15 et 20 formations en 1 an. Du coup, tout ce qui est aspect formateur, c’est quelque chose qui me passionne. [...] On apprend forcément jamais mieux que par soi-même, mais leur donner au moins des clés. [...] Transmettre ses compétences, ses connaissances, c’est quelque chose de super gratifiant.
</p>
<li style=\"color: #1E90FF;\">Quel a été ton plus fort moment à EjC ? </p></li>
Je pense que c’est après mon mandat. Ca a été quand on a vu la Junior continuer à grandir; quand j’ai vu qu’il y avait l’organisation d’un Congrès Régional, quand j’ai vu les événements qui avaient été organisés pour les 20 ans, quand j’ai vu le nombre de membres de la Junior qui allaient au Congrès Nationaux.[...] Ca m’a mis une claque. [...] De voir ça de l’extérieur c’est se dire: voilà, j’ai réussi, on a réussi et la Junior continuera à aller loin. 
</p>
<li style=\"color: #1E90FF;\">Que vas-tu retenir de tes deux ans de mandat ? </p></li>
Ce que je vais retenir, c’est des très bons moments passés au local. [...] C’est cet aspect partage, cet aspect on n’est pas tout seul [...]: on partage les galères mais on partage aussi les bons moments, les très bons moments. [...]
Voir que chaque année, il y a un gros événement qui va être organisé. [...] Je n’envie pas mes successeurs: avec le recul, ce qu’ils ont fait je n’aurais pas pu le faire. [...] Je suis plus fier de ce qui a pu être fait par la suite. Voir que la CA année après année continue à faire son chemin, voir que les clients sont toujours content, continuent de faire appel à la Junior-Entreprise, notamment l’Etudiant. 
</p>
<li style=\"color: #1E90FF;\">Quel a été ton parcours à la CNJE ? </p></li>
J’ai fait un an responsable communication du Comité Senior des Junior-Entreprises. [...] Son but à l’époque c’était d’organiser des formations chez les Juniors-Entreprises.[...] [Nos] consultants passent toute une journée [...] [avec elles]. Aller leur apprendre, les faire progresser sur un point précis. [...] Contrairement à l’audit [...], c’était juste se focaliser sur un point. [...] Mon rôle, c’était de mettre en valeur tout ce qu’on pouvait faire dans ce cadre là. C’était du community management [...], c’était du mailing, c’était des présentations en congrès. [...] C’est des choses que j’avais pas du tout eu l’occasion de faire à EjC. [...] On ne met pas en valeur ce qu’on peut faire dans une Junior-Entreprise, on met en valeur les Junior-Entreprises en tant que telles.
</p>
<li style=\"color: #1E90FF;\">Un mot pour le mandat 2017 ? </p></li>
Et bien bon courage ! Sur les premiers mois on a besoin de courage, sur les derniers mois on n’a plus envie que ça s’arrête. [...] Toujours rester en contact avec ces anciens, qui peuvent justement aider, avoir ce petit recul nécessaire parfois. [...] Si j’avais un conseil, c’est laissez libre votre imagination pour insuffler un nouveau souffle et de nouvelles idées à la Junior-Entreprise. [...] Toujours créer, c’est ça qui permettra de maintenir la Junior-Entreprise parmi les plus grandes de France.
	
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