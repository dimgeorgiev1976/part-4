<div class="container">
    <div class="row justify-content-md-center">

            <form action="<?=HOST?>work/work-edit?id=<?=$work->id?>" 
              method="POST" enctype="multipart/form-data">

      <div class="col-md-10">
        <div class="title1 work-add-admin">Редактировать работу</div>

 <?php include( ROOT . 'templates/_parts/_errors.tpl') ?>

        <section class="add-post">
          <div class="add-post__title">Название</div>
          <input value="<?=$work->title?>" class="form-full-width" type="text" name="workTitle" 
           placeholder="Национальный парк Йосемити"/>
          <div class="add-post__title">Изображение</div>
          <div class="form-download">
            <div class="form-download__title">Изображение jpg или png, размером больше чем 100х100 пикселей, и весом до 2Мб.</div>
         <div class="form-download__container contacts-container-mod"> 
        <fieldset>
          <input type="file" id="workImg" name="workImg" class="inputfile" 
          data-multiple-caption="{count} файлов выбрано" multiple />
            <label for="workImg" >Выбрать файл</label> <span></span>
            </fieldset>
         </div>

            <?php if ( $work->work_img != "" ) {?>
            <div class="form-download__preview">
              <div class="form-download__preview__container" id="output">
                <div class="form-download__preview__delete"><a class="testBtn" 
                  id="deletePostImg">Удалить</a></div>

                <div class="form-download__image-container"><img class="form-download__image" 
                   src="<?=HOST?>usercontent/portfolio/<?=$work['work_img_small']?>"
                    alt="<?=$work['title']?>"/>

               </div>
              </div>

            <?php } ?>

           <div class="save-check__block" id="deletePostImgCheckBox" style="display: none;">
              <input id="deleteImgCheckBox" type="checkbox" name="deleteImg" hidden="hidden"/>
              <label for="deleteImgCheckBox">Картинка будет удалена</label>
            </div>

         </div>
          <div class="add-post__title">Содержание</div>
          <textarea class="form-message" name="workText" 
           placeholder="Сообщение"><?=$work->text?> </textarea>
          <div class="add-post__title">Результат</div>
          <textarea class="form-message" name="workDone"
           placeholder="Сообщение"><?=$work->result?></textarea>
          <div class="add-post__title">Технологии</div>
          <textarea id="ckEditor" class="form-message" name="workTech"
           placeholder="Сообщение"><?=$work->technologies?></textarea>

           <div class="add-post__title">Ссылка на проект</div>
          <input class="form-full-width" type="text" name="workLink" 
           placeholder="http://magnum-store.ru"/>

          <div class="add-post__title">Код на github</div>
          <input class="form-full-width" type="text" name="gitHub" 
           placeholder="https://github.com"/>

              <input type="submit" name="workUpdate" class="button button-save" value="Сохранить">
            <a class="button button-regular" href="<?=HOST?>work/work-single?id=<?=$work->id?>"> Отмена </a>
         </section>      </div>
     </form>
    </div>
  </div>
