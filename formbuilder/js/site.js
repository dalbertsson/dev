function addElement(elm) {

	$('#layout').append('<div class="form-item third">hej</div>');

}


$(document).ready(function() {

	$('#elements .element').draggable({
		revert: 'invalid'
	});

	$('#layout').droppable({
		accept: '.element',
		hoverClass: 'elm-droppable',
		drop: function(event, ui) {
			addElement(ui.draggable);
		}
	});
});