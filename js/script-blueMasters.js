
/* -----------------------------------------------------------------------------

                               SLIDER
  
----------------------------------------------------------------------------- */
 'use strict';
 
function carousel() {
    var slider = document.querySelector('.slider');
    var next = document.querySelector('.slider .next');
    var prev = document.querySelector('.slider .prev');
    var sliderItems = document.querySelectorAll('.slider li');
    var bullets = document.querySelectorAll('.controls i');
    var bulletsBox = document.querySelector('.controls');
    var showClass = 'showImage';            // class for showing from right to left
    var hideClass = 'hideImage';            // class for hiding from right to left
    var showClassRight = 'showImageRight';  // class for showing from left to right
    var hideClassRight = 'hideImageRight';  // class for hiding from left to right
    var activeClass = 'active';             // class for the first image or if toggle twice on one bullet
    var activeBullClass = 'bullet-active';  // class for active bullet
    var counter = 0;
    var currentImg = sliderItems[0];
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
            counter = sliderItems.length - 1; 
        }
        if (direction === 1 && 
            counter > sliderItems.length - 1) { 
            counter = 0;
        }
         
        
        
        if (direction === 1 && direction != 0) {   
            currentBull = bullets[counter];
            
            currentBull.classList.add(activeBullClass);
            
            currentImg.classList.add(hideClass);
            
            currentImg = sliderItems[counter];

            currentImg.classList.remove(hideClass);
            currentImg.classList.remove(hideClassRight);
            currentImg.classList.add(showClass);
            
            
        } else if (direction === -1 && direction != 0) {
            currentBull = bullets[counter];
            currentBull.classList.add(activeBullClass);
            
            currentImg.classList.add(hideClassRight);
            
            currentImg = sliderItems[counter];

            currentImg.classList.remove(hideClassRight);
            currentImg.classList.remove(hideClass);
            currentImg.classList.add(showClassRight);
            
        }
    
    }
  
    next.addEventListener('click', function(ev) {    //assigning events for the buttons
    navigate(1);
    });
    prev.addEventListener('click', function(ev) {
    navigate(-1);
    });
  
  /*----------------------------- BULLETS for slider-----------------------------------*/
    
    function toggleBullet() {
        for (var i = 0; i < bullets.length; i++ ) {
            handleClick( bullets[i], i)
        }
    }
   
    function handleClick(currElem, currentindex) {
        currElem.addEventListener('click', toggleImgByBullet);
    
        function toggleImgByBullet() {
            currentImg.classList.remove(hideClass); 
            currentImg.classList.remove(hideClassRight);
            currentImg.classList.remove(showClass);
            currentImg.classList.remove(showClassRight);    //  disable class on global variables
            currentBull.classList.remove(activeBullClass);   // disable class on global variables
            currElem.classList.add(activeBullClass);
            currentBull = bullets[currentindex];  
            
             
            if (currentindex > counter && counter != currentindex ) {
                 
                sliderItems[0].classList.remove(activeClass);  //  for first image
                
                sliderItems[currentindex].classList.remove(hideClass);
                sliderItems[currentindex].classList.remove(hideClassRight);
                sliderItems[currentindex].classList.add(showClass);
                
                
                currentImg.classList.remove(activeClass);
                currentImg.classList.add(hideClass); 
                
                currentImg = sliderItems[currentindex];    // to global variable assign current index
                counter = currentindex;
                
            } else if (currentindex < counter && counter != currentindex) {
                
                sliderItems[0].classList.remove(activeClass);  //  for first image
                
                sliderItems[currentindex].classList.remove(hideClassRight);
                sliderItems[currentindex].classList.remove(hideClass);
                sliderItems[currentindex].classList.add(showClassRight);
                
                currentImg.classList.remove(activeClass);
                currentImg.classList.add(hideClassRight); 
                
                currentImg = sliderItems[currentindex];    // to global variable assign current index
                counter = currentindex;
                console.log( counter);
            } else {
                sliderItems[currentindex].classList.add(activeClass);
            }
                               
                                                       
        }
    }
                       //-------- set interval
    var sliderTimer = setInterval(function() { navigate(1);}, 6000);
    slider.onmouseover = function(){clearInterval(sliderTimer)};
    slider.onmouseout = function(){sliderTimer = setInterval(function() { navigate(1);}, 6000);};
    bulletsBox.onmouseover = function(){clearInterval(sliderTimer)};
    bulletsBox.onmouseout = function(){sliderTimer = setInterval(function() { navigate(1);}, 6000);};
    
navigate(0);
toggleBullet();


};

/* -----------------------------------------------------------------------------

                               EQUAL COLUMNS
  
----------------------------------------------------------------------------- */

function setEqualHeight(columns) {
	
    function calcHeight() {
        var tallestColumn = 0;
                                // getting array of div columns
    	var columnsSelector = document.querySelectorAll(columns); 
                                // getting height for each div
        for (var i = 0; i < columnsSelector.length; ++i) { 
            var item = columnsSelector[i];
                item.style.minHeight = 'initial' ;
            var currentHeight = parseInt(getComputedStyle(item).height);
            
            if (currentHeight > tallestColumn) tallestColumn = currentHeight;
        }
                                // assigning height for each div
        for (var i = 0; i < columnsSelector.length; ++i) {
            var item = columnsSelector[i];
           	    item.style.minHeight = tallestColumn + 'px';
            }
    }
    calcHeight();
    window.addEventListener('resize', calcHeight);
}

/* -----------------------------------------------------------------------------

                               DROPDOWNS
  
----------------------------------------------------------------------------- */
 
var dropDownSearch = (function(){
        document.querySelector('.drop-btn__search').addEventListener('click', drop);
        function drop() {
            document.querySelector('.main-header__search ').classList.toggle('dropped');
            document.querySelector('.main-header__subscription ').classList.toggle('hidden');
        }

})();

var dropDownNav = (function(){
        document.querySelector('.drop-btn__nav').addEventListener('click', drop);
        function drop() {
            document.querySelector('.main-nav').classList.toggle('dropped');
        }

})();









/*
(document).ready(function(){

});
*/  


