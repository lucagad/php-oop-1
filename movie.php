<?php

// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
// metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all’interno della classe sono dichiarate delle variabili d’istanza
//    => all’interno della classe è definito un costruttore
//    => all’interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà.

// La classe può essere definita internamente al file index.php o essere inclusa (soluzione preferibile)


class Movie{

  private $id;
	private $title;
  public $original_language;
	public $original_title;
  public $origin_country;
  public $release_date;
	public $overview;
  public $vote_average;

  public function __construct($_id, $_title, $_original_language, $_original_title, $_origin_country, $_release_date, $_overview, $_vote_average){
		// nel costruttore valorizzo tutte le proprietà che reputo essere obbligatorie
		$this->id = $_id;
		$this->title = $_title;
    $this->original_language = $_original_language;
    $this->original_title = $_original_title;
    $this->origin_country = $_origin_country;
    $this->release_date = $_release_date;
    $this->overview = $_overview;
    $this->vote_average = $_vote_average;
  }

  public function getId(){
		return $this->id;
	}

  public function getTitle(){
		return $this->title;
	}


}

?>