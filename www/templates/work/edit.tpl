<div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-10">
        <div class="title1 work-add-admin">Добавить работу</div>

 <?php include( ROOT . 'templates/_parts/_errors.tpl') ?>

        <section class="add-post">
          <div class="add-post__title">Название</div>
          <input class="form-full-width" type="text" name="workTitle" 
           placeholder="Национальный парк Йосемити"/>
          <div class="add-post__title">Изображение</div>
          <div class="form-download">
            <div class="form-download__title">Изображение jpg или png, размером больше чем 100х100 пикселей, и весом до 2Мб.</div>
            <div class="form-download__container"> 
              <label class="form-download__btn"> <span>Выбрать файл</span>
                <input type="file" id="file" name="photo" style="display:none;"/>
              </label>
              <input class="form-download__file-name" id="value" type="text" value="Файл не выбран" disabled="disabled"/>
            </div>
            <div class="form-download__preview">
              <div class="form-download__preview__container" id="output">
                <div class="form-download__preview__delete"><a class="testBtn">Удалить</a></div>
                <div class="form-download__image-container"><img class="form-download__image" 
                  src="/usercontent/portfolio/yosemite-national-park2.png"/></div>
              </div>
            </div>
          </div>
          <div class="add-post__title">Содержание</div>
          <textarea class="form-message" name="workText"  placeholder="Сообщение">Сделана верстка </textarea>
          <div class="add-post__title">Результат</div>
          <textarea class="form-message" name="workDone" placeholder="Сообщение"></textarea>
          <div class="add-post__title">Технологии</div>
          <textarea class="form-message" name="workTech"
           placeholder="Сообщение"></textarea>
              <input type="submit" name="workUpdate" class="button button-save" value="Сохранить">
            <a class="button button-regular" href="<?=HOST?>work"> Отмена </a>
                    </section>
      </div>
    </div>
  </div>
