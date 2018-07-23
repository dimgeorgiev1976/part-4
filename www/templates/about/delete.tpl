<div class="full-post">
	<div class="container">
		<div class="row">
			<form action="<?=HOST?>expirience-edit?id=<?=$job['id']?>" method="POST" 
				enctype="multipart/form-data">
			<div class="col">
				<h1>Удалить работы</h1>

				Вы действительно хотите удалить работы
				<strong><?=$job['title']?></strong>  с id = 
				<strong><?=$job['id']?></strong> ?

				<input type="submit" name="jobDelete" 
				class="button button-delete" value="Удалить">
				<a class="button button-regular" 
				href="<?=HOST?>expirience-edit"> Отмена </a>
			
				
			</div>
			</form>
		</div>
	</div>
</div>