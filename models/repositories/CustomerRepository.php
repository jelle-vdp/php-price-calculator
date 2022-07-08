<?php

class CustomerRepository
{
    public function findById(int $id): Customer {
        return new Customer($id, "jef", "spast", 1, 5, 2);
    }
}