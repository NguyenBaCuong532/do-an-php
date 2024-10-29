
window.onscroll = function() {
	var navbar = document.querySelector('.header');
	if (window.scrollY > 20) {
		navbar.classList.add('scrolled');
	} else {
		navbar.classList.remove('scrolled');
	}
	var logo = document.querySelector('.logo-text');
	var scrollPos = window.scrollY;

	if (scrollPos > 50) {
		logo.style.fontSize = "40px";
		logo.style.top = "143px";
		logo.style.left = "25px";
		logo.style.letterSpacing = "10px";
		logo.style.fontFamily = "serif";
		logo.style.color = "#000";
		logo.style.width = "10px";


		logo.style.transform = "translate(0, 0)";
	} else {
		logo.style.fontSize = "320px";
		logo.style.top = "50%";
		logo.style.left = "12%";
		logo.style.letterSpacing = "50px";
		logo.style.fontFamily = "serif";
		logo.style.color = "#fff";


		logo.style.transform = "translate(-50%, -50%)";
	}



};
