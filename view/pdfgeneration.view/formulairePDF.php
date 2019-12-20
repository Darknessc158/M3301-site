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
          //window.open(url,'_blank'); truc de base
          // nouveauté : (et i marche )
          window.location.href=url;
        }
      }

      </script>
      <FORM >
        <h3>Liste des PDF </h3>
        <SELECT NAME="ListeUrl" SIZE=1 onChange="ChangeUrl(this.form)"  >
          <OPTION SELECTED VALUE="">-Menu Déroulant De Liens-</option>
            <option value="formulairePDF.php?name=exemple">Exemple </option>
            <option value="formulairePDF.php?name=assurance">Assurance de responsaibilite civile et risques divers pour les epreuves</option>
            <option value="formulairePDF.php">Doc 2 pas encore disponible </option>
            <option value="formulairePDF.php">Doc 3 pas encore disponible </option>
          </SELECT>
        </FORM>





        <?php
        //aussi la possibilité d'utiliser https://www.w3schools.com/howto/howto_js_autocomplete.asp
        if (isset($_GET['name'])){
          if($_GET['name']=='exemple'){
            printf(' <h2>Formulaire du PDF %s  </h2>',$_GET['name']) ;
            echo '

            <div id="boiteformetpdf">
            <div id="formulaire">
            <form class="" action="../../model/fpdm/ex-array.php" method="post" autocomplete="off">
            <p> Name :<br />
            <input list="nom" type="text" name="name" placeholder="Name par defaut "/>
            <datalist id="nom">
            <option value="proposition nom 1 ">
            <option value="proposition nom 2">
            <option value="proposition nom 3">
            <option value="proposition nom 4">
            </datalist>
            </p>

            <p>Address :<br />
            <input list="address" type="text" name="address" placeholder="Adresse Par defaut " />
            <datalist id="address">
            <option value="proposition adresse 1 ">
            <option value="proposition adresse 2">
            <option value="proposition adresse 3">
            <option value="proposition adresse 4">
            <option value="45 rue du zouk">
            <option value="289 rue des exemples ">
            </datalist>
            </p>

            <p>City :<br />
            <input list="city" type="text" name="city" placeholder="City par défaut" />
            <datalist id="city">
            <option value="proposition city 1 ">
            <option value="proposition city 2">
            <option value="proposition city 3">
            <option value="proposition city 4">
            </datalist>
            </p>

            <p>Phone :<br />
            <input type="phone" name="phone" list="phone" placeholder=" numero par défaut"/>
            <datalist id="phone">
            <option tittle="numero ded la mairie" value="0614786532">
            <option value="0614457889">
            <option value="0614125678">
            <option value="0614152648">
            </datalist>
            </p>

            <div class="Bouton">
            <INPUT TYPE="submit" NAME="valider" VALUE="Valider">
            <INPUT TYPE="reset" NAME="reset" VALUE="Reinitialiser">
            </div>
            </form>
            </div>

            <div class="pdf">

            <embed src=../../model/fpdm/template.pdf width=800 height=500 type=\'application/pdf\'/>

            </div>
            </div>

            ';
          }

          // faire 10 champs par 10 
          elseif ($_GET['name']='assurance') {
              <div id="boiteformetpdf">
              <div id="formulaire">
              <form class="" action="../../model/fpdm/ex-array.php" method="post">

              <p> Numero affiliation  :<br />
              <input list="nom" type="text" name="name" placeholder=""/>
              <datalist id="nom">
              <option value="038151913 ">
                </datalist>
                </p>
              </form>
              </div>
              </div>
          }

        }
        else {
          echo "Ce document PDF n'est pas encore disponible";
        }
        ?>

      </div>
    </div>
  </body>
  </html>
