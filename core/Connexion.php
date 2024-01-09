<?php
namespace core;
use PDO;
use PDOException;
class Connexion {
    private static $instance;
    private $connection;

    private function __construct() {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'wiki';

        try {
            // connection
            $this->connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            
            // Set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Output a message to indicate successful connection
            echo "Connected to the database successfully";
        } catch (PDOException $e) {
            // Output an error message if connection fails
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
