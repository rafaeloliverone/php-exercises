<?php

class Company{

  private $name;
  private $founded;
  private $industry;
  private $kind;

  public function __construct(string $name, int $founded, string $industry, string $kind ){
    $this->name = $name;
    $this->founded = $founded;
    $this->industry = $industry;
    $this->kind = $kind;
  }

  // GETTERS
  public function getName(){
    return $this->name; 
  }

  public function getFounded(){
    return $this->founded; 
  }

  public function getIndustry(){
    return $this->industry; 
  }

  public function getKind(){
    return $this->kind; 
  }

  // SETTERS
  public function setName($name){
    $this->name = $name; 
  }

  public function setFounded($founded){
    $this->founded = $founded; 
  }

  public function setIndustry($industry){
    $this->industry = $industry; 
  }

  public function setKind($kind){
    $this->kind = $kind; 
  }

  public function __toString(){
    $input = $this->getName();
    $format = str_pad($input, 15,'.');
    return $format . $this->getFounded();
  }
}
