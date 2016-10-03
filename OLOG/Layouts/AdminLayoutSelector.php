<?php

namespace OLOG\Layouts;

use OLOG\Assert;
use OLOG\CheckClassInterfaces;

class AdminLayoutSelector
{
    static public function render($content_html, $action_obj = null)
    {
        $layout_class_name = LayoutsConfig::getAdminLayoutClassName();

        Assert::assert($layout_class_name, 'Admin layout class name not configured');
        Assert::assert(CheckClassInterfaces::classImplementsInterface($layout_class_name, InterfaceLayout::class), 'Layout class ' . $layout_class_name . ' does not implement InterfaceLayout');

        $layout_class_name::render($content_html, $action_obj);
    }
}