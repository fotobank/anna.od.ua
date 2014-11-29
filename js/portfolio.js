/**
 * Created by Jurii on 07.07.14.
 */
$(document).ready(function () {

			jQuery('#mycarousel-1, #mycarousel-2, #mycarousel-3, #mycarousel-4, #mycarousel-5, #mycarousel-6, #mycarousel-7')
					.jcarousel({
						horisontal: true,
						wrap      : 'circular',
						scroll    : 1,
						easing    : 'easeInOutBack',
						animation : 1200
					});

			$("a.plus")
					.fancybox({
						'transitionIn' : 'elastic',
						'transitionOut': 'elastic',
						'speedIn'      : 600,
						'speedOut'     : 200,
						'overlayShow'  : true
					})
});