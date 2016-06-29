jQuery(document).ready(function($) {
 	'use strict';
  var trainingsOpenLinkClass = 'open-trainings-open';
  var trainingsContainerClass = '.training-container';

	var init = function(){
    initOpenTrainingsLink();
	};

  var toggleTrainingsLink = function(linkElement){
    if(linkElement.hasClass(trainingsOpenLinkClass)){
      linkElement.removeClass(trainingsOpenLinkClass);
      jQuery(trainingsContainerClass).hide(200);
    }
    else {
      linkElement.addClass(trainingsOpenLinkClass);
      jQuery(trainingsContainerClass).show(200);
    }
  }

  var initOpenTrainingsLink = function(){
    var openTrainingsLink = jQuery('.matikka .open-trainings');
    openTrainingsLink.click(function(){
      toggleTrainingsLink(jQuery(this));
    });
  }

	init();
});
