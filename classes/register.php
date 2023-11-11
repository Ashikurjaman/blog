<?php

        include_once("../lib/database.php");
        include("../Helpers/Formate.php");


        class Register{

            public $db;
            public $fr;

            public function __construct()
            {

                $this->db = new Database();
                $this->fr = new Formate();
        }

        public function AddUser($data){
            $name = $this->fr->Validation($data["name"]);
            $phone = $this->fr->Validation($data["phone"]);
            $email = $this->fr->Validation($data["email"]);
            $password = $this->fr->Validation($data["password"]);
            $v_token = md5(rand());

            $e_query = "SELECT * FROM user WHERE email = '$email' ";
            $check_email = $this->db->select("$e_query");

            if($check_email > 0){
                $error = "this email is already existed ";
                return $error;
                header("location:login.php");
                

                
        }

        if(empty($name) || empty($phone) || empty($email) || empty($password)){
            $error = "Field must not be empty";
            return $error;
        }
      }
    }
?>