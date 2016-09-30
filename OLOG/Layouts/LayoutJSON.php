<?php

namespace OLOG\Layouts;

class LayoutJSON implements InterfaceLayout
{
    static public function render($content, $action_obj){
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($content);
    }
}