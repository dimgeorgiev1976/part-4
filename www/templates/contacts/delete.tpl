<div class="full-post">
	<div class="container">
		<div class="row">
			<form class="form-delete" action="
			<?=HOST?>contacts-delete?id=<?=$messages['id']?>" method="POST" 
				enctype="multipart/form-data">
							<div class="col">

							<h1>Удалить сообщение</h1>

				Вы действительно хотите удалить сообщение 
				с id = <strong><?=$messages['id']?></strong> ?

				<input type="submit" name="msgDelete" 
				class="button button-delete" value="Удалить">
			 <a class="button button-regular" href="<?=HOST?>messages">Отмена</a>
			
				
			</div>
			</form>
		</div>
	</div>
</div>