<?php

class MenuItem
{  
    private $ID;
    private $url;
    private $label;

    public function __construct($ID = null) 
    {
        // Fetch from DB?
    }

    public function setID($ID) 
    {
        $this->ID = $ID;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public static function getMenuItems()
    {
        $menuItems = array(
            array(
                'ID'    => 1,
                'url'   => './',
                'label' => 'Home'
            ),
            array(
                'ID'    => 2,
                'url'   => './contact',
                'label' => 'Contact'
            )
        );

        return array_map(function($menuItem) {
            $_menuItem = new MenuItem();
            $_menuItem->setID($menuItem['ID']);
            $_menuItem->setLabel($menuItem['label']);
            $_menuItem->setUrl($menuItem['url']);

            return $_menuItem;
        }, $menuItems);
    }
}

?>