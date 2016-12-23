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
    <link rel="stylesheet" href="css/lightgallery.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
       
    </style>
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
              <a href="about.html" >About</a>
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
            <li><a href="portfolio.html" class="active">Portfolio</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav> <!-- end main-nav -->
      </div> <!-- end logo and nav -->
      
      <div class="content-top"></div>
      
      <div class="main-container ">
        <!-- content -->
        <div class="content cont-fluid">
          
          <!-- content__portfolio -->
          
          <div class="content__portfolio xs-24 ">
            <div class="cont-fluid">
              <div class="sm-10 ">
                <h2>Portfolio</h2>
              </div>
              <div class="sm-14 text-right  ">
                <a href="#" class="btn-gallery">Work Category</a>
                <a href="#" class="btn-gallery-plus">+</a>
              </div>
              
              <div class="portfolio-gallery ">
                <div class="row-portfolio">
                  <ul id="lightgallery" class="">
                    <li class="xs-12 ssm-8 sm-6" data-src="img/portfolio/large-1.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-1.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6" data-src="img/portfolio/large-2.jpg" data-sub-html="<h4>Some text</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-2.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6"  data-src="img/portfolio/large-3.jpg" data-sub-html="<h4>Text again</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-3.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6"  data-src="img/portfolio/large-4.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-4.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6"  data-src="img/portfolio/large-5.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-5.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6" data-src="img/portfolio/large-1.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-1.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6" data-src="img/portfolio/large-2.jpg" data-sub-html="<h4>Some text</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-2.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6"  data-src="img/portfolio/large-3.jpg" data-sub-html="<h4>Text again</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-3.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6"  data-src="img/portfolio/large-4.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-4.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6"  data-src="img/portfolio/large-5.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-5.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6"  data-src="img/portfolio/large-4.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-4.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6"  data-src="img/portfolio/large-3.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-3.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6"  data-src="img/portfolio/large-2.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-2.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6"  data-src="img/portfolio/large-5.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-5.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6"  data-src="img/portfolio/large-1.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-1.jpg">
                      </a>
                    </li>
                    <li class="xs-12 ssm-8 sm-6"  data-src="img/portfolio/large-3.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                      <a href="#">
                        <img class="" src="img/portfolio/thumbs/th-3.jpg">
                      </a>
                    </li>
                  </ul>
                </div> <!-- row-portfolio -->
              </div> <!-- end portfolio-gallery -->
            </div> <!-- end portfolio-gallery -->
            
            <div class="portfolio-pagination cont-fluid">
              <div class="ssm-6">
                <a href="#" class="btn-link btn-pagination">&laquo;&nbsp;Previous Page</a>
              </div>
              <div class="ssm-12">
                <ul class="ul-clean cont-inline portfolio-pages text-center">
                  <li><a class="btn-link btn-pagination active" href="#">1</a></li>
                  <li><a class="btn-link btn-pagination" href="#">2</a></li>
                  <li><a class="btn-link btn-pagination" href="#">3</a></li>
                  <li><a class="btn-link btn-pagination" href="#">4</a></li>
                  <li><a class="btn-link btn-pagination" href="#">5</a></li>
                </ul>   
              </div>
              <div class="ssm-6 text-right">
                <a href="#" class="btn-link btn-pagination">Next Page&nbsp;&raquo;</a> 
              </div>
            </div> <!-- end portfolio-pagination -->
            
            

          </div> <!-- end content__portfolio -->
          
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
              <li><a href="contact.php">Contact Us</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span></li>
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
        accord("button.accordion", "active", "div.panel", "show")
        
        var stickFoot = stickyFooter;
        stickFoot(".footer-container", ".wrapper");
        
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