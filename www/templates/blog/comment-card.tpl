
<div class="comment">
	<div class="avatar avatar-small comment__avatar">
		<img src="<?=HOST?>usercontent/avatar/<?=$comment['avatar_small']?>" alt="image"/>
	</div>
	<div class="comment__info__user_date">
		<div class="comment__user_name">
			<?=$comment['name']?>
			<?=$comment['secondname']?>
		</div>
		<div class="time_container"><i class="far fa-clock"></i>
			<div class="comment__date">
				<?php echo rus_date("j F Y H:i ", strtotime($comment['date_time'])); ?>
			</div>
			<!-- <div class="comment__date">05 Мая 2017 года в 15:45</div> -->
		</div>
	</div>
	<div class="comment__text">
		<?=$comment['text']?>
	</div>
</div>