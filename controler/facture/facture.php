<?php






if (isset($_GET['numpaiement'])) {
  $numero_paiement=$_GET['numpaiement'];

  $database = 'mysql:host=soysauceduck99.ddns.net;dbname=scale';
  $user = 'admincave';
  $password = 'cave';
  try{
    $db = new PDO($database, $user, $password);
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }

  $req = "SELECT * FROM commandearticle WHERE numPaiement=$numero_paiement ;";
  $sth=$this->db->query($req);
  $listeprod_lignecommande = $sth->fetchAll(PDO::FETCH_CLASS,'commandearticle');
  var_dump($listeprod_lignecommande);
    //Ouverture d'un fichier pour
    $text= fopen('temp_facture.txt', 'x+');

    //Boucle permettant d'afficher tout le produit contenue dans une commandes
    foreach ($listeprod_lignecommande as $value) {

      $req = "SELECT * FROM article  where numArticle = $value.numArticle ;";
      $sth=$this->db->query($req);
      $produit_courant = $sth->fetchAll(PDO::FETCH_CLASS,'article');


              $quantite=$value.quantiteCommande;
              $numarticle=$value.numArticle;
              $Description=$produit_courant.description;
              $PrixUnitaire=$produit_courant.prix;
              $Marque =$produit_courant.marque;
              $PrixTTC=$value.quantite*$produit_courant.prix;

    // Stock les variables dans une string et separer les variables par des ';'
    $ligne = $quantite+';'+$numarticle+';'+$Description+';'+$Marque+';'+$PrixUnitaire+';'+$PrixTTC.PHP_EOL;
    //Ecrit la ligne dans le fichier
    fwrite($text,$ligne);
    }
    //En sorti de boucle nous avons donc toute les info necessaire sur chacun des produits de la commande
    //Fermeture du fichier
    fclose($text);



    //
    require('../../model/fpdf/fpdf.php');

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

    // Tableau amélioré
    function ImprovedTable($header, $data)
    {
        // Largeurs des colonnes
        $w = array(40, 35, 45, 40);
        // En-tête
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C');
        $this->Ln();
        // Données
        foreach($data as $row)
        {
            $this->Cell($w[0],6,$row[0],'LR');
            $this->Cell($w[1],6,$row[1],'LR');
            $this->Cell($w[2],6,number_format($row[2],0,',',' '),'LR',0,'R');
            $this->Cell($w[3],6,number_format($row[3],0,',',' '),'LR',0,'R');
            $this->Ln();
        }
        // Trait de terminaison
        $this->Cell(array_sum($w),0,'','T');
    }

    // Tableau coloré
    function FancyTable($header, $data)
    {
        // Couleurs, épaisseur du trait et police grasse
        $this->SetFillColor(255,0,0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
        // En-tête
        $w = array(40, 35, 45, 40);
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $this->Ln();
        // Restauration des couleurs et de la police
        $this->SetFillColor(224,235,255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Données
        $fill = false;
        foreach($data as $row)
        {
            $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
            $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
            $this->Cell($w[2],6,number_format($row[2],0,',',' '),'LR',0,'R',$fill);
            $this->Cell($w[3],6,number_format($row[3],0,',',' '),'LR',0,'R',$fill);
            $this->Ln();
            $fill = !$fill;
        }
        // Trait de terminaison
        $this->Cell(array_sum($w),0,'','T');
    }
    }
    $pdf = new PDF();
    $header = array('Quantite','Num Article','Description','Marque','Prix UTC','PrixTTC');
    $data = $pdf->LoadData('temp_facture.txt');
    $pdf->SetFont('Arial','',10);
    $pdf->AddPage();
    $pdf->BasicTable($header,$data);
    $pdf->AddPage();
    $pdf->ImprovedTable($header,$data);
    $pdf->AddPage();
    $pdf->FancyTable($header,$data);

    // faire une fonction qui fait le format date-numcommande-client

    $pdf->Output();
      unlink('temp_facture.txt');
}

 ?>
