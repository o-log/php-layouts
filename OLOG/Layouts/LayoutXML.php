<?php
declare(strict_types=1);

/**
 * @author Oleg Loginov <olognv@gmail.com>
 */

namespace OLOG\Layouts;

class LayoutXML
{
    static public function render($content_str, $action_obj)
    {
        header('Content-Type: text/xml; charset=utf-8', true);
        echo $content_str;
    }
}
