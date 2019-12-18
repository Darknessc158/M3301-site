<!DOCTYPE html>
<html>
<head>
  <?php include("../view/head.viewPart.html"); ?>
  <title>Un produit</title>
</head>
<body>
  <header>
    <p><a href="../controler/main.ctrl.php">Open Food Facts : site de démonstration</a></p>
  </header>
  <!-- Division qui englobe le contenu hors header et footer -->
  <div>
    <!-- Partie à gauche un 'aside' -->
    <?php include("../view/aside.viewPart.html"); ?>
    <!-- Partie principale -->
    <main>
      <h1>Open Food Facts - IUT</h1>

      <!-- Contenu principal -->

      <h2><?= $this->product_name ?></h2>
      <p><?= $this->brands ?></p>
      <p>
        <img src="<?= $this->image_url ?>" alt="" />
      </p>

      <h3>Catégorie :</h3>
      <p><?= $this->main_category_fr ?></p>
      <!-- Affiche la liste des catégories -->
      <p>
        <?php
        foreach($this->categories_fr as $categorie) {
          echo " $categorie > ";
        }
        ?>
      </p>

      <h3>Ingrédiants :</h3>
      <p><?= $this->ingredients_text ?></p>

      <!-- Affiche la liste des additifs -->
      <h3>Additifs</h3>
      <ul>
        <?php foreach ($this->additives_fr as $key => $value) {
          echo "<li> $key : $value </li>\n";
        }
        ?>
      </ul>

    </main>
  </div>
</body>
</html>
