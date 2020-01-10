<?php

class authentificationDAO{
	private $db;

	public function __construct(){
    $database = 'mysql:host=soysauceduck99.ddns.net;dbname=scale';
    $user = 'root';
    $password = 'cave';
    try{
      $this->db = new PDO($database, $user, $password);
      //var_dump($database);
    }

    catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
  }

	}




?>
