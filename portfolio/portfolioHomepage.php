<!DOCTYPE HTML>

<!--
File Name: portfolio_index.html
Date: 05/14/18
Programmer: Stesha Norstrom
-->

<html>
    
<head>
    
<title>Stesha Norstrom | Portfolio Template</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="author" content="Stesha Norstrom">
    
<link href="https://fonts.googleapis.com/css?family=Tajawal:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">      
    
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/grid.css" rel="stylesheet" type="text/css">  
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/navigation.css" rel="stylesheet" type="text/css">
<link href="css/modal.css" rel="stylesheet" type="text/css">
    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/less.js/1.3.1/less.min.js"></script>
    
</head>   
<html>
<body>
    
    <?php include "includes/header.php";?>

    <main>
        
        <section id="introBlock">
            <p>In today's online environment, it is important to attract, and keep, visitors to your website. I can help you achieve your goals by working with you to produce a site that appeals to your customers an looks great on every device.</p><br>
            <p>Click on the images below to visit sample sites.</p>
        </section>

         <div class="section group">
            
                
                <article class="col span_1_of_2 span_2_of_2 assetContainer" id="commercialSite">
                    <h2>Commercial Site</h2>
                    <a href="http://steshanorstrom.com/commercialSite/millers.html">
                        <img src="images/commercialSite.png" alt="Home page of a fictional diner.">
                    </a>
                </article>
        
                <article class="col span_1_of_2 span_2_of_2 assetContainer" id="eventSite">
                    <h2>Event Site</h2>
                    <a href="http://steshanorstrom.com/client/aceInTheHole_index.html.php">
                        <img src="images/eventSite.png" alt="Home page for a sporting event site.">
                    </a>
                </article>
                
            
        </div>
         
        <div class="section group">
            
                
                <article class="col span_1_of_2 span_2_of_2 assetContainer" id="wordpressSite">
                    <h2>Customized WordPress Site</h2>
                    <a href="http://steshanorstrom.com/student001/project/">
                        <img src="images/wordpressTheme.png" alt="Homepage of a customized WordPress theme.">
                    </a>
                </article>
                
                <article class="col span_1_of_2 span_2_of_2 assetContainer" id="adobeAsset">
                    <h2>Short film created using Adobe Animate (Flash required)</h2>
                    <div class="adobeContainer">
                        <div class="adobeAnimate">
                            <a href="http://steshanorstrom.com/adobeAnimate/finalProject_ActionScript%203.html">
                                <img src="images/adobeAnimate.png" alt="Start page for a film made with Adobe Animate">
                            </a>
                        </div>
                    </div>
                </article>
                
            </div>
     
    <?php include "includes/modalForm.php";?>   
    
    </main>   

    <?php include "includes/footer.php";?>
    
    <script src="scripts/jquery.js"></script>
    <script src="scripts/script.js"></script>
    <script src="scripts/modal.js"></script>
    
</body>
</html>