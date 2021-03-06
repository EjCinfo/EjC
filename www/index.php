<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->

<head>

<style>
@import url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

.cookie-alert {
  position: fixed;
  bottom: 15px;
  right: 15px;
  width: 320px;
  margin: 0; <!--!important-->
  z-index: 1010;
  opacity: 0;
  <!--transform: translateY(100%);-->
  transition: all 500ms ease-out;
  text-align : justify;
} 

.cookie-alert.show {
  opacity: 1;
  <!--transform: translateY(0%);-->
  transition-delay: 1000ms;
}
</style> 

<script>

window.addEventListener('load', (event) => {
 
(function () {
    "use strict";

    var cookieAlert = document.querySelector(".cookie-alert");
    var acceptCookies = document.querySelector(".accept-cookies");
    var rejectCookies = document.querySelector(".reject-cookies");

    cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

    const {localStorage} = window;

    if (localStorage.getItem('cookies') === null) {
        cookieAlert.classList.add("show");
    } else if(localStorage.getItem('cookies') === '1') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
        ga('create', 'UA-42906120-1', 'auto');
        ga('send', 'pageview');
    }

    acceptCookies.addEventListener("click", function () {
        localStorage.setItem('cookies', 1);
        cookieAlert.classList.remove("show");
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        
        ga('create', 'UA-42906120-1', 'auto');
        ga('send', 'pageview');
    });

    rejectCookies.addEventListener("click", function () {
        localStorage.setItem('cookies', 2);
        const cookies = document.cookie.split(";");
        for (const cookie of cookies) {
          const eqPos = cookie.indexOf("=");
          const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
          document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
        cookieAlert.classList.remove("show");
    });

})();

});
</script>
 
<?php
 
// En t??te
$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');
 
 
?>
 
	<!-- META DATA -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="UTF-8">
	<title>ENSAI junior Consultant</title>
        <!-- Description du site (description lors d'une recherche google)-->
	<meta name="description" content="Site web d'ENSAI Junior Consultant, Junior-Entreprise sp??cialis??e dans le domaine de la statistique et de l'analyse de l'information""/>
	<!-- Mots cl??s pour la recherche-->
        <meta name="keywords" content="ENSAI, junior, entreprise, junior-entreprise, JER, ??tude, big data, statistique, statistiques, stats, analyse, information, informatique, math??mathiques, maths"/>
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
      <div class="home-text-wrapper" style="min-height:0px;"> <!-- ajout de style="min-height:0px;" ?? cause du pb d'affichage image sous ie (cf mail L.DiCarlo)alors que par d??faut style="min-height:6000px;" -->
      	   <div class="container clearfix">
              <div class="home-quote">
			  <center> <img src="images/logoEJCblanc.png" alt="logoEJC" width=50% height=auto  class="slabtext flotte img"> 
			  <h1>
 
                    <span class="slabtext second-child">"R??v??lez le potentiel de vos donn??es"</span> 
					<span class="slabtext tree-child">ENSAI junior Consultant, Junior-Entreprise de l'ENSAI</span> 					
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
	         <?php echo $menu_source ; ?>
              </ul>
	      <!-- END NAVIGATION MENU ITEMS -->				
          </div><!-- END TWELVE COLUMNS -->	
      </div><!-- END CONTAINER -->	
    </nav>
    <!-- END NAVIGATION -->

    <div class="card cookie-alert">
      <div class="card-body">
        <h5 class="card-title">&#x1F36A; Est-ce que vous aimez les cookies ?</h5>
        <p class="card-text">Nous utilisons les cookies pour que vous passiez une bonne exp??rience sur notre site. Si vous les refusez, seuls les cookies n??cessaires au fonctionnement du site seront gard??s. 
        <br /> Merci aussi de bien lire les <a href ="mentions_l??gales.html"> mentions l??gales </a> avant de continuer sur notre site.</p>
        <div class="btn-toolbar justify-content-end">
          <a href="#" class="btn btn-link reject-cookies">Refuser</a>
          <a href="#" class="btn btn-primary accept-cookies">Accepter</a>
        </div>
      </div>
    </div> 
 
 
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
					  <p>ENSAI <em>junior</em> Consultant est une <span class="highlight">Junior-Entreprise</span></p>
                      <p>Une Junior-Entreprise est une association loi 1901 ?? but non lucratif, affili??e ?? la Conf??d??ration Nationale des Junior-Entreprises (<span class="highlight">CNJE</span>)</p>
					  <p>Nous proposons des prestations de <span class="highlight">qualit?? professionnelle</span> ?? des <span class="highlight">tarifs attractifs</span> dans le but
					  d'offrir une formation compl??mentaire aux ??tudiants de l'ENSAI</p>
					  </br>
					  <iframe src="https://www.youtube.com/embed/6GuV2Zn9QEc" width="400" height="225" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
 
					  <p>Audit??e chaque ann??e, le label Junior-Entreprise garantit une qualit?? optimale</p>
                  </div><!-- END SUBTITLE -->
                </div><!-- END TITLE -->
 
 
 
            <h3 class="highlight">Les partenaires CNJE</h3>
 
                <div class="partenaire-logos">
 
                  <a href="http://www.bnpparibas.com/" title="Partenaire" class="clients"><img src="images/clients2/bnp.png" alt="Partenaire"></a>
                  <!-- <a href="http://www.amaris.com/fr" title="Partenaire" class="clients"><img src="images/clients2/amaris2.png" alt="Partenaire"></a> -->
                                  <a href="http://www.alten.fr" title="Partenaire" class="clients"><img src="images/clients2/alten.png" alt="Partenaire"></a>
				  <a href="http://www.ey.com/fr/fr/home" title="Partenaire" class="clients"><img src="images/clients2/ey2.png" alt="Partenaire"></a>
				  <a href="http://www.engie.com/" title="Partenaire" class="clients"><img src="images/clients2/engie3.png" alt="Partenaire"></a>
 
                </div>
 
 
			</div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->         
          </div><!-- END CONTAINER -->
 
 
 
 
<div class="fullwidth grey">
        <div class="container">  
        <div class="fancy-header2">       
           <h4>Nos domaines de comp??tence</h4>
           <h2 class="highlight">De futurs ing??nieurs offrent leur savoir</h2>
        </div>
 
         <div class="row">          
                <div class="one-third column">
                  <div class="service-features">
                  <div class="img-container">
                    <img src="images/icons/icons/study.png" alt="Service Features">
                  </div>  
                    <h3>Statistique</h3>               
                    <p>L'ing??nieur statisticien fait parler les chiffres avec prudence et m??thode. Une mani??re fiable d'exploiter ses donn??es.</p>
                  </div>               
                </div><!-- END ONE THIRD COLUMN -->
 
                <div class="one-third column">
                  <div class="service-features">
                  <div class="img-container">
                    <img src="images/icons/icons/banknote.png" alt="Service Features">
                  </div>                   
 
                    <h3>??conom??trie</h3>                
                    <p>Savoir observer le monde ??conomique, estimer et tester ses mod??les. Pr??voir et anticiper pour mieux g??rer son portefeuille.</p>
                  </div>               
 
                </div><!-- END ONE THIRD COLUMNS -->   
 
                <div class="one-third column">
                  <div class="service-features">
                  <div class="img-container">                  
                    <img src="images/icons/icons/settings.png" alt="Service Features">
                  </div>
                    <h3>Informatique</h3>                
                    <p>Des techniques de codage et de manipulation de logiciels. Analyser les chiffres demande une ma??trise des outils performants.</p>
                  </div>               
 
                </div><!-- END ONE THIRD COLUMNS -->
				
 
            </div><!-- END ROW -->   
				<iframe src="https://www.youtube.com/embed/MtCT5G4pRac" width="400" height="225" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
 
		</div><!-- END CONTAINER --> 
        </div>        
 
 
        <div class="container">  
			</br></br></br></br>
			    <div class="tabset">
 
                      <ul class="tabs styled-list">
                        <li class="tab"><a href="#panel1" class="selected"><span class="highlight">EjC</span> c'est...</a></li>
                        <li class="tab"><a href="#panel2" class="">Notre ??cole, l'<span class="highlight">ENSAI</span></a></li>
                        <li class="tab"><a href="#panel3" class="">Le mot du <span class="highlight">directeur</span></a></li>
                      </ul>
 
                      <div class="panel" id="panel1">
						<p class="text-panel">... la Junior-Entreprise de l'ENSAI - ??cole Nationale de la Statistique et de l'Analyse de l'Information.</br></br>
						EjC fonctionne comme une <span class="highlight">association p??dagogique de conseil en statistique</span>. Elle met en relation les entreprises
						ayant un besoin d'<span class="highlight">??tudes statistiques</span> et les ??tudiants ing??nieurs de l'ENSAI qui les r??alisent.
						Depuis <span class="highlight">1996</span>, EjC r??alise des ??tudes aussi bien pour des entreprises de renom que pour
						des PME, des institutions publiques, des start-up et des particuliers.</br></br>
						Nous mettons ?? profit les comp??tences des <span class="highlight">250 ??l??ves ing??nieurs de l'ENSAI</span> et b??n??ficions du
						support des <span class="highlight">enseignants chercheurs</span> de l'??cole et de deux laboratoires de recherche en
						statistiques d??pendant du CREST.</p>
                      </div>
 
                      <div class="panel" id="panel2">
						  <div class="two_third">
								<a href="http://www.ensai.fr/" title="Photo ENSAI" class="link_image"><img src="images/ensai.jpg" alt="Photo ENSAI"></a>
								<a href="http://www.ensai.fr/" title="Logo ENSAI" class="link_image"><img src="images/logo_ensai.png" alt="Logo ENSAI"></a>
						  </div>
						  <div class="one_third last">
								<p>Cr????e en 1994, l'<a href="http://www.ensai.fr/" title="Vers le site ENSAI">ENSAI</a> est une grande ??cole d'ing??nieur habilit??e
								par la CTI (Commission des Titres d'Ing??nieurs) sur le verdoyant campus de Ker Lann ?? 20 minutes au Sud-Ouest de Rennes. L'??cole est,
								avec l'ENSAE, membre du <a href="http://www.groupe-genes.fr/" title="Vers le site groupe GENES">GENES</a> (groupe des ??coles nationales d'??conomie
								et de statistique) dont l'INSEE assure la tutelle technique. Elle comporte ??galement une partie du centre de recherche en ??conomie
								et en statistique de INSEE, le <a href="http://www.crest.fr/" title="Vers le site du CREST">CREST</a>. L'ENSAI forme des cadres de haut niveau,
								ing??nieurs ou fonctionnaires, qualifi??s dans le traitement et l???analyse de l???information. Sa triple comp??tence ?? Statistique - ??conom??trie
								- Informatique ?? est unanimement reconnue dans tous les secteurs d???activit?? ??conomique.</p>
						  </div>
						  <p>Contacter l'ENSAI : communication@ensai.fr</p>
					  </div>
 
                      <div class="panel" id="panel3">
							<!--<p class="directeur">
								<img src="images/renan_duthion.png" alt="Nouveau !" />
							</p>-->
                            <p class="text-panel">
								?? L???ENSAI forme des experts qualifi??s capables de traiter et mod??liser l???information 
								de mani??re ?? faire parler les donn??es, au service de la d??cision. Nos ?? data scientists ?? 
								poss??dent une comp??tence majeure en mod??lisation statistique ainsi que deux comp??tences 
								associ??es en informatique et en ??conom??trie. Unanimement reconnus dans tous les secteurs 
								d???activit??, ils peuvent capitaliser sur une formation scientifique et op??rationnelle qui 
								r??pond clairement aux besoins des entreprises et des organisations publiques. </br>
								Faire appel ?? la Junior Entreprise de l???ENSAI, c???est bien s??r profiter de cette expertise, 
								c???est aussi permettre ?? nos futurs ing??nieurs d?????prouver leurs connaissances dans des 
								environnements appliqu??s, c???est enfin mener des projets concrets avec celles et ceux que 
								vous aurez peut-??tre, un jour, vocation ?? recruter. </br>
								Merci de la confiance que vous saurez accorder ?? ENSAI junior Consultant. ?? </br>
								Olivier BIAU </br>
								Directeur de l???ENSAI
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
 
               <div class="four columns">
				 <h6 class="milestone-details">Existe depuis</h6>
                 <div class="milestone-counter" data-perc="25">
                   <span class="milestone-count highlight"></span>
                   <img src="images/ans.png" alt="Signe ans">
                 </div>
               </div><!-- END FOUR COLUMNS -->  
 
               <div class="four columns">
                 <div class="milestone-counter" data-perc="250">
                   <span class="milestone-count highlight"></span>
                   <h6 class="milestone-details">intervenants potentiels</h6>
                 </div>
               </div><!-- END FOUR COLUMNS --> 
 
               <div class="four columns">
				 <h6 class="milestone-details">R??ponse sous</h6>
                 <div class="milestone-counter" data-perc="48">
                   <span class="milestone-count highlight"></span>
				   <img src="images/h.png" alt="Signe heure">
                 </div>
               </div><!-- END FOUR COLUMNS --> 
 
               <div class="four columns">
                 <div class="milestone-counter" data-perc="21">
                   <span class="milestone-count highlight"></span>
                   <h6 class="milestone-details">administrateurs ?? votre service</h6>
                 </div>
               </div><!-- END FOUR COLUMNS -->
               <div class="img-container">
                    <img src="images/historique2022.png" alt="Service Features">
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
			        ENSAI junior Consultant c???est une Junior-Entreprise solide fond??e sur des processus internes et des garanties de prestation ??tablies qui lui ont permis de r??guli??rement faire partie de la liste des 30 meilleures JE de France depuis 2015. 
                                Fond??e au c??ur d???une des rares ??coles de Data Sciences en France, notre ??quipe jeune et professionnelle prendra soin de r??v??ler vos donn??es en r??pondant ?? vos besoins statistiques, ??conom??triques ou informatiques. 
                                </br></br>
				N???attendez plus pour faire fructifier vos donn??es et confiez nous vos projets !
				<i class="icon-quote-right"></i></p>

				<div class="quote-author">Th??ophile Desolle, pr??sident d'EjC</div>

                                     <p class="quote" style="font-size: 150%"><i class="icon-quote-left"></i>
			              Depuis 2020, EjC a cherch?? ?? formaliser sa d??marche RSE notamment gr??ce ?? la construction d???une charte pour encadrer son engagement disponible <a href="images/Charte RSE - EjC.pdf" class="link_image">ici</a> !
				<i class="icon-quote-right"></i></p>


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
                    <li>Diagnostic d'efficacit??</li>
                    <li>Contr??le qualit?? et fiabilit??</li>
                    <li>Pr??visions</li>
                    <li>Aide ?? la d??cision</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN -->
 
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Analyser et profiler</br>votre client??le</p><!-- END service-box TITLE -->
                      <img src="images/clientele.png" alt="clientele" class="service-icon">
                   </div>
                 <!-- END ICON -->  
 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Mod??les de scoring</li>
                    <li>Segmentation client</li>
                    <li>Analyse de profils-client</li>
                    <li>Mod??lisation de comportements</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN --> 
 
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Apporter notre</br>expertise sant??</p><!-- END service-box TITLE -->
                      <img src="images/sante.png" alt="sante" class="service-icon">
                   </div>
                 <!-- END ICON -->  
 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>??pid??miologie</li>
                    <li>??tudes et essais cliniques</li>
                    <li>Tests d'efficacit?? de traitements</li>
                    <li>??valuation m??dico-??conomique</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN --> 
 
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">R??aliser et exploiter</br>vos enqu??tes</p><!-- END service-box TITLE -->
                      <img src="images/enquete.png" alt="enquete" class="service-icon">
                   </div>
                 <!-- END ICON -->  
 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Conception de questionnaire</li>
                    <li>Cr??ation de plan de sondage</li>
                    <li>??conom??trie des donn??es de Panel</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN --> 
 
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">??laborer les outils de gestion</br>de vos bases de donn??es</p><!-- END service-box TITLE -->
                      <img src="images/basedonnees.png" alt="basedonnees" class="service-icon">
                   </div>
                 <!-- END ICON -->  
 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>Conception de syst??mes d'information</li>
                    <li>Big Data</li>
                    <li>Automatisation de bases de donn??es</li>
                   </ul>
                <!-- START service-box DESCIPTION --> 
 
               </div> <!-- END service-box -->                                   
			</div> <!-- END ONETHIRD COLUMN --> 
 
			<div class="one-third column">
              <!-- START service-box -->
				<div class="service-box">
                 <!-- START ICON -->
                   <div>
                      <p class="prestations">Mod??liser vos probl??matiques</br>d'ing??nierie financi??re</p><!-- END service-box TITLE -->
                      <img src="images/ingenierie.png" alt="ingenierie" class="service-icon">
                   </div>
                 <!-- END ICON -->  
 
                <!-- START service-box DESCIPTION --> 
                   <ul class="styled-list">
                    <li>??valuation de risque de d??faut</li>
                    <li>Estimation de variable d'int??r??t</li>
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
	          <a href="https://personal-finance.bnpparibas/fr/" title="Clients" class="clients"><img src="images/clients2/bnp-finance.png" alt="Clients"></a>
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
				  <h1>L'??quipe</h1>
                </div><!-- END TITLE -->  	                           
			</div><!-- END SIXTEEN COLUMNS -->  
           </div><!-- END ROW -->         
          </div><!-- END CONTAINER --> 
 
        <div class="fancy-header2">       
           <h2 class="highlight">MANDAT 2022</h2>
        </div>     
 
          <div class="container">	
            <center> <img src="images/equipe2022.jpg" alt="equipe2022">     
 
 
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
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CY4ObPDoEmx/" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CMcnCKODyrc/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Voir cette publication sur Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CMcnCKODyrc/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Une publication partag??e par ENSAI junior Consultant (@ejc_35)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                                                </div>
                        <div class="one_half last">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2667.0742262577883!2d-1.743966684938355!3d48.050904565173475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f1e37f927d6f1%3A0x6da475b4bbae474a!2sEnsai+Junior+Consultant!5e0!3m2!1sfr!2sfr!4v1458909861876" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
                        <h3>T??l??charger notre plaquette</h3>
                        <a href="images/Plaquette JE-French.pdf" class="link_image"><img src="images/plaquette.png"></a>						
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
				  <a href="http://jer.ouest-insa.fr/" title="Partenaire" class="clients"><img src="images/clients2/JER.png" alt="Partenaire"></a>
                  <a href="http://www.bnpparibas.com/" title="Partenaire" class="clients"><img src="images/clients2/bnpb.png" alt="Partenaire"></a>
                  <!-- <a href="http://www.amaris.com/fr" title="Partenaire" class="clients"><img src="images/clients2/amaris2.png" alt="Partenaire"></a> -->
<a href="http://www.ey.com/fr/fr/home" title="Partenaire" class="clients"><img src="images/clients2/ey2.png" alt="Partenaire"></a>
				  <a href="http://junior-entreprises.com/" title="Partenaire" class="clients"><img src="images/clients2/cnje.png" alt="Partenaire"></a>
				  <!-- <a href="http://www.ey.com/fr/fr/home" title="Partenaire" class="clients"><img src="images/clients2/ey2.png" alt="Partenaire"></a> -->
 
				  <a href="http://breizhdataclub.org/" title="Partenaire" class="clients"><img src="images/clients2/logo_BDC.jpg" alt="Partenaire"></a>
                </div>
 
			 </div>
		</div> 

		   <div class="container clearfix">
 
			<div class="sixteen columns parrainage">
 
            <h3 class="highlight">Parrainage</h3>
			<div class="partenaire-logos">
			<h5> Cette ann??e encore, ENSAI junior Consultant a eu la chance de parrainer Unilasalle Projets Rennes, structure de l'??cole UniLasalle Rennes, qui 
				propose des analyses environnementales. Notre parrainage est bas?? sur un d??veloppement commun, un ??change de connaissances, et une
				aide toute particuli??re pour leur passage de marque au sein du mouvement des Junior-Entreprises. A travers ce parrainage se dessinent de
				nouvelles perspectives pour nos deux entit??s, notamment gr??ce ?? une posssibilit?? de collaboration sur des ??tudes alliant statistique et
				environnement. Nous entamons ainsi un mouvement de coh??sion entre les Junior-Entreprises au sein du campus de Ker-Lann !</h5>
<div>
				  <a href="https://unilasalleprojets.fr/" title="Parrainage" class="clients"><img src="images/clients2/UPR.jpeg" alt="Parrainage" width='750' ></a>
                </div>
</div>
 
			 </div>
		</div>  		
 
			<p>&copy; 2022 Tous droits r??serv??s. E<em>j</em>C</br>
			ENSAI <em>junior</em> Consultant</br>
			Campus de Ker-Lann, Rue Blaise Pascal - BP 37203</br> 
			35172 BRUZ cedex</br>
                        <a href="mentions_l??gales.html">Mentions l??gales</a></p>
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