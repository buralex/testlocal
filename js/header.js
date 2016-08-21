

 /*--------------------------------- dropdowns ---------------------*/
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
$(document).ready(function(){
    
});
  
*/

