<?php

namespace OLOG\Layouts;

interface InterfaceLayout
{
    static public function render($content_html, $action_obj);
}