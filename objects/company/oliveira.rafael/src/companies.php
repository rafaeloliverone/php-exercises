<?php
require 'company.php';

class Companies{
  
  private $companies = [];

  public function add($company){
    array_push($this->companies, $company);
  }

  public function foundedAfter($year){
    $companyAfter = [];
    foreach($this->companies as $company){
      if ($company->getFounded() > $year){
        $companyAfter[] = $company;
      }
    }
    return $companyAfter;
  }

  public function foundedBefore($year){
    $companyBefore = [];
    foreach($this->companies as $company){
      if ($company->getFounded() < $year){
        $companyBefore[] = $company;
      }
    }
    return $companyBefore;
  }

  public function __toString(){
    $result = "";
    sort($this->companies);
    foreach($this->companies as $company){
      $result .= "$company\n";    
    }

    return $result;
  }

}
