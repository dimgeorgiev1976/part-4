<div class="header-user__nav-box" id="navigation-menu">
  <div class="menu-admin">
    <div class="tab-profile">
      <div class="avatar avatar-small"><img src="/img/avatar-img/photo-small.jpg" alt="Админ"/></div>
      <div class="tab-profile__name">Юрий Ключевский</div><a class="btn btn--admin" href="#">Администратор</a>
    </div>
    <div class="tab-wrap">
      <input type="radio" name="tabs" id="tab1" checked="checked"/>
      <div class="tab-label-content" id="tab1-content">
        <label for="tab1">Страницы</label>
        <nav class="header-user__nav">
          <ul class="menu">
            <li><a href="/">Главная</a></li>
            <li><a href="<?=HOST?>about">Обо мне</a></li>
            <li><a href="<?=HOST?>work">Работы</a></li>
            <li><a href="<?=HOST?>blog ">Блог</a></li>
            <li><a href="<?=HOST?>contacts">Контакты</a></li>
          </ul>
        </nav>
      </div>

      <input type="radio" name="tabs" id="tab2"/>
      <div class="tab-label-content" id="tab2-content">
        <label for="tab2">Админка</label>
        <nav Class="header-user__nav header-user__nav--inner">
          <ul>
            <li><i class="fas fa-plus-circle"></i><a href="/post-edit.html">Пост</a></li>
            <li><i class="fas fa-edit"></i><a href="/about-edit.html">Обо мне</a></li>
            <li><i class="fas fa-plus-circle"></i><a href="/work-edit.html">Работа</a></li>
            <li><i class="fas fa-edit"></i><a href="<?=HOST?>contacts">Контакты</a></li>
            <li><i class="fas fa-envelope"></i><a href="/message-edit.html">Сообщения</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>