<?php
namespace Model;
use PDO;

class DBConnect
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn='mysql:host=localhost;dbname=demo';
        $this->user='root';
        $this->password='Vanh2k02@';
    }

    function connect(): PDO
    {
        try {
            return new PDO($this->dsn,$this->user,$this->password);
        }catch (\PDOException $PDOException){
            print_r($PDOException->getMessage());
        }
    }
}