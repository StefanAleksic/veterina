<?php

class Lista extends DatabaseObject { 
    // start of Active Record code
  static protected $table_name = 'lista';
  
  static protected $db_columns = ['date', 'ime_pet', 'vrsta', 'rasa', 'pol','br_cipa','br_pasosa','description','ime', 'prezime', 'jmbg', 'br_tel','email', 'adresa'];

  // public $errors = [];
  
  static public function find_all(){
      $sql = "SELECT * FROM " . self::$table_name . " ORDER BY prezime";
      return self::find_by_sql($sql);
  }
public function euro_date($val){
$day = substr($val, -2);
$month = substr($val, -5, 2);
$year = substr($val, -(strlen($val)), 4);
return $day.".".$month.".".$year.".";
}
  protected function validate(){
      $this->errors = [];
      if(is_blank($this->ime_pet)){
          $this->errors[] = "Ime ljubimca ne može biti prazno.";
      }
      if(is_blank($this->ime)){
          $this->errors[] = "Ime ne moze biti prazno.";
      }
      if(is_blank($this->prezime)){
          $this->errors[] = "Prezime ne moze biti prazno.";
      }
      /*if(is_blank($this->jmbg)){
          $this->errors[] = "JMBG polje ne moze biti prazno.";  
      } */
      /*if (!has_length($this->email, array('max' => 255))) {
    $this->errors[] = "Mora biti manje od 255 karaktera.";
  } elseif (!has_valid_email_format($this->email)) {
    $this->errors[] = "Email mora biti u validnom formatu(ime@domen.com) .";
  } */
      
     // return $this->errors[];
  }
  
  // end of Active Record code
  public static $id1=1;
  public $id;
  public $date;
  public $ime_pet;
  public $vrsta;
  public $rasa;
  public $br_cipa;
  public $br_pasosa;
  public $ime;
  public $prezime;
  public $jmbg;
  public $br_tel;
  public $description;
  public $pol;
  public $adresa;
  public $email;
  //public $izbor;

  const POL = [
      1=> 'Muški',
      2=> 'Ženski'];
  
  const VRSTA = ['Pas' , 'Mačka' , 'Ptica'];


  //const IZBOR = ['Sve', '8 po strani'];
  
  public function __construct($args=[]) {
    //$this->br_leg = isset($args['br_leg']) ? $args['br_leg'] : '';
    $this->date = $args['date'] ?? '';
    $this->ime_pet = $args['ime_pet'] ?? '';
    $this->vrsta = $args['vrsta'] ?? '';
    $this->rasa = $args['rasa'] ?? '';
    $this->pol = $args['pol'] ?? '';
    $this->br_cipa = $args['br_cipa'] ?? '';
    $this->br_potvrde = $args['br_potvrde'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->ime = $args['ime'] ?? '';
    $this->prezime = $args['prezime'] ?? '';
    $this->jmbg = $args['jmbg'] ?? '';
    $this->br_tel = $args['br_tel'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->adresa = $args['adresa'] ?? '';
    //$this->izbor = $args['izbor'] ?? '';
  }
  public function ime() {
    return "{$this->ime_pet} -vlasnik  {$this->ime} {$this->prezime}";
  }

  public function pol(){
      if($this->pol >0){
          return self::POL[$this->pol];
      }else {
          return "Nepoznato";
      }
  }
  
  public static function id(){
      return self::$id1++;
  }
}