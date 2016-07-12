jQuery(document).ready(function($) {
 	'use strict';
  var trainingsOpenLinkClass = 'training--open';
  var trainingsContainerClass = '.training__text';

	var init = function(){
    initMatikkaInfo();
    initOpenTrainings();
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

  var initMatikkaInfo = function(){
    var matikkaHeader = jQuery('.matikka .entry-content > h2');
    var openMatikkaInfoContainer = jQuery('<h2/>')
    openMatikkaInfoContainer.addClass('openMatikkaInfo')
    var matikkaInfo = jQuery('<a/>');
    matikkaInfo.attr('href', '#modal');
    matikkaInfo.attr('class', 'openMatikkaInfo__icon');
    matikkaInfo.text('?');
    openMatikkaInfoContainer.append(matikkaInfo);
    matikkaHeader.after(openMatikkaInfoContainer);

    $('.openMatikkaInfo').click(function(){
      console.log('hello');
    });

  };

  init();
});
