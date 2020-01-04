<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
</head>
<body>

<h2>Accordion</h2>

<form class="" action="traitement.php" method="post">


<button class="accordion">Section 1</button>
<div class="panel">
  <p>Champs 1</p>
  <input list="c1" type="text" name="c1" value="">
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Champs 2</p>
  <input list="c2" type="text" name="c2" value="">
</div>

<button class="accordion">Section 3</button>
<div class="panel">
  <p>Champs 3</p>
  <input list="c3" type="text" name="c3" value="">
</div>
<input type="submit" name="Valider" value="Valider">

</form>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

</body>
</html>
