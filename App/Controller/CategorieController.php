<?php

namespace App\Controller;

use App\Model\CategorieModel;

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
            include 'App/View/admin/categories/Insert.php';
        } else {
            // Render the form
            include 'App/View/admin/categories/Insert.php';
        }
    }

    public function update($id)
    {
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $table = array(
                'name' => $_POST['categorie'],
                'description' => $_POST['description'],
            );

            // Instantiate the model
            $categorieModel = new CategorieModel();

            // Update data in the database
            $result = $categorieModel->update('categorie', $table, $id);

            if ($result) {
                echo "Data updated successfully.";
            } else {
                echo "Failed to update data.";
            }

            // Include the view file or redirect as needed
            include 'App/View/admin/categories/Update.php';
        } else {
            // Fetch the category data for the specified id
            $categorieModel = new CategorieModel();
            $category = $categorieModel->getById('categorie', $id);

            // Render the update form
            include 'App/View/admin/categories/Update.php';
        }
    }
    
}
