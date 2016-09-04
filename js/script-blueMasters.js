/*
(document).ready(function(){

});
*/  


 'use strict';
 

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

                               STICKY FOOTER
  
----------------------------------------------------------------------------- */

function stickyFooter(footerContainer) {
	
    function stick() {
        var footer = document.querySelector(footerContainer);
        var footerHeight = parseInt(getComputedStyle(footer).height);
        document.body.style.marginBottom = footerHeight + 'px';
    }
    
    stick();
    window.addEventListener('resize', stick);
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












