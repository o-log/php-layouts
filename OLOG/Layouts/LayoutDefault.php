<?php

namespace OLOG\Layouts;

class LayoutDefault
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
$breadcrumbs_arr = BTConfig::getBreadcrumbsPrefixArr();

if ($action_obj){
    if ($action_obj instanceof InterfacePageTitle){
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

    if (!empty($breadcrumbs_arr)){
        echo BT::breadcrumbs($breadcrumbs_arr);
    }

    ?>
    <h1><?= $h1_str ?></h1>
    <?php

    if ($page_toolbar_html != ''){
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
