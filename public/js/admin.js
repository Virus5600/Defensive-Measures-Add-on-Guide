/**
 * Warns the user that they're leaving without saving their changes.
 * @param urlTo String value. The page they'r attempting to open.
 */
function confirmLeave(urlTo) {
	Swal.fire({
		icon: 'warning',
		html: '<h4>Are you sure?</h4><p>You have unsave changes.</p>',
		showDenyButton: true,
		confirmButtonText: 'Yes',
		denyButtonText: 'No'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location.href = urlTo;
		}
	});
}

/**
 * Warns the user that they're leaving without saving their changes.
 * @param urlTo String value. The page they'r attempting to open.
 * @param item String value. The item you're trying to delete.
 * @param isItem boolean value. An optional item that determines if you're deleting a container or an item. This will change the warning message.
 */
function confirmDelete(urlTo, item, isItem = false) {
	Swal.fire({
		icon: 'warning',
		html: '<h4>Proceed to delete?</h4>' + (isItem ? '<p>You want to delete the container ' + item + ', along with all the items inside it?</p>' : '<p>You wanted to delete this item: ' + item +'</p>'),
		showDenyButton: true,
		confirmButtonText: 'Yes',
		denyButtonText: 'No'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location.href = urlTo;
		}
	});
}

function copyToClipboard(element) {
	let temp = $("<input>");
	$("body").append(temp);

	let textToCopy;
	if (typeof $(element).attr('data-copy-target') != 'undefined')
		textToCopy = $($(element).attr('data-copy-target')).val();
	else if (typeof $(element).attr('data-copy-text') != 'undefined')
		textToCopy = $(element).attr('data-copy-text');
	else
		textToCopy = $(element).val();

	temp.val(textToCopy).select();
	document.execCommand("copy");
	temp.remove();
	
	Swal.fire({
		title: `Text copied`,
		position: `bottom`,
		showConfirmButton: false,
		toast: true,
		timer: 3750,
		background: `#28a745`,
		customClass: {
			title: `text-white`,
			popup: `px-0`
		},
		width: 150
	});
}

$(document).ready(function() {
	// Activate tooltip
	$('[data-toggle=tooltip]').tooltip();

	// Activate masking
	$("[data-mask]").inputmask('mask', {'mask' : "+63 999 999 9999",'removeMaskOnSubmit' : true,'autoUnmask':true});

	// Toggle the sidebar on smaller screen
	$('[data-toggle=sidebar-collapse]').on('click', function(e) {
		let obj = $(e.currentTarget);
		let target = $(obj.attr('data-target'));

		if (target.hasClass("show"))
			target.removeClass("show");
		else
			target.addClass("show");
	});

	// Change submit to either "Updating" or "Submitting" after click
	$('[type=submit], [data-action]').click(function(e) {
		let action = $(e.currentTarget).attr('data-action');

		if ($(e.currentTarget).attr('data-clicked') == 'true') {
			e.preventDefault()
		}
		else {
			if (action == 'submit')
				$(e.currentTarget).html(`<div class="spinner-border spinner-border-sm text-light" role="status"><span class="sr-only"></span></div> Submitting...`);
			else if (action == 'update')
				$(e.currentTarget).html(`<div class="spinner-border spinner-border-sm text-light" role="status"><span class="sr-only"></span></div> Updating...`);
		}

		$(e.currentTarget).addClass(`disabled cursor-default`);
	});

	// Disables an input while animation is in progress
	$(document).on('change', '.disable-while-animating', function(e) {
		let obj = $(e.currentTarget);
		let objAnim = obj;
		let objTarget = obj;

		if (typeof obj.attr('data-animating-target') != 'undefined')
			objAnim = $(obj.attr('data-animating-target'));
		if (typeof obj.attr('data-disable-target') != 'undefined')
			objTarget = $(obj.attr('data-disable-target'));

		objTarget.prop('disabled', true);

		objAnim.on('shown.bs.collapse hidden.bs.collapse', function(e) {
			objTarget.prop('disabled', false);
		});
	});
});