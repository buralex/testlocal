<?php
  $id = strtolower(strip_tags(trim($_GET['id'])));
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BlueMasters</title>
    
    
    

    <!-- frameworks -->
    
    <!-- inline-block Grid, modified from bootstrap -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/inline-block-grid-24.css">

    <link rel="stylesheet" href="css/style-blueMasters.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/lightgallery.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
  </head>
  <body>
    <div class="wrapper">
      
      <!--  main-header -->
      <header class="main-header">
        <div class="main-container cont-fluid">
          
          <div class="main-header__subscription xs-24 ssm-10 sm-10 md-14 ">
            <span class="hidden-xs">Subscribe to: &nbsp;</span>
            <a href="#"> Posts </a> <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
            <a href="#"> Comments </a> <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
            <a href="#"> Email </a>
          </div>
          
          <div class="main-header__social xs-8 ssm-4 sm-6 md-4 text-right ">
            <a href="rss"></a>
            <a href="http://www.facebook.com/"></a>
            <a href="http://twitter.com/"></a>
          </div>
          
          <div class="main-header__search xs-16 ssm-10 sm-8 md-6 text-right ">
            <form action="#" method="#" class="search-form">
          	  <input type="search" name="search" placeholder="search keywords"  id="search-field" class="search-field" >
          	  <input type="submit" name=" " value=" "  class="search-button" >
            </form>
          </div>
          
        </div>
      </header> <!-- end main-header -->
      
      <div class="strip"></div>
      
      <!-- end logo and nav -->
      <div class="cont-fluid main-container">
        
        <div class="sm-8">
          <img class="main-logo"  src="img/logo.png" title="BlueMasters" alt="BlueMasters" width="275" height="56">
          <button type=button class="drop-btn__nav">Menu</button>
        </div> 
  
        <!-- main-nav -->
        <?php
          require_once "inc/menu.inc.php";
        ?>
        <!-- end main-nav -->
      </div> <!-- end logo and nav -->
      
      <?php 
          switch($id){
            case 'about':
              include 'about.php';
              break; 
            case 'portfolio': 
              include 'portfolio.php'; 
              break; 
            case 'blog': 
              include 'blog.php'; 
              break; 
            case 'contact': 
              include 'contact.php'; 
              break; 
            default: 
            include 'inc/index.inc.php'; 
          } 
        ?>
       
      <div class="content-bottom"></div>

    </div> <!-- end wrapper -->
    
    <!-- footer-container -->
    <?php
        require_once "inc/bottom.inc.php";
    ?>
    <!-- end footer-container -->
    
  
  
    <!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="js/script-blueMasters.js"></script>
    
    <script src="js/jquery.flexslider-min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="js/lightgallery-all.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    
    <script>
    
      $(document).ready(function(){
        
        $("#lightgallery").lightGallery({
          thumbnail: false
        });
        
        var dropNav = dropDownNav;
        dropNav(".drop-btn__nav", ".main-nav", "dropped");
        
        var accord = accordion;
        accord("button.accordion", "active", "div.panel", "show");
        
        var stickFoot = stickyFooter;
        stickFoot(".footer-container", ".wrapper");
        
        var indexCont = setEqualHeight;
        indexCont(".row-index > section");  // for index.inc.php
        
        var aboutCont = setEqualHeight;
        aboutCont(".content > div.equal");  // for about.php
         
        var upperFooter = setEqualHeight;
        upperFooter(".upper-footer .main-container > div"); // for footer
        
        $(".flexslider").flexslider({
          animation: "slide",
          customDirectionNav: ".flex-next, .flex-prev",
          controlsContainer: ".controls",
          pauseOnHover: 1,
          pauseOnAction: 1,
          useCSS: false,
          slideshowSpeed: 7000
        });
      });
       
    </script>
    
  </body>
</html>