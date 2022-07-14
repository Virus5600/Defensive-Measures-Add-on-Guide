(function($) {
	var parent = [];

	$.fn.smoothScroll = function(opt) {
		var settings = $.extend({
			offset: 0,
			isLinear: false,
			duration: 500,
			parent: null
		}, opt);

		return this.each(function (k, v) {
			parent[k] = settings.parent == null ? $('html') : $(v).parent();
			if ($($(v).attr('data-scroll-to')).length > 0) {
				$(v).on('click', function() {
					parent[k].animate(
						{scrollTop: $($(v).attr('data-scroll-to')).offset().top + settings.offset},
						settings.duration,
						settings.isLinear ? "linear" : "swing"
					);
				});
			}
		});
	}
}(jQuery));