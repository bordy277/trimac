$(document).ready(function(){

	$('.tab.rent').click(function(){

		// $('.home').animate({'left': '-960px'}, 500);
		$('.renters').fadeIn(1000);
		$('.home').hide();
		$('.contact').hide();
		$('.about').hide();
		$('.investors').hide();
		$('.current').hide();
		$('.future').hide();
		$('.content').show();


	});

	$('.tab.ab').click(function(){

		$('.about').fadeIn(1000);
		$('.renters').hide();
		$('.home').hide();
		$('.contact').hide();
		$('.ab').show();
		$('.partners').show();
		$('.investors').hide();
		$('.current').hide();
		$('.future').hide();
		$('.content').show();


	});

	$('.tab.cont').click(function(){

		$('.about').hide();
		$('.partners').hide();
		$('.renters').hide();
		$('.home').hide();
		$('.contact').fadeIn(1000);
		$('.investors').hide();
		$('.current').hide();
		$('.future').hide();
		$('.content').show();


	});

	$('.hm').click(function(){

		$('.about').hide();
		$('.renters').hide();
		$('.home').fadeIn(1000);
		$('.contact').hide();
		$('.investors').hide();
		$('.current').hide();
		$('.future').hide();
		$('.content').hide();


	});

	$('.tab.invest').click(function(){

		$('.about').hide();
		$('.renters').hide();
		$('.home').hide();
		$('.contact').hide();
		$('.investors').fadeIn(1000);
		$('.current').hide();
		$('.future').hide();
		$('.content').show();

	});

	$('.current-targets').click(function(){

		$('.investors').hide();
		$('.current').fadeIn(1000);
		$('.future').hide();

	});
	
	$('.future-targets').click(function(){

		$('.investors').hide();
		$('.future').fadeIn(1000);
		$('.current').hide();

	});
});







































