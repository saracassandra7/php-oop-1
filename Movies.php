<?php

class Movie{
  public $title;
  public $genre;
  public $poster;
  public $year;
  public $director;

  /**
   * @param String $title
   * @param String $genre
   * @param Number $year
   * @param String $director
   */

  public function __construct($_title, $_genre, $_year, $_director)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->director = $_director;
  }

  public function setPoster($_poster)
  {
    $this->poster = $_poster;
  }
}

?>