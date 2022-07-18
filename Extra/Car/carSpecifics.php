<?php


    class Specifics extends Car {
        public $displacement;
        public $weelMateial;
        public $color;
        public $fuel;
        public $gearbox;
        public $numbersOfOwners;
        public $mileage;
        public $doors;
        public $yearOfPurchase;
        public $yearOfRelease;


        public function __construct($_brand, $_model, $_price, $_mileage, $_displacement, $_year_of_purchase, $_year_of_release) {

            parent::__construct($_brand, $_model, $_price);
            
            $this->mileace = $_mileage;
            $this->displacement = $_displacement;
            $this->year_of_puchase = $_year_of_purchase;
            $this->year_of_release = $_year_of_release;
        }



        /**
         * Get the value of displacement
         */
        public function getDisplacement()
        {
                return $this->displacement;
        }

        /**
         * Set the value of displacement
         */
        public function setDisplacement($displacement): self
        {
                $this->displacement = $displacement;

                return $this;
        }

        /**
         * Get the value of weelMateial
         */
        public function getWeelMateial()
        {
                return $this->weelMateial;
        }

        /**
         * Set the value of weelMateial
         */
        public function setWeelMateial($weelMateial): self
        {
                $this->weelMateial = $weelMateial;

                return $this;
        }

        /**
         * Get the value of color
         */
        public function getColor()
        {
                return $this->color;
        }

        /**
         * Set the value of color
         */
        public function setColor($color): self
        {
                $this->color = $color;

                return $this;
        }

        /**
         * Get the value of fuel
         */
        public function getFuel()
        {
                return $this->fuel;
        }

        /**
         * Set the value of fuel
         */
        public function setFuel($fuel): self
        {
                $this->fuel = $fuel;

                return $this;
        }

        /**
         * Get the value of gearbox
         */
        public function getGearbox()
        {
                return $this->gearbox;
        }

        /**
         * Set the value of gearbox
         */
        public function setGearbox($gearbox): self
        {
                $this->gearbox = $gearbox;

                return $this;
        }

        /**
         * Get the value of numbersOfOwners
         */
        public function getNumbersOfOwners()
        {
                return $this->numbersOfOwners;
        }

        /**
         * Set the value of numbersOfOwners
         */
        public function setNumbersOfOwners($numbersOfOwners): self
        {
                $this->numbersOfOwners = $numbersOfOwners;

                return $this;
        }

        /**
         * Get the value of mileage
         */
        public function getMileage()
        {
                return $this->mileage;
        }

        /**
         * Set the value of mileage
         */
        public function setMileage($mileage): self
        {
                $this->mileage = $mileage;

                return $this;
        }

        /**
         * Get the value of doors
         */
        public function getDoors()
        {
                return $this->doors;
        }

        /**
         * Set the value of doors
         */
        public function setDoors($doors): self
        {
                $this->doors = $doors;

                return $this;
        }

        /**
         * Get the value of yearOfPurchase
         */
        public function getYearOfPurchase()
        {
                return $this->yearOfPurchase;
        }

        /**
         * Set the value of yearOfPurchase
         */
        public function setYearOfPurchase($yearOfPurchase): self
        {
                $this->yearOfPurchase = $yearOfPurchase;

                return $this;
        }

        /**
         * Get the value of yearOfRelease
         */
        public function getYearOfRelease()
        {
                return $this->yearOfRelease;
        }

        /**
         * Set the value of yearOfRelease
         */
        public function setYearOfRelease($yearOfRelease): self
        {
                $this->yearOfRelease = $yearOfRelease;

                return $this;
        }
    }




?>