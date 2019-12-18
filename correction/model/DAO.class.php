<?php
require_once("../model/Product.class.php");


// Classe Data Access Objet : elle représente la base de données
class DAO {
  // L'objet base de donnée
  private $db;
  // Localisation de la BD par rapport au controleur
  // NE PAS MODIFIER CET ATTRIBUT
  private $database = '../data/db/exam.db';

  // Le constructeur ouvre l'acces à la BD
  public function __construct() {
    // Verifie que le fichier base de donnée existe et est en lecture écriture
    if (! file_exists($this->database)) {
      die ("Database error: file not found '".$this->database."'\n");
    }
    if (!is_writable($this->database)) {
      die ("Database error: file not writable '".$this->database."'\n");
    }

    //////////////// Q02 : A COMPLETER (DEBUT) ////////////////
    // ... m4_divert(-1)

    try {
      $this->db = new PDO("sqlite:".$this->database);
      if (!$this->db) {
        die ("Database error: cannot open '".$this->database."'\n");
      }
    } catch (PDOException $e) {
      die("PDO Error :".$e->getMessage()." '".$this->database."'\n");
    }

    //m4_divert(0)


    //////////////// Q02 : A COMPLETER (FIN)   ////////////////
  }

  // Retourne le produit dont le code est $code ou retourne un objet vide
  public function getProduct (
    $code // code de l'article
    ): Product {
      //////////////// Q03 : A COMPLETER (DEBUT) ////////////////
      // ... m4_divert(-1)

      $q = "SELECT * FROM product WHERE code='$code'";
      try {
        $r = $this->db->query($q);
        if($r == FALSE) {
          die("getProduct Error ".$this->db->errorInfo()[2]." $q\n");
        }
        // Recupère le résultat comme une table d'objets Article
        $res = $r->fetchAll(PDO::FETCH_CLASS,'Product');
      } catch (PDOException $e) {
        die("PDO Error :".$e->getMessage());
      }
      // Test de cohérence
      if (count($res) != 1 ) {
        return new Product();
      }
      return $res[0];

      //m4_divert(0)

      // A modifier
      return new Product();

      //////////////// Q03 : A COMPLETER (FIN)   ////////////////
    }

    // Retourne le nombre de produits dans la base
    // Si le filtre est différent de 'none' et que la valeur n'est pas vide
    // alors limite aux produits dont l'attribut $filter est égal à $value
    public function nbProduct(string $filter='none',string $value=''): int {
      //////////////// Q04 Q11 : A COMPLETER (DEBUT) ////////////////
      // ... m4_divert(-1)
      if ($filter != 'none' && $value != '') {
        $q = "SELECT count(*) FROM product WHERE $filter = '$value'";
      } else {
        $q = "SELECT count(*) FROM product";
      }
      try {
        $r = $this->db->query($q);
        if($r == FALSE) {
          die("nbProduct Error ".$this->db->errorInfo()[2]." $q\n");
        }
        // Recupère le résultat
        $res = $r->fetchAll();
      } catch (PDOException $e) {
        die("PDO Error :".$e->getMessage());
      }
      // Test de cohérence
      if (count($res) != 1 ) {
        return false;
      }
      return $res[0][0];

      //m4_divert(0)
      // A modifier
      return 0;

      //////////////// Q04 Q11 : A COMPLETER (FIN)   ////////////////

    }


    // Retourne une liste de $n produits à partir de la page indiquée
    // Permet d'afficher pages par pages en modifiant l'offset
    // Attention : la page débute à 1
    // Si le filtre est différent de 'none' et que la valeur n'est pas vide
    // alors limite aux produits dont l'attribut $filter est égal à $value
    public function getProductList(int $page,int $n,string $filter='none',string $value='') : array {
      //////////////// Q07 Q11 : A COMPLETER (DEBUT) ////////////////
      // ... m4_divert(-1)
      $offset = $n * ($page - 1);
      if ($filter != 'none' && $value != '') {
        $q = "SELECT * FROM product WHERE $filter = '$value' ORDER BY code ASC LIMIT $n OFFSET $offset";
      } else {
        $q = "SELECT * FROM product ORDER BY code ASC LIMIT $n OFFSET $offset";
      }
      try {
        $r = $this->db->query($q);
        if($r == FALSE) {
          die("getProductList Error ".$this->db->errorInfo()[2]." $q\n");
        }
        // Recupère le résultat comme une table d'objets Article
        $res = $r->fetchAll(PDO::FETCH_CLASS,'Product');
      } catch (PDOException $e) {
        die("PDO Error :".$e->getMessage());
      }
      // Test de cohérence
      if (count($res) > $n ) {
        die("Too much Products");
      }
      return $res;

      //m4_divert(0)
      // A modifier
      return array();
      //////////////// Q07 Q11 : A COMPLETER (FIN)   ////////////////
    }


  }
