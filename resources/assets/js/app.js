$(document).ready(function () {
	$('#myTable').DataTable();

	$(".alert").fadeTo(2000, 500).slideUp(1000, function(){
		$('.alert').remove();
	});


	$('#summernote').summernote();

	$('#test1').hover( function () {
		$(this).stop();
	});


	
	
	if(!$('#myCanvas').tagcanvas({
		textColour: '#ff0000',
		outlineColour: '#ff00ff',
		reverse: true,
		depth: 0.8,
		maxSpeed: 0.05
	},'tags')) {
         // something went wrong, hide the canvas container
         $('#myCanvasContainer').hide();
     };
     

     
 });


