<?php

namespace OLOG\Layouts;

interface InterfaceTopActionObj
{
    // возвращает объект вышестоящего экшена для крошек или нулл
    public function topActionObj();
}