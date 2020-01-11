<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <script>
      function Check(frm){
        var checkBoxes = frm.elements['colors[]'];
        for (i = 0; i < checkBoxes.length; i++){
          checkBoxes[i].checked = (selectControl.innerHTML == "Select All") ? 'checked' : '';
        }
        selectControl.innerHTML = (selectControl.innerHTML == "Select All") ? "Unselect All" : 'Select All';
      }

      window.onload = function(){
        var selectControl = document.getElementById("selectControl");
        selectControl.onclick = function(){Check(document.myform)};
      };
    </script>


<form class="" action="index.html" method="post">
<div class="numero">
<h3>Nom des adhérents </h3>
<?php
$listadh = getLesAdherents();
foreach ($listadh as $key => $value) {
fprint(' <input type="checkbox" name="%s" value="%d"> %s<br>',$value.getNom()+' '+$value.getPrenom(),$value.getTelephone(),$value.getNom()+' '+$value.getPrenom());
}
?>
</div>
<div class="message">
Votre message :<br>
    <input type="text" name="message" value="message">
    <br>
</div>
</div>
<input type="submit" value="Selection tous">
<input type="submit" value="reinitialiser">
<input type="submit" value="Valider">
</form>


  </body>
</html>
