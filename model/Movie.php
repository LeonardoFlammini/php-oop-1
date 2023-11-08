<?php

class Movie extends Production {
  public $duration;

  public function __construct(string $_name, string $_date, array $_genre, string $_description , int $_duration ,Media $_poster ){
    $this->duration = $_duration;

    parent::__construct($_name,  $_date,  $_genre,  $_description,  $_poster );
  }
};