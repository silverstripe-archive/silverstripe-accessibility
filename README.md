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

In the Settings tab of each page you'll find an Access Key text field. You can enter in any single character in here. This will be available as $AccessKey in the templates. In order for accesskeys to be available, they must be defined as links on all pages. One way to do this is within a hidden div in the footer of your page:

	<div class="hidden accesskeys">
	<% loop AccessKeys %>
		<a href="$Link" accesskey="$AccessKey">$AccessKey = $Title</a>
	<% end_loop %>
	</div>

This markup can be found in AccessKey.ss, and can be included in your footer as:

	<% include AccessKeys %>

If you do not have styles defined for the hidden class, you should put this in your layout css (or scss) file:

	.hidden{
		display:none;
	}

This has already been implemented in the express theme.

### Adding an Accessibility Page

The module adds an Accessibility Page page type. Templates for this page can use $AccessKeys to list all pages on the site that have an access key set. So for example:
	
	<% if AccessKeys %>
	<table class="table">
		<thead>
			<tr>
				<th>Key</th> 
				<th>Page</th>
			</tr>
		</thead>
		<tbody>
			<% loop AccessKeys %>
				<tr>
					<td>$AccessKey</td>
					<td><a href="$Link">$Title</a></td>
				</tr>
			<% end_loop %>
		</tbody>
	</table>
	<% end_if %>

The template for this page type can be found at templates/AccessibilityPage.ss.