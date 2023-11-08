<?php

class Movie {
  public $name;
  public $date;
  public $genre;
  public $poster;

  public function __construct(string $_name, string $_date, string $_genre, Media $_poster ){
    $this->name = $_name;
    $this->date = $_date;
    $this->genre = $_genre;
    $this->poster = $_poster;
  }

};