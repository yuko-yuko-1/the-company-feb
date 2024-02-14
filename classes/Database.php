<?php
    class Database{
        private $server_name = "localhost"; //127.0.0.1
        private $username = "root";
        private $password = ""; //MAMP: "root" as password
        private $db_name = "the_company"; //database name
        protected $conn;

        public function __construct(){
            #The $this->conn is our connection object
            $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

            # Check if there is no error in the connection
            if ($this->conn->connect_error) {
                # Display custom message and the actual message if there is an error
                die("Unable to connect to the database. " . $this->conn->connect_error);
            }
        }        
    }
?>