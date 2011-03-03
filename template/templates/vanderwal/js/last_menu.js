window.addEvent('domready', function() {
	$$('ul.menu').each(function(menu) {
		var lis = menu.getElements('li');

		if (lis.length > 0)
			lis[lis.length-1].addClass('last');
	});
});
