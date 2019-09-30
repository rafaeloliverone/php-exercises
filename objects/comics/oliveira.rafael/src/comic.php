<?php
require 'character.php';

class Comic{

  private static $characters = [];
 
  public static function getCharacters(){
    return self::$characters;
  }
 
  public static function add( $person){
    array_push(self::$characters, $person);
  }
 
  public static function names($search = null ){
    $names = [];

    if ($search){
      foreach(Comic::getCharacters() as $character){
        if ($character->getComic() == $search){
          $names[] = $character->getHero();
        }
      }

    } else {
      foreach(Comic::getCharacters() as $character){
        $names[] = $character->getHero();
      }

    }

    return $names;
    
  }
 
  public static function weights(){
    $weights = []; 
    foreach(Comic::getCharacters() as $character){
      array_push($weights, $character->getWeight());
    }
    return $weights;
  }

}
