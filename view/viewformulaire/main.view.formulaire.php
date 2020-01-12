<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <meta charset="utf-8">
  <style media="screen">
  /*
      DEMO STYLE
  */

  @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
  body {
      font-family: 'Poppins', sans-serif;
      background: #fafafa;
  }

  p {
      font-family: 'Poppins', sans-serif;
      font-size: 1.1em;
      font-weight: 300;
      line-height: 1.7em;
      color: #999;
  }

  a,
  a:hover,
  a:focus {
      color: inherit;
      text-decoration: none;
      transition: all 0.3s;
  }

  .navbar {
      padding: 15px 10px;
      background: #fff;
      border: none;
      border-radius: 0;
      margin-bottom: 40px;
      box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
  }

  .navbar-btn {
      box-shadow: none;
      outline: none !important;
      border: none;
  }

  .line {
      width: 100%;
      height: 1px;
      border-bottom: 1px dashed #ddd;
      margin: 40px 0;
  }

  /* ---------------------------------------------------
      SIDEBAR STYLE
  ----------------------------------------------------- */

  .wrapper {
      display: flex;
      width: 100%;
      align-items: stretch;
  }



  #sidebar {
      min-width: 250px;
      max-width: 250px;
      background: #374a67;
      color: #fff;
      transition: all 0.3s;
  }

  #sidebar.active {
      margin-left: -250px;
  }

  #sidebar .sidebar-header {
      padding: 20px;
      background: #6d7fcc;
  }

  #sidebar ul.components {
      padding: 20px 0;
      border-bottom: 1px solid #47748b;
  }

  #sidebar ul p {
      color: #fff;
      padding: 10px;
  }

  #sidebar ul li a {
      padding: 10px;
      font-size: 1.1em;
      display: block;
  }

  #sidebar ul li a:hover {
      color: #374a67;
      background: #fff;
  }

  #sidebar ul li.active>a,
  a[aria-expanded="true"] {
      color: #fff;
      background: #6d7fcc;
  }

  a[data-toggle="collapse"] {
      position: relative;
  }

  .dropdown-toggle::after {
      display: block;
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
  }

  ul ul a {
      font-size: 0.9em !important;
      padding-left: 30px !important;
      background: #374a67;
  }

  ul.CTAs {
      padding: 20px;
  }

  ul.CTAs a {
      text-align: center;
      font-size: 0.9em !important;
      display: block;
      border-radius: 5px;
      margin-bottom: 5px;
  }

  a.download {
      background: #fff;
      color: #374a67;
  }

  a.article,
  a.article:hover {
      background: #6d7fcc !important;
      color: #fff !important;
  }

  /* ---------------------------------------------------
      CONTENT STYLE
  ----------------------------------------------------- */

  #content {
      width: 100%;
      padding: 20px;
      min-height: 100vh;
      transition: all 0.3s;
  }

  /* ---------------------------------------------------
      MEDIAQUERIES
  ----------------------------------------------------- */

  @media (max-width: 768px) {
      #sidebar {
          margin-left: -250px;
      }
      #sidebar.active {
          margin-left: 0;
      }
      #sidebarCollapse span {
          display: none;
      }
  }

  body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}
@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
}
ul{
  list-style: none;
}
#formulaire{
  padding: 100px;
}
#pdf {
  padding: 100px;
  width: auto;

}
#boiteformetpdf {
    display: flex;
    align-items: center;

}

#content {
  padding-left:  100px;
}

  .formulaire {
    display: inline;
    float: left;
    margin: auto;
  }
  .pdf{
    display: inline;
    float: right ;
    margin: auto;
  }
  </style>
  <title> Formulaire</title>
</head>
<body>
  <script>
  $(document).ready(function () {
          $('#sidebarCollapse').on('click', function () {
              $('#sidebar').toggleClass('active');
          });
      });
  </script>

  <div class="wrapper">

    <nav id="sidebar">

          <h3>Menu du mode admin </h3>

        <ul class="list-unstyled components">
            <div class="Boite">
              <p>Administratif</p>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Organiser une course</a>
                    </li>
                    <li>
                        <a href="#">Document Administratif</a>
                    </li>

                </ul>
            </div>
            <div class="Boite">
              <p>Club</p>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Gerer les membres</a>
                    </li>
                    <li>
                        <a href="#">Contacter adherent</a>
                    </li>

                </ul>
            </div>
            <div class="Boite">
              <p>Blog</p>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Article</a>
                    </li>
                    <li>
                        <a href="#">Photo</a>
                    </li>
                    <li>
                        <a href="#">Classement</a>
                    </li>
                    <li>
                        <a href="#">Annonce</a>
                    </li>
                </ul>
            </div>
            <div class="Boite">
              <p>Boutique</p>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Gerer Stock</a>
                    </li>
                    <li>
                        <a href="#">Facture</a>
                    </li>
                    <li>
                        <a href="#">Commande</a>
                    </li>

                </ul>
            </div>
            <div class="Boite">
              <p>Site</p>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Parametre generaux</a>
                    </li>
                    <li>
                        <a href="#">Statistique</a>
                    </li>
                </ul>
            </div>
         </ul>
    </nav>

    <div id="content">


      <script language="JavaScript">
      function ChangeUrl(formulaire)
      {
        if (formulaire.ListeUrl.selectedIndex != 0)
        {
          var url ;
          url = formulaire.ListeUrl.options[formulaire.ListeUrl.selectedIndex].value;
          window.location.href=url;
        }
      }

      </script>
      <FORM >
        <h3>Liste des PDF </h3>
        <SELECT NAME="ListeUrl" SIZE=1 onChange="ChangeUrl(this.form)"  >
          <OPTION SELECTED VALUE="">-Menu Déroulant De Liens-</option>
            <?php
$dir =".";
$scan = scandir($dir);
foreach ($scan as $key => $value) {
$path_parts = pathinfo($value);
if ($value!='..' && $value !='.') {
  $file = $path_parts['filename'].PHP_EOL;
  echo '<option value="'.$file.'.php">'.$file.' </option>'.PHP_EOL;
}
}
             ?>

          </SELECT>
        </FORM>


        <div class="">

        <h4>Inserer un nouveau pdf vierge à préremplir (en cours de developppement)</h4>
        <!-- Pour developper cette fonctionnalité nous devons intégré pdftk à notre serveur
        Le probleme etant que pdftk utilise un gestionnaire de dépendances appeler composer que nous ne nous comprenons pas faute de temps
        Mais une fois cette barriere franchis tout fichier compatible pourra etre ajouter et remplis en ligne
        Deplus un tuto pour etre mis en place pour apprendre aux utilisateur à créer eux meme leurs pdf template (avec des text fields)
        -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
          Choisir le pdf à ajouté:
            <input type="file" name="fileToUpload" id="fileToUpload" accept="application/pdf">
            <input type="submit" value="Valider" name="submit" disabled>
        </form>
        </div>


      </div>
    </div>
  </body>
  </html>
