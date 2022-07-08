<?php

class CustomerGroupRepository
{

    public function findById(int $id): array {
        return [new CustomerGroup($id, "brol", 1, 5, 2)];
    }
}