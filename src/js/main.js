//Слайдер секции where-will
function whereWillSlider() {
	$('.where-will__slider').slick({
		arrows: true,
		autoplay: true,
		autoplaySpeed: 3000,
		dots: true

	});
}

whereWillSlider();

///Слайдер секции reviews

function reviewsSlider() {
	$('.reviews__slider').slick({
		arrows: true,
		dots: true,
		speed: 1000,


	});


}


reviewsSlider();

///Слайдер секции sponsors

function sponsorsSlider() {
	$('.sponsors__list').slick({
		arrows: false,
		autoplay: true,
		autoplaySpeed: 3000,
		slidesToShow: 5,
		//		draggable: true
		responsive: [{
			breakpoint: 1450,
			settings: {
				slidesToShow: 4
			}
    }, {
			breakpoint: 1200,
			settings: {
				slidesToShow: 3
			}
        }, {

			breakpoint: 750,
			settings: {
				slidesToShow: 2
			}
    }, {

			breakpoint: 450,
			settings: {
				slidesToShow: 1
			}
    }]


	});
}

sponsorsSlider();

//Видео в модальном окне

$(".js-modal-video").modalVideo();

//SPEAKERS OPEN BUTTON

function openElseSpeakers() {
	const elseBtn = $('.js-speakers-btn');

	elseBtn.on('click', function () {
		elseBtn.css('display', 'none');
		$('.speakers__item_invisible').css('display', 'flex');
	})
}

openElseSpeakers();

//модальное окно в спикерах

function modalSpeakers() {
	const openModalSpeakers = document.querySelectorAll(".speakers__avatar");
	const closeModalSpeakers = document.querySelectorAll(".js-speakers__modal-closebtn");

	const ModalSpeakers = document.querySelector(".js-speakers__modal");

	const ModalSpeakersBg = document.querySelector(".js-speakers__modal-bg");
	const ModalSpeakersPos = document.querySelector(".speakers__modal-position");
	const ModalSpeakersName = document.querySelector(".speakers__modal-name");
	const ModalSpeakersComment = document.querySelector(".speakers__modal-content ");
	const ModalSpeakersImg = document.querySelector(".speakers__modal-img");


	let op = 0;

	for (let i = 0; i < openModalSpeakers.length; i++) {
		openModalSpeakers[i].addEventListener('click', function () {

			const z = this;
			const contentParent = z.parentNode;

			const name = contentParent.querySelector('.speakers__name');
			const pos = contentParent.querySelector('.speakers__position');
			const cont = contentParent.querySelector('.speakers__content');
			const img = contentParent.querySelector('.speakers__avatar');
			const imgSrc = img.getAttribute('src');

			ModalSpeakers.style.display = 'block';
			ModalSpeakers.style.opacity = 0;

			setTimeout(function ModalOp() {
				if (op < 1) {

					op += 0.2

					ModalSpeakers.style.opacity = op;

					setTimeout(ModalOp, 50);
				}
			}, 100);

			ModalSpeakersBg.style.display = 'block';


			ModalSpeakersPos.textContent = pos.innerHTML;
			ModalSpeakersName.textContent = name.innerHTML;
			ModalSpeakersComment.textContent = cont.innerHTML;
			ModalSpeakersImg.setAttribute("src", imgSrc);



		});
	}



	for (let cl = 0; cl < closeModalSpeakers.length; cl++) {
		closeModalSpeakers[cl].addEventListener('click', function () {

			setTimeout(function ModalCl() {
				if (op > 0) {

					op -= 0.2

					ModalSpeakers.style.opacity = op;

					setTimeout(ModalCl, 100);
				} else {
					ModalSpeakers.style.display = 'none';
					ModalSpeakersBg.style.display = 'none';
				}

			}, 100);


		});
	}
}

modalSpeakers();


// СЕКЦИЯ РАСПИСАНИЕ	

function sheduleSection() {
	//	

	const sheduleBtn = document.querySelectorAll(".schedule__days-day");
	const sheduleContent = document.querySelectorAll(".schedule__content-item");

	for (let i = 0; i < sheduleBtn.length; i++) {

		for (let l = 0; l < sheduleBtn.length; l++) {



			sheduleBtn[i].addEventListener('click', () => {


				sheduleBtn[l].classList.remove('schedule__days-day_active');
				sheduleBtn[i].classList.add('schedule__days-day_active');

				sheduleContent[l].classList.remove('schedule__content-item_active');

				sheduleContent[i].classList.add('schedule__content-item_active');




			});

		}
	}


};

sheduleSection();

//СЕКЦИЯ ОТЗЫВЫ - КОНТЕНТ ПРИ СМЕНЕ СЛАЙДОВ

function reviewsContent() {
	const slide = document.querySelector('.reviews__slider');
	const reviewSlide = document.querySelectorAll('.reviews__slide');
	const reviewContent = document.querySelectorAll('.reviews__content');





	slide.addEventListener('click', () => {

		for (let i = 0; i < reviewSlide.length; i++) {


			for (let l = 0; l < reviewSlide.length; l++) {

				if (reviewSlide[i].classList.contains('slick-active')) {
					let currentSlide = reviewSlide[i].getAttribute('data-slideRew');

					reviewContent[l].classList.remove('reviews__content_active');
					reviewContent[l].style.transform = 'translateX(100%)';
					reviewContent[currentSlide].classList.add('reviews__content_active');

					setTimeout(function RewTransl() {

						reviewContent[currentSlide].style.transform = 'translateX(0)';

					}, 700);

				}

			}

		}
	});





};

reviewsContent();

//секция prices

function validFormPrice() {
	const priceNumberField = document.querySelector(".price__quantity-number");


	priceNumberField.addEventListener('keydown', function (event) {
		let isDigit = false;
		let isControl = false;

		if (event.key >= 0 || event.key >= 9) {
			isDigit = true;
		}

		if (event.key == 'Backspace' || event.key == 'Delete' || event.key == 'ArrowRight' || event.key == 'ArrowLeft') {
			isControl = true;
		}
		if (!isDigit && !isControl) {
			event.preventDefault();
		}

	});



}

validFormPrice();

function priceButtons() {
	jQuery('.price__quantity-number').val('0');

	jQuery('.price__quantity-btn').on('click', function (e) {
		e.preventDefault();
		if (jQuery(this).hasClass('js-quantity-plus')) {
			var item = parseInt(jQuery(this).parents('.price__quantity-row').find('.price__quantity-number').val());
			var itemAfter = item + 1;
			if (itemAfter < 0) {
				itemAfter = 0;
			}
			jQuery(this).parents('.price__quantity-row').find('.price__quantity-number').val(itemAfter);
		}
		if (jQuery(this).hasClass('js-quantity-minus')) {
			var item = parseInt(jQuery(this).parents('.price__quantity-row').find('.price__quantity-number').val());
			var itemAfter = item - 1;
			if (itemAfter < 0) {
				itemAfter = 0;
			}
			jQuery(this).parents('.price__quantity-row').find('.price__quantity-number').val(itemAfter);
		}
	});
}
jQuery(document).ready(priceButtons);



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


	openBtn.on('click', function () {

		openNav.slideToggle();



	});

	menuItem.on('click', function () {
		if ($(window).innerWidth() < '992') {
			openNav.slideUp();



		}


	});


	$(window).on('resize', () => {

		if ($(window).width() > '995') {

			openNav.css('display', 'flex');
		} else {
			openNav.css('display', 'none');
		};
	});

}
openMenu();

/**ПЛАВНАЯ ПРОКРУТКА ДО ЯКОРЯ**/
$(".menu__link").on("click", function (e) {
	e.preventDefault();
	$("html, body").animate({
		scrollTop: $($(this)
				.attr("href"))
			.offset().top
	}, 300, "linear");

});



//ACTIVEMENU

function activeMenu() {
	const menuItem = document.querySelectorAll('.menu__link');
	const section = document.getElementsByTagName('section');

	for (let i = 0; i < menuItem.length; i++) {
		for (let l = 0; l < menuItem.length; l++) {
			menuItem[i].addEventListener('click', () => {

				menuItem[l].classList.remove('menu__link_active');
				
				menuItem[i].classList.add('menu__link_active');

			});

			window.addEventListener('scroll', () => {
				let posTop = section[i].getBoundingClientRect().top.toFixed();
				//				
				if (posTop > 10 && posTop < 150) {

					let currentSection = section[i].getAttribute('data-page');


					menuItem[l].classList.remove('menu__link_active');
					menuItem[currentSection].classList.add('menu__link_active');

				}


			})
		};
	}

}

activeMenu();

//PRELOADER 

//function preloader() {
//	document.body.onload = () => {
//
//		setTimeout(() => {
//			const preloader = document.querySelector('.preloader');
//			if (!preloader.classList.contains('preloader_done')) {
//				preloader.classList.add('preloader_done');
//			}
//
//		}, 2000)
//
//
//	}
//}
//
//preloader();
