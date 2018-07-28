<?php 
// Вывод админ панели для Администратора
if ( isset($_SESSION['logged_user']) && $_SESSION['login'] == 1 ) {
  if ($_SESSION['role'] == 'admin') {
    include ROOT . "templates/_parts/_admin-panel.tpl";
  }
}
?>

  <div class="container-work-page--individual">
    <div class="header-user__logo-brand">
      <div class="header-user__logo"><a href="index.html">
          <svg class="icon icon-plane plane-mod">
            <use xlink:href="/img/sprite.svg#plane"></use>
          </svg></a></div><a class="header-user__brand" href="index.html">
        <div class="header-user__brandname">
          <h1>Digital Lyfestyle</h1>
        </div>
        <div class="header-user__brand-desc">
          <p>Сайт IT специалиста</p>
        </div></a>
    </div>
    <div class="container">
      <div class="row justify-content-md-end container-work-title">
        <div class="col-lg-9 col-md-8 work-wrap">
          <div class="work-title"><?=$work['title']?></div>
        </div>
        <div class="col-lg-2 col-md-3 work-wrap"> <a class="button button-edit" href="#"> Редактировать </a>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-10 work-wrap">
          <div class="work-information">
            <div class="work-autor">Емельян Казаков</div>
            <div class="work-location"> <a href="#">Работы</a></div>
                <div class="comment__date">
        <?php echo rus_date("j F Y H:i ", strtotime($work['date_time'])); ?>
         </div>
          </div>
          <div class="work-project">
       <?php if ( $work['work_img'] != "" ) {?>
          <img class="full-post__img" src="<?=HOST?>usercontent/portfolio/<?=$work['work_img']?>" 
          alt="<?=$work['title']?>"/>
        <?php } ?>
      </div>
        </div>
       
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-5 work-contant">
          <div class="title3">Кратко о проекте</div>
          <?=$work['text']?>
          <div class="title6">Время работы над проектом: 6 недель</div>
          <div class="title6">Страниц сверстано: 52 страницы</div>
          <div class="title6">Бюджет проекта: до 60 000 рублей</div>
          <div class="title3">Результат</div>
          <?=$work['result']?>
        </div>
        <div class="col-md-5 work-contant">
          <div class="title3">Технологии</div>
          <ul class="work-technology-list">
            <li class="work-technology-list-item">HTML5, CSS3.</li>
            <li class="work-technology-list-item">JavaScript, jQuery.</li>
            <li class="work-technology-list-item">Less, Pug, Gulp, npm, bower.</li>
          </ul>
          <div class="title3">Ссылка на проект</div>
          <p class="work-link-projects"><a href="http://magnum-store.ru"><?=$work['link']?></a></p>
          <div class="title3">Код на github</div>
          <p class="work-link-projects"><a href="https://github.com/pozitive/magnumstore/"><?=$work['github']?></a></p>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-10 work-container-button"><a class="button button-regular" href="#">
         <span class="button__small-fa-icon"><i class="fas fa-arrow-left"></i></span>Все работы </a><a class="button button-regular" 
         href="#"> Следующая работа  <span class="button__small-fa-icon"><i class="fas fa-arrow-right"></i></span></a>


        </div>
      </div>
    </div>
  </div>