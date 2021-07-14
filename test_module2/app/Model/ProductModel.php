<?php


namespace Model;

use PDO;

class ProductModel
{
    protected $datebase;

    public function __construct()
    {
        $db = new DBConnect();
        $this->datebase = $db->connect();
    }

    function getAll(): array
    {
        $sql = 'select * from products';
        $stmt = $this->datebase->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function get($id)
    {
        $sql = 'select * from products where id=?';
        $stmt = $this->datebase->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    function add($product): bool
    {
        $sql = 'insert into products(nameProduct,productType,price,amount,dateOfManufacture,description) values (?,?,?,?,?,?)';
        $stmt = $this->datebase->prepare($sql);
        $stmt->bindParam(1, $product->nameProduct);
        $stmt->bindParam(2, $product->productType);
        $stmt->bindParam(3, $product->price);
        $stmt->bindParam(4, $product->amount);
        $stmt->bindParam(5, $product->dateOfManufacture);
        $stmt->bindParam(6, $product->description);
        return $stmt->execute();
    }

    function update($id, $product): bool
    {
        $sql = 'update products set nameProduct=?,productType=?,price=?,amount=?,dateOfManufacture=?,description=? where id=?';
        $stmt = $this->datebase->prepare($sql);
        $stmt->bindParam(1, $product->nameProduct);
        $stmt->bindParam(2, $product->productType);
        $stmt->bindParam(3, $product->price);
        $stmt->bindParam(4, $product->amount);
        $stmt->bindParam(5, $product->dateOfManufacture);
        $stmt->bindParam(6, $product->description);
        $stmt->bindParam(7, $id);
        return $stmt->execute();
    }

    function delete($id): bool
    {
        $sql='delete from products where id=?';
        $stmt=$this->datebase->prepare($sql);
        $stmt->bindParam(1,$id);
        return $stmt->execute();
    }

    function search($search): array
    {
        $sql="select * from products where nameProduct like '%$search%'";
        $stmt=$this->datebase->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}