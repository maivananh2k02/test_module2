<?php

namespace Controller;

use model\Product;
use Model\ProductModel;

class ProductControl
{
    public $productModel;

    function __construct()
    {
        $this->productModel = new ProductModel();
    }

    function index()
    {
        $products = $this->productModel->getAll();
        include 'app/View/list.php';
    }

    function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'app/View/add.php';
        } else {
            $nameProduct = $_POST['nameProduct'];
            $productType = $_POST['productType'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $dateOfManufacture = $_POST['dateOfManufacture'];
            $description = $_POST['description'];
            $product = new Product($nameProduct, $productType, $price, $amount, $dateOfManufacture, $description);
            var_dump($product);
            header('Location: index.php');
        }
    }

    function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];

            $product = $this->productModel->get($id);

            include 'app/View/update.php';
        } else {
            $id = $_POST['id'];

                $nameProduct = $_POST['nameProduct'];
                $productType = $_POST['productType'];
                $price = $_POST['price'];
                $amount = $_POST['amount'];
                $dateOfManufacture = $_POST['dateOfManufacture'];
                $description = $_POST['description'];
                $product = new Product($nameProduct, $productType, $price, $amount, $dateOfManufacture, $description);
                $this->productModel->update($id, $product);
                header('Location: index.php');

        }
    }

    function delete()
    {
        $id = $_GET['id'];
        $this->productModel->delete($id);
        header('Location: index.php');
    }

    function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = $_POST['search'];
            $products = $this->productModel->search($search);
            include 'app/View/list.php';
        }
    }
}