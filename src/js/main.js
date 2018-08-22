//Слайдер секции where-will
function whereWillSlider() {
 $('.where-will__slider').slick({
  	 arrows: false
  });
}

whereWillSlider();

// initMap() - функция инициализации карты
function initMap() {
	
	var centerLatLng = new google.maps.LatLng(55.659573, 36.815790);
	
	var mapOptions = {
		center: centerLatLng,
		zoom: 17             
	};
	
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
// Ждем полной загрузки страницы, после этого запускаем initMap()
google.maps.event.addDomListener(window, "load", initMap);


//OPEN HAMBURGER MENU

function openMenu() {
	const openBtn = $('.js-hamburger');
	const openNav = $('.js-menu');
	const menuItem = $('.menu__link');
	
	openBtn.on('click', function() {
		
		openNav.slideToggle();
		
	});
	
	menuItem.on('click', function() {
		if(openNav.css('display', 'block')) {
		openNav.slideUp();
		}
	})
}

openMenu();

//ACTIVEMENU

function activeMenu() {
	
}

activeMenu();

//SPEAKERS OPEN BUTTON

function openElseSpeakers() {
	const elseBtn = $('.js-speakers-btn');
	
	elseBtn.on('click', function() {
		elseBtn.css('display', 'none');
		$('.speakers__item_invisible').css('display', 'flex');
	})
}

openElseSpeakers();

//SPEAKERS MODAL

function speakersModal() {
	
}

speakersModal();