<?php
    class Product 
    {
        public $name;
        public $price;
        public $discount;

        public function __construct($name, $price, $discount){
            $this->name = $name;
            $this->price = $price;
            $this->discount = $discount;
        }
        public function getPrice() {
            return $this->price;
        }

        public function setPrice ($price) {
            $this->price = $price;
            return $price;
        }

        public function getName () {
            return $this->name;
        }

        public function setName ($name) {
            $this->name = $name;
            return $name;
        }

        public function getDiscount () {
            return $this->discount;
        }

        public function setDiscount ($diskon) {
            $this->discount = $diskon;
            return $diskon;
        }
    }

    class CDMusic extends Product
    {
        public $artist = "artis", $genre = "genre";

        public function __construct($name, $price, $discount) {
            parent::__construct($name, $price, $discount);
        }

        public function getArtist () {
            return $this->artist;
        }
        
        public function setArtist ($artis) {
            $this->artist = $artis;
            return $artis;
        }

        public function getGenre () {
            return $this->genre;
        }

        public function setGenre ($Genre) {
            $this->genre = $Genre;
            return $Genre;
        }

        public function setPrice ($price) {
            parent::setPrice($price * 1);
        }

        public function setDiscount ($discount) {
            parent::setDiscount($discount + 5);
        }
    }

    class CDCabinet extends Product
    {
        public $capacity = "kapasitas", $model = "model";

        public function __construct($name, $price, $discount) {
            parent::__construct($name, $price, $discount);
        }

        public function getCapacity () {
            return $this->capacity;
        }

        public function setCapacity ($kapasitas) {
            $this->capacity = $kapasitas;
            return $kapasitas;
        }

        public function getModel () {
            return $this->model;
        }

        public function setModel ($models) {
            $this->model = $models;
            return $models;
        }

        public function setPrice($price) {
            parent::setPrice($price * 1);
        }
    }
?>