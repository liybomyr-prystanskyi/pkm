let list = jQuery("#projects-m .pr");
let numToShow = 6;
let button = jQuery("#loadMore");
let numInList = list.length;
list.hide();
if (numInList > numToShow) {
	button.show();
}
list.slice(0, numToShow).show();

button.click(function () {

	let showing = list.filter(':visible').length;
	list.slice(showing - 1, showing + numToShow).fadeIn();
	var nowShowing = list.filter(':visible').length;
	if (nowShowing >= numInList) {
		button.hide();
	}
});


jQuery(function () {
	jQuery(window).on('load', function () {
		jQuery('#loading').fadeOut();
		jQuery('#Load').delay(1000).fadeOut('slow');
		jQuery('body').delay(1000).css({
			'overflow': 'visible'
		});
		setTimeout(function () {
			new WOW().init();
		}, 750);

		jQuery('a[href="' + this.location.href + '"]').addClass('active');

		jQuery(".lazy-img").recliner({
			attrib: "data-src",
			throttle: 100,
			threshold: 300,
		});
		jQuery('.lazy').Lazy({
			visibleOnly: true,
			effect: 'fadeIn',
			threshold: 400,
		});
	});

	jQuery('img.svg').each(function () {
		var $img = jQuery(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');
		jQuery.get(imgURL, function (data) {
			// Get the SVG tag, ignore the rest
			var $svg = jQuery(data).find('svg');
			// Add replaced image's ID to the new SVG
			if (typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			// Add replaced image's classes to the new SVG
			if (typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass + ' replaced-svg');
			}
			// Remove any invalid XML tags as per http://validator.w3.org
			$svg = $svg.removeAttr('xmlns:a');
			// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
			if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
				$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
			}
			// Replace image with new SVG
			$img.replaceWith($svg);

		}, 'xml');

	});


	

	var serviceSlider2 = new Swiper('.swiper-container-2', {
		navigation: {
			nextEl: '.swiper-button-next-expertise',
			prevEl: '.swiper-button-prev-expertise',
			slidesPerView: 1,
			slidesPerColumn: 1,
		},
		autoplay: {
			delay: 5000,
		}
	});



	var serviceSlider3 = new Swiper('.swiper-container-3', {
		navigation: {
			nextEl: '.swiper-button-next-projects',
			prevEl: '.swiper-button-prev-projects',
			slidesPerView: 1,
			slidesPerColumn: 1,
		},
		autoplay: {
			delay: 5000,
		}
	});

	var serviceSlider4 = new Swiper('.swiper-container-4', {
		navigation: {
			nextEl: '.swiper-button-next-brokers',
			prevEl: '.swiper-button-prev-brokers',
			slidesPerView: 4,
			breakpoints: {
				992: {
				  slidesPerView: 2,
				}
			  }
		}
  });
  var serviceSlider = new Swiper('.swiper-container', {
		navigation: {
			nextEl: '.swiper-button-next-brokers',
			prevEl: '.swiper-button-prev-brokers',
			slidesPerView: 4,
			breakpoints: {
				992: {
				  slidesPerView: 2,
				}
			  }
		}
  });
  

  var sliders = [];

// $('.project-page .swiper-container').each(function(index, element){
//     $(this).addClass('s'+index);
//     console.log(this)
//     $(this).find('.swiper-button-next-projects').addClass('r'+index);
//     $(this).find('.swiper-button-prev-projects').addClass('l'+index);
//     var slider = new Swiper('.s'+index, { 
//         slidesPerView: 1,
//         spaceBetween: 0,
//         nextButton: '.r'+index,
//         prevButton: '.l'+index,
//         onProgress: function(e){
//             if(e.isBeginning){
//                 $('.l'+index).hide();
//                 $('.r'+index).show();
//             } else if(e.isEnd){
//                 $('.r'+index).hide();
//                 $('.l'+index).show();
//             } else {
//                 $('.r'+index).show();
//                 $('.l'+index).show();
//             }
//         }
//     });
//     sliders.push(slider);
// });


// var serviceSlider = new Swiper('.project-page .item .swiper-container', {
// 		navigation: {
// 			nextEl: '.swiper-button-next-projects',
// 			prevEl: '.swiper-button-prev-projects',
// 			slidesPerView: 1,
// 			slidesPerColumn: 1,
// 		},
// 		pagination: {
// 			el: '.swiper-pagination',
// 			clickable: true
// 		},
// 		autoplay: {
// 			delay: 5000,
// 		}
// 	});

  $(".project-page .item").each(function(index, element){
    //item + itemIndex
    var itemp = 'item' + (index + 1);
    element.classList.add(itemp);
    // DOM add attr for btns
    var prevB = this.querySelector('.yellow-bg-arrow .swiper-button-next-projects');
    var nextB = this.querySelector(".yellow-bg-arrow .swiper-button-prev-projects");
    prevB.classList.add('p'+index);
    nextB.classList.add('n'+index);
    var test = '.n' + index;
    var test1 = '.p' + index;
    // init itemindex
    var serviceSlider = new Swiper('.project-page .' + itemp + ' .swiper-container', {
      slidesPerView: 1,
      slidesPerColumn: 1,
      navigation: {
        nextEl: test1,
        prevEl: test,
      }
    })
  })






	// var serviceSlider5 = new Swiper('.swiper-container-5', {
	// 	navigation: {
	// 		nextEl: '.swiper-button-next-projects1',
	// 		prevEl: '.swiper-button-prev-projects1',
	// 		slidesPerView: 1,
	// 		slidesPerColumn: 1,
	// 	},
	// 	autoplay: {
	// 		delay: 5000,
	// 	}
	// });

	var serviceSlider7 = new Swiper('.swiper-container-7', {
		navigation: {
			nextEl: '.swiper-button-next-projects3',
			prevEl: '.swiper-button-prev-projects3',
			slidesPerView: 1,
			slidesPerColumn: 1,
		},
		autoplay: {
			delay: 5000,
		}
	});


	var serviceSlider8 = new Swiper('.swiper-container-8', {
		navigation: {
			nextEl: '.swiper-button-next-projects4',
			prevEl: '.swiper-button-prev-projects4',
			slidesPerView: 1,
			slidesPerColumn: 1,
		},
		autoplay: {
			delay: 5000,
		}
	});

	var serviceSlider9 = new Swiper('.swiper-container-9', {
		navigation: {
			nextEl: '.swiper-button-next-projects5',
			prevEl: '.swiper-button-prev-projects5',
			slidesPerView: 1,
			slidesPerColumn: 1,
		},
		autoplay: {
			delay: 5000,
		}
	});

	var serviceSlider10 = new Swiper('.swiper-container-10', {
		navigation: {
			nextEl: '.swiper-button-next-projects6',
			prevEl: '.swiper-button-prev-projects6',
			slidesPerView: 1,
			slidesPerColumn: 1,
		},
		autoplay: {
			delay: 5000,
		}
	});







	// document.querySelector('#request-form1 #page').value = window.location.href;

	// if (document.querySelector('#request-form #pageM')) {
	// 	document.querySelector('#request-form #pageM').value = window.location.href;
	// }

	// if (document.querySelector('.customer-info')) {
	// 	let targ = document.querySelector('.customer-info'),
	// 		page = document.querySelector('#request-form1 #page'),
	// 		item = document.querySelector('#request-form1 #item');

	// 	targ.addEventListener('click', function (e) {
	// 		if (e.target.tagName == 'A') {
	// 			item.value = e.target.dataset.val;
	// 			page.value = window.location.href;
	// 		}
	// 	});
	// }
});