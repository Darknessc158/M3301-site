<?php //ce fichier va dans controleur

  //controleur
  include 'file';

  $database ='sqlite:'.$path.'/scale.db';
  try{
    $this->db = new PDO($database);
  }

  public function Facture($numero_paiement)
  {
    //recupere le numero de commande
    $req = "SELECT numcommande FROM paiement  where num_paiement =  $numero_paiement;";
    $sth=$this->db->query($req); //
    $commande = $sth->fetchAll(PDO::FETCH_CLASS,'commandearticle');

      $numcommande= $commande->getnumcommande();

    //Recupere un membre en fonction de la commande
    $req = "SELECT * FROM MEMBRE  where numadh in ( select numadh
                                                    from commande
                                                    where num_commande = $numcommande;);";
    $sth=$this->db->query($req);
    $membre = $sth->fetchAll(PDO::FETCH_CLASS,'MEMBRE');




    //Liste des numero d'article et des quantite dans une ligne commande
    $req = "SELECT * FROM LIGNE_COMMANDE_ARTICLE  where COMMANDEnum_commande = $numcommande ;";
    $sth=$this->db->query($req);
    $listeprod_lignecommande = $sth->fetchAll(PDO::FETCH_CLASS,'LIGNE_COMMANDE_ARTICLE');



     //pour chaque num article de ligne de commande on va

      //Ouverture d'un fichier pour
      $text= fopen('temp_facture.txt', 'r+');

      //Boucle permettant d'afficher tout le produit contenue dans une commandes
      foreach ($listeprod_lignecommande) {

        $req = "SELECT * FROM LIGNE_COMMANDE_ARTICLE  where Num_article = $listeprod_lignecommande.ArticleNum_article ;";
        $sth=$this->db->query($req);
        $produit_courant = $sth->fetchAll(PDO::FETCH_CLASS,'article');


                //Stock les differentes valeur dans des variables local a la boucle

                $quantite=$listeprod_lignecommande.quantite;
                $numarticle=$listeprod_lignecommande.ARTICLENum_article;
                $Description=$produit_courant.Description;
                 $PrixUnitaire=$produit_courant.PrixUnitaireHT;
                $Marque =$produit_courant.Marque;
                $PrixTHC=$listeprod_lignecommande.quantite*$produit_courant.PrixUnitaireHT;
                $PrixTTC=$listeprod_lignecommande.quantite*$produit_courant.PrixUnitaireHT*1.20);

      // Stock les variables dans une string et separer les variables par des ';'
      $ligne = $quantite+';'+$numarticle+';'+$Description+';'+$Marque+';'+$PrixUnitaire+';'+$PrixTHC+';'+$PrixTTC '\n';
      //Ecrit la ligne dans le fichier
      fwrite($text,$ligne);
      }
      //En sorti de boucle nous avons donc toute les info necessaire sur chacun des produits de la commande
      //Fermeture du fichier
      fclose($text);



      //
      require('fpdf/fpdf.php');

      class PDF extends FPDF
      {
      // Chargement des données
      function LoadData($file)
      {
          // Lecture des lignes du fichier
          $lines = file($file);
          $data = array();
          foreach($lines as $line)
              $data[] = explode(';',trim($line));
          return $data;
      }

      // Tableau simple
      function BasicTable($header, $data)
      {
          // En-tête
          foreach($header as $col)
              $this->Cell(25,10,$col,1);
          $this->Ln();
          // Données
          foreach($data as $row)
          {
              foreach($row as $col)
                  $this->Cell(20,6,$col,1);
              $this->Ln();
          }
      }
      }






      $pdf = new PDF();
      $header = array('Quantite','Num Article','Description','Marque','Prix UTC','PrixTHC','PrixTTC');
      $data = $pdf->LoadData('M3301-site/model/data/pdf/temp_facture.txt');
      $pdf->SetFont('Arial','',10);

      $info = 'Nom du client :'+$membre->getNom()+'\n'+
      'Adresse du client :'+$membre->getAdresse()+'\n'+
      'Numero de commande :'+$numcommande+'\n'+
      'Date'+$commande->getDate()+'\n';

      $pdf->Write(0,$info);
      $pdf->SetAuthor("SCALE ECHIROLLE");
      $pdf->Ln();
      $pdf->Ln();
      $pdf->Ln();
      $pdf->BasicTable($header,$data);

      // faire une fonction qui fait le format date-numcommande-client
      $chemin = 'M3301-site/FichierPDF/FacturePDF'+$file;
      $pdf->Output();
  }




 ?>
