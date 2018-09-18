<?php
/*
* Template name: Главная страница
*/
?>
<?php get_header(); ?>

<div class="promo__content">
  <div class="logo_wrapper"><img class="promo__newlogo promo__logo-rozetka" alt="" src="<?php echo get_template_directory_uri(); ?>/img/promo/logo_rozetka.png"><img class="promo__newlogo promo__logo-text" alt="" src="<?php echo get_template_directory_uri(); ?>/img/promo/logo_text.png"></div>
  <h1 class="promo__text"><?= get_option('promo_title');?></h1>
  <p class="promo__date">2-7 НОЯБРЯ 2018</p>
  <p class="promo__place"><?= get_option('promo_place');?></p>
  <p class="promo__place"><?= get_option('promo_town');?></p>
  <button class="promo-form__btn js-registration-btn" type="submit">оставить заявку</button>
</div>
<div class="promo__form">
  <form class="promo-form" id="promo-form">
    <h2 class="promo-form__title">Регистрация</h2>
    <label class="promo-form__label">
      <input class="promo-form__input" type="text" placeholder="Ваше ФИО" name="promo-form-name" id="promo-form-name">
    </label>
    <label class="promo-form__label">
      <input class="promo-form__input" type="text" placeholder="Ваш e-mail" name="promo-form-mail" id="promo-form-mail">
    </label>
    <label class="promo-form__label">
      <input class="promo-form__input" type="text" placeholder="Ваш телефон" name="promo-form-tel" id="promo-form-tel">
    </label>
    <button class="promo-form__btn" type="submit">оставить заявку</button>
    <label class="promo-form__label promo-form__label_checkbox"><span class="promo-form-text">Нажимая кнопку, я даю свое согласие на обработку моих персональных данных в соответствии с <a class="promo-form-link" href="https://www.vospitai.com/privacy_policy_phuz_2018.pdf" target="_blank">политикой конфиденциальности и </a><a class="promo-form-link" href="https://www.vospitai.com/public_offer_phuz_2018.pdf" target="_blank">пользовательским соглашением.</a></span></label>
  </form>
</div>
</section>
<section class="mission" id="mission" data-page="1">
  <div class="mission__row">
    <h2 class="mission__title">миссия<span class="mission__title_small">фестиваля</span></h2>
    <div class="mission__numbers">
      <div class="mission__numbers-col">
        <div class="mission__number mission__number_five">5</div>
        <div class="mission__descr">дней фестиваля </div>
      </div>
      <div class="mission__numbers-col">
        <div class="mission__number">30</div>
        <div class="mission__descr">лучших педагогов-экспертов</div>
      </div>
    </div>
  </div>
  <div class="mission__content">
    <p class="mission__text">С 2013 года мы собираем на одной площадке легендарных учителей, чтобы превращать в реальность мечты о будущем детей.</p>
    <p class="mission__text">Мы стремимся дать детям лучшее образование и воспитание. Мечтаем видеть их счастливыми и успешными.</p>
    <p class="mission__text">Великие учителя - от Сократа и Платона до Льва Толстого и Шалвы Амонашвили убеждены, что образование детей- это в первую очередь воспитание себя. Поэтому вместе с детьми мы приглашаем на фестиваль мам и пап, бабушек и дедушек, учителей и учеников. Чтобы с любовью создавать питательную среду для расцветания в нас и наших детях самых лучших качеств Человека. Учиться быть творческими и счастливыми друг с другом. И улучшать мир вокруг себя.</p>
    <p class="mission__text">Событие года о счастливом воспитании родителей, учителей и детей.</p>
  </div>
</section>
<section class="speakers" id="speakers" data-page="0">
  <div class="container container_speakers">
    <h2 class="speakers__title">СПИКЕРЫ
      <div class="speakers__subtitle">ФЕСТИВАЛЯ</div>
    </h2>
    <ul class="speakers__list">

      <?php
      $args = array(
        'posts_per_page' => 99,
        'order' => 'ASC',
        'post_type' => array( 'speaker' ),
      );
      $posts = new WP_Query( $args );
      while( $posts->have_posts() ) :
        $posts->the_post();
        ?>

        <li class="speakers__item"><img class="speakers__avatar" src="<?php the_post_thumbnail_url(); ?>">
          <div class="speakers__position"><?php echo get_post_meta( get_the_id(), 'speaker_type', true); ?></div>
          <h3 class="speakers__name"><?php the_title(); ?></h3><a class="speakers__fb-link" href="#"></a>
          <div class="speakers__content"><?php the_content(); ?></div>
        </li>
        <?php
      endwhile;
      wp_reset_postdata();
      ?>

    </ul>
    <button class="speakers__btn js-speakers-btn" type="button">Все спикеры</button>
    <button class="speakers__btn speakers_btn_offer js-offer-speaker-btn" type="button">Предложить спикера</button>
    <button class="speakers__btn js-speakers-btn-close" type="button">Свернуть список</button>
  </div>
  <div class="speakers__modal-bg js-speakers__modal-bg js-speakers__modal-closebtn"></div>
  <div class="speakers__modal js-speakers__modal js-speakers__modal-closebtn"><img class="speakers__modal-img" alt="аватар">
    <button class="speakers__modal-closebtn" type="button"></button>
    <h3 class="speakers__modal-name"> </h3>
    <div class="speakers__modal-position"> </div><a class="speakers__modal-fb" href="#"></a>
    <div class="speakers__modal-content"> </div>
    <button class="speakers__modal-closebtn-bottom" type="button"></button>
    <div class="speakers__modal-thanks">СПАСИБО ЗА ПРОСМОТР</div>
  </div>
</section>
<section class="friends" id="friends">
  <h2 class="friends__title">наши партнеры</h2>
  <ul class="friends__list">
    <li class="friends__item"><img class="friends__logo" alt="иконка спонсора" src="<?php echo get_template_directory_uri(); ?>/img/sponsors/ico_exp_logo.png"></li>
    <li class="friends__item"><img class="friends__logo" alt="иконка спонсора" src="<?php echo get_template_directory_uri(); ?>/img/sponsors/aquaris_logo.png"></li>
    <li class="friends__item"><img class="friends__logo" alt="иконка спонсора" src="<?php echo get_template_directory_uri(); ?>/img/sponsors/mda_logo.png"></li>
    <li class="friends__item"><img class="friends__logo" alt="иконка спонсора" src="<?php echo get_template_directory_uri(); ?>/img/sponsors/meetup_logo.png"></li>
    <li class="friends__item"><img class="friends__logo" alt="иконка спонсора" src="<?php echo get_template_directory_uri(); ?>/img/sponsors/kweb_logo.png"></li>
    <li class="friends__item"><img class="friends__logo" alt="иконка спонсора" src="<?php echo get_template_directory_uri(); ?>/img/sponsors/ico_exp_logo.png"></li>
    <li class="friends__item"><img class="friends__logo" alt="иконка спонсора" src="<?php echo get_template_directory_uri(); ?>/img/sponsors/aquaris_logo.png"></li>
    <li class="friends__item"><img class="friends__logo" alt="иконка спонсора" src="<?php echo get_template_directory_uri(); ?>/img/sponsors/mda_logo.png"></li>
    <li class="friends__item"><img class="friends__logo" alt="иконка спонсора" src="<?php echo get_template_directory_uri(); ?>/img/sponsors/meetup_logo.png"></li>
    <li class="friends__item"><img class="friends__logo" alt="иконка спонсора" src="<?php echo get_template_directory_uri(); ?>/img/sponsors/kweb_logo.png"></li>
  </ul>
</section>
<section class="speakers" id="guests" data-page="0">
  <div class="container container_speakers">
    <h2 class="speakers__title">ГОСТИ
      <div class="speakers__subtitle">ФЕСТИВАЛЯ</div>
    </h2>
    <ul class="speakers__list">
      <li class="speakers__item"><img class="speakers__avatar" alt="аватар ШАЛВА АМОНАШВИЛИ" src="<?php echo get_template_directory_uri(); ?>/img/speakers/speaker_6.jpeg">
        <div class="speakers__position">гость фестиваля</div>
        <h3 class="speakers__name">ДИНА КОРЗУН</h3><a class="speakers__fb-link" href="#"></a>
        <div class="speakers__content">Дина Корзун российская актриса театра и кино, соучредитель российского благотворительного фонда «Подари жизнь». Мама троих детей.</div>
      </li>
<!--       <li class="speakers__item"><img class="speakers__avatar" alt="аватар МАРИНА ТАРГАКОВА" src="<?php echo get_template_directory_uri(); ?>/img/speakers/speaker_7.jpeg">
        <div class="speakers__position">гость фестиваля</div>
        <h3 class="speakers__name">ВЕРА ПОЛОЗКОВА</h3><a class="speakers__fb-link" href="#"></a>
        <div class="speakers__content">российская поэтесса, актриса, певица</div>
      </li> -->
      <li class="speakers__item"><img class="speakers__avatar" alt="" src="<?php echo get_template_directory_uri(); ?>/img/speakers/user.svg">
        <div class="speakers__position">гость фестиваля</div>
        <h3 class="speakers__name">Секретный гость</h3><a class="speakers__fb-link" href="#"></a>
        <div class="speakers__content"></div>
      </li>
    </ul>
    <!-- <button class="speakers__btn js-speakers-btn" type="button">Все гости</button> -->
    <!-- <button class="speakers__btn js-speakers-btn-close" type="button">Свернуть список</button> -->
  </div>
  <div class="speakers__modal-bg js-speakers__modal-bg js-speakers__modal-closebtn"></div>
  <div class="speakers__modal js-speakers__modal js-speakers__modal-closebtn"><img class="speakers__modal-img" alt="аватар">
    <button class="speakers__modal-closebtn" type="button"></button>
    <h3 class="speakers__modal-name"> </h3>
    <div class="speakers__modal-position"> </div><a class="speakers__modal-fb" href="#"></a>
    <p class="speakers__modal-content"> </p>
    <button class="speakers__modal-closebtn-bottom" type="button"></button>
    <div class="speakers__modal-thanks">СПАСИБО ЗА ПРОСМОТР</div>
  </div>
</section>
<section class="price" id="price" data-page="8">
  <div class="head head_price">
    <div class="head__title-block">
      <h2 class="head__title head__title_price">СТОИМОСТЬ
        <div class="head__title head__title_smallprice">участия 37 500 </div>
      </h2>
    </div>
    <div class="head__description head__description_price">
      <div class="head__text head__text_price">все включено</div>
    </div>
  </div>
  <div class="price__form-block">
    <h3 class="price__title">Мы оплатим часть билета</h3>
    <h3 class="price__title">семьям с детьми</h3>
    <h3 class="price__title">и учителям</h3>
    <form class="price__form" id="price__form">
      <div class="price__form-row">
        <div class="price__quantity">
          <div class="price__quantity-row">
            <div class="price__quantity-title">Взрослые</div>
            <button class="price__quantity-btn js-quantity-minus" type="button">-</button>
            <input class="price__quantity-number" type="text" placeholder="0" name="adult_count" id="adult_count">
            <button class="price__quantity-btn js-quantity-plus" type="button">+</button>
          </div>
          <div class="price__quantity-row">
            <div class="price__quantity-title">Дети до 3 лет</div>
            <button class="price__quantity-btn js-quantity-minus" type="button">-</button>
            <input class="price__quantity-number" type="text" placeholder="0" name="kids_3_count" id="kids_3_count">
            <button class="price__quantity-btn js-quantity-plus" type="button">+</button>
          </div>
          <div class="price__quantity-row">
            <div class="price__quantity-title">Дети до 11 лет</div>
            <button class="price__quantity-btn js-quantity-minus" type="button">-</button>
            <input class="price__quantity-number" type="text" placeholder="0" name="kids_11_count" id="kids_11_count">
            <button class="price__quantity-btn js-quantity-plus" type="button">+</button>
          </div>
          <div class="price__quantity-row">
            <div class="price__quantity-title">Дети до 18 лет</div>
            <button class="price__quantity-btn js-quantity-minus" type="button">-</button>
            <input class="price__quantity-number" type="text" placeholder="0" name="kids_18_count" id="kids_18_count">
            <button class="price__quantity-btn js-quantity-plus" type="button">+</button>
          </div>
          <div class="price__quantity-row">
            <div class="price__quantity-title">Учителя</div>
            <button class="price__quantity-btn js-quantity-minus" type="button">-</button>
            <input class="price__quantity-number" type="text" placeholder="0" name="teachers_count" id="teachers_count">
            <button class="price__quantity-btn js-quantity-plus" type="button">+</button>
          </div>
        </div>
        <div class="price__checkboxes">
          <div class="price__checkboxes-row price__checkboxes-row_first">
            <label class="price__checkboxes-label">постоянный участник</label>
            <input class="price__checkboxes-checkbox" type="checkbox" name="first_not" value="Постоянно">
          </div>
          <div class="price__checkboxes-row">
            <label class="price__checkboxes-label">впервые</label>
            <input class="price__checkboxes-checkbox" type="checkbox" name="first_not" value="Впервые">
          </div>
        </div>
        <div class="price__inputs">
          <div class="price__inputs-row">
            <label class="price__input-text">Фамилия</label>
            <input class="price__input-input" type="text" required name="price_form_lastname" id="price_form_lastname">
          </div>
          <div class="price__inputs-row">
            <label class="price__input-text">Имя</label>
            <input class="price__input-input" type="text" required name="price_form_name" id="price_form_name">
          </div>
          <div class="price__inputs-row">
            <label class="price__input-text">e-mail</label>
            <input class="price__input-input" type="text" required name="price_form_mail" id="price_form_mail">
          </div>
          <div class="price__inputs-row">
            <label class="price__input-text">телефон</label>
            <input class="price__input-input" type="text" required name="price_form_tel" id="price_form_tel">
          </div>
          <div class="price__inputs-row">
            <label class="price__input-text">промокод</label>
            <input class="price__input-input" type="text" name="price_form_promocode" id="price_form_promocode">
          </div>
        </div>
      </div>
      <!-- <button class="price__btn">узнать скидку</button> -->
      <input type="submit" value="узнать скидку" class="price__btn">
      <label class="price__confid"><span class="price__confid-text">Нажимая кнопку, я даю свое согласие на обработку моих персональных данных в соответствии с </span><a class="price__confid-link" href="https://www.vospitai.com/privacy_policy_phuz_2018.pdf" target="_blank">политикой конфиденциальности</a><span class="price__confid-text"> и </span><a class="price__confid-link" href="https://www.vospitai.com/public_offer_phuz_2018.pdf" target="_blank">пользовательским соглашением.</a></label>
    </form>
  </div>
</section>
<section class="for-whom" id="for-whom" data-page="2">
  <div class="container">
    <h2 class="for-whom__title">для кого
      <div class="for-whom__title-small">фестиваль</div>
    </h2>
    <div class="for-whom__video-block">
      <ul class="for-whom__video-list">

        <?php
        $args = array(
          'posts_per_page' => 3,
          'order' => 'ASC',
          'post_type' => array( 'for_whom' ),
        );
        $posts = new WP_Query( $args );
        while( $posts->have_posts() ) :
          $posts->the_post();
          ?>

          <li class="for-whom__video-item">
            <div class="for-whom__video-title"><?php the_title(); ?></div>
            <div class="for-whom__video" style="background-image: url(<?php echo get_post_meta( get_the_id(), 'for_whom_video_bgr', true); ?>);"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="<?php echo get_post_meta( get_the_id(), 'for_whom_video_id', true); ?>"></a></div>
            <div class="for-whom__video-content"></div>
            <div class="for-whom__video-text"><?php the_content(); ?></div>
          </li>
          <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </ul>
    </div>
  </div>
</section>




<section class="itwas" id="itwas" data-page="3">
  <div class="container">
    <div class="itwas__row-up">
      <div class="itwas__video-big"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="UQL7xyovI_8"></a></div>
      <div class="itwas__content">
        <h2 class="itwas__title">как это
          <div class="itwas__title-subtitle">было</div>
        </h2>
        <p class="itwas__text">Вот уже 5 лет мы объединяем родителей, детей и учителей под эгидой фестиваля гуманной педагогики! Тысячам родителей по всему миру удалось увидеть,  что Воспитание может быть легким и гармоничными. И что секрет долгих, добрых и красивых отношений между родителями и детьми    открыт в идеях гуманной педагогики.  </p>
        <p class="itwas__text">Мы рады приветствовать постоянных участников и новых гостей.</p>
        <p class="itwas__text">Ждём с предвкушением встречи на новой площадке фестиваля в прекрасном черноморском Grand Hotel Kempinski  в городе Геленджике.</p>
      </div>
    </div>
    <div class="itwas__row-down">
      <div class="itwas__video"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="QF0pgtTKpoU"></a></div>
      <div class="itwas__video"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="I-ab3POMZRc"></a></div>
      <div class="itwas__video"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="Bdg94vtHXU0"></a></div>
    </div>
  </div>
</section>
<section class="where-will" id="where-will" data-page="4">
  <div class="head head_where-will">
    <div class="head__title-block">
      <h2 class="head__title">ГДЕ ПРОЙДЕТ
        <div class="head__title head__title_small">ФЕСТИВАЛЬ </div>
      </h2>
    </div>
  </div>
  <div class="where-will__block">
    <div class="where-will__img-block">
      <div class="where-will__bigimg"><img class="where-will__slide-bigimg" alt="" src="<?php echo get_template_directory_uri(); ?>/img/where-will/slide-1.png">
        <div class="where-will__arrow-left" id="left"></div>
        <div class="where-will__arrow-right" id="right"></div>
      </div>
      <div class="where-will__slider">
        <div class="where-will__slide"><img class="where-will__img-slide" alt="" src="<?php echo get_template_directory_uri(); ?>/img/where-will/slide-1.png">
          <div class="where-will__comment-slide">
            <h3 class="where-will__slide-name">Kempinski Grand Hotel</h3><span>Курортный отель премиум-класса расположен на первой линии побережья Чёрного моря. К услугам Гостей доступны:</span>
            <ul class="where-will__list-slide">
              <li>• 379 номеров, включая 44 люкса</li>
              <li>• 7 бунгало</li>
              <li>• 2 ресторана и 4 бара</li>
              <li>• Конгресс-центр</li>
              <li>• Спа-центр «Кемпински Спа», Фито-бар</li>
              <li>• Фитнес – центр и тренажерный зал</li>
              <li>• Открытые и крытый бассейны</li>
              <li>• Спортивная площадка</li>
              <li>• Теннисные корты</li>
              <li>• Благоустроенная территория</li>
              <li>• Парковка</li>
            </ul>
          </div>
        </div>
        <div class="where-will__slide"><img class="where-will__img-slide" alt="" src="<?php echo get_template_directory_uri(); ?>/img/where-will/slide-2.png">
          <div class="where-will__comment-slide">
            <h3 class="where-will__slide-name">Kempinski Grand Hotel</h3><span>Комфортабельные номера отеля премиум класса примут гостей фестиваля. Осенние каникулы наполненные романтикой теплого семейного отдыха.</span>
          </div>
        </div>
        <div class="where-will__slide"><img class="where-will__img-slide" alt="" src="<?php echo get_template_directory_uri(); ?>/img/where-will/slide-3.png">
          <div class="where-will__comment-slide">
            <h3 class="where-will__slide-name">Kempinski Grand Hotel</h3><span>Главная площадка Конгресс-центра предназначен для масштабных конгрессов, деловых сессий, концертов, кинопоказов. Именно здесь пройдет главное событие фестиваля, где Вас ждет встреча с ведущими педагогами мира и рядом ярких гостей имена которых пока остаются в секрете.</span>
          </div>
        </div>
        <div class="where-will__slide"><img class="where-will__img-slide" alt="" src="<?php echo get_template_directory_uri(); ?>/img/where-will/slide-4.png">
          <div class="where-will__comment-slide">
            <h3 class="where-will__slide-name">Kempinski Grand Hotel</h3><span>Живописная бухта, окаймленная знаменитой набережной, восхитительные морские и горные пейзажи, зеленые склоны, покрытые рощами пицундской сосны, исключительная экология и современное благоустройство курорта, широкая палитра развлечений в сочетании с превосходным сервисом способствуют прекрасному отдыху круглый год год. Отдых в Геленджике – это прекрасная возможность насладиться живописными пейзажами Юга России и посетить множество уникальных мест.</span>
          </div>
        </div>
      </div>
    </div>
    <div class="where-will__content-block">
      <div class="where-will__content">
        <div class="where-will__comment"></div>
      </div>
    </div>
  </div>
</section>
<section class="schedule" id="schedule" data-page="5">
  <div class="container container_schedule">
    <div class="schedule__days">
      <ul class="schedule__days-list">
        <li class="schedule__days-item">
          <button class="schedule__days-day schedule__days-day_active" type="button">день 1</button>
        </li>
        <li class="schedule__days-item">
          <button class="schedule__days-day" type="button">день 2</button>
        </li>
        <li class="schedule__days-item">
          <button class="schedule__days-day" type="button">день 3</button>
        </li>
        <li class="schedule__days-item">
          <button class="schedule__days-day" type="button">день 4</button>
        </li>
        <li class="schedule__days-item">
          <button class="schedule__days-day" type="button">день 5</button>
        </li>
        <li class="schedule__days-item">
          <button class="schedule__days-day" type="button">день 6</button>
        </li>
      </ul>
    </div>
    <div class="schedule__content">
      <div class="schedule__content-item schedule__content-item_active">
        <div class="schedule__content-titles">
          <h2 class="schedule__title">день первый</h2>
          <h2 class="schedule__title">2 ноября</h2>
        </div>
        <ul class="schedule__list">
          <li class="schedule__item">
            <div class="schedule__time-item">10:00</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Встреча гостей.</h3>
              <div class="schedule__activity-time">8:00 - 15:40
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Регистрация участников. Расселение по номерам. Знакомства.</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">14:15</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Обед.</h3>
              <div class="schedule__activity-time">14:15 - 15:45
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">15:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Встреча гостей.</h3>
              <div class="schedule__activity-time">15:45 - 17:45
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Регистрация участников. Расселение по номерам. Знакомства.</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">17:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Ужин.</h3>
              <div class="schedule__activity-time">17:45 - 19:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">19:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Открытие</h3>
              <div class="schedule__activity-time">19:30 - 21:00
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Торжественное открытие фестиваля.</div>
            </div>
          </li>
        </ul>
      </div>
      <div class="schedule__content-item">
        <div class="schedule__content-titles">
          <h2 class="schedule__title">день второй</h2>
          <h2 class="schedule__title">3 ноября</h2>
        </div>
        <ul class="schedule__list">
          <li class="schedule__item">
            <div class="schedule__time-item">5:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Марафон для пап.</h3>
              <div class="schedule__activity-time">5:30 - 6:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Тренинг раскрытия мужского потенциала.</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">6:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Оздорови&shy;тельная программа.</h3>
              <div class="schedule__activity-time">6:30 - 7:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Айкидо, семейная веселая зарядка</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">7:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Утренний настрой.</h3>
              <div class="schedule__activity-time">7:45 - 8:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">8:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Завтрак.</h3>
              <div class="schedule__activity-time">8:45 - 10:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">10:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Образова&shy;тельная программа. </h3>
              <div class="schedule__activity-time">10:30 - 14:00
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">14:15</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Обед. </h3>
              <div class="schedule__activity-time">14:15 - 15:45
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">16:00</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Практикум.</h3>
              <div class="schedule__activity-time">16:00 - 17:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Мастер-классы, совместные развивающие активности для взрослых и детей</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">17:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Ужин.</h3>
              <div class="schedule__activity-time">17:45 - 19:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">19:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Культурная программа</h3>
              <div class="schedule__activity-time">19:30 - 21:00
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Культурная программа</div>
            </div>
          </li>
        </ul>
      </div>
      <div class="schedule__content-item">
        <div class="schedule__content-titles">
          <h2 class="schedule__title">день третий</h2>
          <h2 class="schedule__title">4 ноября</h2>
        </div>
        <ul class="schedule__list">
          <li class="schedule__item">
            <div class="schedule__time-item">5:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Марафон для пап.</h3>
              <div class="schedule__activity-time">5:30 - 6:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Тренинг раскрытия мужского потенциала.</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">6:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Оздорови&shy;тельная программа.</h3>
              <div class="schedule__activity-time">6:30 - 7:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Айкидо, семейная веселая зарядка</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">7:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Утренний настрой.</h3>
              <div class="schedule__activity-time">7:45 - 8:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Утренний настрой.</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">8:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Завтрак.</h3>
              <div class="schedule__activity-time">8:45 - 10:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">10:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Образова&shy;тельная программа. </h3>
              <div class="schedule__activity-time">10:30 - 14:00
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">14:15</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Обед. </h3>
              <div class="schedule__activity-time">14:15 - 15:45
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">16:00</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Практикум.</h3>
              <div class="schedule__activity-time">16:00 - 17:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Мастер-классы, совместные развивающие активности для взрослых и детей</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">17:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Ужин.</h3>
              <div class="schedule__activity-time">17:45 - 19:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">19:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Культурная программа</h3>
              <div class="schedule__activity-time">19:30 - 21:00
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
        </ul>
      </div>
      <div class="schedule__content-item">
        <div class="schedule__content-titles">
          <h2 class="schedule__title">день четвёртый</h2>
          <h2 class="schedule__title">5 ноября</h2>
        </div>
        <ul class="schedule__list">
          <li class="schedule__item">
            <div class="schedule__time-item">5:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Марафон для пап.</h3>
              <div class="schedule__activity-time">5:30 - 6:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Тренинг раскрытия мужского потенциала.</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">6:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Оздорови&shy;тельная программа.</h3>
              <div class="schedule__activity-time">6:30 - 7:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Айкидо, семейная веселая зарядка</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">7:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Утренний настрой.</h3>
              <div class="schedule__activity-time">7:45 - 8:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">8:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Завтрак.</h3>
              <div class="schedule__activity-time">8:45 - 10:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">10:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Образова&shy;тельная программа. </h3>
              <div class="schedule__activity-time">10:30 - 14:00
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">14:15</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Обед. </h3>
              <div class="schedule__activity-time">14:15 - 15:45
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">16:00</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Практикум.</h3>
              <div class="schedule__activity-time">16:00 - 17:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Мастер-классы, совместные развивающие активности для взрослых и детей</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">17:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Ужин.</h3>
              <div class="schedule__activity-time">17:45 - 19:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">19:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Культурная программа</h3>
              <div class="schedule__activity-time">19:30 - 21:00
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
        </ul>
      </div>
      <div class="schedule__content-item">
        <div class="schedule__content-titles">
          <h2 class="schedule__title">день пятый</h2>
          <h2 class="schedule__title">6 ноября</h2>
        </div>
        <ul class="schedule__list">
          <li class="schedule__item">
            <div class="schedule__time-item">5:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Марафон для пап.</h3>
              <div class="schedule__activity-time">5:30 - 6:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Тренинг раскрытия мужского потенциала.</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">6:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Оздорови&shy;тельная программа.</h3>
              <div class="schedule__activity-time">6:30 - 7:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Айкидо, семейная веселая зарядка</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">7:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Утренний настрой.</h3>
              <div class="schedule__activity-time">7:45 - 8:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">8:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Завтрак.</h3>
              <div class="schedule__activity-time">8:45 - 10:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">10:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Образова&shy;тельная программа. </h3>
              <div class="schedule__activity-time">10:30 - 14:00
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">14:15</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Обед. </h3>
              <div class="schedule__activity-time">14:15 - 15:45
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">16:00</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Практикум.</h3>
              <div class="schedule__activity-time">16:00 - 17:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Мастер-классы, совместные развивающие активности для взрослых и детей</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">17:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Ужин.</h3>
              <div class="schedule__activity-time">17:45 - 19:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">19:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Культурная программа</h3>
              <div class="schedule__activity-time">19:30 - 21:00
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Культурная программа</div>
            </div>
          </li>
        </ul>
      </div>
      <div class="schedule__content-item">
        <div class="schedule__content-titles">
          <h2 class="schedule__title">день шестой</h2>
          <h2 class="schedule__title">7 ноября</h2>
        </div>
        <ul class="schedule__list">
          <li class="schedule__item">
            <div class="schedule__time-item">5:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Марафон для пап.</h3>
              <div class="schedule__activity-time">5:30 - 6:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Тренинг раскрытия мужского потенциала.</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">6:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Оздорови&shy;тельная программа.</h3>
              <div class="schedule__activity-time">6:30 - 7:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types">Айкидо, семейная веселая зарядка</div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">7:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Утренний настрой.</h3>
              <div class="schedule__activity-time">7:45 - 8:30
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">8:45</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">Завтрак.</h3>
              <div class="schedule__activity-time">8:45 - 10:15
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
          <li class="schedule__item">
            <div class="schedule__time-item">10:30</div>
            <div class="schedule__activity-item">
              <h3 class="schedule__activity-title">ВЫЕЗД</h3>
              <div class="schedule__activity-time">10:30 - 14:00
                <svg class="shedule__icon-clock">
                  <use xlink:href="img/icons/sprite.svg#clock"></use>
                </svg>
              </div>
              <div class="schedule__activity-types"></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <button class="price__btn schedule_btn_offer js-schedule-btn" type="button">Получить полную программу</button>
</section>

<section class="challenge" id="skazat_glavnoe" data-page="3">
  <div class="container">
    <div class="itwas__row-up">
      <div class="itwas__video-big"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="OgQq4N5efTQ"></a></div>
      <div class="itwas__content">
        <h2 class="itwas__title itwas__title--blue">СКАЗАТЬ ГЛАВНОЕ
        </h2>
        <p class="itwas__text">Ежедневно тысячи родителей, в погоне за тем, чтобы дать своему ребенку самое лучшее (образование, одежду, гаджеты) забывают о ГЛАВНОМ… </p>
        <p class="itwas__text">Просим вас поддержать наш challenge! Запишите короткое видео-признание своему ребенку и выложите в соц. сеть с тегом</p>
        <p class="itwas__text"><b>#СКАЗАТЬГЛАВНОЕ</b></p>
        <p class="itwas__text">Давайте скажем своим детям самые важные слова…</p>
        <p class="itwas__text">Помните, дети как зерна – то, что вы сеете в них в детстве, то и прорастает.</p>
      </div>
    </div>
    <div class="itwas__row-down challenge__list">
      <div class="itwas__video itwas__video_1"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="_XpZJmZPo84">
      </a><span>Сергей, 44 года</span></div>
      <div class="itwas__video itwas__video_2"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="1a8W-0nhbKg">
      </a><span>Карина, 47 лет</span></div>
      <div class="itwas__video itwas__video_3"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="ySMqFUF-rvg">
      </a><span>Артем, 38 лет</span></div>
      <div class="itwas__video itwas__video_4"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="8eH2Mms5ffs">
      </a><span>Промо проекта</span></div>
      <div class="itwas__video itwas__video_5"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="R69GVz10g8k">
      </a><span>Алексей</span></div>
      <div class="itwas__video itwas__video_6"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="QXyVQ48xCPA">
      </a><span>Анастасия</span></div>
      <div class="itwas__video itwas__video_7"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="HEfkey6uf80">
      </a><span>Алексей</span></div>
      <div class="itwas__video itwas__video_8"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="mA0LvlQuWds">
      </a><span>Артем</span></div>
      <div class="itwas__video itwas__video_9"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="0zwxsDMrtRs">
      </a><span>Елена</span></div>
      <div class="itwas__video itwas__video_10"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="YgYv5ZfCWQg">
      </a><span>Евгений</span></div>
      <div class="itwas__video itwas__video_11"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="T_4C-u5g3QM">
      </a><span>Диана</span></div>
      <div class="itwas__video itwas__video_12"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="X6AY-bsObT4">
      </a><span>Дина</span></div>
      <div class="itwas__video itwas__video_13"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="-PLM-kDZIFQ">
      </a><span>Ирина</span></div>
      <div class="itwas__video itwas__video_14"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="B8yT-RurSUs">
      </a><span>Мария</span></div>
      <div class="itwas__video itwas__video_15"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="nQjF8Nejg2c">
      </a><span>Наталья</span></div>
      <div class="itwas__video itwas__video_16"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="VdnJdG8aQjQ">
      </a><span>Ольга</span></div>
    </div>
  </div>
</section>


<section class="gallery" id="gallery" data-page="6">
  <div class="head">
    <div class="head__title-block">
      <h2 class="head__title">галерея
        <div class="head__title head__title_small">фестиваля </div>
      </h2>
    </div>
    <div class="head__description">
      <div class="head__description-block head__description-block_up">
        <div class="head__number">1000  </div>
        <div class="head__text">участников</div>
      </div>
      <div class="head__description-block">
        <div class="head__number">20</div>
        <div class="head__text">стран мира</div>
      </div>
    </div>
  </div>
  <div class="container container_gallery">
    <ul class="gallery__list">
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/arqpMUahr0.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/C0GO27PPqgM.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/EpQslXBg_5Y.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/fZ0bPUTv6Q0.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/FzaGLHNQ8F8.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/GwnjfJODt94.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/ieSEtU1EWlc.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/iJQZtqunMBk.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/joIoJdvXPJE.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/KnGywM44EMM.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/o_cz_ete_P0.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/pJE7Rkcfgyk.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/uQKKfssELKA.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/vIDvFMqwWhQ.jpg"></li>
      <li class="gallery__item"><img class="gallery__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/gallery/xryIHary73U.jpg"></li>
    </ul>
  </div>
</section>
<section class="reviews" id="reviews" data-page="7">
  <div class="head head_reviews">
    <div class="head__title-block">
      <h2 class="head__title">отзывы
        <div class="head__title head__title_small">участников </div>
      </h2>
    </div>
    <div class="head__description">
      <div class="head__description-block head__description-block_up">
        <div class="head__number">40  </div>
        <div class="head__text">мастер-классов</div>
      </div>
      <div class="head__description-block">
        <div class="head__number">20</div>
        <div class="head__text">лекций</div>
      </div>
    </div>
  </div>
  <div class="reviews__block">
    <div class="reviews__img-block">
      <div class="rewiews__img"><img class="rewiews__big-img" alt="большой слайд" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_3.jpeg">
        <div class="rewiews__arrow-left"></div>
        <div class="rewiews__arrow-right"></div>
      </div>
      <div class="reviews__slider">
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_3.jpeg">
          <h3 class="reviews__slide-name">Андрей и Екатерина Векшины</h3>
          <div class="reviews__slide-position">г. Горячий Ключ</div>
          <div class="reviews__slide-comment">Фестиваль гуманной педагогики отличается от всего, что мы видели и где побывали раньше. За 5 дней мы наполнились детским смехом, юношеской рассудительностью и родительской любовью. Удивительно было наблюдать как размышляют и действуют ребята в непринужденной атмосфере доверия, которая царит на фестивале. Пожалуй, самым любимым действием для нас были открытые встречи, на которых дети со сцены рассказывали взрослым о своих переживаниях и о том как они видят жизнь. Огромная благодарность учителям и педагогам, которые делятся своей мудростью и любовью к детям на протяжении фестиваля. Мы зарядились на весь год светлыми эмоциями и вдохновением. С нетерпением ждём новой встречи с уже такими родными участниками и организаторами фестиваля.</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_18.jpg">
          <h3 class="reviews__slide-name">Даша Берюк</h3>
          <div class="reviews__slide-position">г. Минск</div>
          <div class="reviews__slide-comment">Фестиваль многому научил меня! Помог взглянуть на привычные вещи новыми глазами. Рассказывая о воспитании детей, лекторы помогли мне лучше понять себя и то, какими красивыми и созидательными могут быть отношения с детьми и также со взрослыми. Лекторы фестиваля очень щедрые люди. И есть ощущение, что просто находясь рядом с ними, становишься лучше. Наполнение фестиваля и его атмосфера - это хорошая почва для раскрытия, познания, роста гармоничной личности. Желаю всем поучаствовать в этом Празднике!</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_5.jpeg">
          <h3 class="reviews__slide-name">Настя Краславская</h3>
          <div class="reviews__slide-position">г. Ростов-на-Дону</div>
          <div class="reviews__slide-comment">На осенних каникулах я была на фестивале в Подмосковье. Он был просто необыкновенный! Большая благодарность всем организаторам и почётным гостям!  Это четвертый фестиваль гуманной педагогики, который носит название "Фейерверк уроков жизни".И оно полностью соответствует фестивалю! У меня здесь было много важных реализаций.  На фестивале  были замечательные  учителя - Шалва Амонашвили, Паата Амонашвили, Марина Таргакова, Олег Гадецкий, Сергей Аваков со своей семьёй, Алексей Бабаянц, Игорь Киршин, Рами Блект, мать более 1050 детей - матушка Синдутай и другие невероятные  личности. И самое удивительное - то, что каждый  может с ними открыто общаться! Здесь я познакомилась с детским, молодёжным объединением ,,Молодая гвардия". Они очень искренние, радостные и классные ребята! Когда видишь их - на лице появляется улыбка, появляется радость, которой хочется делиться со всеми. Дорогие Гатам, Айдар, Максим, Клим, Лера, Юля, Лиза, Ангелина, Аня, Мари спасибо вам большое! Теперь у меня есть ещё большее вдохновение и радость каждому дню.</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_21.png">
          <h3 class="reviews__slide-name">Артем Мельник</h3>
          <div class="reviews__slide-position"> </div>
          <div class="reviews__slide-comment">Фест был веселый, хотя я ни с кем не общался почти, классно проводили время вместе, были интересные лекции. Получил много полезного, как на лекциях, так и в свободное время. Особенно хочется отметить:Сабину, Данила, Артемку, Бориса. Спасибо за эти дни!!! Советую всем приехать на этот фест еще раз в след. году, думаю будет еще круче... Мб приглашу друзей!! Всем спасибо!!</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_1.jpeg">
          <h3 class="reviews__slide-name">Наталья и Константин Валеевы</h3>
          <div class="reviews__slide-position">г. Кременная</div>
          <div class="reviews__slide-comment">Мы с семьей были на фестивале несколько раз, и это очень сильно повлияло на нашу жизнь! Я чувствовала, что это именно то место и те процессы, в которых я хотела бы находиться. И так много позитивной, творческой энергии! Знаний, поражающих своей глубиной! Добрых лиц добрых людей! Своих внутренних открытий! И ДЕТИ, которые счастливы!!! Это чудесно!!! Я обязательно постараюсь приехать и в этом году на фестиваль.</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_4.jpeg">
          <h3 class="reviews__slide-name">Владимир и Наталья Морозовы</h3>
          <div class="reviews__slide-position">г. Минск</div>
          <div class="reviews__slide-comment">Фестиваль гуманной педагогики - это удивительное место, наполненное знаниями,  радостью и друзьями. Уже на протяжении нескольких лет мы приезжаем на фестиваль и чувствуем, что наши сердца меняются. Соприкасаясь с Учителями, мастерами и лекторами фестиваля мы получаем большой практический опыт, который сразу влияет на нас. В прошлом году фестиваль помог нам остановиться и увидеть себя, как родителей со стороны. А также по-настоящему увидеть нашего сына. Однажды вечером, после лекции, уложив сына спать, мы лежали рядом с ним, смотрели на него сладкого, спящего, и задали себе вопросы: «А что он скажет о своем детстве, когда вырастет? Скажет ли он, что был счастлив? Достаточно ли ему было нашего внимания или он не видел нас, пока мы были заняты «очень важными» делами?». И благодаря всем Учителям на фестивале, мы поняли, что нельзя разделять «нас или наше дело» и «ребенка», а быть вместе в этом удивительном процессе жизни. И нужно обязательно включать в этот процесс ребенка, наполняя жизнь семьи радостью, простыми смешными моментами, сокровенными разговорами, которые запомнит сердце ребенка, семейными прогулками к реке, добрыми подарками, встречей гостей, неожиданными сладостями, совместной учебой, а также верой в Добро и Свет. Спасибо Фестивалю за это глубокое осознание, которое делает нашу семью счастливее.</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_20.jpg">
          <h3 class="reviews__slide-name">Виталий Лоренцевич и Ирина Александровна Аваковы</h3>
          <div class="reviews__slide-position"> </div>
          <div class="reviews__slide-comment">Все фестивали, посвященные гуманной педагогике, принципиальным проводником которых является Шалва Александрович Амонашвили, представляют собой удивительный сказочный мир. Эти события собирают не только педагогов со всей России и многих других стран, но и людей, неравнодушных к современному состоянию педагогики. В выступлениях самого Ш. А. Амонашвили, Марины Таргаковой, Марины Шишовой и многих других педагогов-экспертов отражены потенциальные возможности высококачественного обучения и воспитания подрастающего поколения, основанного на гуманно-личностном подходе. Мы с супругой являемся педагогами-пенсионерами, проработали в школе более 30 лет. С большим удовольствием мы посещаем этот фестиваль и всегда обогащаемся новыми знания, новым опытом и большим вдохновением, способствующим воспитанию наших внуков. Мы ратуем за то, чтобы такие программы стали постоянно действующим фактором педагогической жизни нашей страны. </div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_22.png">
          <h3 class="reviews__slide-name">Александр Усанин</h3>
          <div class="reviews__slide-position">г. Москва</div>
          <div class="reviews__slide-comment">В детстве человек получает первые и наиболее важные представления о целях и ценностях жизни, о отношениях между людьми, что формирует его внутренний мир, его личные смыслы и то, как он будет относиться к другим, какой будет вся его жизнь. Счастливы те дети, которым посчастливилось увидеть примеры возвышенной жизни и уважительное отношение к себе как индивидуальной, пусть даже пока ещё маленькой, но всё же уникальной, потенциально способной изменить к лучшему весь этот мир, личности. То, каким  будет будущее этой планеты, наше ближайшее будущее - зависит от того, кто, как, на каких ориентирах и ценностях воспитывает наших детей. Поэтому педагог - тот, кто программирует будущее этой планеты. Поэтому этот фестиваль очень важен: на нём те, кто хотят повлиять на жизни детей делятся важным и уникальным педагогическим опытом: как это очень тактично и бережно делать. Такой Фестиваль - это забота о людях, которые помогают детям, как нежному прекрасному бутону раскрыться в лучах их любви, чтобы цвести и принести сладкий плод в виде счастливой и чистой возвышенной жизни.</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_6.jpeg">
          <h3 class="reviews__slide-name">Андрей и Виктория Подкользины</h3>
          <div class="reviews__slide-position">г. Москва</div>
          <div class="reviews__slide-comment">Так здорово, что есть Фестиваль, который знакомит с увлекательным и разнообразным миром педагогики! Время Фестиваля - это время, которое зажигает сердца и вдохновляет на новые свершения каждого, попавшего в атмосферу синтеза любви и знаний!</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_8.jpg">
          <h3 class="reviews__slide-name">Максим Орел</h3>
          <div class="reviews__slide-position">Германия</div>
          <div class="reviews__slide-comment">Фестиваль гуманной педагогики - это опыт, который невозможно передать словами, каждый человек должен сам прочувствовать атмосферу Города Солнца. Город Солнца - это не выдумка, это не утопическое представление, это совместное настроение, в котором каждый может принять участие. Опыт фестиваля удивителен тем, что находясь в этом благостном настроении, находясь в общении с выдающимися педагогами современности, начинают открываться сердца. Меняются взгляды на людей, на родных, близких, меняется взгляд на мир. Для меня, как обычного подростка, по новому открылись родители (возможно, они не такие ужасные, как кажутся в таком возрасте). Фестиваль стал для меня возможностью познакомиться с единомышленниками, с ровесниками, почувствовать настоящую дружбу, возможностью провести время с семьей, возможностью пообщаться с учителями, ведь каждая проведенная с ними секунда на вес золота, и запомниться на всю жизнь.</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_7.jpeg">
          <h3 class="reviews__slide-name">Валерия</h3>
          <div class="reviews__slide-position">г Омск</div>
          <div class="reviews__slide-comment">Для меня, как для подростка, фестиваль стал незабываемым путешествием в настоящий Город Солнца, где я повстречала друзей, даже поучаствовала в организации некоторых мероприятий вместе с другими ребятами, а главное - встретилась с мудрыми, счастливыми взрослыми. Только ради того, чтобы увидеть Шалву Александровича, встретить его любящий и искрящийся светом взгляд,  познакомиться со многими педагогами и подружиться с ними, стоит ехать на фестиваль! Стоит ехать на фестиваль ради того, чтобы научиться никогда не стареть и, как ребёнок, верить в чудеса, удивляясь каждому мгновению жизни!</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_9.jpeg">
          <h3 class="reviews__slide-name">Ангелина Денисова</h3>
          <div class="reviews__slide-position">г. Алматы</div>
          <div class="reviews__slide-comment">Фестиваль - удивительно путешествие в Город Солнца. Я окунулась в небывалую атмосферу счастья. Фестиваль - это уникальнейшая возможность встретиться с настоящими Учителями. Они совсем не скучные, а наоборот. Невозможно было расстаться с ними без слез. Но я увезла фестиваль в своём сердце, где он надежно поселился. Фестиваль - это просто страна детства, где даже я, не такой уж и взрослый человек, научилась заново изумляться, удивляться, поражаться! В общем, друзья, не теряйте ни секунды, спешите на фестиваль!!</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_16.jpeg">
          <h3 class="reviews__slide-name">Лиза Денисова</h3>
          <div class="reviews__slide-position">г. Алматы</div>
          <div class="reviews__slide-comment">Фестиваль гуманной педагогики стал для меня очень особенным событием. Абсолютно каждый день, проведенный там, даёт возможность научиться проживать день, как одну жизнь. Атмосфера фестиваля пропитана любовью и желанием людей помочь, будто бы все, попав туда, становятся одной семьей, где каждый житель города Солнца важен и нужен. Король и Министры города Солнца - это учителя, которые помогают открывать новые и прекрасные сундуки знаний гуманной педагогики, они помогают нам самим измениться в лучшую сторону и узнать что-то новое. Попав туда однажды, не захочется покидать этот изумительный город, где каждый день наполнен любовью, доверием и искренностью людей.</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_2.jpeg">
          <h3 class="reviews__slide-name">Вероника Гаркуша</h3>
          <div class="reviews__slide-position">Украина</div>
          <div class="reviews__slide-comment">Я была на фестивале несколько раз, и всегда попадала в чудесную атмосферу сотрудничества взрослых с детьми. Получила полезные знания и познакомилась с замечательными людьми, во время каждого фестиваля открывая для себя что-то новое!!!</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_17.jpeg">
          <h3 class="reviews__slide-name">Милана</h3>
          <div class="reviews__slide-position">г. Алматы</div>
          <div class="reviews__slide-comment">Была на фестивале с семьёй в 2015 году. Первое ощущение, когда приехали на фестиваль, как-будто попали в добрую сказку). Нас очень радушно встречали, для детей была организована специальная зона, где они могли играть пока родители проходили процедуру регистрации, а ещё детям дарили бумажных зайчиков с конфеткой внутри, от чего те были очень счастливы! Больше всего на фестивале запомнилась атмосфера семьи и внимательности к каждому, соприкосновение с учителями, которые щедро делились своими знаниями и проводили потрясающие лекции и практические занятия. Практические занятия это вообще отдельная история! В реальном формате видишь как рождается гуманная педагогика и сам на время становишься ребенком! Особая благодарность детскому департаменту за организацию очень классной программы! Сын с удовольствием ходил на нее, пока мы были на лекции. Отличный фестиваль, где есть возможность познакомиться с единомышленниками, пообщаться с учителями, напитаться знаниями и вдохновением!</div>
        </div>
        <div class="reviews__slide"><img class="reviews__slide-img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/rewiews/review_19.jpg">
          <h3 class="reviews__slide-name">Семья Саламатовых, Анжела и Александр</h3>
          <div class="reviews__slide-position">г. Москва</div>
          <div class="reviews__slide-comment">Фестиваль гуманной педагогики — это не просто фестиваль, не просто место… Это атмосфера, это увлеченные люди, это поток любви, тепла, дружественности, поиска смыслов и любви в своем сердце! Одним словом, Фейерверк! Этот удивительное пространство, объединяющее наставников, педагогов, родителей и конечно детей! Где дети - активные участники образовательного процесса для взрослых. Здесь сеются зерна радости познания другого, понимания между взрослыми и детьми, способности строить настоящие отношения, видеть в другом личность или явление! Это целый мир, преображающий сердца участников через общение с великими мастерами, учителями, с другими участниками фестиваля и конечно детьми! Здесь все создано для сотворчества, преображения, раскрытия сердца и получения ценных знаний! Мы желаем каждому оказаться на этом чудотворном семейном фестивале! </div>
        </div>
      </div>
    </div>
    <div class="reviews__content-block">
      <div class="reviews__content">
        <h3 class="reviews__name"> </h3>
        <div class="reviews__position"> </div>
        <div class="reviews__comment"> </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>