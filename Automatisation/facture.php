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
  //Liste des numero d'article et des quantite dans une ligne commande
  $req = "SELECT * FROM LIGNE_COMMANDE_ARTICLE  where COMMANDEnum_commande = $numcommande ;";
  $sth=$this->db->query($req);
  $listeprod_lignecommande = $sth->fetchAll(PDO::FETCH_CLASS,'LIGNE_COMMANDE_ARTICLE');



   //pour chaque num article de ligne de commande on va

    //Boucle permettant d'afficher tout le produit contenue dans une commandes
    foreach ($listeprod_lignecommande) {
      $req = "SELECT * FROM LIGNE_COMMANDE_ARTICLE  where Num_article = $listeprod_lignecommande.ArticleNum_article ;";
      $sth=$this->db->query($req);
      $produit_courant = $sth->fetchAll(PDO::FETCH_CLASS,'article');


      //Il faudra mettre ça dans une ligne ou ecrire dans un fichier et utiliser le tableau de fpdm   http://www.fpdf.org/?lang=fr
      printf("quantité =%s
              num produit = %s
              nom article = %s
              Prix unitaire HT = %d
              Marque = %s
              Prix total HT = %d
              Prix total TTC = %d",$listeprod_lignecommande.quantite,%$listeprod_lignecommande.ARTICLENum_article,%$produit_courant.Description,%$produit_courant.Prix,... );

    //Passer a la ligne
    }


  require('fpdm/fpdm.php');


  $fields = array(
  	'num_paiement'    => $numPaiement,
  	'num_commande' => $numcommande,
  	'nom_client' => $membre.nom,
  	'adresse_client' => $membre.adress,
    'ligne1_quantite' =>,
    'ligne1_numarticle' =>,
    'ligne1_nom' => ,
    'marque' => ,
    'prix' =>
  );

  $pdf = new FPDM('doc_compa.pdf');
  $pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
  $pdf->Merge();
  $pdf->Output("D", "formulaire_remplie.pdf");



 ?>
