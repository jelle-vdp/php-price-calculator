<?php

class CustomerGroup
{
    private int $id;
    private string $name;
    private int $parentId;
    private int $fixedDiscount;
    private int $variableDiscount;

    /**
     * @param int $id
     * @param string $name
     * @param int $parentId
     * @param int $fixedDiscount
     * @param int $variableDiscount
     */
    public function __construct(int $id, string $name, int $parentId, int $fixedDiscount, int $variableDiscount)
    {
        $this->id = $id;
        $this->name = $name;
        $this->parentId = $parentId;
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
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     */
    public function setParentId(int $parentId): void
    {
        $this->parentId = $parentId;
    }

    /**
     * @return int
     */
    public function getFixedDiscount(): int
    {
        return $this->fixedDiscount;
    }

    /**
     * @param int $fixedDiscount
     */
    public function setFixedDiscount(int $fixedDiscount): void
    {
        $this->fixedDiscount = $fixedDiscount;
    }

    /**
     * @return int
     */
    public function getVariableDiscount(): int
    {
        return $this->variableDiscount;
    }

    /**
     * @param int $variableDiscount
     */
    public function setVariableDiscount(int $variableDiscount): void
    {
        $this->variableDiscount = $variableDiscount;
    }


}