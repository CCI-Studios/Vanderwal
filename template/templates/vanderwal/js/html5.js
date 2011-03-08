/* placeholder text */
(function (window, document, undefined) {
	window.addEvent('domready', function() {
		var i = document.createElement('input');

		if ('placeholder' in i) {
			return;
		}

		$$('input[type="text"]').each(function(input) {
			var placeholder;

			if (input.getProperty('placeholder')) {
				placeholder = input.getProperty('placeholder');
				input.value = placeholder

				input.addEvents({
					focus: function() {
						if (input.value === placeholder)
							input.value = "";

					},
					blur: function() {
						if (input.value === "")
							input.value = placeholder;
					}
				});
			}
		});
	});
})(this, this.document);
