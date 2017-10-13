<?php

namespace OLOG\Layouts;

use OLOG\ActionInterface;
use OLOG\HTML;

class LayoutDefault implements
	LayoutInterface
{

static public function render($content_html, $action_obj = null) {

$page_toolbar_html = '';

// запрашиваем до начала вывода на страницу, потому что там может редирект или какая-то еще работа с хидерами
if ($action_obj) {
	if ($action_obj instanceof PageToolbarHtmlInterface) {
		$page_toolbar_html = $action_obj->pageToolbarHtml();
	}
}

$h1_str = '';

$breadcrumbs_arr = [];

if ($action_obj) {
	if ($action_obj instanceof TopActionObjInterface) {
		$top_action_obj = $action_obj->topActionObj();
		$extra_breadcrumbs_arr = [];

		while ($top_action_obj) {
			$top_action_title = '#NO_TITLE#';
			if ($top_action_obj instanceof PageTitleInterface) {
				$top_action_title = $top_action_obj->pageTitle();
			}

			$top_action_url = '#NO_URL#';
			if ($top_action_obj instanceof ActionInterface) {
				$top_action_url = $top_action_obj->url();
			}

			array_unshift($extra_breadcrumbs_arr, HTML::tag('a', ['href' => $top_action_url], $top_action_title));

			$top_action_obj = null;
			if ($top_action_obj instanceof TopActionObjInterface) {
				$top_action_obj = $top_action_obj->topActionObj();
			}
		}

		$breadcrumbs_arr = array_merge($breadcrumbs_arr, $extra_breadcrumbs_arr);
	}

	if ($action_obj instanceof PageTitleInterface) {
		$h1_str = $action_obj->pageTitle();
	}
}

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
