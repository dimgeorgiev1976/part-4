
     <div class="col-md-6 col-xl-4">
          <div class="card card-portfolio">

  <?php if ( $work['work_img_small'] != "" ) {?>
			<img class="card__img card-portfolio__img" src="<?=HOST?>usercontent/portfolio/<?=$work['work_img_small']?>"
			 alt="<?=$work['title']?>"/>
		<?php } else {?>
			<img class="card__img card-portfolio__img" src="<?=HOST?>usercontent/portfolio/no-image.jpg" 
			alt="<?=$work['title']?>"/>
		<?php } ?>


            <h2 class="card__title"><?=$work->title?></h2><a class="button button-regular" 
            href="work/work-single?id=<?=$work->id?>"> Смотреть кейс </a>
          </div>
      </div>

