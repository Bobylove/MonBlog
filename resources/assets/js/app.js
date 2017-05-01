$(document).ready(function () {
	$(".alert").fadeTo(2000, 500).slideUp(1000, function(){
		$('.alert').remove();
	});


	$('#summernote').summernote();
});


