<div class="full-post">
	<div class="container">
		<div class="row">
			<form class="form-delete" action="
			<?=HOST?>work/work-delete?id=<?=$work['id']?>" method="POST" 
								enctype="multipart/form-data">
							<div class="col">

							<h1>Удалить pаботы</h1>

				Вы действительно хотите удалить pаботa 
				<strong><?=$work['id']?></strong>  с id = 
				<strong><?=$work['id']?></strong> ?
				<input type="submit" name="workDelete" 
				class="button button-delete" value="Удалить">
			 <a class="button button-regular" href="<?=HOST?>work/work-single?id=<?=$work->id?>">Отмена</a>
			
				
			</div>
			</form>
		</div>
	</div>
</div>