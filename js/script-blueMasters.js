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

function stickyFooter(footerContainer) {
    function stick() {
        var bodyHeight = parseInt(getComputedStyle(document.querySelector('body')).height);
        var windHeight = Math.max( document.documentElement.clientHeight, window.innerHeight || 0 );

       /* if ( bodyHeight < windHeight) {
           document.querySelector(footerContainer).style.top = (windHeight - bodyHeight) + 'px'; 
 
        } else {
           document.querySelector(footerContainer).style.top = 0 + 'px';
          }*/
    
        var move = windHeight - bodyHeight;
        if (move > 0) {
            document.querySelector(footerContainer).style.top = move + 'px';
            
        } else {
            document.querySelector(footerContainer).style.top = 0 + 'px';
        }
    }

   
   //window.addEventListener("load", stick);
   stick();
   //window.addEventListener('resize',  stick);
   window.addEventListener('resize', debounce(function() { stick() }, 400));
   
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












