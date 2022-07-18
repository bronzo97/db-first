<?php

    require_once "carSpecifics.php";

    class Car {

        public $brand;
        public $model;
        public $price;

        public function __construct($_brand, $_model, $_price) {
            $this->brand = $_brand;
            $this->model = $_model;
            $this->price = $_price;
        }

        /**
         * Get the value of brand
         */
        public function getBrand()
        {
                return $this->brand;
        }

        /**
         * Set the value of brand
         */
        public function setBrand($brand): self
        {
                $this->brand = $brand;

                return $this;
        }

        /**
         * Get the value of model
         */
        public function getModel()
        {
                return $this->model;
        }

        /**
         * Set the value of model
         */
        public function setModel($model): self
        {
                $this->model = $model;

                return $this;
        }

        /**
         * Get the value of price
         */
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         */
        public function setPrice($price): self
        {
                $this->price = $price;

                return $this;
        }
    }

?>