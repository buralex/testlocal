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
            <?php
                $dir = new DirectoryIterator("img/gallery");
                foreach ($dir as $fileinfo) {
                    if (!$fileinfo->isDot()) {
                        echo "<li>"."<a href=\"#\">"."<img src=\"img/gallery/".$fileinfo->getFilename()."\" alt=\"beach\" width=\"44\" height=\"41\">"."</a>"."</li>";
                    }
                }
            ?>
        </ul>      
      </div>
      
      <div class="upper-footer__updates xs-24 sm-8 ">
        <h2>Twitter Updates </h2>
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
          <li><a href="../contact.php">Contact Us</a><span>&nbsp;&nbsp;|&nbsp;&nbsp;</span></li>
          <li><a href="#">Back to Top</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>