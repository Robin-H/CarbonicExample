<?php

class PageController 
{
    public function main()
    {
        Response::parse('app/view/page.php');
    }
}

?>