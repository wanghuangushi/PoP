"use strict";
(function($){
window.popBootstrapCarousel = {

	//-------------------------------------------------
	// PUBLIC FUNCTIONS
	//-------------------------------------------------

	carouselStatic : function(args) {

		var that = this;
		var pageSection = args.pageSection, block = args.block, targets = args.targets;

		that.prepareCarousel(pageSection, block, targets);

		targets.carousel({ 
			interval: false,
			wrap: false
		});	
	},

	carouselAutomatic : function(args) {

		var that = this;
		var pageSection = args.pageSection, block = args.block, targets = args.targets;
		
		// Stop the Carousel when filtering, if not Javascript error
		block.on('beforeReload', function(e) {
			
			// After filtering, possibly there will be no results, so start the carousel only if not empty
			targets.carousel('pause');
		});

		that.prepareCarousel(pageSection, block, targets);
			
		// Initialize if there's one active item. If none, the carousel has no elements at all
		if (carousel.find('.item.active').length) {

			if (gdBootstrapCarousel.numberSlides(carousel) >= 2) {

				// Start Automatic Carousel except for mobile phones, or we have an ugly problem where the homepage keeps moving (because height of slides is not uniform)
				if ($(window).width() >= 768) {

					carousel.carousel();	
				}
				else {

					carousel.carousel({ 
						interval: false,
						wrap: false
					});	
				}
				carousel.find('.pop-carousel-controls').removeClass('hidden');
			}
			else {
				
				carousel.find('.pop-carousel-controls').addClass('hidden');
			}
		}
	},

	//-------------------------------------------------
	// PROTECTED functions
	//-------------------------------------------------

	prepareCarousel : function(pageSection, block, targets) {

		var that = this;
		
		// When filtering, gotta re-add 'active' to the first slide
		block.on('rendered', function() {

			that.targetsAddActive(targets);
		});

		that.targetsAddActive(targets);
	},
	targetsAddActive : function(targets) {

		var that = this;
		targets.each(function() {
	
			// Add the 'active' class
			var carousel = $(this);			
			that.addActive(carousel);
		});
	},

	// carouselOverflowVisible : function(carousel) {

	// 	var that = this;

	// 	// Comment Leo 04/05/2014: With carousel in the Homepage we couldn't have a post background color extend until the border of the page,
	// 	// because of the property 'overflow': 'hidden', which hid the +-15px from class row inside the carousel
	// 	// Then, we take away that attr, and add it only when doing the slide transition
	// 	// This way, we can add the hover effect to change the background color of the post, and it does it until the end of the page
	// 	carousel.find('.carousel-inner').css({overflow: 'visible'});
	// 	carousel.on('slide.bs.carousel', function () {
	// 		carousel.find('.carousel-inner').css({overflow: 'hidden'});
	// 	});
	// 	carousel.on('slid.bs.carousel', function () {
	// 		carousel.find('.carousel-inner').css({overflow: 'visible'});
	// 	});
	// },

	addActive : function(carousel) {
	
		var that = this;
		
		// Add 'active' to the first item of carousel, and then initialize ('active' is not added in the .tmpl to be merged)
		if (carousel.find('.item.active').length == 0) {
		
			// Add 'active' to first item
			carousel.find('.item:first-child').addClass('active');
		}		
	},

	showElement : function(carousel, elem) {

		var that = this;
		var slide = elem.closest('.item');
		var slideNumber = slide.parent().children().index(slide);
		that.slideTo(carousel, slideNumber);
	},
	
	slideTo : function(carousel, number) {

		var that = this;
		carousel.carousel(number);
	},

	next : function(carousel) {

		var that = this;
		carousel.carousel('next');
	},
	
	prev : function(carousel) {

		var that = this;
		carousel.carousel('prev');
	},
	
	isFirstSlide : function(carousel) {
	
		var that = this;		
		return carousel.find('.item:first-child').hasClass('active');
	},
	
	isLastSlide : function(carousel) {
	
		var that = this;		
		return carousel.find('.item:last-child').hasClass('active');
	},
	
	isNthSlide : function(carousel, position) {
	
		var that = this;		
		return carousel.find('.item:nth-child('+position+')').hasClass('active');
	},
	
	isNthLastSlide : function(carousel, position) {
	
		var that = this;		
		return carousel.find('.item:nth-last-child('+position+')').hasClass('active');
	},
	
	numberSlides : function(carousel) {
	
		var that = this;		
		return carousel.find('.item').length;
	},

};
})(jQuery);


(function($){
window.popBootstrapCarouselControls = {
		
	//-------------------------------------------------
	// PRIVATE
	//-------------------------------------------------

	// items : {},

	//-------------------------------------------------
	// PUBLIC functions
	//-------------------------------------------------

	initBlockRuntimeMemoryIndependent : function(args) {
	
		var that = this;
		var pageSection = args.pageSection, block = args.block, mempage = args.runtimeMempage;

		// Initialize with this library key
		mempage.carouselControls = {};

		// Reset values
		that.resetBlockRuntimeMemory(pageSection, block);
	},

	carouselControls : function(args) {
	
		var that = this;

		var /*domain = args.domain, */pageSection = args.pageSection, block = args.block, targets = args.targets;

		var carousel = that.getCarousel(targets);

		var controlNext = targets.children('.pop-carousel-control.right');
		that.controlCarouselNext(pageSection, block, carousel, targets, controlNext);

		var controlPrev = targets.children('.pop-carousel-control.left');
		that.controlCarouselPrev(pageSection, block, carousel, targets, controlPrev);

		// Initialize block
		block.on('fetchDomainCompleted', function(e, status, domain) {
		
			that.handleReload(domain, pageSection, block, targets);
		});

		// Initialize variables
		// that.initVars(pageSection, block);
		
		// Initialize: set state of buttons (enabled / disabled)
		that.setEnabledDisabled(pageSection, block, targets);
	},

	//-------------------------------------------------
	// PROTECTED functions
	//-------------------------------------------------

	getRuntimeMemoryPage : function(pageSection, targetOrId) {

		var that = this;
		return popManager.getRuntimeMemoryPage(pageSection, targetOrId).carouselControls;
	},

	resetBlockRuntimeMemory : function(pageSection, targetOrId) {

		var that = this;
		var mempage = that.getRuntimeMemoryPage(pageSection, targetOrId);
		var empty = {

			state: '',
		};

		$.extend(mempage, empty);
	},

	slideNext : function(pageSection, block, carousel, controlNext) {
	
		var that = this;

		// var blockQueryState = popManager.getBlockQueryState(pageSection, block);

		// If stopped loading and we are in the slide before the last one, disable control
		if (popBootstrapCarousel.isNthLastSlide(carousel, 2) && popManager.stopFetchingBlock(pageSection, block)/*blockQueryState[M.URLPARAM_STOPFETCHING]*/) {

			that.disable(controlNext);
		}
		
		// Remove 'disabled' from Prev control
		that.enable(controlNext.siblings('.pop-carousel-control.left'));

		// Slide
		popBootstrapCarousel.next(carousel);
	},
	
	controlCarouselNext : function(pageSection, block, carousel, carouselControls, control) {
	
		var that = this;

		// var pageSection = args.pageSection, block = args.block, targets = args.targets;
		var blockQueryState = popManager.getBlockQueryState(pageSection, block);

		control.click(function(e) {
	
			e.preventDefault();
			var control = $(this);
		
			// If control is disabled, do nothing
			if (that.disabled(control)) return;
				
			// var carousel = $(control.data('target'));

			// If we are in the last slide, trigger the fetch on the template block
			if (popBootstrapCarousel.isLastSlide(carousel)) {
			
				// If we are already loading, or stopped loading altogether, then disable control and do nothing			
				if (blockQueryState.loading.length || popManager.stopFetchingBlock(pageSection, block)/*blockQueryState[M.URLPARAM_STOPFETCHING]*/) {
		
					return;
				}

				// Load more
				popManager.fetchBlock(pageSection, block, {operation: M.URLPARAM_OPERATION_APPEND});
				
				that.setControlState(pageSection, block, 'loading');
			}
			
			// Otherwise, just slide
			else {

				that.slideNext(pageSection, block, carousel, control);
			}
		});
	},

	controlCarouselPrev : function(pageSection, block, carousel, carouselControls, control) {
	
		var that = this;

		control.click(function(e) {
	
			e.preventDefault();
			var control = $(this);
		
			// If control is disabled, do nothing
			if (that.disabled(control)) return;
					
			// var carousel = $(control.data('target'));
			
			// If we are in the first slide, disable Prev control
			if (popBootstrapCarousel.isNthSlide(carousel, 2)) {

				that.disable(control);
			}

			// If there are more slides later, re-enable Next Control
			if (popBootstrapCarousel.numberSlides(carousel) > 1) {
			
				that.enable(control.siblings('.pop-carousel-control.right'));
			}

			// Slide
			popBootstrapCarousel.prev(carousel);
		});
	},

	handleReload : function(domain, pageSection, block, carouselControls) {
	
		var that = this;
		var dataset = popManager.getBlockDataset(domain/*popManager.getBlockTopLevelDomain(block)*/, pageSection, block);

		// Set controls enabled / disabled
		that.setEnabledDisabled(pageSection, block, carouselControls);
		
		// Only if no message is being shown, and if the last state from the control was 'next'
		// if (!blockFeedback.msg && that.getControlState(pageSection, block) == 'loading') {

		// Only if there are results, and if the last state from the control was 'next'
		if (dataset && dataset.length && that.getControlState(pageSection, block) == 'loading') {
		
			var carousel = that.getCarousel(carouselControls);
			var controlNext = carouselControls.children('.pop-carousel-control.right');
			that.slideNext(pageSection, block, carousel, controlNext);
		}
		
		// Reset state
		that.setControlState(pageSection, block, '');
	},

	// initVars : function(pageSection, block) {

	// 	var that = this;
	// 	var pssId = popManager.getSettingsId(pageSection);
	// 	var bsId = popManager.getSettingsId(block);

	// 	if (!that.items[pssId]) {
	// 		that.items[pssId] = {};
	// 	}

	// 	that.items[pssId][bsId] = { state : '' };
	// },
	
	getControlState : function(pageSection, block) {
	
		var that = this;
		var mempage = that.getRuntimeMemoryPage(pageSection, block);
		
		return mempage.state;
	},
	
	setControlState : function(pageSection, block, state) {
	
		var that = this;
		var mempage = that.getRuntimeMemoryPage(pageSection, block);
		
		mempage.state = state;
	},

	getCarousel : function(carouselControls) {
	
		var that = this;
		return $(carouselControls.data('target'));
	},
	
	setEnabledDisabled : function(pageSection, block, carouselControls) {
		
		var that = this;

		var carousel = that.getCarousel(carouselControls);
		var controlPrev = carouselControls.children('.pop-carousel-control.left');
		var controlNext = carouselControls.children('.pop-carousel-control.right');

		if (popBootstrapCarousel.numberSlides(carousel) == 0) {
			// No results, disable both
			that.disable(controlPrev);
			that.disable(controlNext);
		}
		else {

			// Disable the prev button
			if (popBootstrapCarousel.isFirstSlide(carousel)) {
				that.disable(controlPrev);
			}
			else {
				that.enable(controlPrev);
			}

			// Disable / Enable next button			
			// var blockQueryState = popManager.getBlockQueryState(pageSection, block);
			if (popBootstrapCarousel.isLastSlide(carousel) && popManager.stopFetchingBlock(pageSection, block)/*blockQueryState[M.URLPARAM_STOPFETCHING]*/) {
		
				that.disable(controlNext);
			}
			else {
		
				that.enable(controlNext);
			}
		}
	},
	
	disable : function(control) {
	
		var that = this;
		control.addClass('disabled');
		control.attr('disabled', true);
	},
	
	enable : function(control) {
	
		var that = this;
		control.removeClass('disabled');
		control.attr('disabled', false);
	},
	
	disabled : function(control) {
	
		var that = this;
		return control.hasClass('disabled');
	}
};
})(jQuery);

//-------------------------------------------------
// Initialize
//-------------------------------------------------
popJSLibraryManager.register(popBootstrapCarousel, ['carouselStatic', 'carouselAutomatic']);
popJSLibraryManager.register(popBootstrapCarouselControls, ['initBlockRuntimeMemoryIndependent', 'controlCarouselPrev', 'controlCarouselNext', 'carouselControls']);