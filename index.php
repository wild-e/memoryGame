<!-- memory game

On load Afficher 16 div carrées bords arrondis dans un parent en grid tout centré (responsive) de façon random
Dans chaque div une image svg style ravensburger 
Quand on click sur la div il faut que l'image change et affiche l'image qui a été randomisée
quand on click sur une autre div elle doit se retourner
si les noms des deux image sont les mêmes prompt "bien joué"
si les noms des deux images sont différentes elle reprennent leur premier état -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Memory game | Emmanuelle WILD | Dev Web</title>
  <link rel="stylesheet" href="./style.css">
  </head>
  <body>

    <div class="memoryParent">
        <div class="card one">
        </div>
        <div class="card two">
        </div>
        <div class="card three">
        </div>
        <div class="card four">
        </div>
        <div class="card">
        </div>
        <div class="card">
        </div>
        <div class="card">
        </div>
        <div class="card">
        </div>
        <div class="card">
        </div>
        <div class="card">
        </div>
        <div class="card">
        </div>
        <div class="card">
        </div>
        <div class="card">
        </div>
        <div class="card">
        </div>
        <div class="card">
        </div>
        <div class="card">
        </div>
    </div>

    <script src="./memory.js"></script>
  </body>
</html>
