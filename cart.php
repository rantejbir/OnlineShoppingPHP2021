<?php

class cart
{
    public $productid,$productname,$price,$qty,$total,$photo;

    public function __construct($productid,$productname,$price,$qty,$total,$photo)
    {
        $this->productid = $productid;
        $this->productname = $productname;
        $this->price = $price;
        $this->qty = $qty;
        $this->total = $total;
        $this->photo = $photo;
    }
}