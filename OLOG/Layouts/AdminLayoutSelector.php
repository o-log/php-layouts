<?php

namespace OLOG\Layouts;

use OLOG\ActionInterface;
use OLOG\Assert;
use OLOG\CheckClassInterfaces;

class AdminLayoutSelector
{
    static public function render($content_html, ActionInterface $action_obj = null)
    {
        $layout_class_name = LayoutsConfig::getAdminLayoutClassName();

        if (!$layout_class_name) {
            throw new \Exception('Admin layout class name not configured');
        }

        // layout class interface checked when assigning to config
        $layout_class_name::render($content_html, $action_obj);
    }
}