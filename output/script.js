$(document).ready(function() {

	setResizeScripts();


	$('.close-button').on('click', function () {

		$('.container-box').hide();
	});

	$('#container').on('click', function () {
		var currentUrl = window.location.href;
		if (currentUrl.indexOf('#1')) {
			$('.container-box').show();

		}
	});


	initMobileMenu();

});


function setResizeScripts() {
	// hide URL field on the iPhone/iPod touch
			function hideUrlBar() {
				if (((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)))) {
					container = document.getElementById("container");
					if (container) {
						var cheight;
						switch(window.innerHeight) {
							case 208:cheight=268; break; // landscape
						 	case 260:cheight=320; break; // landscape, fullscreen
						 	case 336:cheight=396; break; // portrait, in call status bar
							case 356:cheight=416; break; // portrait 
							case 424:cheight=484; break; // portrait iPhone5, in call status bar
							case 444:cheight=504; break; // portrait iPhone5 
							default:
							cheight=window.innerHeight;
						}
						if ((cheight) && ((container.offsetHeight!=cheight) || (window.innerHeight!=cheight))) {
							container.style.height=cheight + "px";
							setTimeout(function() { hideUrlBar(); }, 1000);
						}
					}
				}
				
				document.getElementsByTagName("body")[0].style.marginTop="1px";
				window.scrollTo(0, 1);
			}
			window.addEventListener("load", hideUrlBar);
			window.addEventListener("resize", hideUrlBar);
			window.addEventListener("orientationchange", hideUrlBar);

			
			// create the panorama player with the container
			pano=new pano2vrPlayer("container");
			pano.readConfigUrl("$RT1BKVW_out.xml");
			// hide the URL bar on the iPhone
			hideUrlBar();
			// add gyroscope controller
			gyro=new pano2vrGyro(pano,"container");
}

function initMobileMenu() {

$('.menu-icon').on('click', function() {

})

  $('.close-menu').on('click', function() {
    $( ".menu" ).animate({
      left: "-267"
    }, 300, function() {
    });
  });

};