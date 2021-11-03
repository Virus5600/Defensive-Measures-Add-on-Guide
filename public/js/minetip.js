function pos(o, x, y, event) {
	var posX = 0, posY = 0;
	var e = event || window.event;
	if (e.pageX || e.pageY) {
		posX = e.pageX;
		posY = e.pageY;
	} else if (e.clientX || e.clientY) {
		posX = event.clientX + document.documentElement.scrollLeft + document.body.scrollLeft;
		posY = event.clientY + document.documentElement.scrollTop + document.body.scrollTop;
	}
	o.style.position = "absolute";
	o.style.top = (posY + y) + "px";
	o.style.left = (posX + x) + "px";
}

$(document).ready(() => {
	var minetip = document.getElementById("minetip-tooltip");

	$("[data-minetip]").mousemove(function (event) {
		let x = -1.25, y = -30;

		if (event.pageX > ($(window).width()/2)) {
			x = -parseInt($(minetip).outerWidth(true)) + 2.5;
			y -= 1.25;
			// y = -parseInt($(minetip).outerHeight(true));
		}
		pos(minetip, x, y, event);
	});

	$('[data-minetip]').mouseover((e) => {
		$(minetip).text($(e.currentTarget).attr('data-minetip'));
		$(minetip).css('display', 'block');
	}).mouseout((e) => {
		$(minetip).css('display', 'none');
	});

	minetip.style.display = "none";
});