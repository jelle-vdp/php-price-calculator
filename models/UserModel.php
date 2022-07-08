<?php 
    class User {
        private int $id;
        private string $firstname;
        private string $lastname;
        private int $fixedDiscount;
        private int $variableDiscount;
        private int $groupId;

        public function __construct(int $id, string $firstname, string $lastname, int $fixedDiscount, int $variableDiscount, int $groupId) {
            $this->id = $id;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->fixedDiscount = $fixedDiscount;
            $this->variableDiscount = $variableDiscount;
            $this->groupId = $groupId;
        }

        public function getFirstName(): string {
            return $this->firstname;
        }

        public function getLastName(): string {
            return $this->lastname;
        }
    }