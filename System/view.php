<?php

class View 
{
    public function get_url($page,$sub = false, $id = false)
    {
        require_once "view/".$page.".php";
    }
}