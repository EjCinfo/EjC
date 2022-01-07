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
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');


?>

	<!-- META DATA -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="UTF-8">
	<title>Ensai Junior Consultant</title>
    <!-- Description du site (description lors d'une recherche google)-->
	<meta name="description" content="Site web d'Ensai Junior Consultant, Junior-Entreprise spécialisée dans le domaine de la statistique et de l'analyse de l'information""/>
	   <!-- Mots clés pour la recherche-->
    <meta name="keywords" content="Ensai, junior, entreprise, junior-entreprise, JER, étude, big data, statistique, statistiques, stats, analyse, information, informatique, mathémathiques, maths"/>
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
				
                    <span class="slabtext second-child">"Révélez le potentiel de vos données"</span> 
					<span class="slabtext tree-child">ENSAI Junior Consultant, Junior-Entreprise de l'ENSAI</span> 					
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
				  <h1>Qui sommes-nous ?</h1>
                  <div class="subtitle subtitle1">
					  </br>
					  <p>Ensai <em>junior</em> Consultant est une <span class="highlight">Junior-Entreprise</span></p>
                      <p>Une Junior-Entreprise est une association loi 1901 à but non lucratif, affiliée à la Confédération Nationale des Junior-Entreprises (<span class="highlight">CNJE</span>)</p>
					  <p>Nous proposons des prestations de <span class="highlight">qualité professionnelle</span> à des <span class="highlight">tarifs attractifs</span> dans le but
					  d'offrir une formation complémentaire aux étudiants de l'ENSAI</p>
					  </br>
					  <iframe src="https://player.vimeo.com/video/106665332" width="400" height="225" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					  
					  <p>Auditée chaque année, le label Junior-Entreprise garantit une qualité optimale</p>
                  </div><!-- END SUBTITLE -->
                </div><!-- END TITLE -->
				
				
            
            <h3 class="highlight">Les partenaires CNJE</h3>
            
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
          



<div class="fullwidth grey">
        <div class="container">  
        <div class="fancy-header2">       
           <h4>Nos domaines de compétence</h4>
           <h2 class="highlight">De futurs ingénieurs offrent leur savoir</h2>
        </div>
           
         <div class="row">          
                <div class="one-third column">
                  <div class="service-features">
                  <div class="img-container">
                    <img src="images/icons/icons/study.png" alt="Service Features">
                  </div>  
                    <h3>Statistique</h3>               
                    <p>L'ingénieur statisticien fait parler les chiffres avec prudence et méthode. Une manière fiable d'exploiter ses données.</p>
                  </div>               
                </div><!-- END ONE THIRD COLUMN -->
                
                <div class="one-third column">
                  <div class="service-features">
                  <div class="img-container">
                    <img src="images/icons/icons/banknote.png" alt="Service Features">
                  </div>                   

                    <h3>Économétrie</h3>                
                    <p>Savoir observer le monde économique, estimer et tester ses modèles. Prévoir et anticiper pour mieux gérer son portefeuille.</p>
                  </div>               
               
                </div><!-- END ONE THIRD COLUMNS -->   
                
                <div class="one-third column">
                  <div class="service-features">
                  <div class="img-container">                  
                    <img src="images/icons/icons/settings.png" alt="Service Features">
                  </div>
                    <h3>Informatique</h3>                
                    <p>Des techniques de codage et de manipulation de logiciels. Analyser les chiffres demande une maîtrise des outils performants.</p>
                  </div>               
                
                </div><!-- END ONE THIRD COLUMNS -->
     
                
            </div><!-- END ROW -->                            		
		</div><!-- END CONTAINER --> 
        </div>        
           
                
        <div class="container">  
			</br></br></br></br>
			    <div class="tabset">
                
                      <ul class="tabs styled-list">
                        <li class="tab"><a href="#panel1" class="selected"><span class="highlight">EjC</span> c'est...</a></li>
                        <li class="tab"><a href="#panel2" class="">Notre école, l'<span class="highlight">ENSAI</span></a></li>
                        <li class="tab"><a href="#panel3" class="">Le mot du <span class="highlight">directeur</span></a></li>
                      </ul>
                      
                      <div class="panel" id="panel1">
						<p class="text-panel">... la Junior-Entreprise de l'ENSAI - École Nationale de la Statistique et de l'Analyse de l'Information.</br></br>
						EjC fonctionne comme un <span class="highlight">cabinet de consulting</span>. Elle met en relation les entreprises
						ayant un besoin d'<span class="highlight">études statistiques</span> et les étudiants ingénieurs de l'Ensai qui les réalisent.
						Depuis <span class="highlight">1996</span>, EjC réalise des études aussi bien pour des entreprises de renom que pour
						des PME, des institutions publiques, des start-up et des particuliers.</br></br>
						Nous mettons à profit les compétences des <span class="highlight">250 élèves ingénieurs de l'ENSAI</span> et bénéficions du
						support des <span class="highlight">enseignants chercheurs</span> de l'école et de deux laboratoires de recherche en
						statistiques dépendant du CREST.</p>
                      </div>
                      
                      <div class="panel" id="panel2">
						  <div class="two_third">
								<a href="http://www.ensai.fr/" title="Photo ENSAI" class="link_image"><img src="images/ensai.jpg" alt="Photo ENSAI"></a>
								<a href="http://www.ensai.fr/" title="Logo ENSAI" class="link_image"><img src="images/logo_ensai.png" alt="Logo ENSAI"></a>
						  </div>
						  <div class="one_third last">
								<p>Créée en 1994, l'<a href="http://www.ensai.fr/" title="Vers le site ENSAI">ENSAI</a> est une grande école d'ingénieur habilitée
								par la CTI (commission des titres d'ingénieurs) sur le verdoyant campus de Ker Lann à 20 minutes au Sud-Ouest de Rennes. L'école est,
								avec l'ENSAE, membre du <a href="http://www.groupe-genes.fr/" title="Vers le site groupe GENES">GENES</a> (groupe des écoles nationales d'économie
								et de statistique) dont l'INSEE assure la tutelle technique. Elle comporte également une partie du centre de recherche en économie
								et en statistique de INSEE, le <a href="http://www.crest.fr/" title="Vers le site du CREST">CREST</a>. L'ENSAI forme des cadres de haut niveau,
								ingénieurs ou fonctionnaires, qualifiés dans le traitement et l’analyse de l’information. Sa triple compétence « Statistique - Économétrie
								- Informatique » est unanimement reconnue dans tous les secteurs d’activité économique.</p>
						  </div>
						  <p>Contacter l'ENSAI : communication@ensai.fr</p>
					  </div>
                      
                      <div class="panel" id="panel3">
							<!--<p class="directeur">
								<img src="images/renan_duthion.png" alt="Nouveau !" />
							</p>-->
                            <p class="text-panel">
								« L’ENSAI forme des experts qualifiés capables de traiter et modéliser l’information 
								de manière à faire parler les données, au service de la décision. Nos « data scientists » 
								possèdent une compétence majeure en modélisation statistique ainsi que deux compétences 
								associées en informatique et en économétrie. Unanimement reconnus dans tous les secteurs 
								d’activité, ils peuvent capitaliser sur une formation scientifique et opérationnelle qui 
								répond clairement aux besoins des entreprises et des organisations publiques. </br>
								Faire appel à la Junior Entreprise de l’ENSAI, c’est bien sûr profiter de cette expertise, 
								c’est aussi permettre à nos futurs ingénieurs d’éprouver leurs connaissances dans des 
								environnements appliqués, c’est enfin mener des projets concrets avec celles et ceux que 
								vous aurez peut-être, un jour, vocation à recruter. </br>
								Merci de la confiance que vous saurez accorder à Ensai junior Consultant. » </br>
								Olivier BIAU </br>
								Directeur de l’ENSAI
								</p>
                      </div>
                      
                </div> <!-- END OF TABSET -->
		</div><!-- END CONTAINER -->
		
		<div class="fullwidth grey"> 
        <div class="container">  

            <div class="row">
               <div class="sixteen columns">
                 <h2>Chiffres clefs d'EjC</h2>
				 </br></br>
               </div><!-- END SIXTEEN COLUMNS -->
               
               <div class="three columns">
				 <h6 class="milestone-details">Existe depuis</h6>
                 <div class="milestone-counter" data-perc="22">
                   <span class="milestone-count highlight"></span>
                   <img src="images/ans.png" alt="Signe ans">
                 </div>
               </div><!-- END FOUR COLUMNS -->  

               <div class="three columns">
                 <div class="milestone-counter" data-perc="250">
                   <span class="milestone-count highlight"></span>
                   <h6 class="milestone-details">intervenants potentiels</h6>
                 </div>
               </div><!-- END FOUR COLUMNS --> 
               
               <div class="three columns">
				 <h6 class="milestone-details">Réponse sous</h6>
                 <div class="milestone-counter" data-perc="48">
                   <span class="milestone-count highlight"></span>
				   <img src="images/h.png" alt="Signe heure">
                 </div>
               </div><!-- END FOUR COLUMNS --> 
               
               <div class="three columns">
                 <div class="milestone-counter" data-perc="21">
                   <span class="milestone-count highlight"></span>
                   <h6 class="milestone-details">administrateurs à votre service</h6>
                 </div>
               </div><!-- END FOUR COLUMNS -->

               <div class="three columns">
				 <h6 class="milestone-details">Fait partie de la</h6>
                 <div class="milestone-counter" data-perc="30">
                   <span class="milestone-count highlight"></span>
                   <img src="images/L.PNG" alt="lettre L">
                 </div>
               </div><!-- END FOUR COLUMNS -->                                                                                 
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
				Ensai junior Consultant c’est 22 ans d’expérience au service de grands groupes, PME, 
				administrations… Faites nous confiance pour entrer dans l’ère de la data en révélant 
				le potentiel de vos données. Notre équipe jeune et professionnelle sera ravie de 
				répondre à vos besoins en statistiques, économétrie ou informatique.</br></br>
				Vos enquêtes, questionnaires ou bases de données n’attendent que nous pour être sublimés !
				<i class="icon-quote-right"></i></p>
				<div class="quote-author">Margot Havet, présidente d'EjC</div>
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
                      <p class="prestations">Dynamiser vos</br>performances</p><!-- END service-box TITLE -->
                      <img src="images/performances.png" alt="performances" class="service-icon">	
                   </div>
                 <!-- END ICON -->  
                 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Diagnostic d'efficacité</li>
                    <li>Contrôle qualité et fiabilité</li>
                    <li>Prévisions</li>
                    <li>Aide à la décision</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
                 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN -->
			
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Analyser et profiler</br>votre clientèle</p><!-- END service-box TITLE -->
                      <img src="images/clientele.png" alt="clientele" class="service-icon">
                   </div>
                 <!-- END ICON -->  
                 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Modèles de scoring</li>
                    <li>Segmentation client</li>
                    <li>Analyse de profils-client</li>
                    <li>Modélisation de comportements</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
                 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN --> 
			
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Apporter notre</br>expertise santé</p><!-- END service-box TITLE -->
                      <img src="images/sante.png" alt="sante" class="service-icon">
                   </div>
                 <!-- END ICON -->  
                 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Épidémiologie</li>
                    <li>Études et essais cliniques</li>
                    <li>Tests d'efficacité de traitements</li>
                    <li>Évaluation médico-économique</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
                 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN --> 
			
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Réaliser et exploiter</br>vos enquêtes</p><!-- END service-box TITLE -->
                      <img src="images/enquete.png" alt="enquete" class="service-icon">
                   </div>
                 <!-- END ICON -->  
                 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Conception de questionnaire</li>
                    <li>Création de plan de sondage</li>
                    <li>Économétrie des données de Panel</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
                 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN --> 
			
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Élaborer les outils de gestion</br>de vos bases de données</p><!-- END service-box TITLE -->
                      <img src="images/basedonnees.png" alt="basedonnees" class="service-icon">
                   </div>
                 <!-- END ICON -->  
                 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Conception de systèmes d'information</li>
                    <li>Big Data</li>
                    <li>Automatisation de bases de données</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
                 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN --> 
			
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Modéliser vos problématiques</br>d'ingénierie financière</p><!-- END service-box TITLE -->
                      <img src="images/ingenierie.png" alt="ingenierie" class="service-icon">
                   </div>
                 <!-- END ICON -->  
                 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Évaluation de risque de défaut</li>
                    <li>Estimation de variable d'intérêt</li>
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
            <h3 class="highlight">Ils nous ont fait confiance</h3>
            
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
				  <h1>L'équipe</h1>
                </div><!-- END TITLE -->  	                           
			</div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->         
          </div><!-- END CONTAINER --> 
       
        <div class="fancy-header2">       
           <h2 class="highlight">MANDAT 2019</h2>
        </div>     
                    
          <div class="container">	
            <center> <img src="images/equipe2019.png" alt="equipe2019">     
              
              
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
				<img src="images/3icones2.png" title="3icones" alt="3icones" width="90%"/>
				
				</div>  
            </div>
          </div><!-- END CONTAINER -->         
		
	
      <!-- START COPYRIGHT SECTION -->   	
       <div class="copyright" style="margin-top:0px;">
     <div class="container clearfix">
        <div class="sixteen columns">
			
			<div class="row">
                <div class="sixteen columns">
                        <div class="one_half">
                        <a class="twitter-timeline" data-width="100%" data-height="350" data-link-color="#2B7BB9" href="https://twitter.com/EjC_35?ref_src=twsrc%5Etfw">Tweets by EjC_35</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
                        <div class="one_half last">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2667.0742262577883!2d-1.743966684938355!3d48.050904565173475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f1e37f927d6f1%3A0x6da475b4bbae474a!2sEnsai+Junior+Consultant!5e0!3m2!1sfr!2sfr!4v1458909861876" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
                        <h3>Télécharger notre plaquette</h3>
                        <a href="EJCplaqWEB.pdf" class="link_image"><img src="images/plaquette.png"></a>						
                       <!--  <img src="images/logo_top.png" title="logo" alt="logo"/> -->
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
            
            <h3 class="highlight">Nos partenaires EjC</h3>
            
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
		   
			<p>&copy; 2019 Tous droits réservés. E<em>j</em>C</br>
			Ensai <em>junior</em> Consultant</br>
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