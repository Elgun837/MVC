<?php

class PagesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function home()
    {
        $pr = parent::$db->prSelect();
        parent::$url->get_url('home', $pr);
    }

    public function addCategory()
    {
        $pr = parent::$db->catSelect();
        parent::$url->get_url('addCategory', $pr);
    }
    public function addProduct()
    {

        $row = parent::$db->catSelect();
        parent::$url->get_url('addProduct', $row);
    }
    public function postCategory()
    {
        $category_name = $_POST['category_name'];
        parent::$db->add_category($category_name);
        echo "<center><h1>Successfully added!</h1></center><script>setTimeout(function(){ window.location.href = 'addCategory'; }, 2000)</script>";
    }
    public function postProduct()
    {
        $pr_name = $_POST['product_name'];
        $price = $_POST['price'];
        $cat = $_POST['cat-select'];

        parent::$db->add_product($pr_name, $price, $cat);
        echo "<center><h1>Successfully added!</h1></center><script>setTimeout(function(){ window.location.href = 'home'; }, 2000)</script>";
    }

    public function delete()
    {
        $id = $_GET['id'];
        $pr = parent::$db->catDelete($id);
        parent::$url->get_url('delete', $pr);
    }
    public function edit()
    {
        $id = $_GET['id'];
        $pr = parent::$db->updateCategory($id);
        parent::$url->get_url('edit', $pr);
    }

    public function error()
    {
        parent::$url->get_url('404');
    }
    public function exists($methodName)
    {
        if (method_exists($this, $methodName)) {
            return true;
        } else return false;
    }
}
$pageController = new PagesController;
