<?php
declare(strict_types=1);

/**
 * @author Oleg Loginov <olognv@gmail.com>
 */

namespace OLOG\Layouts;

interface RenderInLayoutInterface
{
    // выводит контент в лэйауте
    public function renderInLayout($html_or_callable);
}
