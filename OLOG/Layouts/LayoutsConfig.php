<?php

namespace OLOG\Layouts;

class LayoutsConfig
{
    static protected $admin_layout_class_name;

    /**
     * @return mixed
     */
    public static function getAdminLayoutClassName()
    {
        return self::$admin_layout_class_name;
    }

    /**
     * @param mixed $admin_layout_class_name
     */
    public static function setAdminLayoutClassName($admin_layout_class_name)
    {
        self::$admin_layout_class_name = $admin_layout_class_name;
    }


}