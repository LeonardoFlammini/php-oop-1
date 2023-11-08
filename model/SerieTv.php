<?php

class SerieTv extends Production {
  public $seasons;
  public $episodes;


  public function __construct(string $_name, string $_date, array $_genre, string $_description , int $_seasons, int $_episodes ,Media $_poster ){
    $this->seasons = $_seasons;
    $this->episodes = $_episodes;

    parent::__construct($_name,  $_date,  $_genre,  $_description,  $_poster );
  }
}