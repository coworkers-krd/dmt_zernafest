///Слайдер секции sponsors

function sponsorsSlider() {
	jQuery('.friends__list').slick({
		arrows: false,
		autoplay: true,
		autoplaySpeed: 3000,
		slidesToShow: 5,
		adaptiveHeight: true,
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

			breakpoint: 550,
			settings: {
				slidesToShow: 1
			}
		}]


	});
}

sponsorsSlider();

// слайдер ГАЛЕРЕЯ

function galleryImg() {

	jQuery('.gallery__list').slick({
		arrows: true,
		dots: true,
		speed: 1000,

	});
}
galleryImg();

// слайдер challenge

function challengeImg() {

	jQuery('.challenge__list').slick({
		arrows: true,
		dots: false,
		speed: 1000,
		slidesToShow: 3,
		adaptiveHeight: false,
		//		draggable: true
		responsive: [{
			breakpoint: 1450,
			settings: {
				slidesToShow: 3
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

			breakpoint: 550,
			settings: {
				slidesToShow: 1
			}
		}]
	});
}
challengeImg();

//Видео в модальном окне

jQuery(".js-modal-video").modalVideo();

//SPEAKERS OPEN BUTTON

function openElseSpeakers() {
	const elseBtn = jQuery('.js-speakers-btn');
	const elseBtnClose = jQuery('.js-speakers-btn-close');
	const speakersList = jQuery('.speakers__list');
	const speakersItem = jQuery('.speakers__item');
	const speakersItemHeight = speakersItem.height();


	speakersList.css('height', speakersItemHeight);
	elseBtnClose.css('display', 'none');

	elseBtn.on('click', function () {

		elseBtn.css('display', 'none');
		jQuery(this).siblings(speakersList).css('height', '100%');
		jQuery('.speakers_btn_offer').fadeIn(200);
		elseBtnClose.fadeIn();
	});

	elseBtnClose.on('click', function () {
		speakersList.css('height', speakersItemHeight);


		elseBtn.fadeIn();
		jQuery('.speakers_btn_offer').fadeOut(200);
		jQuery(this).fadeOut();


	});

	// jQuery(window).on('resize', () => {

	// 	const speakersItemHeight = speakersItem.css('height');
	// 	speakersList.css('height', speakersItemHeight);
	// });

}

openElseSpeakers();

//guests OPEN BUTTON



function openElseGuest() {


	const elseBtn = jQuery('.js-guests-btn');

	const elseBtnClose = jQuery('.js-guests-btn-close');
	const guestsList = jQuery('.guests__list');
	const guestsItem = jQuery('.guests__item');
	const guestsItemHeight = guestsItem.height();

	elseBtnClose.css('display', 'none');
	guestsList.css('height', guestsItemHeight);

	elseBtn.on('click', function () {
		elseBtn.css('display', 'none');
		guestsList.css('height', '100%');
		elseBtnClose.fadeIn();

	});

	elseBtnClose.on('click', function () {

		elseBtn.fadeIn();
		guestsList.css('height', guestsItemHeight);

		jQuery(this).fadeOut();
	})
}

openElseGuest();

//ПОЯВЛЕНИЕ КНОПКИ ГОСТЕЙ


if (jQuery(window).width() > '992') {
	jQuery('.js-guests-btn').css('display', 'none')
} else {
	jQuery('.js-guests-btn').css('display', 'block')
}

jQuery(window).on('resize', () => {

	if (jQuery(window).width() > '992') {
		jQuery('.js-guests-btn').css('display', 'none')
	} else {
		jQuery('.js-guests-btn').css('display', 'block')
	}
});

//модальное окно в спикерах
// function modalSpeakers() {
	jQuery('.speakers__item').on('click',function(){
		var imgSrc = jQuery(this).find('.speakers__avatar').attr('src');
		var position = jQuery(this).find('.speakers__position').text();
		var name = jQuery(this).find('.speakers__name').text();
		var descr = jQuery(this).find('.speakers__content').html();

		var modal = jQuery('.js-speakers__modal');
		jQuery('.speakers__modal-bg').fadeIn(200);
		modal.fadeIn(200);
		modal.find('.speakers__modal-img').attr('src',imgSrc);
		modal.find('.speakers__modal-name').text(name);
		modal.find('.speakers__modal-position').text(position);
		modal.find('.speakers__modal-content').html(descr);
	});

	jQuery('.speakers__modal-closebtn').on('click',function(){
		jQuery('.js-speakers__modal').fadeOut(200);
		jQuery('.speakers__modal-bg').fadeOut(200);
	});
	jQuery('.speakers__modal-closebtn-bottom').on('click',function(){
		jQuery('.js-speakers__modal').fadeOut(200);
		jQuery('.speakers__modal-bg').fadeOut(200);
	});
	jQuery('.speakers__modal-bg').on('click',function(){
		jQuery('.js-speakers__modal').fadeOut(200);
		jQuery('.speakers__modal-bg').fadeOut(200);
	});

// };

// modalSpeakers();

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


///Слайдер секции reviews

function reviewsSlider() {
	//		jQuery('.rewiews__img').slick({
	//			autoplay: false,
	//			slidesToShow: 1,
	//			slidesToScroll: 1,
	//			fade: true,
	//			asNavFor: '.reviews__slider'
	//		});
	jQuery('.reviews__slider').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		prevArrow: '.rewiews__arrow-right',
		nextArrow: '.rewiews__arrow-left',
		//
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 4
			}
		}, {
			breakpoint: 520,
			settings: {
				slidesToShow: 3
			}
		}]
	});
}


reviewsSlider();

//СЕКЦИЯ ОТЗЫВЫ - КОНТЕНТ ПРИ СМЕНЕ СЛАЙДОВ

function reviewContent() {
	var currentImg = jQuery('#reviews').find('.slick-current').find('img').attr('src');
	var currentHTML = jQuery('#reviews').find('.slick-current').find('.reviews__content').html();
	jQuery('.rewiews__big-img').attr('src', currentImg);
	jQuery('.reviews__content-vis').html(currentHTML);
	console.log(currentImg);
};

reviewContent();
jQuery('.reviews__slide').on('click', function(){
	reviewContent();
});
jQuery('.reviews__arrow-right').on('click', function(){
	reviewContent();
});
jQuery('.rewiews__arrow-left').on('click', function(){
	reviewContent();
});




//Слайдер секции where-will
function whereWillSlider() {

	jQuery('.where-will__slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		//			arrows: true,
		prevArrow: '#left',
		nextArrow: '#right',
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 4
			}
		}, {
			breakpoint: 520,
			settings: {
				slidesToShow: 3
			}
		}]
	});
}

whereWillSlider();

//СЕКЦИЯ Где пройдет - КОНТЕНТ ПРИ СМЕНЕ СЛАЙДОВ

function WhereWillContent() {
	var currentImg = jQuery('#where-will').find('.slick-current').find('img').attr('src');
	var currentHTML = jQuery('#where-will').find('.slick-current').find('.where-will__comment-slide').html();
	jQuery('.where-will__slide-bigimg').attr('src', currentImg);
	jQuery('.where-will__content-block').html(currentHTML);
};

WhereWillContent();
jQuery('.where-will__slide').on('click', function(){
	WhereWillContent();
});
jQuery('.where-will__arrow-right').on('click', function(){
	WhereWillContent();
});
jQuery('.where-will__arrow-left').on('click', function(){
	WhereWillContent();
});

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
			priceCalc();
		}
		if (jQuery(this).hasClass('js-quantity-minus')) {
			var item = parseInt(jQuery(this).parents('.price__quantity-row').find('.price__quantity-number').val());
			var itemAfter = item - 1;
			if (itemAfter < 0) {
				itemAfter = 0;
			}
			jQuery(this).parents('.price__quantity-row').find('.price__quantity-number').val(itemAfter);
			priceCalc();
		}
	});
}
jQuery(document).ready(priceButtons);


//OPEN HAMBURGER MENU

function openMenu() {
	const openBtn = jQuery('.js-hamburger');
	const openNav = jQuery('.js-menu');
	const menuItem = jQuery('.menu__link');

	openBtn.on('click', function () {
		openNav.slideToggle();
	});

	menuItem.on('click', function () {
		if (jQuery(window).innerWidth() < '992') {
			openNav.slideUp();
		}
	});
	jQuery(window).on('resize', () => {
		if (jQuery(window).width() > '995') {
			openNav.css('display', 'flex');
		} else {
			openNav.css('display', 'none');
		};
	});
}
openMenu();

/**ПЛАВНАЯ ПРОКРУТКА ДО ЯКОРЯ**/
jQuery(".menu__link").on("click", function (e) {
	e.preventDefault();
	jQuery("html, body").animate({
		scrollTop: jQuery(jQuery(this)
			.attr("href"))
		.offset().top - 100
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
//		}, 1)
//
//
//	}
//}
//
//preloader();
// jQuery('#offer-speaker-tel').mask("+7 (999) 999-9999");
// jQuery('#get-program-tel').mask("+7 (999) 999-9999");
// jQuery('#registration-tel').mask("+7 (999) 999-9999");

//модальное окно

function modalW() {

	const modal = jQuery('.modal');
	const registration = jQuery('.registration');
	const modalOffer = jQuery('.speakerOffer');
	const modalGetProg = jQuery('.getProgram');
	const modalInner = jQuery('.modal__inner');
	const registrationInner = jQuery('.registration__inner');
	const modalOfferInner = jQuery('.speakerOffer__inner');
	const modalGetProgInner = jQuery('.getProgram__inner');
	const closeBtn = jQuery('.modal__close');

	jQuery('.js-offer-speaker-btn').on('click', function () {

		modalOffer.fadeIn(500);
		modalOfferInner.fadeIn(500);
	});

	jQuery('.js-schedule-btn').on('click', function () {

		modalGetProg.fadeIn(500);
		modalGetProgInner.fadeIn(500);
	});

	jQuery('.js-registration-btn').on('click', function () {

		registration.fadeIn(500);
		registrationInner.fadeIn(500);
	});

	closeBtn.on('click', function () {

		modal.fadeOut(500);
		modalInner.fadeOut(500);
	});


	modal.on('click', function () {

		modal.fadeOut(500);
		modalInner.fadeOut(500);
	});

}

modalW();

// Отправка формы AJAX

jQuery(function () {
	jQuery('#speakerOffer-form').submit(function (e) {
		e.preventDefault();
		var m_data = jQuery(this).serialize();
		jQuery.ajax({
			type: "POST",
			url: '/wp-content/themes/zernafest/requests/speakersend.php',
			data: m_data,
			success: function () {
				jQuery('.speakerOffer').fadeIn(200);
				jQuery('.speakerOffer__inner').fadeIn(200);
				jQuery('.speakerOffer__text').fadeIn(200);
				jQuery('.speakerOffer-form').fadeOut(200);
				jQuery('.speakerOffer__text').text('Ваша заявка успешно отправлена!');

				document.getElementById('speakerOffer-form').reset();
			},
			error: function () {
				jQuery('.speakerOffer').fadeIn(200);
				jQuery('.speakerOffer__inner').fadeIn(200);
				jQuery('.speakerOffer__text').fadeIn(200);
				jQuery('.speakerOffer-form').fadeOut(200);
				jQuery('.speakerOffer__text').text('Заявка не отправлена!');

				document.getElementById('speakerOffer-form').reset();
			}
		});
	});
});

jQuery(function () {
	jQuery('#getProgram-form').submit(function (e) {
		e.preventDefault();
		var m_data = jQuery(this).serialize();
		jQuery.ajax({
			type: "POST",
			url: '/wp-content/themes/zernafest/requests/getprogsend.php',
			data: m_data,
			success: function () {
				jQuery('.getProgram').fadeIn(200);
				jQuery('.getProgram__inner').fadeIn(200);
				jQuery('.getProgram__text').fadeIn(200);
				jQuery('.getProgram-form').fadeOut(200);
				jQuery('.getProgram__text').text('Ваша заявка успешно отправлена!');

				document.getElementById('getProgram-form').reset();
			},
			error: function () {
				jQuery('.getProgram').fadeIn(200);
				jQuery('.getProgram__inner').fadeIn(200);
				jQuery('.getProgram__text').fadeIn(200);
				jQuery('.getProgram-form').fadeOut(200);
				jQuery('.getProgram__text').text('Заявка не отправлена!');

				document.getElementById('getProgram-form').reset();
			}
		});
	});
});

jQuery(function () {
	jQuery('#registration-form').submit(function (e) {
		e.preventDefault();
		var m_data = jQuery(this).serialize();
		jQuery.ajax({
			type: "POST",
			url: '/wp-content/themes/zernafest/requests/registration.php',
			data: m_data,
			success: function () {
				jQuery('.registration').fadeIn(200);
				jQuery('.registration__inner').fadeIn(200);
				jQuery('.registration__text').fadeIn(200);
				jQuery('.registration-form').fadeOut(200);
				jQuery('.registration__text').text('Ваша заявка успешно отправлена!');

				document.getElementById('registration-form').reset();
			},
			error: function () {
				jQuery('.registration').fadeIn(200);
				jQuery('.registration__inner').fadeIn(200);
				jQuery('.registration__text').fadeIn(200);
				jQuery('.registration-form').fadeOut(200);
				jQuery('.registration__text').text('Заявка не отправлена! Пожалуйства, попробуйте еще или свяжитесь с нами по телефону.');

				document.getElementById('registration-form').reset();
			}
		});
	});
});


jQuery(function () {
	jQuery('#price__form').submit(function (e) {
		e.preventDefault();
		var m_data = jQuery(this).serialize();
		jQuery.ajax({
			type: "POST",
			url: '/wp-content/themes/zernafest/requests/price.php',
			data: m_data,
			dataType: 'json',
			success: function (data) {
				jQuery('.registration').fadeIn(200);
				jQuery('.registration__inner').fadeIn(200);
				jQuery('.registration__text').fadeIn(200);
				jQuery('#creditform').fadeIn(200);
				jQuery('.registration-form').fadeOut(200);
				

				document.getElementById('registration-form').reset();
			},
			error: function (data) {
				jQuery('.registration').fadeIn(200);
				jQuery('.registration__inner').fadeIn(200);
				jQuery('.registration__text').fadeIn(200);
				jQuery('.registration-form').fadeOut(200);
				jQuery('.registration__text').text('Заявка не отправлена! Пожалуйства, попробуйте еще или свяжитесь с нами по телефону.');

				document.getElementById('price__form').reset();
			}
		});
	});
});

jQuery('.submit_btn').on('click',function(e){
	console.log(123);
	e.preventDefault();
	jQuery('#sold_type').val('В рассрочку');

	if((jQuery('#customerEmail').val() != '') && (jQuery('#customerPhone').val() != '') && (jQuery('#finalprice').val() != '') && (jQuery('#finalprice_total').val() != '')) {
		jQuery('.text_warn').text('');
		jQuery('#price__form').submit();
		setTimeout(function() { jQuery('#creditform').submit(); }, 2000);
	} else {
		jQuery('.text_warn').text('Заполните все поля!');
	}

});



function priceCalc() {
	// var m_data = jQuery('#price__form').serialize();
	var adult_count = jQuery('#adult_count').val();
	var teachers_count = jQuery('#teachers_count').val();
	var kids_18_count = jQuery('#kids_18_count').val();
	var kids_11_count = jQuery('#kids_11_count').val();
	var kids_3_count = jQuery('#kids_3_count').val();
	var promocode = jQuery('#price_form_promocode').val();

	var m_data = { 'adult_count': adult_count, 'teachers_count': teachers_count, 'kids_18_count': kids_18_count, 'kids_11_count': kids_11_count, 'kids_3_count': kids_3_count, 'promocode': promocode }
	jQuery.ajax({
		type: "POST",
		url: 'https://reg.odminoff.ru/fest/api/calculate/?c=10',
		data: JSON.stringify(m_data),
		dataType: 'json',
		crossDomain: true,
		success: function (data) {
			console.log(data);
			if(data.status == 'ok') {
				jQuery('#creditform').fadeIn(200);
				jQuery('#finalprice').val(data.price);
				jQuery('#finalprice_total').val(data.price);
				jQuery('#customerEmail').val(jQuery('#price_form_mail').val());
				jQuery('#customerPhone').val(jQuery('#price_form_tel').val());
				jQuery('#itemName').val('Участие в фестивале ZernaFest для '+ data.people +' человек');

				jQuery('#finalpricePart').val(data.price);
				jQuery('#finalprice_totalPart').val(data.price);
				jQuery('#customerEmailPart').val(jQuery('#price_form_mail').val());
				jQuery('#customerPhonePart').val(jQuery('#price_form_tel').val());
				jQuery('#itemName').val('Участие в фестивале ZernaFest для '+ data.people +' человек');

				jQuery('.people_count').text('');
				jQuery('.registration__text').html('<span>Ваша заявка успешно отправлена!</span><br><span>Сумма с учетом скидки - <b>'+ data.price +'</b> рублей</span><br><span>Ваша персональная скидка - <b>'+ data.discount +'</b> рублей</span>');

				if(data.price == '0') {
					jQuery('.price__btn').addClass('inactive');
				} else {
					jQuery('#price_text').text(data.price);
					jQuery('#sale_text').text(data.discount);

					jQuery('#custom_price').val(data.price);
					jQuery('#custom_price').attr('placeholder',data.price);

					jQuery('.price__btn').removeClass('inactive');
					jQuery('.js-credit-btn').on('click',function(e){
						e.preventDefault();
						jQuery('.js-credit-modal').fadeIn(200);
						jQuery('.js-credit-modal__inner').fadeIn(200);
					});
				}


			} if (data.status == 'error') {
				jQuery('.registration__text').html('');
				jQuery('.people_count').text('Стоимость от 6-ти человек рассчитывается индивидуально, после заполнения формы с Вами свяжется наш менеджер!');
				jQuery('#creditform').fadeOut(200);
			}
		},
	});
}
jQuery(document).ready(priceCalc);

function changeSum() {
	jQuery('#finalprice').val(jQuery('#custom_price').val());
	jQuery('#finalprice_total').val(jQuery('#custom_price').val());
	
	jQuery('#finalpricePart').val(jQuery('#custom_price').val());
	jQuery('#finalprice_totalPart').val(jQuery('#custom_price').val());
}

jQuery('.price__quantity-number').on('click',function(){
	priceCalc();
});
$('#price__form').change(function(){
	priceCalc();
});

