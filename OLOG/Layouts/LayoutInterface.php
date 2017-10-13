<?php

namespace OLOG\Layouts;

interface LayoutInterface
{
    static public function render($content_html, $action_obj);
}