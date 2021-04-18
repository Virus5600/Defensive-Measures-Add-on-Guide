<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facebook\Facebook;

class PageController extends Controller
{
	protected function index(Facebook $fb) {

		$fb->setDefaultAccessToken(env('FACEBOOK_PAGE_ACCESS_TOKEN'));

		try {
			// Returns a `FacebookFacebookResponse` object
			$videos = $fb->get('720160775280918/videos?fields=source,title,created_time,description')->getGraphEdge();
		} catch(FacebookExceptionsFacebookResponseException $e) {
			dd('Graph returned an error: ' . $e->getMessage());
			exit;
		} catch(FacebookExceptionsFacebookSDKException $e) {
			dd('Facebook SDK returned an error: ' . $e->getMessage());
			exit;
		}
		
		$vid = 0;
		return view('index', [
			'videos' => $videos,
			'vid' => $vid
		]);
	}

	protected function privacyPolicy() {
		return view('privacy_policy', []);
	}

	protected function downloads() {
		return view('downloads/downloads', []);
	}

	protected function changelog($version) {
		return view('downloads/changelog', [
			'version' => $version
		]);
	}

	protected function installation($type='win10') {

		return view('installation', [
			'type' => $type
		]);
	}
}