
window.onload = function() {
 
var carousel = (function(){
  var slider = document.querySelector('.slider');
  var next = slider.querySelector('.next');
  var prev = slider.querySelector('.prev');
  var images = slider.querySelectorAll('img');
  var bullets = slider.querySelectorAll('.controls i');
  var counterImg = 0;
  //var counterBull = 0;
  var currentImg = images[0];
  var currentBull = bullets[0];
  
  //box.classList.add('active');
  
  function navigate(direction) {
    currentImg.classList.remove('showImage');
    currentBull.classList.remove('bullet-active');
    
    counterImg = counterImg + direction;
    if (direction === -1 && 
        counterImg < 0) { 
      counterImg = images.length - 1; 
    }
    if (direction === 1 && 
        counterImg > images.length - 1) { 
      counterImg = 0;
    }
    
    currentBull = bullets[counterImg];
    currentBull.classList.add('bullet-active');
    currentImg = images[counterImg];
    currentImg.classList.add('showImage');
  }
  next.addEventListener('click', function(ev) {
    navigate(1);
  });
  prev.addEventListener('click', function(ev) {
    navigate(-1);
  });
  
  
  function handleClick(currElem, currentindex) {
    currElem.addEventListener('click', toggleImgByBullet);
   
   function toggleImgByBullet() {
     currentImg.classList.remove('showImage');       //  disable class on global variables
     currentBull.classList.remove('bullet-active');   // disable class on global variables
     currElem.classList.add('bullet-active');
     currentBull = bullets[currentindex];     // to global variable assign current index
     images[currentindex].classList.add('showImage');
     currentImg = images[currentindex];       // to global variable assign current index
   }
  }
  
  function toggleBullet() {
    for (var i = 0; i < bullets.length; i++ ) {
       handleClick( bullets[i], i)
    }
  }
navigate(0);
toggleBullet();

})();


  
};
  
  
  
        
/*$(document).ready(function(){
  
});*/

