<?php
namespace App\Model;
use core\Connexion;
use PDO;
use PDOException;

class BaseModel {
    protected $table;
    protected $db;

    public function __construct() {
        $this->db = Connexion::getInstance()->getConnection();
    }

    public function getById($table, $id)
    {
        try {
            $query = "SELECT * FROM $table WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle the exception, log, or return false
            echo "Error getting data by id: " . $e->getMessage();
            return false;
        }
    }

    public function index($table, $columns)
    {
        try {
            $query = "SELECT $columns FROM $table ORDER BY id DESC LIMIT 5";
            $stmt = $this->db->prepare($query);
            
            // Exécutez la requête
            $stmt->execute();
            
            // Utilisez fetchAll() pour récupérer tous les résultats
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // En cas d'erreur, imprimez ou enregistrez l'erreur
            // Ne laissez pas une exception non capturée
            echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
            return false; // ou gérer l'erreur d'une autre manière
        }
    }

    public function insert($table, $data)
        {
            try {
                $columns = implode(", ", array_keys($data));
                $values = ":" . implode(", :", array_keys($data));

                $query = "INSERT INTO $table ($columns) VALUES ($values)";
                $stmt = $this->db->prepare($query); // Utilisez $this->db au lieu de $this->PDO
                $stmt->execute($data);

                echo "Record added successfully!";
            } catch (PDOException $e) {
                echo "Error creating record: " . $e->getMessage();
            }
        }


        protected function update($table, $data, $id)
        {
            try {
                $update_arr = [];
                foreach ($data as $column => $value) {
                    $update_arr[] = "$column = :$column";
                }
                $update_arr = implode(", ", $update_arr);

                $query = "UPDATE $table SET $update_arr WHERE id = :id";
                $data['id'] = $id;

                $stmt = $this->db->prepare($query);
                $stmt->execute($data);

                echo "Record updated successfully!";
            } catch (PDOException $e) {
                echo "Error updating record: " . $e->getMessage();
            }
        }


        public function delete($id){
            $statement = $this->db->prepare('DELETE FROM media WHERE id = :id');
            $statement -> bindParam(":id",$id);
            return $statement->execute();
        }
        

    }



   


    

