<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carousel;
use App\Changelog;
use App\Contents;
use App\Items;
use App\Variants;
use App\Version;

class TmpController extends Controller
{
	public static function getCarousel() {
		return Carousel::hydrate([
			(object)[
				'id' => 1,
				'is_link' => 1,
				'name' => 'https://i.imgur.com/oBUJhfG.gif'
			],
			(object)[
				'id' => 2,
				'is_link' => 1,
				'name' => 'https://i.imgur.com/FuNB4rV.png'
			],
			(object)[
				'id' => 3,
				'is_link' => 1,
				'name' => 'https://i.imgur.com/YGaoKNI.gif'
			],
			(object)[
				'id' => 4,
				'is_link' => 1,
				'name' => 'https://i.imgur.com/XvkAT5Q.gif'
			]
		]);
	}

	public static function getVersions() {
		return Version::hydrate([
			(object)[
				'id' => 1,
				'version' => 'v1.0-beta',
				'type' => 'beta',
				'description' => '<p>This will officially be the debut of the Cannon Turret in the Add-On! Ready your powdered kegs as they\'ll sweep the area with their high-damage AoE Cannonballs! Cannon Turrets can be crafted and be placed almost everywhere, provided that there\'s a block to be placed on. Their slow rate of fire is compensated by their 2-shot kill damages, which can also damage surrounding entities.<p>',
				'release_date' => \Carbon\Carbon::parse("15-12-2020"),
				'win10_link' => 'https://cb.run/zs7f',
				'mobile_link' => 'https://cb.run/V1qk',
				'banner' => 'https://i.imgur.com/oBUJhfG.gif'
			],
			(object)[
				'id' => 2,
				'version' => 'v1.0.1-beta',
				'type' => 'beta',
				'description' => '
					<p>A new update has been released! A new turret, items and even block was implemented and will surely help defend your area!<p><br>
					<p>I present to you the Ballista! A medieval siege weapon that shoots large bolts of arrow towards enemy. The Ballista shoots much faster than the Cannon Turret, but has less health and deals less damage. The cheap crafting recipe of this turret allows you to create an early defense system for your world, in a sense, the durability of this turret is also lower than that of iron-clad Cannon Turret.</p>',
				'release_date' => \Carbon\Carbon::parse("18-12-2020"),
				'win10_link' => 'https://cb.run/Dogr',
				'mobile_link' => 'https://cb.run/QtSo',
				'banner' => 'https://i.imgur.com/YGaoKNI.gif'
			]
		]);
	}

	public static function getChangelog() {
		return Changelog::hydrate([
			(object)[
				'version' => 1,
				'type' => 'add',
				'changelog' => 'Added the cannonball projectile',
			],
			(object)[
				'version' => 1,
				'type' => 'add',
				'changelog' => 'Added render controller for cannonball',
			],
			(object)[
				'version' => 1,
				'type' => 'add',
				'changelog' => 'Added cannonball texture',
			],
			(object)[
				'version' => 1,
				'type' => 'add',
				'changelog' => 'Added cannonball RP and BP entity files',
			],
			(object)[
				'version' => 1,
				'type' => 'add',
				'changelog' => 'Added <code>cannon.hit</code> sounds for the cannon\'s sfx',
			],
			(object)[
				'version' => 1,
				'type' => 'mod',
				'changelog' => 'Updated documentation (.docx file) of the cannon to include the damage and if it is an AoE attack'
			],
			(object)[
				'version' => 1,
				'type' => 'mod',
				'changelog' => 'Updated cannon\'s BP entity file to remove unnecessary lines'
			],
			(object)[
				'version' => 1,
				'type' => 'mod',
				'changelog' => 'Updated Turret Remover\'s texture'
			],
			(object)[
				'version' => 1,
				'type' => 'mod',
				'changelog' => 'Updated Turret Remover\'s recipe'
			],
			(object)[
				'version' => 1,
				'type' => 'mod',
				'changelog' => 'Updated sounds file to include <code>hit1.ogg</code> and <code>hit2.ogg</code>'
			],
			(object)[
				'version' => 1,
				'type' => 'mod',
				'changelog' => 'Included cannon ball in the lang file'
			],
			(object)[
				'version' => 1,
				'type' => 'mod',
				'changelog' => 'Updated almost all hostile entities\' behavior, which allows them to be hostile towards the turrets'
			],
			(object)[
				'version' => 1,
				'type' => 'mod',
				'changelog' => 'Fixed animation bug where the turret\'s head yaw rotation is off'
			],
			(object)[
				'version' => 2,
				'type' => 'add',
				'changelog' => 'Added Ballista Arrow projectile for Ballista\'s projectile'
			],
			(object)[
				'version' => 2,
				'type' => 'add',
				'changelog' => 'Added "Ballista"'
			],
			(object)[
				'version' => 2,
				'type' => 'add',
				'changelog' => 'Added "Ballista Arrow Head" block'
			],
			(object)[
				'version' => 2,
				'type' => 'add',
				'changelog' => 'Added Ballista Arrow\'s animation'
			],
			(object)[
				'version' => 2,
				'type' => 'add',
				'changelog' => 'Added "Ballista Base" crafting recipe'
			],
			(object)[
				'version' => 2,
				'type' => 'add',
				'changelog' => 'Added "Ballista Base with Stand" crafting recipe'
			],
			(object)[
				'version' => 2,
				'type' => 'add',
				'changelog' => 'Added "Ballista Bow" crafting recipe'
			],
			(object)[
				'version' => 2,
				'type' => 'add',
				'changelog' => 'Added "Ballista Arrow Head" crafting recipe'
			],
			(object)[
				'version' => 2,
				'type' => 'add',
				'changelog' => 'Added "Ballista Arrow" crafting recipe'
			],
			(object)[
				'version' => 2,
				'type' => 'add',
				'changelog' => 'Added "Ballista" crafting recipe'
			],
			(object)[
				'version' => 2,
				'type' => 'mod',
				'changelog' => 'Reverts the custom projectile (Ballista Arrow) to its old projectile (Arrow)'
			]
		]);
	}

	public static function getItems() {
		return Items::hydrate([
			(object)[
				'id' => 1,
				'item_name' => 'Iron Ingot',
				'image' => 'https://i.imgur.com/0g3T8wy.png'
			],
			(object)[
				'id' => 2,
				'item_name' => 'Gold Ingot',
				'image' => 'https://i.imgur.com/zgYnM9q.png'
			],
			(object)[
				'id' => 3,
				'item_name' => 'Redstone Block',
				'image' => 'https://i.imgur.com/mPaQHEK.png'
			]
		]);
	}

	public static function getContents() {
		return Contents::hydrate([
			(object)[
				'type' => 'items',
				'content_name' => 'Turret Remover',
				'image' => 'https://i.imgur.com/SscmBSG.png',
				'has_variants' => false,
				'description' => '<p>Allows players to remove the turret without the need to destroy and re-craft the turrets all over again.</p>',
				'usage' => '
					<li>
						<h3>Turrets</h3>
						<p>Removes turrets without destroying the turrets.</p>
					</li>',
				'obtaining' => '
					<li>
						<h3>Crafting</h3>
						<p>As for now, the only way of obtaining this tool is through crafting.</p>
					</li>',
				'crafting_recipe' => '|0,1,0|,|2,0,1|,|3,2,0|'
			]
		]);
	}
}