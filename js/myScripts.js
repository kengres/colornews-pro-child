(jQuery)(function($) {
	console.log('version 0.6');
	//hide li on main page

	$allLi = $('.publicat_col .forExcerpt li');

	$allLi.each(function(i) {
		
		if( i > 4 ) {
			$(this).hide();

		}
	});
	
	// equal height for boxes
	if ( $(window).width() > 600) {
		console.log('window sup a 600px');
		
		var mx1 = Math.max($('.myCol:eq(0)').height(), $('.myCol:eq(1)').height());
			$('.myCol:eq(0)').height(mx1);
			$('.myCol:eq(1)').height(mx1);

		var mx2 = Math.max($('.myCol:eq(2)').height(), $('.myCol:eq(3)').height());
			$('.myCol:eq(2)').height(mx2);
			$('.myCol:eq(3)').height(mx2);
		var mx3 = Math.max($('.myCol:eq(4)').height(), $('.myCol:eq(5)').height());
			$('.myCol:eq(4)').height(mx3);
			$('.myCol:eq(5)').height(mx3);

		var mx4 = Math.max($('.myCol:eq(6)').height(), $('.myCol:eq(7)').height());
			$('.myCol:eq(6)').height(mx4);
			$('.myCol:eq(7)').height(mx4);
		
		$('.myCol .forExcerptLink').css({
			'position': 'absolute',
			'bottom': "20px",
			'left': '50%',
			'transform' : 'translateX(-50%)'
		});

		// setTimeout(linkMdd, 2000);
		linkMdd();
		
		// Home equal height
		var bx = $('.sameHjs');

		for (var i = 0; i < bx.length; i++) {
			// console.log('box n#' + i, bx[i], bx.eq(i).height())

			var bxh_now = bx.eq(i).height();
			var bxh_prev = bx.eq(i-1).height();

			if( bxh_now > bxh_prev ) {
				console.log(bxh_now);
				console.log(bxh_prev);

				bx.eq(i-1).height(bxh_now);

			} else {
				bx.eq(i).height(bxh_prev);
			}
		}
		// Home equal height
		var bxp = $('.sameHjs_programme');
		
				for (var i = 0; i < bxp.length; i+=3) {
					// console.log('box n#' + i, bxp[i], bxp.eq(i).height())
		
					var bxh_now = bx.eq(i).height();
					console.log(bxh_now);
					
					var bxh_prev = bx.eq(i-1).height();
					console.log(bxh_prev);
					var bxh_prev_prev = bx.eq(i-2).height();
					console.log(bxh_prev_prev);

					var maxBx = Math.max(bxh_now, bxh_prev, bxh_prev_prev);
					console.log('max: ', maxBx);
					

					bx.eq(i).height(maxBx);
					bx.eq(i-1).height(maxBx);
					bx.eq(i-2).height(maxBx);
				}

		function linkMdd() {
			$('.middleBottom').css({
				'position': 'absolute',
				'bottom': "15px",
				'left': '50%',
				'transform' : 'translateX(-50%)'
			});
		}
		


		

		
	};

	


	


});
