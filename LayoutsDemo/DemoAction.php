<?php
declare(strict_types=1);

/**
 * @author Oleg Loginov <olognv@gmail.com>
 */

namespace LayoutsDemo;

use OLOG\ActionInterface;
use OLOG\Layouts\LayoutDefault;
use OLOG\Layouts\PageTitleInterface;
use OLOG\Layouts\RenderInLayoutInterface;

class DemoAction implements ActionInterface, PageTitleInterface, RenderInLayoutInterface
{
    public function renderInLayout($html_or_callable)
    {
        LayoutDefault::render($html_or_callable, $this);
    }

    public function pageTitle()
    {
        return 'MAIN';
    }

    public function url(){
        return '/';
    }

    public function action(){
        $this->renderInLayout('Content');
    }
}
