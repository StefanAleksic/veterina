<?php

class Admin extends DatabaseObject {

  static protected $table_name = "admins";
  static protected $db_columns = ['id', 'first_name', 'last_name', 'email', 'username', 'hashed_password'];

  public $id;
  public $first_name;
  public $last_name;
  public $email;
  public $username;
  protected $hashed_password;
  public $password;
  public $confirm_password;
  public $password_required = true;
  
  public function __construct($args=[]) {
    $this->first_name = $args['first_name'] ?? '';
    $this->last_name = $args['last_name'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->username = $args['username'] ?? '';
    $this->password = $args['password'] ?? '';
    $this->confirm_password = $args['confirm_password'] ?? '';   
  }
  public function full_name() {
    return $this->first_name . " " . $this->last_name;
  }
  protected function set_hashed_password(){
      $this->hashed_password = password_hash($this->password, PASSWORD_BCRYPT);
  }
  public function verify_password($password){
      return password_verify($password, $this->hashed_password) ;
  }
  protected function create() {
      $this->set_hashed_password();
      return parent::create();
  }
  protected function update() {
      if($this->password != '') {
      $this->set_hashed_password();
      // validate password
    } else {
      // password not being updated, skip hashing and validation
      $this->password_required = false;
    }
      $this->set_hashed_password();
      return parent::update();
  }
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
  if(is_blank($this->first_name)) {
    $this->errors[] = "Ime ne može biti prazno.";
  } elseif (!has_length($this->first_name, array('min' => 2, 'max' => 255))) {
    $this->errors[] = "Ime mora imati između 2 and 255 karaktera.";
  }
  if(is_blank($this->last_name)) {
    $this->errors[] = "Prezime ne može biti prazno.";
  } elseif (!has_length($this->last_name, array('min' => 2, 'max' => 255))) {
    $this->errors[] = "Prezime mora imati između 2 and 255 karaktera.";
  }
  if(is_blank($this->email)) {
    $this->errors[] = "Email polje ne može biti prazno.";
  } elseif (!has_length($this->email, array('max' => 255))) {
    $this->errors[] = "Mora biti manje od 255 karaktera.";
  } elseif (!has_valid_email_format($this->email)) {
    $this->errors[] = "Email mora biti u validnom formatu(ime@domen.com) .";
  }
  if(is_blank($this->username)) {
    $this->errors[] = "Username polje ne može biti prazno.";
  } elseif (!has_length($this->username, array('min' => 8, 'max' => 255))) {
    $this->errors[] = "Username mora biti između 8 and 255 karaktera.";
  }elseif (!has_unique_username($this->username, $this->id)){
      $this->errors[]= "Username mora biti jedinstven, ovakav username već postoji u bazi podataka!";
  }
  
  if($this->password_required) {
      if(is_blank($this->password)) {
        $this->errors[] = "Password polje ne može biti prazno.";
      } elseif (!has_length($this->password, array('min' => 12))) {
        $this->errors[] = "Password mora imati više od 12 karaktera";
      } elseif (!preg_match('/[A-Z]/', $this->password)) {
        $this->errors[] = "Password mora sadržati barem 1 veliko slovo";
      } elseif (!preg_match('/[a-z]/', $this->password)) {
        $this->errors[] = "Password mora sadržati barem 1 malo slovo";
      } elseif (!preg_match('/[0-9]/', $this->password)) {
        $this->errors[] = "Password mora sadržati barem 1 broj";
      } 
      
  if(is_blank($this->confirm_password)) {
    $this->errors[] = "Confirm password polje ne može biti prazno.";
  } elseif ($this->password !== $this->confirm_password) {
    $this->errors[] = "Password i confirm password moraju biti isti.";
  }
  return $this->errors;
  
}
}
  }
?>
