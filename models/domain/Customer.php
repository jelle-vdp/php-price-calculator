<?php

class Customer
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private CustomerGroup $groupId;
    private int $fixedDiscount;
    private int $variableDiscount;

    /**
     * @param int $id
     * @param string $firstName
     * @param string $lastName
     * @param int $groupId
     * @param int $fixedDiscount
     * @param int $variableDiscount
     */
    public function __construct(int $id, string $firstName, string $lastName, int $groupId, int $fixedDiscount, int $variableDiscount)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->groupId = $groupId;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @return int
     */
    public function getFixedDiscount(): int
    {
        return $this->fixedDiscount;
    }

    /**
     * @return int
     */
    public function getVariableDiscount(): int
    {
        return $this->variableDiscount;
    }


}