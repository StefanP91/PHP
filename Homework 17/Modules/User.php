<?php

    require_once "Base.php";

    class User extends Base{

        public $email;

        public function deleteUser($email){
            $email= $this->base->real_escape_string($email);
            $this->base->query("DELETE FROM users WHERE email = '$email'");
        }

        public function updateUser($inputEmail, $email, $password){
            $password = password_hash($password,PASSWORD_BCRYPT);
            $email = $this->base->real_escape_string($email);
            $password = $this->base->real_escape_string($password);
            $inputEmail = $this->base->real_escape_string($inputEmail);

            $this->base->query("UPDATE users SET password = '$password', email = '$email' WHERE email = '$inputEmail' " );
        }
    }
