<?php

namespace OLOG\Layouts;

use OLOG\HTML;
use OLOG\InterfaceAction;

class LayoutDefault implements
	InterfaceLayout
{

static public function render($content_html, $action_obj = null) {

$page_toolbar_html = '';

// запрашиваем до начала вывода на страницу, потому что там может редирект или какая-то еще работа с хидерами
if ($action_obj) {
	if ($action_obj instanceof InterfacePageToolbarHtml) {
		$page_toolbar_html = $action_obj->pageToolbarHtml();
	}
}

$h1_str = '';

$include_head = '';
$breadcrumbs_arr = [];

if ($action_obj) {
	if ($action_obj instanceof InterfaceTopActionObj) {
		$top_action_obj = $action_obj->topActionObj();
		$extra_breadcrumbs_arr = [];

		while ($top_action_obj) {
			$top_action_title = '#NO_TITLE#';
			if ($top_action_obj instanceof InterfacePageTitle) {
				$top_action_title = $top_action_obj->pageTitle();
			}

			$top_action_url = '#NO_URL#';
			if ($top_action_obj instanceof InterfaceAction) {
				$top_action_url = $top_action_obj->url();
			}

			array_unshift($extra_breadcrumbs_arr, HTML::tag('a', ['href' => $top_action_url], $top_action_title));

			$top_action_obj = null;
			if ($top_action_obj instanceof InterfaceTopActionObj) {
				$top_action_obj = $top_action_obj->topActionObj();
			}
		}

		$breadcrumbs_arr = array_merge($breadcrumbs_arr, $extra_breadcrumbs_arr);
	}

	if ($action_obj instanceof InterfacePageTitle) {
		$h1_str = $action_obj->pageTitle();
	}

	if ($action_obj instanceof InterfaceHead) {
		$include_head = $action_obj->includeHead();
	}
}

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<?= $include_head ?>
</head>
<body>
<div>
	<?php

	foreach ($breadcrumbs_arr as $link_html) {
		echo $link_html;
	}

	?>
	<?php

	if ($h1_str != '') {
		echo '<h1>' . $h1_str . '</h1>';
	}

	if ($page_toolbar_html != '') {
		echo '<div>' . $page_toolbar_html . '</div>';
	}

	echo $content_html;
	?>
</div>
</body>
</html>
<?php
}
}
