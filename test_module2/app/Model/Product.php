<?php


namespace Model;


class Product
{
    public $id;
    public $nameProduct;
    public $productType;
    public $price;
    public $amount;
    public $dateOfManufacture;
    public $description;

    public function __construct($nameProduct, $productType, $price, $amount, $dateOfManufacture	, $description)
    {
        $this->nameProduct = $nameProduct;
        $this->productType = $productType;
        $this->price = $price;
        $this->amount = $amount;
        $this->dateOfManufacture = $dateOfManufacture;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    /**
     * @param mixed $nameProduct
     */
    public function setNameProduct($nameProduct): void
    {
        $this->nameProduct = $nameProduct;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param mixed $productType
     */
    public function setProductType($productType): void
    {
        $this->productType = $productType;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getDateOfManufacture()
    {
        return $this->dateOfManufacture;
    }

    /**
     * @param mixed $dateOfManufacture
     */
    public function setDateOfManufacture($dateOfManufacture): void
    {
        $this->dateOfManufacture = $dateOfManufacture;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

}