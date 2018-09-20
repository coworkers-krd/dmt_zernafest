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
    <label class="promo-form__label promo-form__label_checkbox"><span class="promo-form-text">Нажимая кнопку, я даю свое согласие на обработку моих персональных данных в соответствии с <a class="promo-form-link" href="http://zernafest.ru/privacy_policy.pdf" target="_blank">политикой конфиденциальности и </a><a class="promo-form-link" href="http://zernafest.ru/public_offer.pdf" target="_blank">пользовательским соглашением.</a></span></label>
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
    <p><?= get_option('mission_text');?></p>
    
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
    <?php
    $args = array(
      'posts_per_page' => 99,
      'order' => 'ASC',
      'post_type' => array( 'partner' ),
    );
    $posts = new WP_Query( $args );
    while( $posts->have_posts() ) :
      $posts->the_post();
      ?>

      <li class="friends__item">
        <img class="friends__logo" alt="иконка спонсора" src="<?php the_post_thumbnail_url(); ?>">
      </li>

      <?php
    endwhile;
    wp_reset_postdata();
    ?>
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
      <label class="price__confid"><span class="price__confid-text">Нажимая кнопку, я даю свое согласие на обработку моих персональных данных в соответствии с </span><a class="price__confid-link" href="http://zernafest.ru/privacy_policy.pdf" target="_blank">политикой конфиденциальности</a><span class="price__confid-text"> и </span><a class="price__confid-link" href="http://zernafest.ru/public_offer.pdf" target="_blank">пользовательским соглашением.</a></label>
    </form>
  </div>
</section>

<!-- <section class="for-whom" id="for-whom" data-page="2">
  <div class="container">
    <h2 class="for-whom__title">для кого
      <div class="for-whom__title-small">фестиваль</div>
    </h2>
    <div class="for-whom__video-block">
      <ul class="for-whom__video-list">
        <li class="for-whom__video-item">
          <div class="for-whom__video-title">Родители, бабушки и дедушки</div>
          <div class="for-whom__video"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="4aeOCJqRPNM"></a></div>
          <div class="for-whom__video-content"></div>
          <p class="for-whom__video-text"><span class="for-whom__video-text for-whom__video-text_bold">Родители,</span><span class="for-whom__video-text_normal"> которые хотят построить гармоничные отношения в семье, реализовать свою миссию в родительстве. Желают вырастить успешных и счастливых детей. Хотят достичь согласия в воспитании детей.</span></p>
          <p class="for-whom__video-text"><span class="for-whom__video-text for-whom__video-text_bold">Дедушки и бабушки</span><span class="for-whom__video-text_normal">, которые хотят лучше понимать своих детей и внуков, вносить свой вклад в процесс воспитания. Стремятся быть в курсе новаторских педагогических подходов.</span></p>
        </li>
        <li class="for-whom__video-item">
          <div class="for-whom__video-title">Учителя и воспитатели</div>
          <div class="for-whom__video"><a class="for-whom__video-link js-modal-video" href="#" data-video-id="ea9rvQy8ST0"></a></div>
          <div class="for-whom__video-content"></div>
          <p class="for-whom__video-text"><span class="for-whom__video-text for-whom__video-text_bold">Учителя</span><span class="for-whom__video-text_normal">, которые стремятся реализовать свой талант и созидательный творческий потенциал вопреки существующей системе авторитарного воспитания в школе. Хотят получить эмоциональный ресурс и новый педагогический опыт.</span></p>
          <p class="for-whom__video-text"><span class="for-whom__video-text for-whom__video-text_bold">Воспитатели</span><span class="for-whom__video-text_normal">, которые осознают всю важность создания атмосферы радостного проживания периода детства для становления счастливого взрослого в будущем.</span></p>
        </li>
        <li class="for-whom__video-item">
          <div class="for-whom__video-title">Дети и подростки</div>
          <div class="for-whom__video"><a class="for-whom__video-link js-modal-video" data-video-id="GdXOIP9Ih14" href="#"></a></div>
          <div class="for-whom__video-content"></div>
          <p class="for-whom__video-text"><span class="for-whom__video-text for-whom__video-text_bold">Дети</span><span class="for-whom__video-text_normal">, которые хотят быть важными и любимыми для своих родителей.</span></p>
          <p class="for-whom__video-text"><span class="for-whom__video-text for-whom__video-text_bold">Подростки</span><span class="for-whom__video-text_normal">, которые жаждут понимания со стороны взрослых, уважения и веры в них.</span></p>
          <p class="for-whom__video-text">Ребенок узнает много нового и сможет найти ответы на вопросы: «Как найти себя?», «Как ставить цели и достигать их?», «Как общаться со сверстниками?» и многое другое.</p>
        </li>
      </ul>
    </div>
  </div>
</section> -->

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
            <div class="for-whom__video-title">
              <?php the_title(); ?>
            </div>
            <div class="for-whom__video" style="background-image: url(<?php echo get_post_meta( get_the_id(), 'for_whom_video_bgr', true); ?>);">
              <a class="for-whom__video-link js-modal-video" href="#" data-video-id="<?php echo get_post_meta( get_the_id(), 'for_whom_video_id', true); ?>"></a>
            </div>
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
      <div class="itwas__video-big" style="background-image: url(<?= wp_get_attachment_image_src(get_option('how_it_was_big_img'))[0];?>);">
        <a class="for-whom__video-link js-modal-video" href="#" data-video-id="<?= get_option('how_it_was_big');?>"></a>
      </div>
      <div class="itwas__content">
        <h2 class="itwas__title">как это
          <div class="itwas__title-subtitle">было</div>
        </h2>
        <?= get_option('how_it_was_text');?>
      </div>
    </div>
    <div class="itwas__row-down">
      <div class="itwas__video" style="background-image: url(<?= wp_get_attachment_image_src(get_option('how_it_was_pos1_img'))[0];?>);">
        <a class="for-whom__video-link js-modal-video" href="#" data-video-id="<?= get_option('how_it_was_pos1');?>"></a>
      </div>
      <div class="itwas__video" style="background-image: url(<?= wp_get_attachment_image_src(get_option('how_it_was_pos2_img'))[0];?>);">
        <a class="for-whom__video-link js-modal-video" href="#" data-video-id="<?= get_option('how_it_was_pos2');?>"></a>
      </div>
      <div class="itwas__video" style="background-image: url(<?= wp_get_attachment_image_src(get_option('how_it_was_pos3_img'))[0];?>);">
        <a class="for-whom__video-link js-modal-video" href="#" data-video-id="<?= get_option('how_it_was_pos3');?>"></a>
      </div>
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
      <div class="where-will__bigimg"><img class="where-will__slide-bigimg" alt="" src="">
        <div class="where-will__arrow-left" id="left"></div>
        <div class="where-will__arrow-right" id="right"></div>
      </div>
      <div class="where-will__slider">
        <?php
        $args = array(
          'posts_per_page' => 99,
          'order' => 'DESC',
          'post_type' => array( 'where_will' ),
        );
        $posts = new WP_Query( $args );
        while( $posts->have_posts() ) :
          $posts->the_post();
          ?>

          <div class="where-will__slide">
            <img class="where-will__img-slide" alt="" src="<?php the_post_thumbnail_url(); ?>">
            <div class="where-will__comment-slide">
              <h3 class="where-will__slide-name"><?php echo the_title(); ?></h3>
              <?php echo the_content(); ?>
            </div>
          </div>

          <?php
        endwhile;
        wp_reset_postdata();
        ?>

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
      <div class="itwas__video-big" style="background-image: url(<?= wp_get_attachment_image_src(get_option('say_main_video_bgr'), full)[0];?>);">
        <a class="for-whom__video-link js-modal-video" href="#" data-video-id="<?= get_option('say_main_video_id');?>"></a></div>
        <div class="itwas__content">
          <h2 class="itwas__title itwas__title--blue">СКАЗАТЬ ГЛАВНОЕ
          </h2>
          <?= get_option('say_main_text');?>
        </div>
      </div>
      <div class="itwas__row-down challenge__list">

        <?php
        $args = array(
          'posts_per_page' => 99,
          'order' => 'ASC',
          'post_type' => array( 'say_main' ),
        );
        $posts = new WP_Query( $args );
        while( $posts->have_posts() ) :
          $posts->the_post();
          ?>

          <div class="itwas__video" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <a class="for-whom__video-link js-modal-video" href="#" data-video-id="<?php echo get_post_meta( get_the_id(), 'say_main_video_id', true); ?>">
            </a>
            <span><?php echo the_title(); ?></span>
          </div>

          <?php
        endwhile;
        wp_reset_postdata();
        ?>

<!-- 


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
      </a><span>Ольга</span></div> -->
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
      <div class="rewiews__img"><img class="rewiews__big-img" alt="большой слайд" src="">
        <div class="rewiews__arrow-left"></div>
        <div class="rewiews__arrow-right"></div>
      </div>
      <div class="reviews__slider">

        <?php
        $args = array(
          'posts_per_page' => 99,
          'order' => 'DESC',
          'post_type' => array( 'review' ),
        );
        $posts = new WP_Query( $args );
        while( $posts->have_posts() ) :
          $posts->the_post();
          ?>

          <div class="reviews__slide">
            <img class="reviews__slide-img" alt="" src="<?php the_post_thumbnail_url(); ?>">
            <div class="reviews__content">
              <h3 class="reviews__slide-name"><?php echo the_title(); ?></h3>
              <div class="reviews__slide-position"><?php echo get_post_meta( get_the_id(), 'review_city', true); ?></div>
              <div class="reviews__slide-comment"><?php echo the_content(); ?></div>            
            </div>
          </div>

          <?php
        endwhile;
        wp_reset_postdata();
        ?>

      </div>
    </div>
    <div class="reviews__content-block">
      <div class="reviews__content-vis">

      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>