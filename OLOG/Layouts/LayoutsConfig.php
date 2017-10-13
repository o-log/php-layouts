<?php

namespace OLOG\Layouts;

class LayoutsConfig
{
    static protected $admin_layout_class_name = LayoutDefault::class;
    static protected $admin_site_title = 'SITE TITLE NOT SET';
    static protected $admin_menu_classes_arr = [];

    /**
     * @return array
     */
    public static function getAdminMenuClassesArr()
    {
        return self::$admin_menu_classes_arr;
    }

    /**
     * @param array $admin_menu_classes_arr
     */
    public static function setAdminMenuClassesArr($admin_menu_classes_arr)
    {
        self::$admin_menu_classes_arr = $admin_menu_classes_arr;
    }

    /**
     * @return string
     */
    public static function getAdminSiteTitle()
    {
        return self::$admin_site_title;
    }

    /**
     * @param string $admin_site_title
     */
    public static function setAdminSiteTitle($admin_site_title)
    {
        self::$admin_site_title = $admin_site_title;
    }

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
        if (!is_a($admin_layout_class_name, LayoutInterface::class, true)) {
            throw new \Exception('Layout class ' . $admin_layout_class_name . ' does not implement InterfaceLayout');
        }

        self::$admin_layout_class_name = $admin_layout_class_name;
    }


}