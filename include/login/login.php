<?php
class User{
    //define the kinds of accessibility
    private $db;
    public function __construct () {
        $newDB = new DB();
        $this->db = $newDB->connect();
      }
      public function cheched($user,$pass){
        $stmt = $this->db->prepare("select * FROM myguests where user = :user AND pass = :pass ");
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
      }
      public function signout(){
        setcookie('logged','' , time() - 3600, "/");
      }
      public function signin($user){
        setcookie('logged', $user , time() + (86400 * 30), "/");
      }
      
}