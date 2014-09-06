
$bn1(document).ready(function(){

	// hide #back-top first
	$bn1("#back-top").hide();
	
	// fade in #back-top
	$bn1(function () {
		$bn1(window).scroll(function () {
			if ($bn1(this).scrollTop() > 100) {
				$bn1('#back-top').fadeIn();
			} else {
				$bn1('#back-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$bn1('#back-top').click(function () {
			$bn1('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
