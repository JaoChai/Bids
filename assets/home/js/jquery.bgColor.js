jQuery.fn.bgColor = function(test,value) {
	var self = jQuery(this), bgColor;
	if (!test || test.constructor != Function) test = function(e) { return false; };
	if (!value || value.constructor != Function) value = function(e) { return jQuery(e).css('backgroundColor'); };
	while (true) {
		bgColor = self.css('backgroundColor');
		if (bgColor != '' && bgColor != 'transparent') break;
		if (test(self[0])) {
			bgColor = value(self[0]);
			break;
		}
		if (self.parent()[0] == document) break;
		else self = self.parent();
	};
	if (bgColor == '' || bgColor == 'transparent') bgColor = "rgb(255,255,255)";
	return bgColor;
};
