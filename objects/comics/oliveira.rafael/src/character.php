<?php

class Character{

  private $comic;
  private $hero;
  private $name;
  private $height;
  private $weight;
 
  public function __construct(string $comic, string $hero, string $name, float $height, float $weight){
    $this->comic = $comic;
    $this->hero = $hero;
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
 
  }
 
  // GETTERS 
 
  public function getComic():string {
    return $this->comic;
  }
 
  public function getHero():string {
    return $this->hero;
  }
 
  public function getName():string {
    return $this->name;
  }
 
  public function getHeight():string {
    return $this->height;
  }
 
  public function getWeight():string {
    return $this->weight;
  }
 
  // SETTERS
 
  public function setComic(string $comic){
    $this->comic = $comic;
  }
   
  public function setHero(string $hero){
    $this->hero = $hero;
  }
   
  public function setName(string $name){
    $this->name = $name;
  }
 
  public function setHeight(string $height){
    $this->height = $height;
  }
 
  public function setWeight(string $weight){
    $this->weight = $weight;
  }


}

?>