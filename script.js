
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

	var tag = document.querySelector('.elementor-divider1');
	var tag2 = document.querySelector('.elementor-divider2');
	var tag3 = document.querySelector('.elementor-divider3');
	var tag4 = document.querySelector('.elementor-divider4');

	if (window.scrollY > 100) {
		tag.classList.add('animate__backInRight');

	}
	else {
		tag.classList.remove('animate__backInRight');

	}
	if(window.scrollY > 1050){
		tag2.classList.add('animate__backInRight');


	}
	 else {
		tag2.classList.remove('animate__backInRight');

	}
	if(window.scrollY > 3350){
		tag3.classList.add('animate__backInRight');


	}
	 else {
		tag3.classList.remove('animate__backInRight');

	}
	if(window.scrollY > 4050){
		tag4.classList.add('animate__backInRight');


	}
	 else {
		tag4.classList.remove('animate__backInRight');

	}

};
