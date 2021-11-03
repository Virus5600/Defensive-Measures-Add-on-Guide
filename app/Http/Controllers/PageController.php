<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Facebook\Facebook;

use Log;

class PageController extends Controller
{
	// TEMPORARY DATABASE
	private function getCarousel() {
		return TmpController::getCarousel();
	}
	private function getVersions() {
		return TmpController::getVersions();
	}
	private function getChangelog() {
		return TmpController::getchangelog();
	}
	private function getItems() {
		return TmpController::getItems();
	}
	private function getContents() {
		return TmpController::getContents();
	}

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
			'carousel' => $this->getCarousel(),
			'videos' => $videos,
			'vid' => $vid,
			'latest_version' => $this->getVersions()->reverse()->first()
		]);
	}

	protected function downloads() {
		return view('downloads.index', [
			'versions' => $this->getVersions()->reverse()
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

		$contents = $this->getContents();
		if (!$type == 'all')
			$contents = $this->getContents()->where('type', '=', $type)->get();


		return view('contents.index', [
			'type' => $type,
			'contents' => $contents,
			'category' => $category
		]);
	}

	protected function items($item) {
		$item = $this->getContents()->where('item_name', '=', preg_replace('/_/', ' ',$item))->first();
		$item = $this->getContents()[0];

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
}