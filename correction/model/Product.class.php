<?php

// Classe des produits
class Product {
  private $code;
  private $url;
  private $product_name;
  private $quantity;
  private $brands;
  private $image_url;
  private $image_small_url;
  private $categories_fr;
  private $ingredients_text;
  private $main_category_fr;
  private $additives_fr;

  // Constructeur
  // $param : liste des valeurs pour initialiser les attributs dans l'ordre
  public function __construct(array $param = array()) {
    //
    // Position dans le tableau $param
    $i = 0;
    // Passe tout les attributs en revue
    foreach ($this as $key => $value) {
      if ($i < count($param)) {
        $this->$key = $param[$i++];
      }
    }
  }

  // Getteurs
  public function getCode(): string {return $this->code;}
  public function getUrl(): string {return $this->url;}
  public function getProduct_name(): string {return $this->product_name;}
  public function getQuantity(): int {return $this->quantity;}
  public function getBrands(): string {return $this->brands;}
  public function getImage_url(): string {return $this->image_url;}
  public function getImage_small_url(): string {return $this->image_small_url;}
  public function getIngredients_text() {return $this->ingredients_text;}
  public function getMain_category_fr() {return $this->main_category_fr;}



  // Retourne le champ additives_fr sous la forme d'un tableau de description
  // des additifs indexé par le code de l'additif
  // Exemple : le champ "E1400 - Dextrines,E322 - Lécithines,E503 - Carbonates d'ammonium"
  // doit produire le tableau
  // array (
  //  "E1400" => "Dextrines",
  //  "E322" => "Lécithines",
  //  "E503" => "Carbonates d'ammonium"
  // )
  public function getAdditives_fr(): array
  {

    // Variable résultat, un tableau vide
    $res = array();
    // Sépare le champ en un tableau sur le caractère virgule
    $additiveArray = explode(',',$this->additives_fr);
    // Sépare chaque champs en clée et valeur
    foreach ($additiveArray as $additif) {
      // Sépare sur le catactère '-'
      $a = explode('-',$additif);
      // Construit le récultat en enlever par trim les espaces en trop
      $res[trim($a[0])] = trim($a[1]);
    }
    // Retourne le résultat
    return $res;
  }

  // Retourne dans l'ordre la liste des catégories
  public function getCategories_fr(): array {
    return explode(',',$this->categories_fr);
  }

}



?>
