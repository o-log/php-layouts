<?php

namespace LayoutsDemo;

use OLOG\InterfaceAction;
use OLOG\Layouts\InterfacePageTitle;

class DemoAction implements InterfaceAction, InterfacePageTitle
{
    public function pageTitle()
    {
        return 'MAIN';
    }

    public function url(){
        return '/';
    }

    public function action(){
        \OLOG\Layouts\LayoutDefault::render('Content', $this);
    }

}