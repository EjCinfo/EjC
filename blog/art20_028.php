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
		$titre = "L'expérience de consultant";
		$sstitre = "Chez Ensai junior <consultant";
		$description = "";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2020/art20_028/apercu.png";
		$num_arc = "20_028"; //AA_NNN
		$date_publ= mktime(0,0,0,5,1,2020); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "images";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array(1 => "src/2020/art20_028/1.png", 2=> "src/2020/art20_028/2.png",3 => "src/2020/art20_028/3.png");
		$arrayLabel = array(1 => "Serait-tu prêt à refaire des études ?", 2 => "Est ce que ton rôle de consultant t'a permis d'avoir des opportunités
(stage, discussion lors d'un entretien...) ?", 3 => "Combien de temps a duré ton étude ?");
 
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
 
		//Auteur de l'article
		$booleanAuteur = true ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Iris Godinot"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Iris Godinot"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/communication2019.jpg"; //URL de la photo de l'auteur
		$mail_ejc = "communication@ejc.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="

<p> Cette semaine est marquée par la semaine de recrutement des consultants. Pour l'occasion, Ensai junior Consultant a souhaité rédiger un article présentant les retours d’expérience de 9 consultants. Nous les remercions pour le temps qu'ils ont accepté de prendre pour répondre à nos questions ! </p>

<p style=\"text-indent: 40px;\"> <strong> Des sujets d'études diversifiés </strong> </p>


<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> 1er Consultant : Mahaut</li> </strong> </p>


<p> <h6> En quelques mots, présente nous le contexte de l’étude ainsi que sa problématique ? </h6> </p>




<p>
J'ai fait une étude en binôme pour une administration publique. Je devais faire des
analyses univariées et bivariées sur des données de billetteries. Le but était de
faire les statistiques et de rédiger un manuel pour permettre au client de
comprendre et de réutiliser le code.
</p>

<p> <h6>En quelques mots, dis nous ce que tu as fait, les étapes de ton travail, les méthodes
statistiques utilisées ? </h6> </p>


<p>
Nous avons commencé par chercher des données sur la population étudiée. Puis,
après avoir traité ces données, nous les avons fusionnées aux données du client.
Après l'import et le traitement de cette nouvelle base de données, nous avons
réalisé des statistiques sur SAS. Enfin, nous avons rédigé le manuel.
</p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> 2ème Consultant : Lucie</li> </strong> </p>

<p> <h6>En quelques mots, présente nous le contexte de l’étude ainsi que sa problématique ? </h6> </p>



<p>
J'ai effectué une étude en binôme. Le but était de mettre en forme et d'étudier les
résultats d'analyses univariées et bivariées.
</p>

<p> <h6>En quelques mots, dis nous ce que tu as fait, les étapes de ton travail, les méthodes
statistiques utilisées ? </h6> </p>



<p>
J'ai travaillé sur R et sur Excel pour manipuler la base de données et extraire les
résultats.
</p>


<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> 3ème Consultant : Alice</li> </strong> </p>


<p> <h6>En quelques mots, présente nous le contexte de l’étude ainsi que sa problématique ? </h6> </p>


<p>
J'ai fait une étude à partir d'un questionnaire réalisé par 2 organismes, une
association et un institut de sondage. Le but était de comprendre le
comportement de propriétaires. J'ai étudié la réalisation de travaux et de
rénovation de l'habitat pour essayer de trouver des profils de consommation en
matière de rénovation.
</p>

<p> <h6>En quelques mots, dis nous ce que tu as fait, les étapes de ton travail, les méthodes statistiques utilisées ? </h6> </p>



<p>
1ère étape : Puisqu'on ne disposait pas des données dès le début de l'étude, j'ai
dû tout d'abord simuler les données. Il a donc fallu que je crée toutes les variables
correspondantes aux questions et leurs modalités de réponse que j'ai générées
aléatoirement.
2ème étape : J'ai dû ensuite préparer l'analyse des données en utilisant ces
données simulées. J'ai réalisé des statistiques descriptives selon les différentes
cibles et attitudes des répondants et les représentations graphiques
correspondantes à l'aide du package R ggplot2. J'ai aussi fait une Analyse des
Correspondances Multiples (ACM) pour déterminer les caractéristiques qui
influençaient l'appartenance des individus à une certaine cible ou à une certaine
attitude de rénovation.
3ème étape : Enfin, j'ai dû travailler sur l'aspect cyclique des travaux de rénovation.
Il a fallu tout d'abord déterminer les cycles potentiels à l'aide des réponses à
certaines questions, puis, j'ai réalisé une régression logistique pour déterminer les
facteurs qui favorisaient l'apparition d'un cycle ou non.
4ème étape : J'ai ensuite transmis mes analyses à un autre consultant afin qu'il les
réalise sur les véritables données et puisse interpréter les résultats.
</p>


<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> 4ème Consultant : Gauvain</li> </strong> </p>

<p> <h6>En quelques mots, présente nous le contexte de l’étude ainsi que sa problématique ? </h6> </p>



<p>
Je devais créer un panel d'indicateurs sur le logement français.
</p>

<p> <h6>En quelques mots, dis nous ce que tu as fait, les étapes de ton travail, les méthodes statistiques utilisées ?</h6> </p>



<p>
Mes analyses ont principalement été composées de recherches sur le site de
l'Insee mais aussi sur d'autres sites avec des bases de données open data.
</p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> 5ème Consultant : Félicie</li> </strong> </p>

<p> <h6> En quelques mots, présente nous le contexte de l’étude ainsi que sa problématique ? </h6> </p>


<p>
J'ai effectué une étude en binôme pour une administration publique. Elle
cherchait à connaître les sports les plus représentés et pratiqués par région.
</p>

<p> <h6> En quelques mots, dis nous ce que tu as fait, les étapes de ton travail, les méthodes
statistiques utilisées ? </h6> </p>



<p>
Dans un premier temps, il m'a d'abord fallu me familiariser avec les données et le
vocabulaire associé. Je devais déchiffrer puis sélectionner les variables pertinentes
pour l'analyse. Ensuite, J'ai effectué des statistiques univariées et bivariées sur les
sports pratiqués par région. Enfin, après avoir sélectionné les données les plus
riches, j'ai rédigé une fiche de synthèse par région.
</p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> 6ème Consultant : Sophie</li> </strong> </p>

<p> <h6> En quelques mots, présente nous le contexte de l’étude ainsi que sa problématique ? </h6> </p>


<p>
J'ai effectué une étude à partir de données neurophysiologiques. L'analyse de ces
données était orientée vers la création de programmes d'entraînements sportifs
personnalisés.
</p>

<p> <h6> En quelques mots, dis nous ce que tu as fait, les étapes de ton travail, les méthodes
statistiques utilisées ? </h6> </p>


<p>
J'ai effectué des analyses univariées et bivariées sur Python.
</p>


<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> 7ème Consultant : Maël</li> </strong> </p>

<p> <h6> En quelques mots, présente nous le contexte de l’étude ainsi que sa problématique ? </h6> </p>


<p>
J'ai d'abord recensé des projets photovoltaïques en binôme. J'ai ensuite effectué
des analyses univariées, bivariées et multivariées sur ces données.
</p>

<p> <h6> En quelques mots, dis nous ce que tu as fait, les étapes de ton travail, les méthodes
statistiques utilisées ?</h6> </p>

<p>
1ère étape : Dans un premier temps, nous avons créé la base de données. Les
difficultés de l'étude résidaient dans le recensement des nouveaux projets. De
plus, il a fallu éviter les doublons sur la grosse base de données fournie par
l'entreprise.
2e étape : J'ai ensuite travaillé seul sur les analyses univariées et bivariées.
3e étape : Enfin, j'ai réalisé des analyses multivariées à l'aide d'une ACM (analyse
des correspondances multiples) et d'un clustering.
</p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> 8ème Consultant : Thomas</li> </strong> </p>

<p> <h6> En quelques mots, présente nous le contexte de l’étude ainsi que sa problématique ?</h6> </p>

<p>
Je devais trouver des données pour analyser l'industrie du bâtiment.
</p>

<p> <h6>En quelques mots, dis nous ce que tu as fait, les étapes de ton travail, les méthodes
statistiques utilisées ?</h6> </p>

<p>
J'ai cherché des données, et ce en grande partie sur le site de l'Insee.
</p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> 9ème Consultant : Justine</li> </strong> </p>

<p> <h6> En quelques mots, présente nous le contexte de l’étude ainsi que sa problématique ?</h6> </p>

<p>
J'ai élaboré un questionnaire et j'ai utilisé une méthode d'arbre de classification
pour calculer des scores. J'ai effectué mon étude en anglais.
</p>

<p> <h6>En quelques mots, dis nous ce que tu as fait, les étapes de ton travail, les méthodes
statistiques utilisées ?</h6> </p>

<p>
J'ai d'abord fait des recherches sur le sujet, ensuite j'ai créé le questionnaire, et
enfin j'ai fait du calcul de scores. J'ai utilisé Excel ainsi que des outils non utilisés à
l'école comme des analyses hiérarchiques des procédés.</p>



<p style=\"text-indent: 40px;\"> <strong> Une plus-value certaine </strong> </p>
<p> <h6>Avec le recul, que t'a apporté cette étude ?</h6> </p>

<p> <li style=\"color: #1E90FF;\">hard skills:</li> </p>

<p>
<li style=\"padding-left:40px\">
Consolider les connaissances en SAS ;
</li>
<li style=\"padding-left:40px\">
Réviser les méthodes statistiques de base (comme l’ACM et le clustering);
</li>
<li style=\"padding-left:40px\">
Progresser en R et dans la rigueur du code ;
</li>
<li style=\"padding-left:40px\">
Compétences en python ;
</li>
<li style=\"padding-left:40px\">
Entrainement à la rédaction en anglais.
</li>
</p>


<p> <li style=\"color: #1E90FF;\">Professionnalisme:</li> </p>
<p>
<li style=\"padding-left:40px\">
Les consultants ont pu réutiliser les méthodes de base apprises en
première année en les appliquant à des cas concrets.
</li>
<li style=\"padding-left:40px\">
Les consultants sont amenés à faire preuve de rigueur pour respecter
une date de rendu et un cahier de charges strict.</li>
<li style=\"padding-left:40px\">
Les consultants ont appris à gérer leur temps et à découvrir de nouvelles
méthodes de travail.</li>
</p>

<p> <li style=\"color: #1E90FF;\">Soft skills:</li> </p>
<p>
<li style=\"padding-left:40px\">
Ce qui a aussi été formateur chez les consultants, c’est la relation avec le
chef de projet. Par exemple, à cause d’un malentendu, un consultant a
perdu des heures de travail mais compris par cette occasion
l’importance de faire des comptes rendus écrits des échanges oraux.
Cette communication est primordiale et les études permettent d'en
comprendre l’importance.
</li>

</p>

<p> <h5> Alors, si vous aussi vous êtes tentés par cette aventure,
n’hésitez pas à nous rejoindre ! </h5> </p>
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