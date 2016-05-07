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

  function setSelectedMenuItemStyles(clickedLink){
		clickedLink.parent().siblings().find("a").removeClass("selected");
		clickedLink.addClass("selected");
	}

  function initNavigation(){
    stickyMenuContainer.find('li').on('click', function(){
      setSelectedMenuItemStyles(jQuery(this).find('a'));
    });
  }

  function init(){
    addSelectedFromHashUrl();
    initNavigation();
  }

  init();
});
