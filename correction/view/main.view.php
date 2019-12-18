<!DOCTYPE html>
<html>
<head>
  <?php include("../view/head.viewPart.html"); ?>
  <title>Vue principale</title>
</head>
<body>
  <header>
    <!-- Texte du header -->
    <p><a href="../controler/main.ctrl.php">Open Food Facts : site de démonstration</a></p>
    <!-- Menu en haut de la page -->
    <nav>
      <input type="text" placeholder="Chercher un produit" name="search_terms" value="">
      <button type="submit" title="Rechercher"><i class="fa fa-search"></i></button>
      <a href="https://fr.openfoodfacts.org/decouvrir">Découvrir</a>
      <a href="https://fr.openfoodfacts.org/contribuer">Contribuer</a>
    </nav>
  </header>
  <!-- Division qui englobe le contenu hors header et footer -->
  <div>
    <!-- Partie à gauche un 'aside' -->
    <?php include("../view/aside.viewPart.html"); ?>
    <!-- Partie principale -->
    <main>
      <h1>Open Food Facts - IUT</h1>
      <!-- Première section avec deux articles -->
      <section>
        <article>
          <h2>Découvrir</h2>
          <p>
            Open Food Facts est une base de données sur les produits alimentaires faite par tout le monde, pour tout le monde.
          </p>
          <p>
            Elle vous permet de faire des choix plus informés, et comme les données sont ouvertes (open data), tout le monde peut les utiliser pour tout usage.
          </p>
        </article>
        <article>
          <h2>Contribuer</h2>
          <p>
            Open Food Facts est un projet citoyen à but non lucratif créé par des milliers de volontaires à travers le monde. Vous pouvez commencer à contribuer en ajoutant un produit de votre cuisine, et nous avons plein de projets enthousiasmants auxquels vous pouvez participer de beaucoup de façons différentes.
          </p>
        </article>
      </section>
      <!-- Seconde section avec les informations de la base -->
      <section>
        <h2>Les produits de la base</h2>
        <!-- Formulaire pour les choix de navigation -->
        <form action="../controler/explorer.ctrl.php" method="get">
          <p>
            <!---------------- Q05 : A COMPLETER (DEBUT)  ---------------->
            <!--  ... m4_divert(-1) -->

            <?= $this->nbProduct ?>

            <!--  m4_divert(0) -->
            <!---------------- Q05 : A COMPLETER (FIN)  ---------------->

            produits </p>
            <input type="submit"  value="Explorer les produits :">
            <select name="filter">
              <option value="none" <?php if ($this->filter == 'none') print 'selected';?> >
                tous dans l'ordre
              </option>
              <option value="brands" <?php if ($this->filter == 'brands') print 'selected';?>>
                par marque
              </option>
              <option value="main_category_fr" <?php if ($this->filter == 'main_category_fr') print 'selected';?>>
                par catégorie
              </option>
            </select>
            <input type="text" placeholder="Donner une valeur" name="value" value="<?= $this->value ?>">
          </form>
          <!-- Affichage d'une liste de produits -->
          <div class="produits">

            <!------------------- Q08 : A COMPLETER (DEBUT) ------------------>
            <!-- ... m4_divert(-1) -->

            <?php foreach ($this->products as $p):  ?>
              <article>
                <p>
                  <img src="<?= $p->image_small_url?>">
                </p>
                <p>
                  <a target="_blank" href="<?= $p->url ?>">
                    <img src="../view/design/barreCode32-32.png" alt="Bare code">
                  </a>
                  <a target="_blank" href="../controler/product.ctrl.php?code=<?=$p->code?>">
                    <?= $p->product_name ?>
                  </a>
                </p>
              </article>
            <?php endforeach; ?>

            <!-- m4_divert(0) -->

            <!------------------- Q08 : A COMPLETER (FIN)  ------------------>

          </div>
        </section>
        <!-- Troisième section : le choix des pages -->
        <section>
          <?php
          // N'affiche que si la page est définie
          if (isset($this->page)):
            // Construit le tableau des paramètres communs à passer à la query string
            $queryStringData = array('page'=>$this->page,'filter'=>$this->filter,'value'=>$this->value);
            ?>
          <p class="pages">
            Pages :
            <a href="?<?= http_build_query(array_merge($queryStringData,array('action'=>'first'))) ?>">Première</a>
            <a href="?<?= http_build_query(array_merge($queryStringData,array('action'=>'prevPage'))) ?>">Précédente</a>
            <?php
            // Affichage des pages
            for($page = $this->pageMin; $page <= $this->pageMax; $page++): ?>

              <a href="?<?= http_build_query(array('page'=>$page,'filter'=>$this->filter,'value'=>$this->value)) ?>"
                <?php
                // Ajout de la classe 'selected' à la page courante
                if($page == $this->page) print('class="selected"');
                ?> >
                <?= $page ?>
              </a>

            <?php endfor; ?>
            <a href="?<?= http_build_query(array_merge($queryStringData,array('action'=>'nextPage'))) ?>">Suivante</a>
            <a href="?<?= http_build_query(array_merge($queryStringData,array('action'=>'last'))) ?>">Dernière</a>
          </p>
        <?php endif; ?>
        </section>
      </main>
    </div>
  </body>
  </html>
