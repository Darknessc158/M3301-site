<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <style media="screen">
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

* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9;
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important;
  color: #ffffff;
}

  </style>
  <title> Formulaire</title>
</head>
<body>
Franki Vincent
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
        <option value="formulairePDF.php?name=exemple">Exemple </option>
        <option value="formulairePDF.php">Doc 1 pas encore disponible </option>
        <option value="formulairePDF.php">Doc 2 pas encore disponible </option>
        <option value="formulairePDF.php">Doc 3 pas encore disponible </option>
      </SELECT>
    </FORM>









<?php
//aussi la possibilité d'utiliser un local storage https://blog.logrocket.com/the-complete-guide-to-using-localstorage-in-javascript-apps-ba44edb53a36/
if (isset($_GET['name'])){
  if($_GET['name']=='exemple'){
    printf(' <h2>Formulaire du PDF %s  </h2>',$_GET['name']) ;
    echo '

    <div class="boite formetpdf">
    <div class="formulaire">

    <form autocomplete="off" action="/action_page.php">
      <div class="autocomplete" style="width:300px;">

        <input id="inputname" type="text" name="name" placeholder="name">

        <input id="inputcity" type="text" name="city" placeholder="city">

        <input id="inputaddress" type="text" name="address" placeholder="address">

        <input id="inputphone" type="text" name="phone" placeholder="phone">
      </div>

      <input type="submit">
    </form>


    </div>

    <div class="pdf">

    <embed src=../../model/fpdm/template.pdf width=800 height=500 type=\'application/pdf\'/>

    </div>
    </div>

    ';
  }

}
else {
  echo "Ce document PDF n'est pas encore disponible";
}
?>

<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
    var a, b, i, val = this.value;
    /*close any already open lists of autocompleted values*/
    closeAllLists();
    if (!val) { return false;}
    currentFocus = -1;
    /*create a DIV element that will contain the items (values):*/
    a = document.createElement("DIV");
    a.setAttribute("id", this.id + "autocomplete-list");
    a.setAttribute("class", "autocomplete-items");
    /*append the DIV element as a child of the autocomplete container:*/
    this.parentNode.appendChild(a);
    /*for each item in the array...*/
    for (i = 0; i < arr.length; i++) {
      /*check if the item starts with the same letters as the text field value:*/
      if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
        /*create a DIV element for each matching element:*/
        b = document.createElement("DIV");
        /*make the matching letters bold:*/
        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
        b.innerHTML += arr[i].substr(val.length);
        /*insert a input field that will hold the current array item's value:*/
        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
        /*execute a function when someone clicks on the item value (DIV element):*/
        b.addEventListener("click", function(e) {
          /*insert the value for the autocomplete text field:*/
          inp.value = this.getElementsByTagName("input")[0].value;
          /*close the list of autocompleted values,
          (or any other open lists of autocompleted values:*/
          closeAllLists();
        });
        a.appendChild(b);
      }
    }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
    var x = document.getElementById(this.id + "autocomplete-list");
    if (x) x = x.getElementsByTagName("div");
    if (e.keyCode == 40) {
      /*If the arrow DOWN key is pressed,
      increase the currentFocus variable:*/
      currentFocus++;
      /*and and make the current item more visible:*/
      addActive(x);
    } else if (e.keyCode == 38) { //up
      /*If the arrow UP key is pressed,
      decrease the currentFocus variable:*/
      currentFocus--;
      /*and and make the current item more visible:*/
      addActive(x);
    } else if (e.keyCode == 13) {
      /*If the ENTER key is pressed, prevent the form from being submitted,*/
      e.preventDefault();
      if (currentFocus > -1) {
        /*and simulate a click on the "active" item:*/
        if (x) x[currentFocus].click();
      }
    }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
    closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var names = ["Killian Mbappe","Michel Obama","Franki Vincent","Papa Johny","Didier Mangay","Michael Jackson","Josumé ","Pablo Escobar","Papa Wemba","Pierre Back","Patrick Zambo"];
var address = ["20 rue la pommade ","78 chemin marechal pétain ","38 rue des citrons ","7 bis allée des mangues ","56 cours patel ","1 rue des kiwi ","89 rue du zouk "];
var citys = ["Petite ile ","Piton des go ","Ravine du pont","Saint didier la moukate ","Cilaos ","Mafate","Salazi"];
var phones = ["0614457889","0614125678","0614152648"];



/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/


</script>

<script>
autocomplete(document.getElementById("inputname"), names);
autocomplete(document.getElementById("inputaddress"), address);
autocomplete(document.getElementById("inputcity"), citys);
autocomplete(document.getElementById("inputphone"), phones);
</script>

</body>
</html>
