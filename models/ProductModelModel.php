<?php 
    class ProductModel {
        private int $id;
        private string $name;
        private int $price;

        public function __construct(int $id, string $name, int $price) {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
        }

        public function getName(): string {
            return $this->name;
        }
    }