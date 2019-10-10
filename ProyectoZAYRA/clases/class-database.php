<?php
    
    require '../../vendor/autoload.php';

    use Kreait\Firebase\Factory;

    class Database{
        private $keyFile = '../../Secret/proyecto-poo-83def-7a9b3902f3fb.json';
        private $URI = 'https://proyecto-poo-83def.firebaseio.com/';
        private $db;

        public function __construct(){
            $firebase = (new Factory)
                ->withServiceAccount($this->keyFile)
                ->withDatabaseUri($this->URI)
                ->create();

            $this->db = $firebase->getDatabase();
        }

        public function getDB(){
            return $this->db;
        }
    }
?>