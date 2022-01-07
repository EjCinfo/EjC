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

foreach($json_data as $v){
  $idArticle[] = $v['idArticle'];
  $titreArticle[$v['idArticle']] = $v['titre'];
  $soustitreArticle[$v['idArticle']] = $v['soustitre'];
  $urlArticle[$v['idArticle']] = $v['url'];
  $urlImage[$v['idArticle']] = $v['urlImage'];
  $auteurArticle[$v['idArticle']] = $v['auteur'];
  $categorieArticle[$v['idArticle']] = $v['catégorie'];
  $titreArchive[$v['idArticle']] = $v['titre_archive'];
}

$menu_source = file_get_contents('http://www.ejc.fr/menu_en_tete.html');

?>

	<!-- META DATA -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="UTF-8">
	<title>Blog de Ensai Junior Consultant, Junior-Entreprise spécialisée dans le domaine de la statistique et de l'analyse de l'information</title>
    <!-- Description du site (description lors d'une recherche google)-->
	<meta name="description" content="Blog de Ensai Junior Consultant, Junior-Entreprise spécialisée dans le domaine de la statistique et de l'analyse de l'information""/>
	<!-- Mots clés pour la recherche-->
    <meta name="keywords" content="Ensai, junior, entreprise, junior-entreprise, JER, étude, big data, statistique, statistiques, stats, analyse, information, informatique, mathémathiques, maths"/>
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
 <div id="load"></div>   
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

	<div class="page">
            
	<div class="container">  

		<div class="row">
		   <div class="sixteen columns">
			 <h2>Retrouvez l'ensemble de nos articles</h2>
		   </div><!-- END SIXTEEN COLUMNS -->
         </div>
	</div>
	
         
		 <!-- START PARALLAX SECTION -->
	<div id="parallax3" class="parallax" style="width:100%"> 	<!-- style="background-color:dodgerBlue;"--> 
        <div class="bg3 parallax-bg"></div><!-- END PARALLAX BACKGROUND -->
        <div class="overlay"></div><!-- END PATTERN OVERLAY -->
        <div class="container clearfix">
                <div class="parallax-content">
                <p class="testimonial-icon"><i class="icon-quote-left"></i></p><h3 class="title" style="color:dodgerBlue"><span>NOS INTERVIEWS</span></h3>
                <div class="testimonial-slider">
                      <div class="flexslider">
                      <ul class="slides styled-list">
						

						
						
<?php

				

foreach ($idArticle as $i => $value) {
    if($categorieArticle[$idArticle[$i]]=="Interview"){
		
		echo "<li class='testimonial-slide'>
		
							<img src=".$urlImage[$idArticle[$i]]." style='margin-left:auto;margin-right:auto;max-height:250px;'>
							<p class='client-testimonial' style='color:gray'>".$titreArchive[$idArticle[$i]]."<br> 
							<a href=".$urlArticle[$idArticle[$i]]." style='color:dodgerBlue;margin-left:5px;		'>Lire l'article</a></p>
						</li>";
		
				
						

    }
}



?>

						
                      </ul>
                      </div>
              </div>

      </div><!-- END PARALLAX CONTENT -->
    </div><!-- END CONTAINER -->
  </div>
  <!-- END PARALLAX SECTION -->
		 
		 
	
        
     
                
        <div class="container" >  
			</br></br></br></br>
			    <div class="tabset">
					<ul class="tabs styled-list">
						<li class="tab"><a href="#panel1" class="selected">2017</a></li>
						<li class="tab"><a href="#panel2" class="selected">2018</a></li>
						<li class="tab"><a href="#panel3" class="selected">2019</a></li>
                        <li class="tab"><a href="#panel4" class="selected">2020</a></li>
                        <li class="tab"><a href="#panel5" class="selected">2021</a></li>
						<!-- <li class="tab"><a href="#panel2" class="">...</a></li>
						<li class="tab"><a href="#panel3" class="">...</a></li> -->
					</ul>
					  
					<div class="panel" id="panel1">
						<h6>
<?php



foreach ($idArticle as $i => $value) {
    if(substr($idArticle[$i],0,2)=="17"){
		if(substr($idArticle[$i],4,1)=="0"){
			echo "<a href=".$urlArticle[$idArticle[$i]]."> Article ".substr($idArticle[$i],5,1)." - </a> ".$titreArchive[$idArticle[$i]]."</p>";
		}
	else{
		echo "<a href=".$urlArticle[$idArticle[$i]]."> Article ".substr($idArticle[$i],4,2)." - </a> ".$titreArchive[$idArticle[$i]]."</p>";
	}
		
	}
}

echo "<hr>";

?>
						</h6>
					</div>
					
					<div class="panel" id="panel2">
					    <h6>
						<?php



foreach ($idArticle as $i => $value) {
    if(substr($idArticle[$i],0,2)=="18"){
		if(substr($idArticle[$i],4,1)=="0"){
			echo "<a href=".$urlArticle[$idArticle[$i]]."> Article ".substr($idArticle[$i],5,1)." - </a> ".$titreArchive[$idArticle[$i]]."</p>";
		}
	else{
		echo "<a href=".$urlArticle[$idArticle[$i]]."> Article ".substr($idArticle[$i],4,2)." - </a> ".$titreArchive[$idArticle[$i]]."</p>";
		}
		
	}
		
		
}


echo "<hr>";

?>
						
						</h6>
					</div>
					
					<div class="panel" id="panel3">
						<h6>
<?php



foreach ($idArticle as $i => $value) {
    if(substr($idArticle[$i],0,2)=="19"){
		if(substr($idArticle[$i],4,1)=="0"){
			echo "<a href=".$urlArticle[$idArticle[$i]]."> Article ".substr($idArticle[$i],5,1)." - </a> ".$titreArchive[$idArticle[$i]]."</p>";
		}
	else{
		echo "<a href=".$urlArticle[$idArticle[$i]]."> Article ".substr($idArticle[$i],4,2)." - </a> ".$titreArchive[$idArticle[$i]]."</p>";
	}
		
	}
}

echo "<hr>";

?>
						</h6>
					</div>
					<div class="panel" id="panel4">
						<h6>
<?php



foreach ($idArticle as $i => $value) {
    if(substr($idArticle[$i],0,2)=="20"){
		if(substr($idArticle[$i],4,1)=="0"){
			echo "<a href=".$urlArticle[$idArticle[$i]]."> Article ".substr($idArticle[$i],5,1)." - </a> ".$titreArchive[$idArticle[$i]]."</p>";
		}
	else{
		echo "<a href=".$urlArticle[$idArticle[$i]]."> Article ".substr($idArticle[$i],4,2)." - </a> ".$titreArchive[$idArticle[$i]]."</p>";
	}
		
	}
}

echo "<hr>";

?>
						</h6>
					</div>

					<div class="panel" id="panel5">
						<h6>
<?php



foreach ($idArticle as $i => $value) {
    if(substr($idArticle[$i],0,2)=="21"){
		if(substr($idArticle[$i],4,1)=="0"){
			echo "<a href=".$urlArticle[$idArticle[$i]]."> Article ".substr($idArticle[$i],5,1)." - </a> ".$titreArchive[$idArticle[$i]]."</p>";
		}
	else{
		echo "<a href=".$urlArticle[$idArticle[$i]]."> Article ".substr($idArticle[$i],4,2)." - </a> ".$titreArchive[$idArticle[$i]]."</p>";
	}
		
	}
}

echo "<hr>";

?>
						</h6>
					</div>
													  
					<!-- <div class="panel" id="panel2">
						
					</div>
					  
					<div class="panel" id="panel3">
					
					</div> -->
                      
                </div> <!-- END OF TABSET -->
		</div><!-- END CONTAINER -->
	
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
				<center><h3 class="highlight">Nos partenaires</h3></center>
                <div class="partenaire-logos">
                  <a href="http://www.ensai.fr/" title="Partenaire" class="clients"><img src="images/clients2/ensai.png" alt="Partenaire"></a>
				  <a href="http://jer.ouest-insa.fr/" title="Partenaire" class="clients"><img src="images/clients2/jer.png" alt="Partenaire"></a>
                  <a href="http://www.bnpparibas.com/" title="Partenaire" class="clients"><img src="images/clients2/bnpbnpb.png" alt="Partenaire"></a>
                  <a href="http://www.amaris.com/fr" title="Partenaire" class="clients"><img src="images/clients2/amaris2.png" alt="Partenaire"></a>
				  <a href="http://junior-entreprises.com/" title="Partenaire" class="clients"><img src="images/clients2/cnje.png" alt="Partenaire"></a>
				  <a href="http://www.engie.com/" title="Partenaire" class="clients"><img src="images/clients2/engie3.png" alt="Partenaire"></a>
				  <a href="http://www.ey.com/fr/fr/home" title="Partenaire" class="clients"><img src="images/clients2/ey2.png" alt="Partenaire"></a>
				  <a href="http://www.alten.fr" title="Partenaire" class="clients"><img src="images/clients2/alten.png" alt="Partenaire"></a>
                </div>  
			 </div>
		</div>  
			<p>&copy; 2017 Tous droits réservés. E<em>j</em>C</br>
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