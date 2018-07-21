  <div class="full-post">
    <div class="container">
      <div class="row">
        <div class="col"></div>
        <div class="col-10">
          <h1>Редактировать - Обо Мне</h1>
          
          <?php include( ROOT . 'templates/_parts/_errors.tpl') ?>
          


          <form action="<?=HOST?>about-edit" method="POST" enctype="multipart/form-data">

          <section class="add-post">
            <div class="add-post__title">Имя, фамилия</div>
            <input value="<?=$about->name?>" class="form-full-width" type="text" name="name" placeholder="Емельян Казаков"/>
          </section>
          <section class="add-post">
            <div class="add-post__title">Фотография</div>
            <div class="form-download">
              <div class="form-download__title">Изображение jpg или png, рекомендуемый размер 205 на 205 пикселей, вес до 2Мб.</div>
          <div class="form-download__container contacts-container-mod"> 
          <fieldset>
          <input type="file" id="file" name="file" class="inputfile" 
          data-multiple-caption="{count} файлов выбрано" multiple />
          <label for="file" >Выбрать файл</label> <span></span>
          </fieldset>
          </div>
           </div>
     
            <div class="avatar avatar-big">
            <?php 
              if ( $about->photo != '' ) {
                $photo = HOST . 'usercontent/about/' . $about->photo;
              } else {
                $photo = '/img/avatar-img/photo-big.jpg';
              }
            ?>
            <img src="<?=$photo?>" alt=""/>
            </div>

          </section>
          <section class="add-post">
            <div class="add-post__title">Информация на главной</div>
            <textarea id="ckEditor" class="form-message" name="description" placeholder="Информация на главной"><?=$about->description?></textarea>
          </section>
          <section class="add-post">
            <input type="submit" name="aboutUpdate" class="button button-save" value="Сохранить">
            <a class="button button-regular" href="<?=HOST?>about"> Отмена </a>

          </section>

          </form>
        </div>
        <div class="col"></div>
      </div>
    

    </div>
  </div>