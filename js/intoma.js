jQuery(document).ready(function($) {
 	'use strict';
  var trainingsOpenLinkClass = 'training--open';
  var trainingsContainerClass = '.training__text';

	var init = function(){
    initScrollBot();
    initOpenTrainings();
    initColorPicker();
	};

  var toggleTrainingsLink = function(trainingContainer){
    if(trainingContainer.hasClass(trainingsOpenLinkClass)){
      trainingContainer.removeClass(trainingsOpenLinkClass);
      trainingContainer.find(trainingsContainerClass).hide(200);
    }
    else {
      trainingContainer.addClass(trainingsOpenLinkClass);
      trainingContainer.find(trainingsContainerClass).show(200);
    }
  };

  var initOpenTraining = function(){
    var trainingContainer = jQuery(this);
    trainingContainer.click(function(){
      toggleTrainingsLink(jQuery(this));
    });
  };

  var initOpenTrainings = function(){
    var trainings = jQuery('.training');
    trainings.each(initOpenTraining);
  };

  var initColorPicker = function(){
    var colors = jQuery('.colors > ul > li');
    jQuery.each(colors, function(index, value){
      jQuery(value).click(function(){
        jQuery(this).siblings().removeClass('selected');
        jQuery(this).addClass('selected');
        var csslink = $('#common-styles-css').attr('href');
        var newlink = csslink.replace(/\d/, index+1)
        $('#common-styles-css').attr('href', newlink);
      });
    });
  }

  var initScrollBot = function(){
    jQuery('.scrollBot').click(function(){
      jQuery('body').animate({ scrollTop: $(document).height() }, 400);
    });
  };

  init();
});
