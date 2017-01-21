<?php

require "form.php";

 
?>
      
      <div class="content-top"></div>
      
      <div class="main-container ">
        <!-- content -->
        <div class="content cont-fluid">
          
          <!-- content__contact -->
          <div class="xs-24 sm-17 content__contact-wrap equal">
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
                      <input type="text" name="name" value="<?=$name?>" required>
                    </label>
                    
                    <label>
                      <span class="warn">*&nbsp;</span>Email Address:
                      <input type="email" name="email" value="<?=$email?>" required>
                    </label>

                    <label>
                      <span class="warn">*&nbsp;</span>Subject:
                      <input type="text" name="subject" value="<?=$subject?>" required>
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
                  <textarea name="message" required><?= $message ?></textarea>
                </label>
                <span><span class="warn">*&nbsp;</span>These are required fields</span>
              
                <input class="btn-link btn-send " type="submit" name="submit" value="Send Message">
              </form> <!-- send-contact -->
            </div> <!-- end content__contact -->
          </div>
          
          <!-- content__sidebar -->  
          <div class="xs-24 sm-7 content__sidebar-wrap equal">
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
              
                <?php
                  require_once "inc/sidebar.inc.php";
                ?>
              <!-- end sidebar-nav -->
          
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
