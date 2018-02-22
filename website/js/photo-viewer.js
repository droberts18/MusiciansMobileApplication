var $frame = $('#photo-viewer');
	$thumbs = $('.thumb');

$(document).on('click', 'a', function(e){
	var $img,
		src = this.href;
	
	e.preventDefault();
	$img = $('<img/>');
	
	$thumbs.removeClass('active');
	$(this).addClass('active');
	
	$img.attr({
		'src': src,
		'alt': this.title || ''
	});
	
	$frame.empty().append($img);
});

$('.thumb.active').eq(0).click();