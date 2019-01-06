<?php
declare(strict_types=1);

/**
 * @author Oleg Loginov <olognv@gmail.com>
 */

namespace OLOG\Layouts;

interface TopActionObjInterface
{
    // возвращает объект вышестоящего экшена для крошек или нулл
    public function topActionObj();
}
