
/* -----------------------------------------------------------------------------

                               SLIDER
  
----------------------------------------------------------------------------- */
 
var carousel = (function(){
    var slider = document.querySelector(".slider");
    var next = slider.querySelector(".next");
    var prev = slider.querySelector(".prev");
    var images = slider.querySelectorAll("img");
    var bullets = slider.querySelectorAll(".controls i");
    var counter = 0;
    //var counterBull = 0;
    var currentImg = images[0];
    var currentBull = bullets[0];
  

    function navigate(direction) {
         
        currentImg.classList.remove("hideImage"); 
        currentImg.classList.remove("hideImageRight");
        currentImg.classList.remove("showImage"); 
        currentImg.classList.remove("showImageRight");// remove show class
        currentBull.classList.remove("bullet-active");
        
        counter = counter + direction;
    
        if (direction === -1 && 
            counter < 0) { 
            counter = images.length - 1; 
        }
        if (direction === 1 && 
            counter > images.length - 1) { 
            counter = 0;
        }
        
        
        if (direction === 1 || direction === 0) {   
            currentBull = bullets[counter];
            //currentImg.classList.remove("active");
            currentBull.classList.add("bullet-active");
            currentImg = images[counter];
            var imgPrev = images[counter - 1];
            if (counter == 0) {imgPrev = images[images.length - 1];}  // reset to first image

            imgPrev.classList.add("hideImage");
            currentImg.classList.add("showImage");
            
        } else if (direction === -1) {
            currentBull = bullets[counter];
            currentBull.classList.add("bullet-active");
            currentImg = images[counter];
            var imgNext = images[counter + 1] ;
            if (counter == images.length - 1) {imgNext = images[0];}  // reset to last image
            
            imgNext.classList.add("hideImageRight");
            currentImg.classList.add("showImageRight");
        }
    
    }
  
    next.addEventListener("click", function(ev) {    //assigning events for the buttons
    navigate(1);
    });
    prev.addEventListener("click", function(ev) {
    navigate(-1);
    });
  
  /*----------------------------- BULLETS for slider-----------------------------------*/
    function handleClick(currElem, currentindex) {
        currElem.addEventListener("click", toggleImgByBullet);
    
        function toggleImgByBullet() {
            currentImg.classList.remove("hideImage"); 
            currentImg.classList.remove("hideImageRight");
            currentImg.classList.remove("showImage");
            currentImg.classList.remove("showImageRight");    //  disable class on global variables
            currentBull.classList.remove("bullet-active");   // disable class on global variables
            currElem.classList.add("bullet-active");
            currentBull = bullets[currentindex];  
                                                          // to global variable assign current index
            images[currentindex].classList.add("showImage");
            
            currentImg = images[currentindex];       // to global variable assign current index
        }
    }
  
    function toggleBullet() {
        for (var i = 0; i < bullets.length; i++ ) {
            handleClick( bullets[i], i)
        }
    }
    
   // window.setInterval(function() { navigate(1);}, 5000);  // ------------- set interval
navigate(0);
toggleBullet();


})();


/* -----------------------------------------------------------------------------

                               DROPDOWNS
  
----------------------------------------------------------------------------- */
 
var dropDownSearch = (function(){
        document.querySelector(".drop-btn__search").addEventListener("click", drop);
        function drop() {
            document.querySelector(".main-header__search ").classList.toggle("dropped");
            document.querySelector(".main-header__subscription ").classList.toggle("hidden");
        }

})();

var dropDownNav = (function(){
        document.querySelector(".drop-btn__nav").addEventListener("click", drop);
        function drop() {
            document.querySelector(".main-nav").classList.toggle("dropped");
        }

})();









/*
(document).ready(function(){

});
*/  


