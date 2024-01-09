<?php 
    namespace App\Controller;
    // use app\Controller\BaseController;
    use app\Model\HomeModel;  
    class HomeController {
     
        public function index(){
            
            include 'App/view/Home.php';
        }
    }