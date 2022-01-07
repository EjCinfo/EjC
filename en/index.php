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
	<title>ENSAI Junior Consultant</title>
    <!-- Description du site (description lors d'une recherche google)-->
	<meta name="description" content="ENSAI Junior Consultant website,a Junior Enterprise specialise in statistics and data analysis""/>
	   <!-- Mots clés pour la recherche-->
    <meta name="keywords" content="ENSAI, junior, enterprise, junior enterprise, JER, study, big data, statistics,, stats, analyse, information, science computer, mathémathics, maths, anglais, english, eng, engineer"/>
    <meta name="author" content=""/>
    <meta name="theme-color" content="#1e90ff">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
       <link rel="shortcut icon" href="faviconne.ico" type="image/x-icon">

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
 <div id="load"></div>
 

    	
    
    <!-- START PAGE WRAP -->    
    <div class="page-wrap">
    
    
	<!-- START HOME SECTION -->    
	<div id="home" class="home-parallax">
      <div class="home-text-wrapper" style="min-height:0px;"> <!-- ajout de style="min-height:0px;" à cause du pb d'affichage image sous ie (cf mail L.DiCarlo)alors que par défaut style="min-height:6000px;" -->
      	   <div class="container clearfix">
              <div class="home-quote">
			  <center> <img src="images/logoEJCblanc.png" alt="logoEJC" width=50% height=auto  class="slabtext flotte img"> 
			  <h1>
				
                    <span class="slabtext second-child">" Reveal the potential of your data"</span> 
					<span class="slabtext tree-child">ENSAI Junior Consultant, ENSAI's Junior Enterprise </span> 					
                </h1>
              </div>
           </div><!-- END CONTAINER -->
        </div><!-- END HOME TEXT WRAPPER -->
     </div><!-- END HOME SECTION -->
	
	
	
    <!-- START NAVIGATION -->
    <nav class="light sticky-nav navigation">
     <!-- START CONTAINER -->	
      <div class="container clearfix">			
          <div class="four columns">			
              <!-- START LOGO -->	
              <div class="logo large" style="width:130px">
               <a href="#home"><img src="images/logo_top2.png" title="logo" alt="Logo"/></a>
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
	
	
	<!-- START ABOUT US SECTION -->	
	<div id="about" class="page">
	
		<div class="container">	
           <div class="row">	
			<div class="sixteen columns">            
	            <!-- START TITLE -->	            
				<div class="title">
				  <h1>Who are we?</h1>
                  <div class="subtitle subtitle1">
					  </br>
					  <p>ENSAI <em>junior</em> Consultant is a <span class="highlight">Junior Enterprise</span></p>
                      <p>A Junior-Entreprise is a non-profit organization under the law 1901, affiliated to the Confédération Nationale des Junior-Entreprises (<span class="highlight">CNJE</span>)</p>
					  <p>We provide <span class="highlight">professional quality</span> services of <span class="highlight">attractive rates</span> in order to offer further training to ENSAI students.</p>
					  </br>
					  <iframe width="560" height="315" src="https://www.youtube.com/embed/Oi4FOXbVIYI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					  
					  <p>Audited once a year, Junior Enterprise label guarantees an optimum quality.</p>
                  </div><!-- END SUBTITLE -->
                </div><!-- END TITLE -->
				
				          <h3 class="highlight">CNJE's partners</h3>
            
                <div class="partenaire-logos">
               
                  <a href="http://www.bnpparibas.com/" title="Partenaire" class="clients"><img src="images/clients2/bnp.png" alt="Partenaire"></a>
                  <!-- <a href="http://www.amaris.com/fr" title="Partenaire" class="clients"><img src="images/clients2/amaris2.png" alt="Partenaire"></a> -->
				  <a href="http://www.engie.com/" title="Partenaire" class="clients"><img src="images/clients2/engie3.png" alt="Partenaire"></a>
				  <a href="http://www.ey.com/fr/fr/home" title="Partenaire" class="clients"><img src="images/clients2/ey2.png" alt="Partenaire"></a>
				  <a href="http://www.alten.fr" title="Partenaire" class="clients"><img src="images/clients2/alten.png" alt="Partenaire"></a>
				 
                </div>
                

			</div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->         
          </div><!-- END CONTAINER -->
				
			</div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->         
          </div><!-- END CONTAINER -->
          



<div class="fullwidth grey">
        <div class="container">  
        <div class="fancy-header2">       
           <h4>Our areas of expertise</h4>
           <h2 class="highlight">Futur engineers provide their knowledge</h2>
        </div>
           
         <div class="row">          
                <div class="one-third column">
                  <div class="service-features">
                  <div class="img-container">
                    <img src="images/icons/icons/study.png" alt="Service Features">
                  </div>  
                    <h3>Statistics</h3>               
                    <p>A statistics engineer analyse numbers carefully and methodically. A reliable manner to take advantage of your data.</p>
                  </div>               
                </div><!-- END ONE THIRD COLUMN -->
                
                <div class="one-third column">
                  <div class="service-features">
                  <div class="img-container">
                    <img src="images/icons/icons/banknote.png" alt="Service Features">
                  </div>                   

                    <h3>Econometrics</h3>                
                    <p>Know how to observe the economic sector, estimate and evaluate models. Predict and anticipate to better manage your portfolio.</p>
                  </div>               
               
                </div><!-- END ONE THIRD COLUMNS -->   
                
                <div class="one-third column">
                  <div class="service-features">
                  <div class="img-container">                  
                    <img src="images/icons/icons/settings.png" alt="Service Features">
                  </div>
                    <h3>Computer science</h3>                
                    <p>Coding techniques and software handling. Data analysis requires to master performing tools.</p>
                  </div>               
                
                </div><!-- END ONE THIRD COLUMNS -->
     
                
            </div><!-- END ROW -->                            		
		</div><!-- END CONTAINER --> 
        </div>        
           
                
        <div class="container">  
			</br></br></br></br>
			    <div class="tabset">
                
                      <ul class="tabs styled-list">
                        <li class="tab"><a href="#panel1" class="selected"><span class="highlight">EjC</span> it's...</a></li>
                        <li class="tab"><a href="#panel2" class="">Our school,<span class="highlight">ENSAI</span></a></li>
<!--                        <li class="tab"><a href="#panel3" class=""><span class="highlight">director</span>'s word</a></li> -->
                      </ul>
                      
                      <div class="panel" id="panel1">
						<p class="text-panel">... ENSAI's Junior-Enterprise - National School for Statistics and Data Analysis</br></br>
						EjC  works as a <span class="highlight">consultancy firm</span>. EJC links companies who need 
						<span class="highlight">statistical studies</span>  and engineer students from ENSAI who achieve these.
						Since <span class="highlight">1996</span>, EJC worked with well-known companies as well as SMEs,  
						public institutions, start ups and private individuals.</br></br>
						We can exploit the expertise of  <span class="highlight">250 engineer students</span>  and we are supported by
						<span class="highlight">ENSAI researcher </span> and research Laboratory in statistics which 
						depends on the CREST- Center for Research in Economics and Statistics.
</p>
                      </div>
                      
                      <div class="panel" id="panel2">
						  <div class="two_third">
								<a href="http://www.ensai.fr/" title="Photo ENSAI" class="link_image"><img src="images/ensai.jpg" alt="Photo ENSAI"></a>
								<a href="http://www.ensai.fr/" title="Logo ENSAI" class="link_image"><img src="images/logo_ensai.png" alt="Logo ENSAI"></a>
						  </div>
						  <div class="one_third last">
								<p>Founded in 1994,<a href="http://www.ensai.fr/" title="Vers le site ENSAI">ENSAI</a> has been located on the Ker Lann Campus since 1996,
								in the countryside just outside Rennes. ENSAI is part of the network of prestigious higher education establishments in France known as  
								Grandes écoles, or specialized graduate schools. ENSAI's education trains its students to become qualified, high-level managers in information 
								processing and analysis. After graduating from the statistical engineering or <a href="http://www.insee.fr/fr/accueil/" title="Vers le site INSEE">INSEE</a> civil servant statistician program, our students have threefold 
								expertise in statistics, econometrics and computer science, which is universally recognized in all professional sectors. 
 </p>
						  </div>
						  <p>Contact ENSAI : communication@ensai.fr</p>
					  </div>
                      
 <!--                     <div class="panel" id="panel3">
							<p class="directeur">
								<img src="images/renan_duthion.png" alt="Nouveau !" />
							</p>
                            <p class="text-panel">
								« L'ENSAI est la seule grande école d’ingénieurs entièrement dédiée aux métiers de
								l’ingénierie statistique et du traitement de l’information. Elle forme des experts de
								la donnée bénéficiant d’une triple compétence "statistique-économétrie-informatique"
								particulièrement recherchée pour traiter et modéliser l’information et aider
								à la décision. </br>
								L'ENSAI développe une offre de formation en relation étroite avec les professionnels
								que ce soit au travers des enseignements, des nombreux projets qui jalonnent le
								cursus, des conférences métiers ou des séminaires professionnels. L’animation
								d’une Junior-Entreprise constitue ainsi un prolongement naturel et souhaitable de
								cette stratégie qui permet de mettre au service des entreprises les compétences
								acquises tout au long de la formation. »</p>
                      </div> -->
                      
                </div> <!-- END OF TABSET -->
		</div><!-- END CONTAINER -->
		
		<div class="fullwidth grey"> 
        <div class="container">  

            <div class="row">
               <div class="sixteen columns">
                 <h2>EjC key figures </h2>
				 </br></br>
               </div><!-- END SIXTEEN COLUMNS -->
               
               <div class="four columns">
				 <h6 class="milestone-details">Exist for</h6>
                 <div class="milestone-counter" data-perc="24">
                   <span class="milestone-count highlight"></span>
                   <img src="images/years.png" alt="Signe ans">
                 </div>
               </div><!-- END FOUR COLUMNS -->  

               <div class="four columns">
                 <div class="milestone-counter" data-perc="250">
                   <span class="milestone-count highlight"></span>
                   <h6 class="milestone-details">potential stakeholders</h6>
                 </div>
               </div><!-- END FOUR COLUMNS --> 
               
               <div class="four columns">
				 <h6 class="milestone-details">response within</h6>
                 <div class="milestone-counter" data-perc="48">
                   <span class="milestone-count highlight"></span>
				   <img src="images/h.png" alt="Signe heure">
                 </div>
               </div><!-- END FOUR COLUMNS --> 
               
               <div class="four columns">
                 <div class="milestone-counter" data-perc="18">
                   <span class="milestone-count highlight"></span>
                   <h6 class="milestone-details">administrators will work for you</h6>
                 </div>
               </div><!-- END FOUR COLUMNS -->
                  <div class="img-container">
                    <img src="images/infographie_en.png" alt="Service Features">
                  </div>                                                                                    
           </div><!-- END ROW -->
		</div><!-- END CONTAINER --> 
        
        		
	  </div>
	  <!-- End ABOUT US SECTION -->
	
	
	<!-- START PARALLAX SECTION -->	
	<div id="parallax1" class="parallax">
		<div class="bg1 parallax-bg"></div><!-- END PARALLAX BACKGROUND -->
		<div class="overlay"></div><!-- END PATTERN OVERLAY -->
		<div class="container clearfix">
			<div class="parallax-content">
				<p class="quote" style="font-size: 150%"><i class="icon-quote-left"></i> 
                                ENSAI Junior Consultant it's a solid Junior-Entreprise based on internal processes and established service guarantees that have allowed it to regularly be among the list of the 30 best JEs in France since 2015. 
Founded in the heart of one of the few Data Sciences schools in France, our young and professional team will take care of revealing your data by meeting your statistical, econometric or IT needs.
Do not wait any longer to yield a profit from your data and entrust us with your projects!				<i class="icon-quote-right"></i></p>
				<div class="quote-author">Capucine Sans, EjC president</div>
			</div><!-- END PARALLAX CONTENT -->
		</div><!-- END CONTAINER -->
	</div>
	<!-- END PARALLAX SECTION -->


	<!-- START SERVICES SECTION -->
	<div class="page" style="padding-top:0px;">    
                   
	<div id="services" class="fullwidth grey" style="margin-top:0px;">       
          
		<div class="container clearfix">
           <div class="row">
        	
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Boost your</br>Performance</p><!-- END service-box TITLE -->
                      <img src="images/performances.png" alt="performances" class="service-icon">	
                   </div>
                 <!-- END ICON -->  
                 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Diagnosis efficiency</li>
                    <li>Quality and Reliability control</li>
                    <li>Forecast</li>
                    <li>Decision support</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
                 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN -->
			
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Analysing and</br>Profiling</p><!-- END service-box TITLE -->
                      <img src="images/clientele.png" alt="clientele" class="service-icon">
                   </div>
                 <!-- END ICON -->  
                 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Scoring model</li>
                    <li>Customer segmentation</li>
                    <li>Analyzing of customer profile</li>
                    <li>Model behaviours</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
                 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN --> 
			
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Contributing our</br>health expertise</p><!-- END service-box TITLE -->
                      <img src="images/sante.png" alt="sante" class="service-icon">
                   </div>
                 <!-- END ICON -->  
                 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Epidemiology</li>
                    <li>Studies and clinical trials</li>
                    <li>Efficiency treatment tests</li>
                    <li>Estimation Medico-economic</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
                 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN --> 
			
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Carry out and work with</br>your surveys</p><!-- END service-box TITLE -->
                      <img src="images/enquete.png" alt="enquete" class="service-icon">
                   </div>
                 <!-- END ICON -->  
                 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Questionnaire design</li>
                    <li>Create a survey design</li>
                    <li>Econometrics of panel data</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
                 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN --> 
			
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations"></br>Data Management Technologies</p><!-- END service-box TITLE -->
                      <img src="images/basedonnees.png" alt="basedonnees" class="service-icon">
                   </div>
                 <!-- END ICON -->  
                 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Information system design</li>
                    <li>Big Data</li>
                    <li>Database Automation</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
                 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN --> 
			
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Model your </br>financial engineering issues</p><!-- END service-box TITLE -->
                      <img src="images/ingenierie.png" alt="ingenierie" class="service-icon">
                   </div>
                 <!-- END ICON -->  
                 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Default risk assessment</li>
                    <li>Estimate the variable interest</li>
					<li></br></li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
                 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN -->
			
        </br></br>
		<img src="images/en_pratique.png" alt="En pratique" class="en_pratique">
		</br>
		  
		 </div>  <!-- END ROW -->  
        </div> <!-- END CONTAINER -->  
                   
</div>

		<div class="container clearfix">
		    
			<div class="sixteen columns">
            </br>
			</br>
			</br>
            <h3 class="highlight">They trusted us</h3>
            
                <div class="client-logos">
                  <a href="http://www.danone.com/" title="Clients" class="clients"><img src="images/clients2/danone.png" alt="Clients"></a>
                  <a href="http://www.engie.com/" title="Clients" class="clients"><img src="images/clients2/engie.png" alt="Clients"></a>
                  <a href="http://www.inra.fr/" title="Clients" class="clients"><img src="images/clients2/inra.png" alt="Clients"></a>
                  <a href="http://www.insee.fr/" title="Clients" class="clients"><img src="images/clients2/insee.png" alt="Clients"></a>
                  <a href="http://www.keolis.com/" title="Clients" class="clients"><img src="images/clients2/keolis.png" alt="Clients"></a>
                  <a href="http://www.laposte.fr/" title="Clients" class="clients"><img src="images/clients2/laposte.png" alt="Clients"></a>
                  <a href="http://www.letudiant.fr/" title="Clients" class="clients"><img src="images/clients2/letudiant.png" alt="Clients"></a>
                  <a href="http://www.orange.fr/" title="Clients" class="clients"><img src="images/clients2/orange.png" alt="Clients"></a>
                  <a href="http://www.gouvernement.fr/" title="Clients" class="clients"><img src="images/clients2/republiquefrancaise.png" alt="Clients"></a>
                  <a href="http://www.sncf.com/" title="Clients" class="clients"><img src="images/clients2/sncf.png" alt="Clients"></a>
                  <a href="http://www.sony.fr/" title="Clients" class="clients"><img src="images/clients2/sony.png" alt="Clients"></a>
                  <a href="http://www.veolia.com/fr" title="Clients" class="clients"><img src="images/clients2/veolia.png" alt="Clients"></a>	
                </div><!-- END CLIENTS LIST --> 
                
			 </div><!-- END SIXTEEN COLUMNS --> 
		</div>

	</div>
	<!-- END SERVICES SECTION -->
	
	
	<!-- START TEAM SECTION --> 
	<div class="page">           
            

       <div id="team" class="fullwidth grey">

		<div class="container">	
           <div class="row">	
			<div class="sixteen columns">            
	            <!-- START TITLE -->	            
				<div class="title">
				  <h1>The Team</h1>
                </div><!-- END TITLE -->  	                           
			</div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->         
          </div><!-- END CONTAINER --> 
       
        <div class="fancy-header2">       
           <h2 class="highlight">MANDATE 2021</h2>
        </div>     
                    
          <div class="container">	
            <center> <img src="images/equipe2021 anglais.jpg" alt="equipe2020">     
              
              
         </div><!-- END CONTAINER --> 
       </div>     

    </div>
    <!-- END TEAM SECTION --> 
	<center>	
	
	<!-- START CONTACT SECTION -->
	<div id="contact" class="fullwidth lineargrey">
    
		<div class="container">	
           <div class="row">	
			<div class="sixteen columns">
	            <!-- START TITLE -->	            
				<div class="title">
				  <h1>Contact</h1>
                </div><!-- END TITLE -->  	                           
			</div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->   
			<div class="row">
                <div class="sixteen columns">
				<img src="images/3icones2.png" title="3icones" alt="3icones" width="270px"/>
				
				</div>  
            </div>
          </div><!-- END CONTAINER -->         
		
	
      <!-- START COPYRIGHT SECTION -->   	
       <div class="copyright" style="margin-top:0px;">
     <div class="container clearfix">
        <div class="sixteen columns">
			
			<div class="row">
                <div class="sixteen columns">
                    <!--    <div class="one_half">
                        <h3>Télécharger notre plaquette</h3>
                        <a href="EJCplaqWEB.pdf" class="link_image"><img src="images/plaquette.png"></a>
						</div> -->
                        <!-- <div class="one_half last"> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2667.0742262577883!2d-1.743966684938355!3d48.050904565173475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f1e37f927d6f1%3A0x6da475b4bbae474a!2sEnsai+Junior+Consultant!5e0!3m2!1sfr!2sfr!4v1458909861876" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<img src="images/logo_top.png" title="logo" alt="logo"/>
              <!--  </div>  -->
            </div>		
           <div class="social-icons">
              <div class="social-icon social-email"><a href="mailto:contact@ejc.fr" target="_blank" data-original-title="Email">Email</a></div>
			  <div class="social-icon social-facebook"><a href="https://www.facebook.com/Ensai-junior-Consultant-122804694508292/?fref=ts" target="_blank" data-original-title="Facebook">Facebook</a></div>
              <div class="social-icon social-linkedin"><a href="https://www.linkedin.com/company/ensai-junior-consultant" target="_blank" data-original-title="Delicious">Delicious</a></div>
              <div class="social-icon social-twitter"><a href="https://twitter.com/EjC_35" target="_blank" data-original-title="Flickr">Flickr</a></div>
           </div>
		   
		   <div class="container clearfix">
		    
			<div class="sixteen columns partenaires">
            
            <h3 class="highlight">Our EjC's partners</h3>
            
                <div class="partenaire-logos">
                  <a href="http://www.ensai.fr/" title="Partenaire" class="clients"><img src="images/clients2/ensai.png" alt="Partenaire"></a>
				  <a href="http://jer.ouest-insa.fr/" title="Partenaire" class="clients"><img src="images/clients2/jer.png" alt="Partenaire"></a>
                  <a href="http://www.bnpparibas.com/" title="Partenaire" class="clients"><img src="images/clients2/bnpb.png" alt="Partenaire"></a>
                  <!-- <a href="http://www.amaris.com/fr" title="Partenaire" class="clients"><img src="images/clients2/amaris2.png" alt="Partenaire"></a> -->
<a href="http://www.ey.com/fr/fr/home" title="Partenaire" class="clients"><img src="images/clients2/ey2.png" alt="Partenaire"></a>
				  <a href="http://junior-entreprises.com/" title="Partenaire" class="clients"><img src="images/clients2/cnje.png" alt="Partenaire"></a>
				  <!-- <a href="http://www.ey.com/fr/fr/home" title="Partenaire" class="clients"><img src="images/clients2/ey2.png" alt="Partenaire"></a> -->
				  
				  <a href="http://breizhdataclub.org/" title="Partenaire" class="clients"><img src="images/clients2/logo_BDC.jpg" alt="Partenaire"></a>
                </div>
                
			 </div>
		</div>  
		   
			<p>&copy; 2020 All rights reserved. E<em>j</em>C</br>
			ENSAI <em>junior</em> Consultant</br>
			Campus de Ker-Lann, Rue Blaise Pascal - BP 37203</br> 
			35172 BRUZ cedex</p>
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