var $win = $(window);
var windowWidth = $win.width();

if (windowWidth > 768) {
	var webStorage = function(){
		if(sessionStorage.getItem('access')){
			$('.start').remove();
		} else {
			setTimeout(function(){
				$('.start p').fadeIn(2000);
				$('.start p').delay(1000).queue(function() {
					$(this).addClass('animate').dequeue();
				});
			},1000);

			setTimeout(function(){
				$('.start').fadeOut(500);
			},6500);

			sessionStorage.setItem('access', 0);
		}
	}

	webStorage();
}