<?php 
    class User {
        private int $id;
        private string $firstname;
        private string $lastname;
        private int $fixedDiscount;
        private int $variableDiscount;
        private int $groupId;

        public function __construct(int $id, string $firstname, string $lastname, int $fixed_discount, int $variable_discount, int $group_id) {
            $this->id = $id;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->fixed_discount = $fixedDiscount;
            $this->variable_discount = $variableDiscount;
            $this->group_id = $groupId;
        }
    }