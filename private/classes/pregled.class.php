<?php

class Pregled extends DatabaseObject {

  static protected $table_name = "pregled";
  static protected $db_columns = ['id', 'date', 'br_kartona', 'anamneza','klin_pregled', 'dijagnoza', 'terapija','cena','dijagnoza1','terapija1','cena1','dijagnoza2','terapija2','cena2','dijagnoza3','terapija3','cena3','dijagnoza4','terapija4','cena4'];

  public $id;
  public $date;
  public $br_kartona;
  public $anamneza;
  public $klin_pregled;
  public $dijagnoza;
  public $terapija;
  public $cena;
  public $dijagnoza1;
  public $terapija1;
  public $cena1;
  public $dijagnoza2;
  public $terapija2;
  public $cena2;
  public $dijagnoza3;
  public $terapija3;
  public $cena3;
  public $dijagnoza4;
  public $terapija4;
  public $cena4;

  public function __construct($args=[]) {
    $this->date = $args['date'] ?? '';
    $this->br_kartona = $args['br_kartona'] ?? '';
    $this->anamneza = $args['anamneza'] ?? '';
    $this->klin_pregled = $args['klin_pregled'] ?? '';
    $this->dijagnoza = $args['dijagnoza'] ?? '';
    $this->terapija = $args['terapija'] ?? '';
    $this->cena = $args['cena'] ?? '';
    $this->dijagnoza1 = $args['dijagnoza1'] ?? '';
    $this->terapija1 = $args['terapija1'] ?? '';
    $this->cena1 = $args['cena1'] ?? '';
    $this->dijagnoza2 = $args['dijagnoza2'] ?? '';
    $this->terapija2 = $args['terapija2'] ?? '';
    $this->cena2 = $args['cena2'] ?? '';
    $this->dijagnoza3 = $args['dijagnoza3'] ?? '';
    $this->terapija3 = $args['terapija3'] ?? '';
    $this->cena3 = $args['cena3'] ?? '';
    $this->dijagnoza4 = $args['dijagnoza4'] ?? '';
    $this->terapija4 = $args['terapija4'] ?? '';
    $this->cena4 = $args['cena4'] ?? '';
  }
  
  public function sum(){
      return $this->cena + $this->cena1 + $this->cena2 + $this->cena3 + $this->cena4; 
  }
  public function ministring($val){
$mini = substr($val, -(strlen($val)), 35);
return $mini;
}

  public function euro_date($val){
$day = substr($val, -2);
$month = substr($val, -5, 2);
$year = substr($val, -(strlen($val)), 4);
return $day.".".$month.".".$year.".";
}
/*static public function find_all(){
      $sql = "SELECT * FROM " . self::$table_name . "ORDER by " . self::$date;
      return static::find_by_sql($sql);
  }
  */
  static public function find_by_username($username) {
      $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE username='" . self::$database->escape_string($username) . "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

  protected function validate() {
     
  $this->errors = [];
  if(is_blank($this->br_kartona)) {
    $this->errors[] = "Broj kartona ne može biti prazno polje.";
  }  
}
}
 
 

