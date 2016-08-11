
window.onload = function() {
  
  var slider = document.querySelector('.slider'),
      images = slider.querySelectorAll('img'),
      bullets = slider.querySelectorAll('.controls i'),
      counter = 0,
      nextBtn = slider.getElementsByClassName('next')[0],
      prevBtn = slider.getElementsByClassName('prev')[0];
  
  
  function showImg(index) {
    // Remove all classnames on the images (so hide them)
    for (var i = 0; i < images.length; i++ ) {
      images[i].className = 'hideImage';  
    }
    
    // Add the showImage classname to the img-element you want
    images[index].className = 'showImage';
  }
  
  
  function nextImg() {
    // counter variable gets the current img selected
    // if we have the last img, we switch back to the first one again
    
    if (counter < images.length - 1) {
      counter++ ;
    } else {
      counter = 0;
    }
    
    toggleBullet(counter);
    showImg(counter);
  }
  
  function prevImg() {
    // counter variable gets the current img selected
    // if we have the first img, we switch back to the last one again
    
    if (counter > 0) {
      counter--;
    } else {
      counter = images.length - 1;
    }
    
    toggleBullet(counter);
    showImg(counter);
  }
  
  function toggleBullet(index) {
    for (var i = 0; i < bullets.length; i++ ) {
     
      var currentBullet = bullets[i];
      
      bullets[i].classList.remove('bullet-active');  // disable all bullets 
      
      handleClick(currentBullet, i)
      
    }
  
   bullets[index].classList.add('bullet-active');
  }
  
  function handleClick(currentEl, currentindex) {
   
    currentEl.addEventListener('click', toggleImgByBullet);
   
   function toggleImgByBullet() {
    for (var i = 0; i < bullets.length; i++ ){
      bullets[i].classList.remove('bullet-active');  // disable all bullets
    }
    
     bullets[currentindex].classList.add('bullet-active');
     showImg(currentindex);
   }
    
  }
  
  
//  If you want to have an auto-slider, uncomment this: 
//  window.setInterval(prevImg, 2000);
  
  // give the buttons an onclick event
  nextBtn.onclick = nextImg;
  prevBtn.onclick = prevImg;
  
  
  // start it
  toggleBullet(counter);
  showImg(counter);          
       
};
  
  
  
        
/*$(document).ready(function(){
  
});*/

