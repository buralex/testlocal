
/* -----------------------------------------------------------------------------

                               SLIDER
  
----------------------------------------------------------------------------- */
 "use strict";
 
var carousel = (function(){
    var slider = document.querySelector(".slider");
    var next = slider.querySelector(".next");
    var prev = slider.querySelector(".prev");
    var images = slider.querySelectorAll("img");
    var bullets = slider.querySelectorAll(".controls i");
    var showClass = "showImage";            // class for showing from right to left
    var hideClass = "hideImage";            // class for hiding from right to left
    var showClassRight = "showImageRight";  // class for showing from left to right
    var hideClassRight = "hideImageRight";  // class for hiding from left to right
    var activeClass = "active";             // class for the first image or if toggle twice on one bullet
    var activeBullClass = "bullet-active";  // class for active bullet
    var counter = 0;
    var currentImg = images[0];
    var currentBull = bullets[0];

    function navigate(direction) {
 
        currentImg.classList.remove(showClass); 
        currentImg.classList.remove(showClassRight);// remove show class
        
        if (direction !=0) {
            currentBull.classList.remove(activeBullClass);
            currentImg.classList.remove(activeClass);
        }
        
        
        counter = counter + direction;
    
        if (direction === -1 && 
            counter < 0) { 
            counter = images.length - 1; 
        }
        if (direction === 1 && 
            counter > images.length - 1) { 
            counter = 0;
        }
         
        
        
        if (direction === 1 && direction != 0) {   
            currentBull = bullets[counter];
            
            currentBull.classList.add(activeBullClass);
            
            currentImg.classList.add(hideClass);
            
            currentImg = images[counter];

            currentImg.classList.remove(hideClass);
            currentImg.classList.remove(hideClassRight);
            currentImg.classList.add(showClass);
            
            
        } else if (direction === -1 && direction != 0) {
            currentBull = bullets[counter];
            currentBull.classList.add(activeBullClass);
            
            currentImg.classList.add(hideClassRight);
            
            currentImg = images[counter];

            currentImg.classList.remove(hideClassRight);
            currentImg.classList.remove(hideClass);
            currentImg.classList.add(showClassRight);
            
        }
    
    }
  
    next.addEventListener("click", function(ev) {    //assigning events for the buttons
    navigate(1);
    });
    prev.addEventListener("click", function(ev) {
    navigate(-1);
    });
  
  /*----------------------------- BULLETS for slider-----------------------------------*/
    
    function toggleBullet() {
        for (var i = 0; i < bullets.length; i++ ) {
            handleClick( bullets[i], i)
        }
    }
    
    function handleClick(currElem, currentindex) {
        currElem.addEventListener("click", toggleImgByBullet);
    
        function toggleImgByBullet() {
            currentImg.classList.remove(hideClass); 
            currentImg.classList.remove(hideClassRight);
            currentImg.classList.remove(showClass);
            currentImg.classList.remove(showClassRight);    //  disable class on global variables
            currentBull.classList.remove(activeBullClass);   // disable class on global variables
            currElem.classList.add(activeBullClass);
            currentBull = bullets[currentindex];  
            
             
            if (currentindex > counter && counter != currentindex ) {
                 
                images[0].classList.remove(activeClass);  //  for first image
                
                images[currentindex].classList.remove(hideClass);
                images[currentindex].classList.remove(hideClassRight);
                images[currentindex].classList.add(showClass);
                
                
                currentImg.classList.remove(activeClass);
                currentImg.classList.add(hideClass); 
                
                currentImg = images[currentindex];    // to global variable assign current index
                counter = currentindex;
                
            } else if (currentindex < counter && counter != currentindex) {
                
                images[0].classList.remove(activeClass);  //  for first image
                
                images[currentindex].classList.remove(hideClassRight);
                images[currentindex].classList.remove(hideClass);
                images[currentindex].classList.add(showClassRight);
                
                currentImg.classList.remove(activeClass);
                currentImg.classList.add(hideClassRight); 
                
                currentImg = images[currentindex];    // to global variable assign current index
                counter = currentindex;
                console.log( counter);
            } else {
                images[currentindex].classList.add(activeClass);
            }
                               
                                                       
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


