<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Facebook\Facebook;

use App\Carousel;
use App\Content;
use App\Item;
use App\Version;

use Log;

class PageController extends Controller
{
	// PAGE CONTROLLERS
	protected function index(Facebook $fb) {
		$fb->setDefaultAccessToken(env('FACEBOOK_PAGE_ACCESS_TOKEN'));

		$videos = null;
		try {
			$videos = $fb->get('720160775280918/videos?fields=source,title,created_time,description')->getGraphEdge();
		} catch (\Facebook\Exceptions\FacebookSDKException $e) {
			Log::error($e);
			// dd($e);
		} catch (\Facebook\Exceptions\FacebookResponseException $e) {
			Log::error($e);
			// dd($e);
		}
		
		$vid = 0;
		return view('index', [
			'carousel' => Carousel::where('status', '=', 1)->get(),
			'videos' => $videos,
			'vid' => $vid,
			'latest_version' => Version::orderBy('id', 'DESC')->first()
		]);
	}

	protected function downloads(Request $req) {
		$beta = Version::where('type', '=', 'beta')->orderBy('id', 'DESC')->limit(5)->get();
		$released = Version::where('type', '=', 'released')->orderBy('id', 'DESC')->limit(5)->get();

		$target = 'all';
		if ($req->has('t'))
			$target = $req->t;

		if ($target == 'beta') {
			$beta = Version::where('type', '=', 'beta')->orderBy('id', 'DESC')->get();
			$released = array();
		}
		else if ($target == 'released') {
			$beta = array();
			$released = Version::where('type', '=', 'released')->orderBy('id', 'DESC')->get();
		}

		return view('downloads.index', [
			'beta_versions' => $beta,
			'released_versions' => $released
		]);
	}

	protected function changelog($version) {
		$v = $this->getVersions()->where('version', $version)->first();

		return view('downloads.show', [
			'version' => $v,
			'changelog' => $this->getChangelog()->where('version', $v->id)
		]);
	}

	protected function installation($type='win10') {
		return view('installation', [
			'type' => $type
		]);
	}

	protected function contents($type='all') {
		/*
		 * CATEGORIES:
		 * > Items
		 * > Tools
		 * > Turrets
		 * > Blocks
		 * > Projectiles
		 */
		
		$category = $type == 'all' ? 'All Items' : ucwords($type);

		$contents = Content::get();
		if (!$type == 'all')
			$contents = Content::where('type', '=', $type)->get();


		return view('contents.index', [
			'type' => $type,
			'contents' => $contents,
			'category' => $category
		]);
	}

	protected function items($item) {
		$item = Item::where('item_name', '=', preg_replace('/_/', ' ',$item))->first();
		return view('contents.show', [
			'item' => $item
		]);
	}
	
	// PRIVACY POLICY
	protected function privacyPolicy($font='Minecraftia') {
		return view('privacy_policy', [
			'font' => $font
		]);
	}

	protected function privacyPolicyArial() {
		return $this->privacyPolicy('Arial');
	}

	protected function exploit() {
		return response()->json(['TEST']);
	}
}