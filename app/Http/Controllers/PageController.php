<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facebook\Facebook;

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
		return TmpController::getChangelog();
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

		try {
			// Returns a `FacebookFacebookResponse` object
			$videos = $fb->get('720160775280918/videos?fields=source,title,created_time,description')->getGraphEdge();
		} catch (\Facebook\Exceptions\FacebookSDKException $e) {
			dd($e);
			exit;
		} catch (\Facebook\Exceptions\FacebookResponseException $e) {
			dd($e);
			exit;
		}
		
		$vid = 0;
		return view('index', [
			'carousel' => $this->getCarousel(),
			'videos' => $videos,
			'vid' => $vid,
			'latest_version' => $this->getVersions()->reverse()->first()
		]);
	}

	protected function privacyPolicy($font='Minecraftia') {
		return view('privacy_policy', [
			'font' => $font
		]);
	}

	protected function privacyPolicyArial() {
		return $this->privacyPolicy('Arial');
	}

	protected function downloads() {
		return view('downloads/downloads', [
			'versions' => $this->getVersions()->reverse()
		]);
	}

	protected function changelog($version) {
		$v = $this->getVersions()->where('version', $version)->first();

		return view('downloads/changelog', [
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
		$append = $type == "all" ? ".index" : ".".$type;

		$contents = $this->getContents();
		if (!$type == 'all')
			$contents = $this->getContents()->where('type', $type);

		return view('contents' . $append, [
			'type' => $type,
			'contents' => $contents
		]);
	}
}