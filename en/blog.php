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

<?php

// En tête
$menu_source = file_get_contents('http://www.en.ejc.fr/menu_en_tete_en.html');


?>


	<!-- META DATA -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="UTF-8">
	<title>ENSAI junior Consultant Blog</title>
    <!-- Description du site (description lors d'une recherche google)-->
	<meta name="description" content="ENSAI junior Consultant blog, a Junior Enterprise specialise in statistics and data analysis""/>
	   <!-- Mots clés pour la recherche-->
    <meta name="keywords" content="Ensai, junior, enterprise, junior enterprise, JER, study, big data, statistics,, stats, analyse, information, science computer, mathémathics, maths, anglais, english, eng, engineer"/>
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
					<a href="http://www.en.ejc.fr/#home"><img src="images/logo_top2.png" width="100%" title="logo" alt="Logo"/></a>
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
						Find out about EjC News in our new articles. Happy reading!
						</div>
				</div>
			</div> 
			<div class="one-third column"  style="width: 25%;">
				</p>
				<h4>Théophile Desolle</h4> 
				<h6>EjC president</h6>
			</div>                
		</div>                            		
	</div>
	<!-- FIN DE LA CITATION -->
	


	<!-- DEBUT DE LA UNE --> 
	<div id="team" class="page" style="margin-top: 0px;">
		<!-- DEBUT DES ARTICLES A LA UNE -->
    <!--   <div class="fullwidth grey" style="padding-top:0px;padding-bottom:10px;"> -->
			<div class="title">
				<h2>Our new articles</h2>
			</div>

          <div class="container">
             <div class="row">      
              <div class="sixteen columns"> 
<!-- DEBUT ARTICLE 5 -->

                                         <div class="team-member">
						<div class="team-thumb img-wrp"> 
							<img src="blog/src/2020/art20_030/logo_environment.jpg" alt="logo">	
							 <div class="team-overlay">
								<div class="img-overlay"></div>  
								  <div class="overlay-content">                             
									</p>Data & environment</p> <!-- SOUS TITRE -->
									<p><a href="http://blog.ejc.fr/art20_030.php" class="modal-popup-link view-profile">Read the article</a></p>
								 </div>
							</div>         
						   </div> 
						<div class="team-desc">
						  <h4>Is big data dangerous for the environment?</h4> <!-- TITRE -->
						</div> 
					 </div>
<!-- FIN ARTICLE 5 --> 
			  
<!-- DEBUT ARTICLE 4 -->

                                         <div class="team-member">
						<div class="team-thumb img-wrp"> 
							<img src="blog/src/2020/art20_029/logo_tourism.png" alt="logo">	
							 <div class="team-overlay">
								<div class="img-overlay"></div>  
								  <div class="overlay-content">                             
									</p>Data & tourism</p> <!-- SOUS TITRE -->
									<p><a href="http://blog.ejc.fr/art20_029.php" class="modal-popup-link view-profile">Read the article</a></p>
								 </div>
							</div>         
						   </div> 
						<div class="team-desc">
						  <h4>What Big Data brings to tourism</h4> <!-- TITRE -->
						</div> 
					 </div>
<!-- FIN ARTICLE 4 -->
<!-- DEBUT ARTICLE 3 -->

                                         <div class="team-member">
						<div class="team-thumb img-wrp"> 
							<img src="blog/src/2020/art20_027/ski_logo.png" alt="logo">	
							 <div class="team-overlay">
								<div class="img-overlay"></div>  
								  <div class="overlay-content">                             
									</p>How do ski resorts track their visitors?</p> <!-- SOUS TITRE -->
									<p><a href="http://blog.ejc.fr/art20_027.php" class="modal-popup-link view-profile">Read the article</a></p>
								 </div>
							</div>         
						   </div> 
						<div class="team-desc">
						  <h4>Data & ski</h4> <!-- TITRE -->
						</div> 
					 </div>
<!-- FIN ARTICLE 3 -->
			  
<!-- DEBUT ARTICLE 2 -->

                                         <div class="team-member">
						<div class="team-thumb img-wrp"> 
							<img src="blog/src/2019/art19_020/Une_Etude_EjC.png" alt="logo">	
							 <div class="team-overlay">
								<div class="img-overlay"></div>  
								  <div class="overlay-content">                             
									</p>EjC makes you discover its work</p> <!-- SOUS TITRE -->
									<p><a href="http://www.en.ejc.fr/art19_020.php" class="modal-popup-link view-profile">Read the article</a></p>
								 </div>
							</div>         
						   </div> 
						<div class="team-desc">
						  <h4>Some EjC studies</h4> <!-- TITRE -->
						</div> 
					 </div>
<!-- FIN ARTICLE 2 -->		  
<!-- DEBUT ARTICLE 1 --> 
											
											
					<div class="team-member">
						<div class="team-thumb img-wrp"> 
							<img src="blog/src/2018/art18_008_2/1.jpg" alt="logo">	
							 <div class="team-overlay">
								<div class="img-overlay"></div>  
								  <div class="overlay-content">                             
									</p>An unexpected cornerstone for innovation</p> <!-- SOUS TITRE -->
									<p><a href="http://www.en.ejc.fr/art18_012.php" class="modal-popup-link view-profile">Read the article</a></p>
								 </div>
							</div>         
						   </div> 
						<div class="team-desc">
						  <h4>Vivatech 2k18</h4> <!-- TITRE -->
						</div> 
					 </div>
<!-- FIN ARTICLE 1 --> 	

			  

					 	
	
					
		  
			  
					</div>
				</div> <!-- FIN DE LA LIGNE --> 
			</div>
		</div>
	</div>	

	

	<div class="container">	
           <div class="row">	
			<div class="sixteen columns">
	            <!-- START TITLE -->	            
				<div class="title">
					</br> </br>
       
				  <h3>You may continue your navigation on our website</h3>
				  
				  <!-- acces homepage-->
					 <div class="team-member">
						  <div class="team-thumb img-wrp"> 
							<img src="images/fondaccueil.jpg" alt="logo">	
							 <div class="team-overlay">
								<div class="img-overlay"></div>  
								  <div class="overlay-content">                            
									</p></p> <!-- SOUS TITRE -->
									<p><a href="index.php" class="modal-popup-link view-profile">Access to the homepage</a></p>
								 </div>  
							</div>
						   </div>
						<div class="team-desc">
						  <h4>The homepage</h4><!-- TITRE -->
						</div> 
					 </div><!-- acces homepage --> 
					
					<!-- acces french blog-->
					 <div class="team-member">
						  <div class="team-thumb img-wrp"> 
							<img src="images/blog.png" alt="logo">	
							 <div class="team-overlay">
								<div class="img-overlay"></div>  
								  <div class="overlay-content">                             
									</p></p> <!-- SOUS TITRE -->
									<p><a href="http://www.blog.ejc.fr/index.php" class="modal-popup-link view-profile">Access to the french blog</a></p>
								 </div>
							</div>         
						   </div> 
						<div class="team-desc">
						  <h4>The French Blog</h4> <!-- TITRE -->
						</div>
					 </div><!-- acces french blog --> 	



                </div><!-- END TITLE -->  	                           
			</div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->         
          </div><!-- END CONTAINER -->         

		
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
            <h3 class="highlight">CNJE's partners</h3>
            
                <div class="partenaire-logos">
               
                  <a href="http://www.bnpparibas.com/" title="Partenaire" class="clients"><img src="images/clients2/bnp.png" alt="Partenaire"></a>
                  <!-- <a href="http://www.amaris.com/fr" title="Partenaire" class="clients"><img src="images/clients2/amaris2.png" alt="Partenaire"></a> -->
				  <a href="http://www.engie.com/" title="Partenaire" class="clients"><img src="images/clients2/engie3.png" alt="Partenaire"></a>
				  <a href="http://www.ey.com/fr/fr/home" title="Partenaire" class="clients"><img src="images/clients2/ey2.png" alt="Partenaire"></a>
				  <a href="http://www.alten.fr" title="Partenaire" class="clients"><img src="images/clients2/alten.png" alt="Partenaire"></a>
				 
                </div>
			 </div>
		</div>  
			<p>&copy; 2022 All rights reserved. E<em>j</em>C</br>
			Ensai <em>junior</em> Consultant</br>
			Campus de Ker-Lann, Rue Blaise Pascal - BP 37203</br> 
			35172 BRUZ cedex</br>
                        <a href="legal_notice.html">Legal notice</a></p>
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