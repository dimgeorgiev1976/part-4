
<div class="comment">
	<div class="avatar avatar-small comment__avatar">
		<?php if ( $_SESSION['logged_user']['avatarSmall'] == "" ) { ?>
					<img src="<?=HOST?>templates/assets/img/placeholders/user-avatar-placeholder-small.jpg" alt="image"/>
				<?php } else { ?>
					<img src="<?=HOST?>usercontent/avatar/<?=$_SESSION['logged_user']['avatarSmall']?>" alt="image"/>
				<?php } ?>
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