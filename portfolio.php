<?php

  require "inc/lib.inc.php";
  require "inc/config.inc.php";
  
  $num = strtolower(strip_tags(trim($_GET['num'])));

?>
  
	
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
              
              <div  class="portfolio-gallery ">
                
                <div class="row-portfolio">
                  <ul id="lightgallery" class="">
                  <?php 
                  
                  include 'getPhotoPage.php';
                  
                  ?>
       
                  </ul>
                </div> <!-- row-portfolio -->
              </div> <!-- end portfolio-gallery -->
            </div> <!-- end portfolio-gallery -->
            
            <div class="portfolio-pagination cont-fluid">
              <div class="ssm-6">
                <a href="index.php?id=portfolio&num=<?php prevPage($num) ?>" class="btn-link btn-pagination">&laquo;&nbsp;Previous Page</a>
              </div>
              <div class="ssm-12">
                <ul id = "pgs" class="ul-clean cont-inline portfolio-pages text-center">
                  <?php portfolioPaginaton($num);?>
                </ul>   
              </div>
              <div class="ssm-6 text-right">
                <a href="index.php?id=portfolio&num=<?php nextPage($num); ?>" class="btn-link btn-pagination">Next Page&nbsp;&raquo;</a> 
              </div>
            </div> <!-- end portfolio-pagination -->
            
            

          </div> <!-- end content__portfolio -->
          
        </div> <!-- end content -->
      </div>
       
      <div class="content-bottom"></div>

    </div> <!-- end wrapper -->
    


      