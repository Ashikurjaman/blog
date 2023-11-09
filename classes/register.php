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
        }
    }
?>