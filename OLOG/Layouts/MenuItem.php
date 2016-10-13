<?php

namespace OLOG\Layouts;

class MenuItem
{
    protected $text;
    protected $url;
    protected $children_arr;
    protected $icon_classes_str;
    protected $required_permissions_arr;

    public function __construct($text, $url, $children_arr = null, $icon_classes_str = '', $required_permissions_arr = [])
    {
        $this->setText($text);
        $this->setUrl($url);
        $this->setChildrenArr($children_arr);
        $this->setIconClassesStr($icon_classes_str);
        $this->setRequiredPermissionsArr($required_permissions_arr);
    }

    /**
     * @return mixed
     */
    public function getRequiredPermissionsArr()
    {
        return $this->required_permissions_arr;
    }

    /**
     * @param mixed $required_permissions_arr
     */
    public function setRequiredPermissionsArr($required_permissions_arr)
    {
        $this->required_permissions_arr = $required_permissions_arr;
    }

    /**
     * @return mixed
     */
    public function getIconClassesStr()
    {
        return $this->icon_classes_str;
    }

    /**
     * @param mixed $icon_classes_str
     */
    public function setIconClassesStr($icon_classes_str)
    {
        $this->icon_classes_str = $icon_classes_str;
    }

    /**
     * @return mixed
     */
    public function getChildrenArr()
    {
        return $this->children_arr;
    }

    /**
     * @param mixed $children_arr
     */
    public function setChildrenArr($children_arr)
    {
        $this->children_arr = $children_arr;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}