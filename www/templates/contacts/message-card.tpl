

<?php 	



// echo "<pre>";
// print_r($messages);
// echo "</pre>";


		?>
<div class="comment-user mb-20"><a class="button button-delete" href="#"> Удалить </a>
	<div class="comment-user__date">22 Августа 2017</div>

	<div class="comment-user-profile">
		<?php if ( $message->name != '') { ?>
			<span class="comment-user-profile__name"><?=$message->name?></span>&nbsp;
		<?php } ?>

		<a class="comment-user-profile__email" href="mailto:<?=$message->email?>"><?=$message->email?></a>

	</div>
	
	<?php if ( $message->message != '') { ?>
		<div class="comment-user__message"><?=$message->message?></div>
	<?php } ?>

	<?php if ( $message->message_file != '') { ?>
		<div class="comment-user__file">Прикрепленные файлы: <a target="_blank" href="
			<?=HOST.'usercontent/upload_files/'.$message->message_file?>">
			<?=$message->message_file_name_original?></a></div>
	<?php } ?>

</div>

