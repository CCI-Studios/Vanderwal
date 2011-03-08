(function (window, document, undefined) {

	var setHeight = function(elements) {
		var height = 0, i, t;

		for (i = 0; i < elements.length; i++) {
			t = elements[i].getElement('div').getElement('div');
			if (t.getSize().size.y > height)
				height = t.getSize().size.y;
		}

		for (i = 0; i < elements.length; i++) {
			t = elements[i].getElement('div').getElement('div');
			t.setStyle('height', height);
		}
	}

	window.addEvent('load', function() {
		setHeight($$('#bottom .module'));
	});
})(this, this.document);
