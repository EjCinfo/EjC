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
		$titre = "Interview";
		$sstitre = "Marie Miossec et Arthur Quenéchdu, anciens membres d'EjC";
		$description = "interview";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2019/art19_001/01.png";
		$num_arc = "19_001"; //AA_NNN
		$date_publ= mktime(0,0,0,1,12,2019); // heure minute seconde mois jour année
			
		// En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "video";
		
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2019/art19_001/01.png");
		$arrayLabel = array(1 => "Marie Miossec et Arthur Quenéchdu, anciens membres d'EjC" );
		
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = "https://www.youtube.com/embed/pkVIsVWaz9c";
		
	//Auteur de l'article
		$booleanAuteur = false; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Juliette Meyer, Remy Chevalier, Marie Ract et Léa Fortat"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "étudiants en formation au pôle com souhaitant intégrer EjC"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps= "
<p style=\"font-style:italic\"> Marie Miossec </p>
<li style=\"color: #1E90FF;\"> Présente-toi en quelques mots  </li></p>	
<p>
« Je m’appelle Marie, je suis en 3ème  année à l’ENSAI  [École Nationale de la Statistique et de l'Analyse de l'Information] en filière Statistique pour les sciences de la vie. J’ai été consultante cet été pour Ensai junior Consultant [EjC]. Avant cela, j’ai été administrateur d’EjC au contrôle interne et j’ai également eu l’occasion d’être chef de projet. »

<li style=\"color: #1E90FF;\"> En quoi consiste le rôle de consultant ? </li></p>	
<p>
« Etre consultant pour Ensai junior Consultant, c’est travailler sur une étude pour un client réel, être en communication avec un chef de projet. C’est réaliser le travail de statisticien sur une étude particulière. »
</p>


<li style=\"color: #1E90FF;\"> Pourquoi et comment devient-on consultant ? </li></p>


<p>
« [Etre consultant] permet d’avoir une expérience supplémentaire. A l’ENSAI le travail reste très encadré, on [manipule] des données déjà traitées, alors que quand on est consultant on [fait face aux données] d’un vrai client qui n’a pas forcément de regard statistique ou d’expériences statistiques. [Ces] données sont parfaitement brutes, on [alors] peut vraiment s’entraîner tout en étant [...] un peu encadré par l’ENSAI.
</p>

<p>
[On devient consultant] simplement en adhérant à EjC et en répondant à des appels d’offre. [Ensuite] il y a une séléction, si on est pris on peut réaliser une étude. »
</p>



<li style=\"color: #1E90FF;\">Que fais-tu concrètement lors d’une étude ?</li></p>


<p>
« Dans l’étude que j’ai [réalisée] il y avait d’abord une partie de management de données. Ils avaient récupéré deux questionnaires - un papier et une version numérique - il a fallu fusionner les deux questionnaires pour obtenir et travailler les données. Ensuite il y a eu une pondération à faire, et, finalement le traitement statistique - analyse univariée, bivariée - puis un traitement de vulgarisation pour que le client puisse analyser les résultats. »
</p>

<li style=\"color: #1E90FF;\">Qu'as-tu retenu de cette expérience ?</li></p>


<p>
« Qu’effectivement les données brutes sont très différentes de [celles avec lesquelles on travaille] à l’ENSAI. Il y a beaucoup de travail à faire dessus avant de pouvoir les analyser. [J’ai aussi appris que] la communication avec le client n’est pas facile, il faut toujours passer par l’intermédiaire du chef de projet qui n’a pas forcément connaissance des données. [Il est] assez difficile d’exprimer les problèmes ou les questions qu’on peut avoir à poser au client, [il faut passer] par le chef de projet pour que lui puisse les retranscrire au client. Et inversement, le client [doit toujours passer par le chef de projet pour contacter le consultant]. »

</p>

<p style=\"font-style:italic\"> Arthur Quenéchdu </p>

<li style=\"color: #1E90FF;\"> Présente-toi en quelques mots </li></p>


<p>
« Je m'appelle Arthur, je suis étudiant en 2ème année à l'ENSAI, et membre d’ Ensai junior Consultant (EjC), la Junior-Entreprise (JE) de l'ENSAI, [au] pôle communication [...]. J'ai aussi eu l'occasion d'être chef de projet sur une étude. »

</p>

<li style=\"color: #1E90FF;\"> Pourquoi avoir choisi d'intégrer EjC ? </li></p>


<p>
« Je sortais de prépa en arrivant à l'ENSAI. La prépa est quelque chose d'assez scolaire, [alors] je voulais goûter à la vie étudiante et qui dit vie étudiante dit association. [Je me suis intéressé] à EjC d'abord par curiosité, [puis], au fur et à mesure que je comprenais le fonctionnement d'une JE [j'ai voulu intégrer cette association] […]. C'est une association professionnalisante, elle apporte beaucoup, et les administrateurs du mandat précédent n'en disaient que du bien. Tout cela m'a donné envie de participer au mouvement des JE en France, en plus de l'intérêt pour la communication. »

</p>

<li style=\"color: #1E90FF;\"> En quoi consiste le rôle de chef de projet ? </li></p>


<p>
« Le rôle global du chef de projet est d'être un intermédiaire entre un client et un ou plusieurs consultant(s). Être chef de projet demande plusieurs choses : [savoir] communiquer à la fois avec le client et le consultant, être capable de recruter le ou les consultants qui vont travailler sur l'étude et superviser globalement l'étude. »

</p>

<li style=\"color: #1E90FF;\"> Comment le devient-on ? </li></p>


<p>
« On devient chef de projet en se portant volontaire en début d'étude. En [Conseil d'Administration] (CA), on demande aux administrateurs s'ils sont intéressés, la personne intéressée devient alors chef de projet, tout simplement. »« Le rôle global du chef de projet est d'être un intermédiaire entre un client et un ou plusieurs consultant(s). Être chef de projet demande plusieurs choses : [savoir] communiquer à la fois avec le client et le consultant, être capable de recruter le ou les consultants qui vont travailler sur l'étude et superviser globalement l'étude.

</p>

<li style=\"color: #1E90FF;\"> Comment se déroule une étude ? </li></p>


<p>
« Une étude commence par un 1er contact qui est établi par un administrateur d’EjC, le plus souvent par un membre du [Développement Commercial] (Dev Co) ou de la Présidence. Le chef de projet prend [alors] la relève, contacte le client à son tour et lui envoie un devis. Ensuite, il passe à la phase de recrutement du ou des consultant(s) selon le nombre de consultants qui a été évalué nécessaire pour réaliser l'étude. L'étude commence quand [le chef de projet] envoie la convention d'étude [qui définit] un échéancier, les termes de l'étude [...], le budget etc. Tout au long de l'étude le consultant rédige les rapports demandés par le client. Le chef de projet, [quant à lui], supervise l'étude [dans sa globalité], garde contact avec le client et les consultants. [Finalement], il clôture l'étude en envoyant un questionnaire de satisfaction, un procès verbal et la facture. »

</p>

<li style=\"color: #1E90FF;\"> Qu'as-tu retenu de cette expérience ? </li></p>


<p>
« L'expérience de chef de projet [est] à réaliser au moins une fois lorsqu'on est administrateur à Ensai junior Consultant. C'est là qu'on découvre le fonctionnement d'une JE, [comment se déroulent] les études [réalisées] pour des clients. Il n'y a que des bénéfices à en tirer : c'est [une expérience] qui sera valorisée, elle m'a permis de prendre du recul, d'apprendre à communiquer, de servir d'intermédiaire entre un client et un consultant. »

</p>

<p>

Un grand merci à Arthur Quenéchdu et Marie Miossec d’avoir répondu à toutes nos questions et interrogations sur le rôle de chef de projet et de consultant à EjC.

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
							<p>Cet article a été rédigé par Juliette Meyer, Remy Chevalier, Marie Ract et Léa Fortat, étudiants souhaitant intégrer le pôle communication d'EjC.</p>
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