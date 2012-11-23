<?php

/**
* @package accessibility
*/

class AccessibilityPage extends Page {
	function getAccessKeys() {
		$accessPages = SiteTree::get('SiteTree', "AccessKey != ''", 'AccessKey ASC');
		return $accessPages;
	}
}

class AccessibilityPage_Controller extends Page_Controller {
}