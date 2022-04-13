<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
<head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42906120-1', 'auto');
  ga('send', 'pageview');

</script>

	<!-- initialisation variables php -->
	
<?php


header('Content-Type: text/html; charset=utf-8');
$json_source = file_get_contents('http://www.ejc.fr/android/jarticle.html');
$json_data = json_decode($json_source, true);
$idArticle = array();
$titreArticle = array();
$soustitreArticle = array();
$urlArticle = array();
$urlImage = array();
$auteurArticle = array();
$categorieArticle = array();

$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

foreach($json_data as $v){
  $idArticle[] = $v['idArticle'];
  $titreArticle[$v['idArticle']] = $v['titre'];
  $soustitreArticle[$v['idArticle']] = $v['soustitre'];
  $urlArticle[$v['idArticle']] = $v['url'];
  $urlImage[$v['idArticle']] = $v['urlImage'];
  $auteurArticle[$v['idArticle']] = $v['auteur'];
  $categorieArticle[$v['idArticle']] = $v['catégorie'];
}


?>

	<!-- META DATA -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="UTF-8">
	<title>Blog de ENSAI Junior Consultant, Junior-Entreprise spécialisée dans le domaine de la statistique et de l'analyse de l'information</title>
        
        <!-- Description du site (description lors d'une recherche google)-->
	<meta name="description" content="Blog de ENSAI Junior Consultant, Junior-Entreprise spécialisée dans le domaine de la statistique et de l'analyse de l'information""/>
	
        <!-- Mots clés pour la recherche-->
        <meta name="keywords" content="ENSAI, junior, entreprise, junior-entreprise, JER, étude, big data, statistique, statistiques, stats, analyse, information, informatique, mathémathiques, maths"/>
        <meta name="author" content=""/>
        <meta name="theme-color" content="#1e90ff">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="faviconne.ico" type="image/x-icon">
	
        <!-- PARTAGE RESEAUX SOCIAUX -->
	<meta property="og:image" content="http://www.ejc.fr/images/logo_top.png" />
	
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

<body class="onepage" data-spy="scroll" data-target=".navigation">
  
    <div class="page-wrap">
    <!-- START NAVIGATION -->
    <nav class="light sticky-nav navigation">
		<!-- START CONTAINER -->	
		<div class="container clearfix">			
			<div class="four columns">			
				<!-- START LOGO -->	
				<div class="logo large" style="width:130px">
					<a href="http://www.ejc.fr/#home"><img src="images/logo_top2.png" width="100%" title="logo" alt="Logo"/></a>
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

        <!-- DEBUT DE LA CITATION -->
	<div class="container" style="background-image: url(images/zigouigoui_gris2.png); background-position: right">   
		<div class="row" style="margin-top: 40px; margin-bottom: 0px;">          
			<div class="one-third column" style="width: 5%;">
				<div class="service-features">
					</p></p>
					<p class="testimonial-icon"><i class="icon-quote-left"></i></p>
				</div>               
			</div>
			<div class="one-third column" style="width: 60%">
				<div class="service-features">
					<div class="testimonial-slide">
						<p class="client-testimonial" style="background-color: dodgerBlue; border-radius: 15px; box-shadow: 0px 0px 8px 2px dodgerBlue;">
						Retrouvez tous les articles sur l'actualité de notre Junior-Entreprise et les différentes problématiques qui nous font réagir. Bonne lecture à tous !
					</div>
				</div>
			</div> 
			<div class="one-third column"  style="width: 25%;">
				</p>
				<h4>Théophile Desolle</h4> 
				<h6>Président d'EjC</h6>
			</div>                
		</div>                            		
	</div>
	<!-- FIN DE LA CITATION -->
	
	<!-- DEBUT DE LA UNE --> 
	<div id="team" class="page" style="margin-top: 0px;">
		<!-- DEBUT DES ARTICLES A LA UNE -->
       <div class="fullwidth grey" style="padding-top:0px;padding-bottom:10px;"> 
			<div class="title">
				<h2>A LA UNE</h2>
			</div>
          <div class="container">
             <div class="row">      
              <div class="sixteen columns">  
			  
<?php


$nbArticle = sizeof($idArticle);

for($i = $nbArticle-1; $i>$nbArticle - 4 ; $i=$i-1){
   echo "<div class='team-member'>
						<div class='team-thumb img-wrp'> 
							<img src=".$urlImage[$idArticle[$i]]." alt='logo'>	
							 <div class='team-overlay'>
								<div class='img-overlay'></div>  
								  <div class='overlay-content'>                             
									</p>".$soustitreArticle[$idArticle[$i]]."</p> <!-- SOUS TITRE -->
									<p><a href=".$urlArticle[$idArticle[$i]]." class='modal-popup-link view-profile'>Lire l'article</a></p>
								 </div>
							</div>         
						   </div> 
						<div class='team-desc'>
						  <h4>".$titreArticle[$idArticle[$i]]."</h4> <!-- TITRE -->
						</div> 
					 </div>";


}

?>
	  
			  
					</div>
				</div> <!-- FIN DE LA LIGNE --> 
			</div>
		</div>
	</div>	
	
	<!-- START CONTACT SECTION -->
	<div id="contact" class="fullwidth lineargrey" style="padding-top:10px">
    
		<div class="title">
			<h3>RETROUVEZ NOS DERNIERS ARTICLES</h3>
		</div>
		
        <!-- START PORTFOLIO SECTION -->
		<div id="portfolio" class="page" style="padding: 0 0 0 0; background-image: url(images/zigouigoui_gris2.png); background-position: right;  background-repeat: repeat-x;">		
			   <!-- START AJAX SECTION -->  
				<div id="ajax-section">     
				 <div class="container clearfix">					
				  <!-- START PROJECT NAVIGATION --> 
				  <div id="project-navigation">
					  <ul>
						  <li id="nextProject"><a href="#"></a></li>
						  <li id="prevProject"><a href="#"></a></li>
					   </ul>  
				   </div>
				   <!-- END PROJECT NAVIGATION --> 					
				   <!-- START PROJECT CLOSE BUTTON -->
				   <div id="closeProject">
						<a href="#loader"><i class="icon-remove"></i></a>       
				   </div>  
				   <!-- START PROJECT CLOSE BUTTON -->
				   <!-- START PROJECT LOADER SECTION -->
				   <div id="loader"></div>
				   <!-- END PROJECT CLOSE BUTTON -->	 
				   <!-- START AJAX CONTENT -->
				   <div id="ajax-content-outer">
						<div id="ajax-content-inner"></div>
				   </div>
				   <!-- END AJAX CONTENT -->  
			</div><!-- END CONTAINER -->
		</div>
			   <!-- END AJAX SECTION -->          
		<div class="clear"></div>
		
	   <div class="container clearfix">  
	   <!-- PORTFOLIO: LISTE DES CATEGORIES -->   
	   <div  id="filters" class="sixteen columns">
		<ul class="clearfix"> <!-- Liste des catégories -->
			<li><a href="#" data-filter="*" class="active"><h3>Tous les articles</h3></a></li>	
			<li><a href="#" data-filter=".branding"><h3>L'Équipe</h3></a></li>
			<!-- <li><a href="#" data-filter=".design"><h3>A TROUVER</h3></a></li> -->
			<li><a href="#" data-filter=".photography"><h3>Nos événements</h3></a></li>
			<li><a href="#" data-filter=".videography"><h3>Interviews</h3></a></li>
			<!-- <li><a href="#" data-filter=".web"><h3>Web</h3></a></li> -->
		  </ul>
		</div><!-- END PORTFOLIO FILTERING -->    
	   </div><!-- END CONTAINER -->  
	   <!-- PORTFOLIO: LISTE DES ARTICLES -->  
	   <div id="portfolio-wrap">
	   

 
 
<?php


$nbArticle = sizeof($idArticle);

for($i = $nbArticle-1; $i>$nbArticle - 15 ; $i=$i-1){
	if($categorieArticle[$idArticle[$i]]=="Equipe"){
   echo "			<div class='portfolio-item one-third column branding'>
				   <div class='portfolio'>
					  <a href=".$urlArticle[$idArticle[$i]]." class='portfolio-image'>
  						<img src=".$urlImage[$idArticle[$i]]." alt='Portfolio 3'/><!-- END PORTFOLIO IMAGE -->   
						 <div class='portfolio-overlay'>                
							<div class='thumb-info'>                
							  <h3>".$titreArticle[$idArticle[$i]]."</h3><!-- OVERLAY TITLE -->  
							  <p class='portfolio-tags'>".$soustitreArticle[$idArticle[$i]]."</p><!-- END PORTFOLIO TAGS -->  
							  <!-- <i class='icon-picture'></i>-->
							</div>                
						</div><!-- END PORTFOLIO OVERLAY --> 
					  </a>
				   </div>
	</div>"; }
	
	if($categorieArticle[$idArticle[$i]]=="Interview"){
   echo "			<div class='portfolio-item one-third column videography'>
				   <div class='portfolio'>
					  <a href=".$urlArticle[$idArticle[$i]]." class='portfolio-image'>
  						<img src=".$urlImage[$idArticle[$i]]." alt='Portfolio 3'/><!-- END PORTFOLIO IMAGE -->   
						 <div class='portfolio-overlay'>                
							<div class='thumb-info'>                
							  <h3>".$titreArticle[$idArticle[$i]]."</h3><!-- OVERLAY TITLE -->  
							  <p class='portfolio-tags'>".$soustitreArticle[$idArticle[$i]]."</p><!-- END PORTFOLIO TAGS -->  
							  <!-- <i class='icon-picture'></i>-->
							</div>                
						</div><!-- END PORTFOLIO OVERLAY --> 
					  </a>
				   </div>
	</div>"; }
	if($categorieArticle[$idArticle[$i]]=="Evenement"){
   echo "			<div class='portfolio-item one-third column photography'>
				   <div class='portfolio'>
					  <a href=".$urlArticle[$idArticle[$i]]." class='portfolio-image'>
  						<img src=".$urlImage[$idArticle[$i]]." alt='Portfolio 3'/><!-- END PORTFOLIO IMAGE -->   
						 <div class='portfolio-overlay'>                
							<div class='thumb-info'>                
							  <h3>".$titreArticle[$idArticle[$i]]."</h3><!-- OVERLAY TITLE -->  
							  <p class='portfolio-tags'>".$soustitreArticle[$idArticle[$i]]."</p><!-- END PORTFOLIO TAGS -->  
							  <!-- <i class='icon-picture'></i>-->
							</div>                
						</div><!-- END PORTFOLIO OVERLAY --> 
					  </a>
				   </div>
	</div>"; }
	if($categorieArticle[$idArticle[$i]]==""){
   echo "			<div class='portfolio-item one-third column '>
				   <div class='portfolio'>
					  <a href=".$urlArticle[$idArticle[$i]]." class='portfolio-image'>
  						<img src=".$urlImage[$idArticle[$i]]." alt='Portfolio 3'/><!-- END PORTFOLIO IMAGE -->   
						 <div class='portfolio-overlay'>                
							<div class='thumb-info'>                
							  <h3>".$titreArticle[$idArticle[$i]]."</h3><!-- OVERLAY TITLE -->  
							  <p class='portfolio-tags'>".$soustitreArticle[$idArticle[$i]]."</p><!-- END PORTFOLIO TAGS -->  
							  <!-- <i class='icon-picture'></i>-->
							</div>                
						</div><!-- END PORTFOLIO OVERLAY --> 
					  </a>
				   </div>
	</div>"; }
}



?>
			


	   
			
<!-- ARCHIVE -->                   
			<div class="portfolio-item one-third column branding design photography videography web">
				   <div class="portfolio">
					  <a href="archive.php" class="portfolio-image">
						<img src="images/archive.png" alt="Portfolio 3"/><!-- END PORTFOLIO IMAGE -->   
						<div class="portfolio-overlay">                
							<div class="thumb-info">                
							  <h3>Plus d'articles</h3><!-- OVERLAY TITLE -->  
							  <p class="portfolio-tags"></p><!-- END PORTFOLIO TAGS -->  
							  <!-- <i class="icon-picture"></i>-->
							</div>                
						</div><!-- END PORTFOLIO OVERLAY --> 
					  </a>
				   </div>
			</div>
			
			<!-- END PORTFOLIO ITEM -->			 
	   </div>
	   <!-- END PORTFOLIO WRAPPER -->
	</div>
	<!-- END PORTFOLIO SECTION -->


        <div class="page">
	
	<!-- START PARALLAX SECTION -->
	<div id="parallax3" class="parallax" style="background-color:#9D9D9D;">
        <div class="bg3 parallax-bg"></div><!-- END PARALLAX BACKGROUND -->
        <div class="overlay"></div><!-- END PATTERN OVERLAY -->
        <div class="container clearfix">
                <div class="parallax-content">
                <p class="testimonial-icon"><i class="icon-thumbs-up"></i></p><h3 class="title"><span>NOUS AVONS AIMÉ</span></h3>
                <div class="testimonial-slider">
                      <div class="flexslider">
                      <ul class="slides styled-list">
                      

						
						<li class="testimonial-slide">
						<img src="src/share/letudiant.png" style="margin-left:auto;margin-right:auto;width:100px;">
						<p class="client-testimonial" style="color:white">Le saviez-vous ? Le classement des écoles de commerce proposé par l'Etudiant est le fruit du travail d'un intervenant d'ENSAI junior Consultant. Découvrez le classement 2017 et la méthodologie employée. Merci pour leur confiance et leur fidélité !<br> 
						<h6> <a href="http://www.letudiant.fr/palmares/liste-profils/palmares-des-grandes-ecoles-de-commerce/palmares-des-grandes-ecoles-de-commerce-notre-methodologie/home.html" style="margin-left:5px;color:white;font-weight:bold;on">Lire l'article de l'Étudiant</a></p> </h6>
						</li>

                                                <li class="testimonial-slide">
						<img src="src/share/dataiku.png" style="margin-left:auto;margin-right:auto;width:100px;">
						<p class="client-testimonial" style="color:white">Grâce aux enseignements dispensés à l'ENSAI, nos intervenants manipulent de nombreux outils statistiques pour effectuer leurs études. Voici un excellent article de <emp>data iku</emp> qui décrit certains de ces concepts.<br> 
						<h6> <a href="https://blog.dataiku.com/an-introduction-to-key-data-science-concepts" style="margin-left:5px;color:white;font-weight:bold;on">Lire l'article de data iku</a></p> </h6>
						</li>
						
						
						<li class="testimonial-slide">
						<img src="src/share/letudiant.png" style="margin-left:auto;margin-right:auto;width:100px;">
						<p class="client-testimonial" style="color:white">"Faire partie de la Junior-Entreprise de votre école ou de votre université : un atout pour votre insertion professionnelle. Samuel, 22 ans, étudiant en école de commerce, nous fait partager son expérience d'apprenti manager."<br> 
						<h6> <a href="http://www.letudiant.fr/jobsstages/junior-entreprise-devenez-entrepreneur-avant-l-heure.html" style="margin-left:5px;color:white;font-weight:bold;on">Lire l'article de l'Étudiant</a></p> </h6>
						</li>

						<li class="testimonial-slide">
						<img src="http://ejc.fr/images/clients2/cnje.png" style="margin-left:auto;margin-right:auto;width:100px;">
						<p class="client-testimonial" style="color:white">"Tu es étudiant ? Tu as entendu parler de la Junior-Entreprise de ton école ou université mais tu hésites encore à postuler ? Voici 5 raisons qui vont te convaincre de franchir le pas."<br> 
						<h6> <a href="http://junior-entreprises.com/blog/etudiant-rejoindre-junior-entreprise/" style="margin-left:5px;color:white;font-weight:bold;on">Lire l'article de la CNJE</a></p> </h6>
						</li>					


                      </ul>
                      </div>
              </div>

      </div><!-- END PARALLAX CONTENT -->
    </div><!-- END CONTAINER -->
  </div>
  <!-- END PARALLAX SECTION -->
	
	</div>
	

		
    <!-- START COPYRIGHT SECTION -->   	
    <div class="copyright">
    <div class="container clearfix">
        <div class="sixteen columns">
			<div class="row">
                <div class="sixteen columns">
					<center><img src="images/logo_top.png" title="logo" alt="logo"/></center>
                </div>  
            </div>		
           <div class="social-icons">
              <div class="social-icon social-email"><a href="mailto:contact@ejc.fr" target="_blank" data-original-title="Email">Email</a></div>
			  <div class="social-icon social-facebook"><a href="https://www.facebook.com/Ensai-junior-Consultant-122804694508292/?fref=ts" target="_blank" data-original-title="Facebook">Facebook</a></div>
              <div class="social-icon social-linkedin"><a href="https://www.linkedin.com/company/ensai-junior-consultant" target="_blank" data-original-title="Delicious">Delicious</a></div>
              <div class="social-icon social-twitter"><a href="https://twitter.com/EjC_35" target="_blank" data-original-title="Flickr">Flickr</a></div>
           </div>
		   
		   <div class="container clearfix">
			<div class="sixteen columns partenaires">
            <h3 class="highlight">Les partenaires CNJE</h3>
            
                <div class="partenaire-logos">
               
                  <a href="http://www.bnpparibas.com/" title="Partenaire" class="clients"><img src="images/clients2/bnp.png" alt="Partenaire"></a>
                  <!-- <a href="http://www.amaris.com/fr" title="Partenaire" class="clients"><img src="images/clients2/amaris2.png" alt="Partenaire"></a> -->
				  <a href="http://www.engie.com/" title="Partenaire" class="clients"><img src="images/clients2/engie3.png" alt="Partenaire"></a>
				  <a href="http://www.ey.com/fr/fr/home" title="Partenaire" class="clients"><img src="images/clients2/ey2.png" alt="Partenaire"></a>
				  <a href="http://www.alten.fr" title="Partenaire" class="clients"><img src="images/clients2/alten.png" alt="Partenaire"></a>
				 
                </div>
			 </div>
		</div>  
			<p>&copy; 2022 Tous droits réservés. E<em>j</em>C</br>
			ENSAI <em>junior</em> Consultant</br>
			Campus de Ker-Lann, Rue Blaise Pascal - BP 37203</br> 
			35172 BRUZ cedex</br>
			<a href="http://www.ejc.fr/mentions_l%C3%A9gales.html">Mentions légales</a></p>
         </div> <!-- END SIXTEEN COLUMNS -->
	  </div><!-- END CONTAINER -->
     </div>
	</div>
    <!-- END CONTACT SECTION -->		
	
	
    </div><!-- END PAGE WRAP --><div id="back-to-top"><a href="#">Back to Top</a></div>
	
	
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
    <script type="text/javascript" src="js/isotope.js"></script>    
    <script type="text/javascript" src="js/bootstrap-modal.js"></script>   
    <script type="text/javascript" src="js/shortcodes.js"></script>     
	<script type="text/javascript" src="js/scripts.js"></script>            
                   
  	
</body>

</html>						