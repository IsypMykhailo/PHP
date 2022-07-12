<?php

class Category
{
    private string $name;
    private array $list_products;

    public function __construct(string $_name, array $_list_products){
        $name = $_name;
        $list_products = $_list_products;
    }

    public function getCategoryName(): string{
        return $this->name;
    }

    public function getCategoryProducts(): array{
        return $this->list_products;
    }
}