<?php

class Order{

  private $products = [];

  public function __construct(){
    $this->products = [];
  } 

  public function addProduct($product){
    $this->products[] = $product;
  }

  public function total():int{
    $sum = 0;

    if ( sizeof($this->products) > 0 ){
      foreach($this->products as $product){
        $sum += $product->getPrice();
      }
    }

    return $sum;
  }

 
}
