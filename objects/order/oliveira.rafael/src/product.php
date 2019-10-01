<?php

class Product{

  public $id;
  public $name;
  public $price;

  public function __construct($id, string $name, float $price ){
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
  }

  // GETTERS 
  public function getId(){
    return $this->id;
  }

  public function getName(){
    return $this->name;
  }

  public function getPrice(){
    return $this->price;
  }

  // SETTERS
  public function setId($id){
    $this->id = $id;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function setPrice($price){
    $this->price = $price;
  }

  public function __toString():string{
    return $this->getName();
  }

}
