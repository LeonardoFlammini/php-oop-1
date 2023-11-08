<?php

class Media{
  public $file_name;
  public $image;
  public $type = 'image';

  public function __construct(string $_file_name, string $_image){
    $this->file_name = $_file_name;
    $this->image = $_image;
  }
};