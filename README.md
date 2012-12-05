# Accessibility

## Overview

The module allows editors to specify access keys for pages and have them all listed in an access key directory.

## Requirements

 * SilverStripe 3.0+

## Installation

Install with composer by running:

	composer require silverstripe/accessibility:*

in the root of your SilverStripe project.

Or just clone/download the git repository into a subfolder (usually called "accessibility") of your SilverStripe project.

After either installation method, you'll need to run dev/build.

## Usage

### Adding Access Keys

In the Settings tab of each page you'll find an Access Key text field. You can enter in any single character in here. This will be available as $AccessKey in the templates, so the following would be a good example of how to display the menus in your templates:

	<% loop Menu(1) %>
		<a href="$Link" title="Go to the $Title.XML page" <% if AccessKey %> accesskey="$AccessKey"<% end_if %>>
			$MenuTitle.XML
		</a>
	<% end_loop %>

This is already implemented in the express theme.

### Adding an Accessibility Page

The module adds an Accessibility Page page type. Templates for this page can used $AccessKeys to get an ordered list of all pages on the site that have an access key set, which they can use to display a list of them all. So for example:

	<ul class="access-directory">
		<% loop AccessKeys %>
			<li>
				<span class="key">$AccessKey</span>
				<a href="$Link">$Title</a>
			</li>
		<% end_loop %>
	</ul>

The express theme includes an template for this page type.