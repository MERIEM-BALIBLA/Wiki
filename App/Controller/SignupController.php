<?php 
    namespace App\Controller;
    // use core\Connexion;
    class SignupController {
     
        public function index(){
            include 'App/view/Signup.php';
            
        }

        public function signup() {
            // if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //     echo "hello world";
            // }else {
            //     echo "error";
            // }
            // $sign = new SignupController();
            // $sign -> test();
            
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confim_pass = $_POST['confirm_password'];
            }else {
                echo "error";
            }
        }
    }
