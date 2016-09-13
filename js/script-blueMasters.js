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
                item.style.minHeight = 'auto' ;
                item.style.minHeight = 'initial' ;
                
            var currentHeight = parseFloat(getComputedStyle(item).height);
            
            if (currentHeight > tallestColumn) tallestColumn = currentHeight;
        }
                                // assigning height for each div
        for (var i = 0; i < columnsSelector.length; ++i) {
            var item = columnsSelector[i];
           	    item.style.minHeight = tallestColumn + 'px';
            }
    }
    
   calcHeight();
   window.addEventListener("load", calcHeight);
   window.addEventListener('resize', debounce(function() { calcHeight() }, 100));
}

/* -----------------------------------------------------------------------------

                               STICKY FOOTER
  
----------------------------------------------------------------------------- */

function stickyFooter(footerContainer, wrapCont) {
    
    function stick() {
            var windHeight = Math.max( document.documentElement.clientHeight, window.innerHeight );
            var footerHeight = document.querySelector(footerContainer).offsetHeight;
            var expand = windHeight - footerHeight;
            
            if (expand > 0 ) {
                document.querySelector(wrapCont).style.minHeight = expand + 'px';
            } else {
                document.querySelector(wrapCont).style.minHeight = '';
            }
    }

   debounce(function() { stick() }, 250)();
   window.addEventListener('resize', debounce(function() { stick() }, 250));
   
}

/* -----------------------------------------------------------------------------

                     STICKY SIDEBAR (with width in % and parent)
  
----------------------------------------------------------------------------- */
// parent - nearest parent who has offset value from top of the page
//wrapDiv - (static)div to calc width of sticky element(fixed)
//offset between wrap and element = 0


function stickySidebarPar(element, parent, wrapDiv, fixedClass) {
    
    function calcWidth() {
        var sidebar = document.querySelector(element);
        var wrapDivOffTopPar = document.querySelector(wrapDiv).offsetTop; //distance from parent to wrap  
        var jumpPosition = document.querySelector(parent).offsetTop; //distance from top to parent
    
        function calcTop(argument) {
            var wrapDivwidth = parseFloat(getComputedStyle(document.querySelector(wrapDiv)).width);
            var distanceY = window.pageYOffset || document.documentElement.scrollTop;

            if (distanceY >= (jumpPosition + wrapDivOffTopPar)) {
                sidebar.style.width = wrapDivwidth + 'px';
                
                if (!sidebar.classList.contains(fixedClass)) {
                    sidebar.classList.add(fixedClass);
                }
                
            } else if (distanceY <= (jumpPosition + wrapDivOffTopPar)){
                
                if (sidebar.classList.contains(fixedClass)) {
                    sidebar.classList.remove(fixedClass);
                }   
                sidebar.style.width = '';
            }
        }
        calcTop();
    }
    calcWidth();
    window.addEventListener('resize', calcWidth);
    window.addEventListener('scroll', calcWidth);
}


/* -----------------------------------------------------------------------------

                               DROPDOWNS
  
----------------------------------------------------------------------------- */
 
    // droppClass write without dot
    // nav can be any div
function dropDownNav( dropBtn, nav, droppedClass) {  
            document.querySelector(dropBtn).addEventListener('click', drop);
            function drop() {
                document.querySelector(nav).classList.toggle(droppedClass);
            }
}

/* -----------------------------------------------------------------------------

                               ACCORDION
  
----------------------------------------------------------------------------- */

function accordion( buttton, activeBtnClass, dropDiv, dropClass) {  
    var acc = document.querySelectorAll(buttton);

    for (var i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            if(this.nextElementSibling.hasChildNodes())  {
                this.classList.toggle(activeBtnClass);
                this.nextElementSibling.classList.toggle(dropClass);
            }
        }
    }
}








