<?php

class Content
{
    private $ID;
    private $content;
    private $author;
    private $dateAdded;
    private $dateUpdated;

    public function __construct($ID)
    {
        // SQL to grab content and fill object
    }

    public function __get($property) 
    {
        if (property_exists($this, $property)) {
            return $this->{$property};
        }
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function save()
    {
        // Write to database
    }
}

?>