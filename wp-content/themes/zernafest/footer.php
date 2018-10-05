<footer class="footer">
  <div class="footer__row-up">
    <div class="footer__content">
      <div class="footer__col">
        <h3 class="footer__subtitle">2-7 ноября</h3>
        <div class="footer__subtitle-description"><?= get_option('contacts_name');?></div>
        <h3 class="footer__subtitle">Адрес</h3>
        <div class="footer__subtitle-description"><?= get_option('contacts_adress');?></div>
      </div>
      <div class="footer__col">
        <div class="footer__question">Остались вопросы?
          <div class="footer__question-bold">Задайте их прямо сейчас</div>
        </div>
        <h3 class="footer__contacts">контакты</h3>
        <a class="footer__contacts-link footer__contacts-link_mail" href="email:<?= get_option('contacts_mail');?>">
          <?= get_option('contacts_mail');?></a>
          <a class="footer__contacts-link footer__contacts-link_tel" href="tel:+<?php $tel = get_option('contacts_tel1'); $replace=array('-', ' ', '+', '(', ')'); $tel = str_replace($replace, '', $tel); echo $tel; ?>"><?php echo get_option('contacts_tel1'); ?><br><span class="subtext">(Бесплатно по СНГ)</span></a>
          <a class="footer__contacts-link footer__contacts-link_tel" href="tel:+<?php $tel = get_option('contacts_tel2'); $replace=array('-', ' ', '+', '(', ')'); $tel = str_replace($replace, '', $tel); echo $tel; ?>"><?php echo get_option('contacts_tel2'); ?><br><span class="subtext">(Бесплатно весь мир)</span></a>

        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5853.038512407099!2d38.05423668487748!3d44.551866985181064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f2209da9b0b69b%3A0x585afd1075f92c43!2z0YPQuy4g0KDQtdCy0L7Qu9GO0YbQuNC-0L3QvdCw0Y8sIDUzLCDQk9C10LvQtdC90LTQttC40LosINCa0YDQsNGB0L3QvtC00LDRgNGB0LrQuNC5INC60YDQsNC5LCAzNTM0NjE!5e0!3m2!1sru!2sru!4v1535339285936" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="footer__row-down">
      <div class="footer__socials">

        <a class="footer__social-link" href="https://www.facebook.com/zernafest/" target="_blank" title="facebook">
          <svg class="footer__social-icon footer__social-icon_fb">
            <path fill="#FFF" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"></path>
          </svg>
        </a>

        <a class="footer__social-link" href="https://vk.com/zernafest" target="_blank" title="vkontakte">
          <svg class="footer__social-icon footer__social-icon_vk">
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M15.764 22.223h1.315s.394-.044.6-.262c.184-.2.18-.574.18-.574s-.03-1.764.79-2.023c.81-.255 1.844 1.705 2.942 2.46.832.57 1.464.445 1.464.445l2.936-.04s1.538-.097.81-1.304c-.06-.1-.426-.894-2.186-2.526-1.843-1.71-1.594-1.434.624-4.39 1.353-1.804 1.893-2.902 1.724-3.374-.16-.45-1.153-.33-1.153-.33l-3.306.02s-.247-.034-.428.074c-.178.108-.293.356-.293.356s-.522 1.394-1.223 2.58c-1.47 2.5-2.06 2.633-2.3 2.476-.563-.36-.42-1.454-.42-2.23 0-2.423.365-3.435-.72-3.696-.357-.085-.623-.143-1.544-.15-1.182-.014-2.18.003-2.743.28-.378.185-.667.595-.49.62.218.027.713.13.975.49.34.46.33 1.496.33 1.496s.193 2.852-.46 3.206c-.442.245-1.056-.252-2.37-2.52-.67-1.163-1.18-2.446-1.18-2.446s-.1-.24-.273-.37c-.212-.155-.506-.204-.506-.204l-3.145.02s-.473.015-.647.22c-.154.183-.01.56-.01.56s2.46 5.757 5.245 8.657c2.553 2.66 5.454 2.485 5.454 2.485z"></path>
          </svg>
        </a>

        <a class="footer__social-link" href="https://ok.ru/zernafest" target="_blank" title="odnoklassniki">
          <svg class="footer__social-icon footer__social-icon_odn">
            <path fill="#FFF" d="M16 16.16a6.579 6.579 0 0 1-6.58-6.58A6.578 6.578 0 0 1 16 3a6.58 6.58 0 1 1 .002 13.16zm0-9.817a3.235 3.235 0 0 0-3.236 3.237 3.234 3.234 0 0 0 3.237 3.236 3.236 3.236 0 1 0 .004-6.473zm7.586 10.62c.647 1.3-.084 1.93-1.735 2.99-1.395.9-3.313 1.238-4.564 1.368l1.048 1.05 3.877 3.88c.59.59.59 1.543 0 2.133l-.177.18c-.59.59-1.544.59-2.134 0l-3.88-3.88-3.877 3.88c-.59.59-1.543.59-2.135 0l-.176-.18a1.505 1.505 0 0 1 0-2.132l3.88-3.877 1.042-1.046c-1.25-.127-3.19-.465-4.6-1.37-1.65-1.062-2.38-1.69-1.733-2.99.37-.747 1.4-1.367 2.768-.29C13.035 18.13 16 18.13 16 18.13s2.968 0 4.818-1.456c1.368-1.077 2.4-.457 2.768.29z"></path>
          </svg>
        </a>

        <a class="footer__social-link" href="https://www.instagram.com/zernafest.ru/" target="_blank" title="instagram" style="width: 32px; height: 32px;">
         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
         width="50" height="50"
         viewBox="0 0 48 48"
         style="enable-background:new 0 0 48 48;;fill:#ffffff;width: 42px;height: 42px;position: relative;top: -6px;"><g id="surface1"> <path style="fill:#304FFE;" d="M32,42H16c-5.5,0-10-4.5-10-10V16c0-5.5,4.5-10,10-10h16c5.5,0,10,4.5,10,10v16   C42,37.5,37.5,42,32,42z"></path>  <path style="fill:#304FFE;fill-opacity:0.2902;" d="M6,16v16c0,5.5,4.5,10,10,10h16c5.5,0,10-4.5,10-10V16c0-1-0.1-1.9-0.4-2.8   C36,8.7,28.8,6,21,6c-3.7,0-7.3,0.6-10.7,1.8C7.7,9.6,6,12.6,6,16z"></path> <path style="fill:#6200EA;" d="M21,8c-5,0-9.6,1.2-13.8,3.2C6.4,12.7,6,14.3,6,16v16c0,5.5,4.5,10,10,10h16c5.5,0,10-4.5,10-10   V16.2C36.5,11.1,29.1,8,21,8z"></path> <path style="fill:#673AB7;" d="M42,19c-5.3-5.5-12.7-9-21-9c-5.4,0-10.5,1.5-14.8,4.1C6.1,14.7,6,15.3,6,16v16c0,5.5,4.5,10,10,10   h16c5.5,0,10-4.5,10-10V19z"></path>  <path style="fill:#8E24AA;" d="M42,22c-4.9-6.1-12.5-10-21-10c-5.6,0-10.7,1.7-15,4.6V32c0,5.5,4.5,10,10,10h16c5.5,0,10-4.5,10-10   V22z"></path> <path style="fill:#C2185B;" d="M42,32v-6.6C37.5,18.6,29.8,14,21,14c-5.6,0-10.8,1.9-15,5v13c0,5.5,4.5,10,10,10h16   C37.5,42,42,37.5,42,32z"></path> <path style="fill:#D81B60;" d="M42,32v-2.4C38.4,21.6,30.4,16,21,16c-5.7,0-11,2.1-15,5.6V32c0,5.5,4.5,10,10,10h16   C37.5,42,42,37.5,42,32z"></path> <path style="fill:#F50057;" d="M41.6,34.8C39.7,25.2,31.2,18,21,18c-5.9,0-11.2,2.4-15,6.3V32c0,5.5,4.5,10,10,10h16   C36.5,42,40.4,39,41.6,34.8z"></path>  <path style="fill:#FF1744;" d="M39.9,38C39.4,28,31.2,20,21,20c-6.1,0-11.5,2.9-15,7.4V32c0,5.5,4.5,10,10,10h16   C35.2,42,38.1,40.4,39.9,38z"></path>  <path style="fill:#FF5722;" d="M21,22c-6.5,0-12.1,3.6-15,9v1c0,5.5,4.5,10,10,10h16c2.2,0,4.3-0.7,5.9-2c0-0.3,0.1-0.7,0.1-1   C38,29.6,30.4,22,21,22z"></path> <path style="fill:#FF6F00;" d="M21,24c-7,0-12.8,4.7-14.5,11.2c1.3,4,5.1,6.8,9.5,6.8h16c1.4,0,2.6-0.3,3.8-0.8   c0.1-0.7,0.2-1.5,0.2-2.2C36,30.7,29.3,24,21,24z"></path> <path style="fill:#FF9800;" d="M21,26c-6.9,0-12.5,5.3-12.9,12c1.8,2.4,4.7,4,7.9,4h16c0.6,0,1.1-0.1,1.7-0.2   C33.9,40.9,34,40,34,39C34,31.8,28.2,26,21,26z"></path> <path style="fill:#FFC107;" d="M31.6,42c0.3-1,0.4-2,0.4-3c0-6.1-4.9-11-11-11s-11,4.9-11,11c0,0.3,0,0.7,0.1,1   c1.7,1.2,3.7,2,5.9,2H31.6z"></path>  <path style="fill:#FFD54F;" d="M21,30c-5,0-9,4-9,9c0,0.8,0.1,1.6,0.3,2.3c1.1,0.5,2.4,0.7,3.7,0.7h13.5c0.3-0.9,0.5-1.9,0.5-3   C30,34,26,30,21,30z"></path>  <path style="fill:#FFE082;" d="M21,32.1c-3.9,0-7,3.1-7,7c0,1,0.2,1.9,0.6,2.8C15.1,42,15.5,42,16,42h11.4c0.4-0.9,0.6-1.9,0.6-2.9   C28,35.2,24.9,32.1,21,32.1z"></path>  <path style="fill:#FFECB3;" d="M21,34.1c-2.8,0-5,2.2-5,5c0,1.1,0.4,2.1,1,2.9H25c0.6-0.8,1-1.8,1-2.9C26,36.3,23.8,34.1,21,34.1z"></path> <path style="fill:#FFFFFF;" d="M30,38H18c-4.4,0-8-3.6-8-8V18c0-4.4,3.6-8,8-8h12c4.4,0,8,3.6,8,8v12C38,34.4,34.4,38,30,38z    M18,12c-3.3,0-6,2.7-6,6v12c0,3.3,2.7,6,6,6h12c3.3,0,6-2.7,6-6V18c0-3.3-2.7-6-6-6H18z"></path>  <path style="fill:#FFFFFF;" d="M24,31c-3.9,0-7-3.1-7-7c0-3.9,3.1-7,7-7c3.9,0,7,3.1,7,7C31,27.9,27.9,31,24,31z M24,19   c-2.8,0-5,2.2-5,5s2.2,5,5,5s5-2.2,5-5S26.8,19,24,19z"></path>  <path style="fill:#FFFFFF;" d="M32,16c0,0.6-0.4,1-1,1s-1-0.4-1-1s0.4-1,1-1S32,15.4,32,16z"></path></g></svg>
       </a>
     </div>

     <div class="footer__copyright">COPYRIGHT © <a class="footer__copyright_link" href="http://dmtbrand.top">DMT-BRAND</a></div>
   </div>
 </footer>
 <div class="modal speakerOffer"></div>
 <div class="modal__inner speakerOffer__inner">
  <button class="modal__close" type="button"></button>
  <p class="speakerOffer__text modal__text"></p>
  <form class="modal__form speakerOffer-form" id="speakerOffer-form">
    <input class="modal__input" type="text" placeholder="Ваше имя" name="offer-speaker-name" id="offer-speaker-name">
    <input class="modal__input" type="text" placeholder="Ваш e-mail" name="offer-speaker-mail" id="offer-speaker-mail">
    <input class="modal__input" type="tel" placeholder="Ваш телефон" name="offer-speaker-tel" id="offer-speaker-tel">
    <input class="modal__input" type="text" placeholder="Имя спикера" name="offer-speaker-speaker-name" id="offer-speaker-speaker-name">
    <input class="modal__input" type="text" placeholder="Ссылка на социальные сети спикера" name="offer-speaker-speaker-social" id="offer-speaker-speaker-social">
    <input class="modal__btn" type="submit" value="оставить заявку">
    <p class="form__text">Нажимая кнопку, я даю свое согласие на обработку моих персональных данных в соответствии с <a class="promo-form-link" href="http://zernafest.ru/privacy_policy.pdf" target="_blank">политикой конфиденциальности и </a><a class="promo-form-link" href="http://zernafest.ru/public_offer.pdf" target="_blank">пользовательским соглашением.</a></p>
  </form>
</div>
<div class="modal getProgram"></div>
<div class="modal__inner getProgram__inner">
  <button class="modal__close" type="button"></button>
  <p class="getProgram__text modal__text"></p>
  <form class="modal__form getProgram-form" id="getProgram-form">
    <input class="modal__input" type="text" placeholder="Ваша фамилия" name="get-program-surname" id="get-program-surname">
    <input class="modal__input" type="text" placeholder="Ваше имя" name="get-program-name" id="get-program-name">
    <input class="modal__input" type="text" placeholder="Ваш e-mail" name="get-program-mail" id="get-program-mail">
    <input class="modal__input" type="tel" placeholder="Ваш телефон" name="get-program-tel" id="get-program-tel">
    <input class="modal__btn" type="submit" value="оставить заявку">
    <p class="form__text">Нажимая кнопку, я даю свое согласие на обработку моих персональных данных в соответствии с <a class="promo-form-link" href="http://zernafest.ru/privacy_policy.pdf" target="_blank">политикой конфиденциальности и </a><a class="promo-form-link" href="http://zernafest.ru/public_offer.pdf" target="_blank">пользовательским соглашением.</a></p>
  </form>
</div>
<div class="modal registration"></div>
<div class="modal__inner registration__inner">
  <button class="modal__close" type="button"></button>
  <p class="registration__text modal__text"></p>
  <form class="modal__form registration-form" id="registration-form">
    <input class="modal__input" type="text" placeholder="Ваша фамилия" name="registration-surname" id="registration-surname">
    <input class="modal__input" type="text" placeholder="Ваше имя" name="registration-name" id="registration-name">
    <input class="modal__input" type="text" placeholder="Ваш e-mail" name="registration-mail" id="registration-mail">
    <input class="modal__input" type="tel" placeholder="Ваш телефон" name="registration-tel" id="registration-tel">
    <input class="modal__btn" type="submit" value="оставить заявку">
    <p class="form__text">Нажимая кнопку, я даю свое согласие на обработку моих персональных данных в соответствии с <a class="promo-form-link" href="http://zernafest.ru/privacy_policy.pdf" target="_blank">политикой конфиденциальности и </a><a class="promo-form-link" href="http://zernafest.ru/public_offer.pdf" target="_blank">пользовательским соглашением.</a></p>
  </form>
</div>
</div>
</body>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/plugins/jquery/jquery-3.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/plugins/modal-video/jquery-modal-video.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/plugins/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/plugins/input_mask/jquery.maskedinput.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=<?php echo date(U);?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/reg.js"></script>







</html>