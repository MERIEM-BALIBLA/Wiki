<?php

namespace App\Model;
use PDOException;

use App\Model\BaseModel;

class CategorieModel extends BaseModel
{
    private $name;
    private $description;

    public function index($table, $columns)
    {
        return parent::index($table, $columns);
    }

    public function insert($table, $data)
        {
            try {
                // Utilisez les données passées plutôt qu'un tableau vide
                parent::insert($table, $data);
                return true;
            } catch (PDOException $e) {
                // Gérer l'erreur ici si nécessaire (par exemple, journalisation de l'erreur)
                echo "Erreur lors de l'insertion : " . $e->getMessage();
                return false;
            }
        }

    public function update($table,$data,$id)
        {
            // $table = 'categorie';
            try {
                parent::update($table,$data,$id);
                return true;
            } catch(PDOException $e) {
                echo "Erreur lors de l'insertion : " . $e->getMessage();
                return false;
            }
        }

    public function delete($id) {
        try {
            parent::delete($id);
            return true;
        }catch(PDOException $e){
            echo "Erreur lors de l'insertion : " . $e->getMessage();
            return false;
        }
    }
}

