<?php

/**
* @package accessibility
*/

class Accessible extends DataExtension {
	static $db = array(
		'AccessKey' => 'Varchar(1)'
	);

	public function updateSettingsFields(FieldList $fields) {
		// Access key field.
		$fields->addFieldToTab('Root.Settings', new CompositeField(
			$label = new LabelField (
				$name = "extraLabel",
				$content = '<p><em>' . _t(
					'AccessKeys.LABEL',
					'<strong>Note:</strong> Access Keys are optional, but must be a single unique character. Check your current access keys to avoid conflict'
				) . '</em></p>'
			),
			new CompositeField(
				new TextField('AccessKey', $title = 'Access Key', $value = '', $maxLength = 1)
			)
		));
	}

	// TODO: Add a form validation step that verifies that there isn't a duplicate access key.
}