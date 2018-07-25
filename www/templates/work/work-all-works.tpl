<div class="wrap-works">
    <div class="container">
      <div class="row portfolio-title portfolio-title--work-page">
        <div class="col-lg-9 col-md-8">
          <h1>Работы <span class="portfolio-font--lighter">которые сделал я и моя команда</span></h1>
        </div>

  <?php if ( isAdmin() ) { ?>
                <div class="col-lg-3 col-md-4 portfolio-title--button">
                  <a class="button button-edit"
                  href="<?=HOST?>work-new"> Добавить работу </a>
           </div>
        <?php }  ?>
</div>


        <div class="row portfolio-works portfolio-works--work-page">
        <?php foreach ($worksSingle as $single): ?>

        <?php include "work-card.tpl"; ?>

      <?php endforeach ?>
       </div>
  </div>
</div>
