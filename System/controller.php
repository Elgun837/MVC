<?php

class Controller extends Model
{
    public static $url;
    public static $db;
    public function __construct()
    {
        self::$db = new Model();
        self::$url = new View();
       
    }
}