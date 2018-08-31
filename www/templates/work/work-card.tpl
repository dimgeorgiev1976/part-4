
     <div class="col-md-6 col-xl-4">
          <div class="card card-portfolio">
                <img class="card__img card-portfolio__img" src="<?=HOST?>usercontent/portfolio/<?=(@$work->work_img_small) ? $work->work_img_small : 'no_image.png' ?>" alt="<?=$work->title?>"/>


<!--   <?php if ( $work['work_img_small'] != "" ) {?>
			<img class="card__img card-portfolio__img" src="<?=HOST?>usercontent/portfolio/<?=$work['work_img_small']?>"
			 alt="<?=$work['title']?>"/>
		<?php } else {?>
			<img class="card__img card-portfolio__img" src="<?=HOST?>usercontent/portfolio/no-image.jpg" 
			alt="<?=$work['title']?>"/>
		<?php } ?> -->


            <h2 class="card__title"><?=mbCutString($work->title, 25)?></h2><a class="button button-regular" 
            href="work/work-single?id=<?=$work->id?>"> Смотреть кейс </a>
          </div>
      </div>

