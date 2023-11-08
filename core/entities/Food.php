<?php namespace entity;

class Food{
    private string $item_name;
    private int $ratings;
    private string $serve_mins;
    private float $price;

    public function __construct() {}

    public function setItemName($item):string{
        return $this->item_name = $item;
    }
    public function getItemName():string{
        return $this->item_name;
    }


}