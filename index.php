<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BlueMasters</title>
    
    
    

    <!-- Bootstrap -->
    
    <!-- inline-block Grid, modified from bootstrap -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/inline-block-grid-24.css">

    <link rel="stylesheet" href="css/style-blueMasters.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

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
      
      <div class="main-container">
        
        <!-- slider-box -->
        <section class="slider-box">
          <div class="flexslider">
            <ul class="slides">
              <li>
    	    	    <img src="img/scene1.jpg" alt=" " width="930" height="320">
                <div class="flex-caption">
                  <p><a href="about.html">About Bluemasters</a></p>
                </div>
    	        </li>
    	    		<li>
    	    	    <img src="img/scene2.jpg" alt=" " width="930" height="320">
    	    	    <div class="flex-caption">
    	    	      <p><a href="#">Our Portfolio</a></p>
    	    	    </div>
    	    		</li>
    	    		<li>
    	    	    <img src="img/scene3.jpg" alt=" " width="930" height="320">
    	    	    <div class="flex-caption">
    	    	      <p><a href="#">Creation of Beaches</a></p>
    	    	    </div>
    	    		</li>
    	    		<li>
    	    	    <img src="img/scene4.jpg" alt=" " width="930" height="320">
    	    	    <div class="flex-caption">
    	    	      <p><a href="#">Creation of Beaches</a></p>
    	    	    </div>
    	    		</li>
    	    		<li>
    	    	    <img src="img/scene5.jpg" alt=" " width="930" height="320">
    	    	    <div class="flex-caption">
    	    	      <p><a href="#">Creation of Beaches</a></p>
    	    	    </div>
    	    		</li>
            </ul>
            
            <button class="flex-prev">&#60;</button>
            <button class="flex-next">&#62;</button>
            
          </div>
        </section> <!-- end slider-box --> 
      </div>
    
      <div class="controls main-container"></div> <!-- for controls of slider -->
      
      <div class="main-container">
        <!-- content -->
        <div class="content cont-fluid text-center">
          <div class="row-index">
            <section class="index-about ssm-12 sm-12 md-8 text-left ">
              <h3 class="sectn-name">About iPadMasters</h3>
              <article>
                <img src="img/about.png" alt="photo" width="249" height="86">
                <h4>All About iPad Masters</h4>
                <p>Lorem ipsum dolor sit amet, consec&shy;tetur adipiscing elit. Praesent tempor facilisis congue. Lorem sum dolor sit amet, consectetur adippend...</p>
                <a href="#" class="btn-link">Learn More</a>
              </article>
            </section>
          
            <section class="index-blog ssm-12 sm-12 md-8 text-left ">
              <h3 class="sectn-name">Our Blog Updates</h3>
              <article>
                <img src="img/blog.png" alt="photo" width="249" height="86">
                <h4>My First Website Creation</h4>
                <p class="post-date">Posted in <a href="#">Web Design</a> on April 13th, 2010</p>
                <p>Lorem ipsum dolor sit amet, consec&shy;tetur adipiscing elit. Praesent tempor facilisis congue. Suspend...</p>
                <div class="cont-inline">
                  <a href="#" class="btn-link">23 Comments</a>
                  <a href="#" class="btn-link btn-link-right">Read More</a>
                </div>
              </article>
            </section>
              
            <section class="index-contact ssm-12 sm-12 md-8 text-left ">
              <h3 class="sectn-name">Get In Touch</h3>
              <div class="numbers">
                <ul>
                  <li><a class="phone" href="tel:7777777777"><span>phone</span><br>1+ (123) 4564789</a></li>
                  <li><a class="email"  href="mailto:youremailaddress"><span>email</span><br>hello@yourdomain.com</a></li>
                  <li><a class="skype" href="skype:skypename?chat"><span>skype</span><br>yourskypename</a></li>
                  <li><a class="other" href=""><span>other request</span><br>Try our contact form</a></li>
                </ul>
              </div>
      
              <div class="social cont-inline">
                <a href="http://twitter.com/"></a>
                <a href="http://www.facebook.com/"></a>
                <a href="http://www.flickr.com/"></a>
                <a href="https://www.linkedin.com/"></a>
                <a href="https://www.tumblr.com/"></a>
                <a href="http://www.youtube.com/"></a>
              </div>
            </section>  
          </div>
        </div>  <!-- end content -->
      </div>
       
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
    
    <script>
    
      $(document).ready(function(){
        
        var dropNav = dropDownNav;
        dropNav(".drop-btn__nav", ".main-nav", "dropped");
        
        var stickFoot = stickyFooter;
        stickFoot(".footer-container", ".wrapper");
        
        var indexCont = setEqualHeight;
        indexCont(".row-index > section");
         
        var upperFooter = setEqualHeight;
        upperFooter(".upper-footer .main-container > div");
        
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