/*
(document).ready(function(){

});
*/  


 'use strict';
 
 /* -----------------------------------------------------------------------------

                               DEBOUNCE
  
----------------------------------------------------------------------------- */
 
function debounce(fn, delay) {
  var t
  return function () {
    clearTimeout(t)
    t = setTimeout(fn, delay)
  }
}

 
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
    
   //calcHeight();
   window.addEventListener("load", calcHeight);
   window.addEventListener('resize', debounce(function() { calcHeight() }, 100));
}

/* -----------------------------------------------------------------------------

                               STICKY FOOTER
  
----------------------------------------------------------------------------- */

function stickyFooter(footerContainer, wrapCont) {
    function stick() {
        
        var windHeight = Math.max( document.documentElement.clientHeight, window.innerHeight );
        var footerHeight = parseInt(getComputedStyle(document.querySelector(footerContainer)).height);
       
        var expand = windHeight - footerHeight;
        document.querySelector(wrapCont).style.minHeight = expand + 'px';
    }

   debounce(function() { stick() }, 250)();
   window.addEventListener('resize', debounce(function() { stick() }, 250));
   
}

/* -----------------------------------------------------------------------------

                               DROPDOWNS
  
----------------------------------------------------------------------------- */
 

var dropDownNav = (function(){
        document.querySelector('.drop-btn__nav').addEventListener('click', drop);
        function drop() {
            document.querySelector('.main-nav').classList.toggle('dropped');
        }

})();












