<?php

namespace LayoutsDemo;

use OLOG\Layouts\LayoutDefault;
use OLOG\Layouts\LayoutsConfig;

class LayoutsDemoConfig
{
    static public function init(){
        LayoutsConfig::setAdminLayoutClassName(LayoutDefault::class);
    }
}