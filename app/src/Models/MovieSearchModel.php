<?php

namespace App\Models;

class MovieSearchModel {

  private $search;
 private $between;
 private  $and;
public function getSearch(){
  return $this->search;
}
public function setSearch($search){
  $this->search=$search;
}

public function getBetween(){
  return  $this->between;
}
public function setBetween($between){
  $this->between=$between;
}
public function getAnd(){
  return $this->and;
}
public function setAnd($and){
  $this->and=$and;
}
}
