<?php

class Model
{
    private $host = "localhost";
    private $db = "category";
    private $user = "root";
    private $password = "";
    public $connect;

    public function __construct()
    {
        $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->user, $this->password);
    }

    public function add_category($category_name)
    {
        $service = $this->connect->prepare("INSERT INTO `category`(`category_name`) VALUES (?)");
        $service->execute([$category_name]);
    }
    public function add_product($pr_name, $price, $cat)
    {
        $addPr = $this->connect->prepare("INSERT INTO `products`(`pr_name`,`price`, `category`) VALUES (?,?,?)");
        $addPr->execute([$pr_name, $price, $cat]);
    }
    public function catSelect()
    {
        $service = $this->connect->query("SELECT * FROM `category`");
        $fetch = $service->fetchAll(PDO::FETCH_ASSOC);
        return $fetch;
    }
    public function prSelect()
    {
        $service = $this->connect->query("SELECT * FROM `products`");
        $fetch = $service->fetchAll(PDO::FETCH_ASSOC);
        return $fetch;
    }
    public function catDelete($id)
    {
        $service = $this->connect->query("DELETE FROM `category` WHERE id = $id");
        return $service;
        
    }
    public function updateCategory()
    {
        $service = $this->connect->query("");
        return $service;
    }
}
