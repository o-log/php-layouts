<?php
namespace OLOG;

/**
 * Интерфейс для получения лого страницы
 */
// TODO: remove, actual version is in OLOG\Layouts
interface IntefacePageLogoHtml
{
    /**
     * Возвращает html строку, содержащую лого страницы
     * @return string
     */
    public function pageLogoHtml();
}