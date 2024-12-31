<?php

    class Base {
        protected $base;

        public function __construct() {
            $this->base = mysqli_connect("localhost", "root", "", "web_shop");
        }
    }