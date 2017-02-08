<?php

namespace OLOG\Layouts;

use OLOG\Router;

class LayoutJSON implements InterfaceLayout
{
    static public function render($content, $action_obj, $encode_json_options = 0)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($content, $encode_json_options);
    }

    static public function renderResponse($msg_arr, $success)
    {
        $action_obj = Router::getCurrentActionObj();
        self::render(['success' => $success, 'msg_arr' => $msg_arr], $action_obj);
    }
}