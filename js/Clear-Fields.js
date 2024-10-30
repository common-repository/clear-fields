jQuery(document).ready(function() {
	var input = jQuery('input[type=text].clrFld, textarea.clrFld');
	input.focus(function() {
		var el = jQuery(this);
		if (el.val() == el.attr('title')) {
			jQuery(this).val('');
		}
	}).blur(function() {
		var el = jQuery(this);
		if(el.val() == '') {
			el.val(el.attr('title'));
		}
	});
});