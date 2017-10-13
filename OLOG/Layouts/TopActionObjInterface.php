<?php

namespace OLOG\Layouts;

interface TopActionObjInterface
{
    // возвращает объект вышестоящего экшена для крошек или нулл
    public function topActionObj();
}