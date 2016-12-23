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
      
      <!-- main-header -->
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
        <nav class="main-nav xs-20 sm-16 ">
          <ul class="main-nav__content cont-inline text-right ">
            <li><a href="index.html">Home</a></li>
            <li class="dropdown-item">
              <a href="about.html">About</a>
              <ul class="drop-level-1">
                <li><a href="#">About1</a></li>
                <li class="dropdown-item-1">
                  <a href="#">About2</a>
                  <ul class="drop-level-2">
                    <li><a href="#">About4</a></li>
                    <li><a href="#">About5</a></li>
                    <li><a href="#">About6</a></li>
                  </ul>
                </li>
                <li><a href="#">About3</a></li>
              </ul>
            </li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html" class="active">Contact</a></li>
          </ul>
        </nav> <!-- end main-nav -->
      </div> <!-- end logo and nav -->
      
      <div class="content-top"></div>
      
      <div class="main-container ">
        <!-- content -->
        <div class="content cont-fluid">
          
          <!-- content__contact -->
          <div class="xs-24 sm-17 content__contact-wrap">
            <div class="content__contact clearfix">
              <h2>Contact Us</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vestibulum vehicula nisi ac vehic
                ula. Fusce malesuada est id enim dignissim mattis. Phasellus id tellus nunc, in vehicula nisi. 
                Fusce pellentesque, augue adipiscing sagittis tincidunt, mi magna sodales dolor, vitae ornare 
                ipsum nunc et augue. Nulla sapien enim, rutrum sed pretium at, euismod sed augue. Vestibul
                um quis nibh nisl, facilisis adipiscing massa. Aliquam erat volutpat.
              </p>
              <!-- send-contact -->
              <form class="send-contact" action="form.php" method="post">
                <div class="cont-fluid">
                  <fieldset class="personal-info sm-12">
                    <label>
                      <span class="warn">*&nbsp;</span>Your Name:
                      <input type="text" name="name" required>
                    </label>
                    
                    <label>
                      <span class="warn">*&nbsp;</span>Email Address:
                      <input type="email" name="email" required>
                    </label>
                    
                    <label>
                      <span class="warn">*&nbsp;</span>Subject:
                      <input type="text" name="email" required>
                    </label>
                  </fieldset>
                  
                  <div class="sm-12">
                    <label>
                    Our Location:
                      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7701.806992191133!2d31.996231965855987!3d46.96169048910305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c5cbdecaabf5eb%3A0xbdc2e040d0cfbf62!2z0LLRg9C70LjRhtGPINCh0LDQtNC-0LLQsCwg0JzQuNC60L7Qu9Cw0ZfQsiwg0JzQuNC60L7Qu9Cw0ZfQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1473446548293"></iframe>
                    </label>
                  </div>
                </div>
                
                <label>
                  <span class="warn">*&nbsp;</span>Your Message:
                  <textarea name="comments" required></textarea>
                </label>
                <span><span class="warn">*&nbsp;</span>These are required fields</span>
              
                <input class="btn-link btn-send " type="submit" name="submit" value="Send Message">
              </form> <!-- send-contact -->
            </div> <!-- end content__contact -->
          </div>
          
          <!-- content__sidebar -->  
          <div class="xs-24 sm-7 content__sidebar-wrap">
            <aside class="content__sidebar ">
              
              <!-- sidebar-nav -->
              <div class="sidebar-info">
                <h3>Get In Touch</h3>
                <div class="sidebar-info__text">
                  <p>Lorem ipsum dolor sit amet, consec
                    tetur adipiscing elit. Nullam et risus 
                    non arcu porttitor feugi at in at ne.
                  </p>
                </div>
                <div class="numbers">
                  <ul>
                    <li><a class="phone" href="tel:7777777777"><span>phone</span><br>1+ (123) 4564789</a></li>
                    <li><a class="email"  href="mailto:youremailaddress"><span>email</span><br>hello@yourdomain.com</a></li>
                    <li><a class="skype" href="skype:skypename?chat"><span>skype</span><br>yourskypename</a></li>
                  </ul>
                </div>
              </div>
              
              <div class="sidebar-nav">
                <h3>Site Navigation</h3>
                <div class="accordion-box">
                  <button class="accordion">Welcome Home</button>
                  <div class="panel">
                    <a href="index.html">Home</a>
                  </div>
                  <button class="accordion">About Us</button>
                  <div class="panel">
                    <a href="about.html">About 1</a>
                    <a href="about.html">About 2</a>
                  </div>
                  <button class="accordion">Our Portfolio</button>
                  <div class="panel">
                    <a href="portfolio.html">Portfolio</a>
                  </div>
                  <button class="accordion">Blog News</button>
                  <div class="panel">
                    <a href="blog.html">Blog</a>
                  </div>
                  <button class="accordion">Contact Us</button>
                  <div class="panel">
                    <a href="contact.html">Contact Us</a>
                  </div>
                </div>
              </div> <!-- end sidebar-nav -->
          
              <div class="sidebar-social ">
                <h3>Network Connect</h3>
                <div class="social cont-inline">
                  <a href="http://twitter.com/"></a>
                  <a href="http://www.facebook.com/"></a>
                  <a href="http://www.flickr.com/"></a>
                  <a href="https://www.linkedin.com/"></a>
                  <a href="https://www.tumblr.com/"></a>
                  <a href="http://www.youtube.com/"></a>
                </div>
              </div>
              
            </aside> <!-- end content__sidebar -->
          </div> <!-- end content__sidebar-wrap -->
        </div> <!-- end content -->
      </div>
       
      <div class="content-bottom"></div>

    </div> <!-- end wrapper -->
    
    <!-- footer-container -->
    <div id="footer-container" class="footer-container ">
      <div class="upper-footer ">
        <div class="main-container cont-fluid">
          
          <div class="upper-footer__about xs-12 sm-4 ">
            <h2>About Us</h2>
            <ul>
              <li><a href="#">Our Company</a></li>
              <li><a href="#">Our Blog</a></li>
              <li><a href="#">Submit a Site</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Help & Terms</a></li>
              <li><a href="#">Read Our FAQ</a></li>
            </ul>
          </div>
          
          <div class="upper-footer__categories xs-12 sm-4 ">
            <h2>Categories</h2>
            <ul>
              <li><a href="#">Photography</a><span>&nbsp;(12)</span></li>
              <li><a href="#">Our Portfolio</a><span>&nbsp;(98)</span></li>
              <li><a href="#">Graphic Design</a><span>&nbsp;(234)</span></li>
              <li><a href="#">Web Designs</a><span>&nbsp;(4)</span></li>
              <li><a href="#">Web Developmen</a><span>&nbsp;(3)</span></li>
              <li><a href="#">Iconography</a><span>&nbsp;(16)</span></li>
            </ul>
          </div>
          
          <div class="upper-footer__gallery xs-24 sm-8 ">
            <h2>From The Gallery</h2>
            <ul class="cont-inline">
              <li><a href="#"><img src="img/gallery/gall-footer-1.jpg" alt="beach" width="44" height="41"></a></li>
              <li><a href="#"><img src="img/gallery/gall-footer-2.jpg" alt="beach"  width="44" height="41"></a></li>
              <li><a href="#"><img src="img/gallery/gall-footer-3.jpg" alt="beach"  width="44" height="41"></a></li>
              <li><a href="#"><img src="img/gallery/gall-footer-4.jpg" alt="beach"  width="44" height="41"></a></li>
              <li><a href="#"><img src="img/gallery/gall-footer-5.jpg" alt="beach"  width="44" height="41"></a></li>
              <li><a href="#"><img src="img/gallery/gall-footer-6.jpg" alt="beach"  width="44" height="41"></a></li>
              <li><a href="#"><img src="img/gallery/gall-footer-2.jpg" alt="beach"  width="44" height="41"></a></li>
              <li><a href="#"><img src="img/gallery/gall-footer-1.jpg" alt="beach"  width="44" height="41"></a></li>
            </ul>      
          </div>
          
          <div class="upper-footer__updates xs-24 sm-8 ">
            <h2>Twitter Updates</h2>
            <div class="twit-comment">
              <p><a href="#">@Dellustrations</a> there is a new designer in town people! It’s amazing How you can do everything inside twitter! <a href="#">http://bit.urds</a></p>
              <p class="comment-time">2 minutes ago via <a href="#">TweeterDeck</a></p>
            </div>
          </div>
        </div>
      </div> <!-- end upper-footer -->
  
    
      <footer class="footer ">
        <div class="main-container cont-fluid">
          <div class="copyright xs-24 md-10 ">
            <span>&copy; 2010 Copyright iPadMasters Theme. All Rights Reserved.</span>
          </div>
          
          <div class="footer__nav xs-24 md-14 text-right ">
            <ul class="footer__nav-content cont-inline ">
              <li><a href="#">Log in</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span></li>
              <li><a href="#">Privacy Policy</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span></li>
              <li><a href="#">Terms and Conditions</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span></li>
              <li><a href="contact.html">Contact Us</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span></li>
              <li><a href="#">Back to Top</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div> <!-- end footer-container -->
    
  
  
    <!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="js/script-blueMasters.js"></script>
    
    <script src="js/jquery.flexslider-min.js"></script>
    <script>
    
      $(document).ready(function(){
        
        var dropNav = dropDownNav;
        dropNav(".drop-btn__nav", ".main-nav", "dropped");
        
        var accord = accordion;
        accord("button.accordion", "active", "div.panel", "show")
        
        var stickFoot = stickyFooter;
        stickFoot(".footer-container", ".wrapper");
        
        var aboutCont = setEqualHeight;
        aboutCont(".content > *");
         
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