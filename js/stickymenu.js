jQuery(document).ready(function($) {
 	'use strict';
	var menuId = '.menu-stickymenu-container';
	var stickyMenuContainer = $(menuId);

  function addSelectedFromHashUrl(){
    if(location.hash){
  		stickyMenuContainer.find('a[href="'+location.hash+'"]').addClass('selected');
  	} else {
  		stickyMenuContainer.find('a:first').addClass('selected');
  	}
  }

  function init(){
    addSelectedFromHashUrl();
  }

  init();
});
