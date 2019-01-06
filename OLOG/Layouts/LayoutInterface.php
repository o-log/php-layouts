<?php
declare(strict_types=1);

/**
 * @author Oleg Loginov <olognv@gmail.com>
 */

namespace OLOG\Layouts;

interface LayoutInterface
{
    static public function render($content_html, $action_obj);
}
