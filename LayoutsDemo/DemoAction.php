<?php

namespace LayoutsDemo;

use OLOG\ActionInterface;
use OLOG\Layouts\AdminLayoutSelector;
use OLOG\Layouts\PageTitleInterface;

class DemoAction implements ActionInterface, PageTitleInterface
{
    public function pageTitle()
    {
        return 'MAIN';
    }

    public function url(){
        return '/';
    }

    public function action(){
        AdminLayoutSelector::render('Content', $this);
    }

}