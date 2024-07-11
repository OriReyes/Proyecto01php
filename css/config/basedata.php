<?php
    class Database {
        private $host = "localhost";
        private $db_name = "peliculas_cac_java";
        private $username = "root";
        private $password = "";
        public $conn;
        //el constructor no esta especificado
         

        // esto es un getter
        public function getConnection() {
            $this->conn = null;
            try {
                $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
            } catch (Exception $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }
?>