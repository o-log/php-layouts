<?php
declare(strict_types=1);

/**
 * @author Oleg Loginov <olognv@gmail.com>
 */

namespace OLOG\Layouts;

class LayoutJSON implements LayoutInterface
{
    static public function render($content, $action_obj, $encode_json_options = 0)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($content, $encode_json_options);
    }
}
