<?php get_header(); ?>

<main class="main">
  <div class="container">
    <div class="main__title">
      <?php the_field('main__title'); ?>
    </div>
    <div class="main__text">
      <?php the_field('main__text'); ?>
    </div>
    <div class="main__img">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/main-img.png" alt="">
    </div>
    <div class="project">
      <div class="project__title">
        ПРОЕКТЫ ДОМОВ ИЗ БРУСА
      </div>
      <div class="project__item">
        <div class="project__name">
          ДОМ #1
        </div>
        <div class="project__size">
          Размер дома: 6 x 6
        </div>
        <div class="project__area">
          Общая площадь дома: 54 кв . м
        </div>
        <div class="project__prise">
          Стоимость - 402 000 рублей
        </div>
        <div class="project__images">
          <div class="project__images-item">
            <img src="assets/img/project-1.jpg" alt="">
          </div>
          <div class="project__images-item">
            <img src="assets/img/project-2.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="project__item">
        <div class="project__name">
          ДОМ #2
        </div>
        <div class="project__size">
          Размер дома: 6 x 7.5
        </div>
        <div class="project__area">
          Общая площадь дома: 72 кв . м
        </div>
        <div class="project__prise">
          Стоимость - 457 000 рублей
        </div>
        <div class="project__images">
          <div class="project__images-item">
            <img src="assets/img/project-3.jpg" alt="">
          </div>
          <div class="project__images-item">
            <img src="assets/img/project-4.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="project__item">
        <div class="project__name">
          ДОМ #3
        </div>
        <div class="project__size">
          Размер дома: 8 x 7.5
        </div>
        <div class="project__area">
          Общая площадь дома: 92 кв . м
        </div>
        <div class="project__prise">
          Стоимость - 635 000 рублей
        </div>
        <div class="project__images">
          <div class="project__images-item">
            <img src="assets/img/project-5.jpg" alt="">
          </div>
          <div class="project__images-item">
            <img src="assets/img/project-6.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="download">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/download.png" alt="">
    <a class="download__btn" href="#">
      СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ
    </a>
  </div>
  <div class="container">
    <div class="gallery">
      <div class="gallery__title">
        ФОТОГРАФИИ НАШИХ РАБОТ
      </div>
      <div class="gallery__text">
        некоторые фотографии построенных нами домов и бань из бруса
      </div>
      <div id="gallery__inner">
        <?php the_field('photo'); ?>
        <!-- <a href="assets/img/item-1.jpg">
          <img src="assets/img/item-1.jpg" alt="">
        </a>
        <a href="assets/img/item-1.jpg">
          <img src="assets/img/item-1.jpg" alt="">
        </a>
        <a href="assets/img/item-1.jpg">
          <img src="assets/img/item-1.jpg" alt="">
        </a>
        <a href="assets/img/item-1.jpg">
          <img src="assets/img/item-1.jpg" alt="">
        </a>
        <a href="assets/img/item-1.jpg">
          <img src="assets/img/item-1.jpg" alt="">
        </a>
        <a href="assets/img/item-1.jpg">
          <img src="assets/img/item-1.jpg" alt="">
        </a>
        <a href="assets/img/item-1.jpg">
          <img src="assets/img/item-1.jpg" alt="">
        </a>
        <a href="assets/img/item-1.jpg">
          <img src="assets/img/item-1.jpg" alt="">
        </a>
        <a href="assets/img/item-1.jpg">
          <img src="assets/img/item-1.jpg" alt="">
        </a>
        <a href="assets/img/item-1.jpg">
          <img src="assets/img/item-1.jpg" alt="">
        </a>
        <a href="assets/img/item-1.jpg">
          <img src="assets/img/item-1.jpg" alt="">
        </a>
        <a href="assets/img/item-1.jpg">
          <img src="assets/img/item-1.jpg" alt="">
        </a> -->
      </div>
    </div>
    <div class="main__img">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/main-img.png" alt="">
    </div>
  </div>
</main>

<?php get_footer(); ?>