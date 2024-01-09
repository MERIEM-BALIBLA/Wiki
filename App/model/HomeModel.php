<?php 
    namespace App\Model;
    use App\Model\BaseModel; // Corrected case

    class HomeModel extends BaseModel {

        // private $name;
        // private $description;
        // private $categorie;
        // private $pictue_src;
        // private $status;
        // private $auther;

        public function __construct($name, $description, $categorie, $pictue_src, $status, $auther) {
            $this->name = $name;
            $this->description = $description;
            $this->categorie = $categorie;
            $this->pictue_src = $pictue_src;
            $this->status = $status;
            $this->auther = $auther;
        }

        // public function index() {
        //     return parent::index('categorie', '*'); // Corrected syntax
        // }
        
    }
