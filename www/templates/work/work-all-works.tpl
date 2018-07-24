<div class="full-post">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php if ( isAdmin() ) { ?>
					<a class="button button-edit" href="<?=HOST?>work-new">Добавить работу</a>
				<?php }  ?>
				<h1>Блог вебразработчика</h1>
			</div>
		</div>
		<div class="row">

			<?php foreach ($works as $work): ?>
				<?php 
			<!-- 	include "work-card.tpl";  -->
print_r($work);

?>

			<?php endforeach ?>


<!-- 			<?php foreach ($posts as $post): ?>
				<?php include "work-card.tpl"; ?>
			<?php endforeach ?>

 -->		</div>
	</div>
</div>