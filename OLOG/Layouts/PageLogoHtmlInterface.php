<?php
declare(strict_types=1);

/**
 * @author Oleg Loginov <olognv@gmail.com>
 */

namespace OLOG\Layouts;

interface PageLogoHtmlInterface
{
    /**
     * Возвращает html строку, содержащую лого страницы
     * @return string
     */
    public function pageLogoHtml();
}
