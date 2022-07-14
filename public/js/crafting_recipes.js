(function($) {
	// Recipe Types
	var recipeType = ['3-by-3', '2-by-2', 'free-form', 'furnace'];
	var fallbackBgImg = "https://mcmod.wiki/images/9/93/GUI_Crafting_Table.png";
	var fallbackImg = "https://static.wikia.nocookie.net/minecraft/images/3/3e/MissingTextureBlock.png";

	$.fn.craftingRecipe = function(opt) {
		this.each((k, v) => {
			var settings = $.extend({
				bg_image: fallbackBgImg,
				type: recipeType[0],
				recipe: JSON.parse($(v).text()).recipe,
				recipe_items: JSON.parse($(v).text()).recipe_items,
				result: fallbackImg,
				amount: 1,
				isCustomRecipe: false
			}, opt);

			let obj = $(v);
			/* SETTING BG UI */
			let append = `<div class="crafting-table">`;

			/// IMPLEMENTING THE ELEMENTS ///
			{
				append += `<img class="bg-ui" src="`+settings.bg_image+`" draggable="false" onerror="$(this).attr('src', '`+fallbackImg+`').removeAttr('onerror');"/>`;
				/* SETTING CRAFTING CONTAINER */
				append += `<div class="crafting-container">`;
				if (settings.type == recipeType[0]) {
					let crafting_container = obj.find('div.crafting-container');

					/* SETTING THE GRID */
					{
						append += `<div class="crafting-grid">`;
						/* SETTING THE GRID ROW */
						$.each(settings.recipe.split("|"), function (rk, rv) {
							append += `<div class="crafting-row">`;
							/* SETTING THE ROW SLOT */
							$.each(rv.split(" "), function (sk, sv) {
								append += `<div class="crafting-slot">`;
								append += sv == 0 ? `` : `<img src="`+settings.recipe_items[sv]+`" class="crafting-item" onerror="$(this).attr('src', '`+fallbackImg+`').removeAttr('onerror');" draggable="false"/>`;
								append += `</div>`;
							});
							append += `</div>`;
						});
						append += `</div>`;
					}

					/* SETTING THE ARROW */
					{
						append += `<div class="crafting-arrow"><img src="/images/UI/crafting_grid_arrow.png" draggable="false"/></div>`;
					}

					/* SETTING THE CRAFTING RESULT */
					{
						append += `<div class="crafting-result-container">
							<div class="crafting-result">
								<img src="`+settings.result+`" class="crafting-result-image" onerror="$(this).attr('src', '`+fallbackImg+`').removeAttr('onerror');" draggable="false"/>
								`+(settings.amount > 1 ? `<span class="crafting-result-amount">`+settings.amount+`</span>` : ``)+`
							</div>
						</div>`;
					}
				}
				else if (settings.type == recipeType[1]) {
				}
				else if (settings.type == recipeType[2]) {
				}
				else if (settings.type == recipeType[3]) {
				}
				else {
					console.log("%cWARNING: %Recipe Type \"" + settings.type + "\" is either not supported or does not exists.", "color: #f5e642; font-weight: bold; background-color: rgba(245, 230, 66, 0.25);", "color: white; background-color: rgba(245, 230, 66, 0.25);");
				}
			}
			/// ELEMENTS IMPLEMENTED ///

			append += `</div>`;
			obj.html(append);
		});
		
		return this;
	};
} (jQuery));