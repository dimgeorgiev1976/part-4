$(document).ready(function() {

	$('#deletePostImg').click(function (e) {
		e.preventDefault();
		$('#deletePostImgCheckBox').slideDown();
		$('#deleteImgCheckBox')[0].checked = true;
	})


 CKEDITOR.replace( 'ckEditor' );
 
});
