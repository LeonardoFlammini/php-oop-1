<?php

class Production {
  public $name;
  public $date;
  public $genre;
  public $poster;
  public $description;

  public function __construct(string $_name, string $_date, array $_genre, string $_description ,Media $_poster ){
    $this->name = $_name;
    $this->date = $_date;
    $this->genre = $_genre;
    $this->description = $_description;
    $this->poster = $_poster;
  }


  public function getGenres(){
    return implode(",", $this->genre);
  }
};