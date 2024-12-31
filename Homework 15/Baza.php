<?php

    class Baza{
        const HOST = "localhost";
        const DB_USER = "root";
        const DB_PASS = "";
        const DB_NAME = "web_shop";

        public $konekcija;

        public function __construct(){
            $this->konekcija = mysqli_connect(self::HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
        }
    }