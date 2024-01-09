<?php

namespace App\Controller;

use App\Model\CategorieModel;
use PDOException;

class CategorieController
{
    public function index()
    {

        // // Assuming you have instantiated your models
        $categorieModel = new CategorieModel(); 
        
        // // Fetch categories from the database
        $categories = $categorieModel->index('categorie','*');

        include 'App/view/admin/categories/index.php';
    }

   
   
    public function insert()
    {
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $table = array(
                'name' => $_POST['categorie'],
                'description' => $_POST['description'],
            );

            // Instantiate the model
            $categorieModel = new CategorieModel();

            // Insert data into the database
            $result = $categorieModel->insert('categorie', $table);

            if ($result) {
                echo "Data inserted successfully.";
            } else {
                echo "Failed to insert data.";
            }

            // Include the view file
            include 'App/View/admin/categories/index.php';
        } else {
            // Render the form
            include 'App/View/admin/categories/Insert.php';
        }
    }

    public function update($id)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $table = 'categorie';
        $data = array(
            'name' => $_POST['categorie'],
            'description' => $_POST['description'],
        );

        $categorieModel = new CategorieModel();

        $result = $categorieModel->update($table, $data, $id);

        if ($result) {
            echo "Record updated successfully!";
        } else {
            echo "Error updating record!";
        }
    } else {
        $categorieModel = new CategorieModel();
        $category = $categorieModel->getById('categorie', $id);

        include 'App/view/admin/categories/index.php';
    }
}


}
