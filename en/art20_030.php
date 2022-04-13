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
		$titre = "Is big data a threat or a solution for the environment?";
		$sstitre = "";
		$description = "";
		$urlimageaccueil = "http://www.ejc.fr/blog/src/2020/art20_030/logo_environment.jpg";
		$num_arc = "20_030"; //AA_NNN
		$date_publ= mktime(0,0,0,7,02,2020); // heure minute seconde mois jour année
 
 // En tête
$menu_source = file_get_contents('http://www.en.ejc.fr/menu_en_tete_en.html');

		//type de l'article: marquer 'video' ou 'images' 
		$type = "";
 
		// Informations concernant les image(s) (si diaporama)
		$arrayURL = array();
		$arrayLabel = array();
 
		// Informations concernant la vidéo youtube (si vidéo)
		$youtubeURL = " URL youtube";
 
		//Auteur de l'article
		$booleanAuteur = true ; //true si écrit par un pôle, false si écrit par une personne
		$nom_auteur = "Iris Godinot"; //"Prénom Nom" ou "le pôle XXX"
		$titreAuteur = "Iris Godinot"; //non utilisé si article écrit par un pôle. Exemple: "vice-présidente"
		$imgAuteur = "images/pole/iris.jpg"; //URL de la photo de l'auteur
		$mail_ejc = "communication@ejc.fr";
 
		// Corps de l'article
		// Il est recommandé de travailler au brouillon depuis un vieux doctype sous format html puis de
		// Recopier le code html présent entre les balises <div class="post-content" ... > </div>
		// Attention toutes les guillemets "" doivent être précédées d'un antislash \
		$corps="

<p> Would you rather start with the good or the bad news? Let's not change habits, let's start with the bad ones. </p>

<p> This is not a scoop, data storage consumes and pollutes a lot! Big Data is growing exponentially and is
paving the way for new challenges dealing with data processing. For instance, 29,000 Gigabytes (GB) of
information is published worldwide, every second. It may not ring a bell for you, but trust me, it's huge!</p>

<p> With this huge amount of data stockpiled over time, datacenters have been created to store and secure data.
What is a data center? It's a kind of digital factory based in highly secure bunkers. Now that data center is no
longer a secret for you, you may wonder how does it relate to the environment? Well, if I tell you that these
structures are responsible for 2% of CO2 emissions and 1.5% of electricity consumption worldwide. Long
story short, this ties in to the production of 30 nuclear power plants. And here I don’t even talk about the
building materials of these structures and computer components, which are not at all ecological. </p>

<p> Now that you are in high spirits, do not think that this situation cannot improve. Down with pessimism! In
fact, it is possible to review our use of technologies and find solutions to avail cutting-edge technology and
behave in an eco-friendly and responsible manner. Our consumption of more and more powerful equipment
is increasing day by day in a dizzying way, due to the rise in technologies, more particularly artificial
intelligence. The first step in our journey towards a greener Big Data would be to reconsider data in a
slightly more ecological context. Yet, don’t get me wrong! Not printing at all or going back to the era where
technology did not exist is not the solution! However, making thoughtful choices about the selection of
materials and components already makes a big difference. As you may know, the recycling of IT
components is almost impossible. </p>

<p> The good news? Solutions exist! From cold water cooling to the use of recycled plastic, through the
establishment of repair centers ... Contrary to what most people might think, it is possible to consider the
activity as a whole and several stakeholders are looking into the matter. In addition, unused or obsolete data
are accumulated and magnified on a personal and professional level. Of course, the volume of those data on
a global scale is energy-intensive. What is more, a recent Databerg study highlighted that only 14% of data
has an obvious interest concerning business.  </p>

<p> On top of that, we use data to respond to a problem and thus find a solution. We cannot expect Big Data to
save the planet unless citizens change their habits. It’s in this context that Bid Data has value. Indeed,
specific data represent a precious source of information to face the many challenges related in particular to
climate change (e.g. green mobility, energy efficiency, agricultural transition, etc.) </p>

<p> Putting data at the service of the energy transition begins with the collection of information, which is carried
out thanks to increasingly wide capture modes (from the surveillance camera to the weather sensor, via
drones or smartphones). For example, the crowd-sourcing is a data collection method which aims to ask
citizens to make available their sensors, phone and tablet, but also connected objects (smart watches for 
instance or household appliances) to provide measurements in real time and thus create maps of trends (e.g.
noise or light pollution). Hence, the analysis of the data collected can allow us to adjust certain habits and to
become aware of elements that we should question. </p>

<p> Some examples of ecological initiatives harnessing Big Data: </p> 

<p>
<li style=\"padding-left:40px\">
In Paris 13th district, Quantmetry is testing a system that parses the number of passers-by in the streets
according to mobile phones in order to gear public lighting accordingly.</li>
<li style=\"padding-left:40px\">
Fruiton Sciences, a company in Southern France, has set up sensors in different vineyards in order to
measure the flow of sap so as to understand the water requirement of the vines.</li>
<li style=\"padding-left:40px\">
In Lyon, Veolia and the start-up ForCity design in real time various features such as: individuals, crowds,
vehicles, traffic and other flows. The aim is to better visualize the impact of urban development.</li>
</p>

<p> Thanks to these examples, we can see that data can therefore serve the ecological transition, provided we
have a reasoned use of it. The use of technology should not be an automatic reflex. In a nutshell, the use of
data must be calibrated in consideration of the environmental impact of the data and their real contribution
to the ecological transition. </p>

<p style=\"text-indent: 40px;\"> <strong> <li style=\"color: #1E90FF;\"> Some tips to help you combine data and environment: </li> </strong> </p>

<p>
<li style=\"padding-left:40px\">
Sort and delete emails regularly
</li>
<li style=\"padding-left:40px\">
Unsubscribe from automatic emails and newsletters
</li>
<li style=\"padding-left:40px\">
Use responsible search engines such as Ecosia</li>
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
	<meta name="keywords" content="Tourism,statistics,help,tracking,Iris,Godinot,Ensai, junior, entreprise, junior-entreprise, JER, étude, big data, statistique, statistiques, stats, analyse, information, informatique, mathémathiques, maths"/>
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