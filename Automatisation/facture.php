<?php

function facture(int numero_paiement){
  //recupere le numero de commande
  $req = "SELECT numcommande FROM paiement  where num_paiement =  $numero_paiement;";
  $sth=$this->db->query($req);
  $numcommande = $sth->fetchAll(PDO::FETCH_CLASS,'commandearticle');



  //Recupere un membre en fonction de la commande
  $req = "SELECT * FROM MEMBRE  where numadh in ( select numadh
                                                  from commande
                                                  where num_commande = $numcommande;);";
  $sth=$this->db->query($req);
  $membre = $sth->fetchAll(PDO::FETCH_CLASS,'MEMBRE');



  Classe article&quantite{
 public  $num_article;
 public  $quantite;

  }
  //Liste des numero d'article et des quantite
  $req = "SELECT num_article,quantite FROM LIGNE_COMMANDE_ARTICLE  where COMMANDEnum_commande = $numcommande ;";
  $sth=$this->db->query($req);
  $clearticlequantite = $sth->fetchAll(PDO::FETCH_CLASS,'commandearticle');

  //creer un objet quantite/numArticle/nomarticle/prix


  //Liste des objets Article qui sont dans la commande
  $req = "SELECT * FROM ARTICLE  where num_article = $clearticlequantite.numArticle ;";
  $sth=$this->db->query($req);
  $liste_article = $sth->fetchAll(PDO::FETCH_CLASS,'article');




  



 ?>
