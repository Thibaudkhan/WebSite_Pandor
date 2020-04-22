<?php echo "lol";?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div id="fb-root"></div>
    <div class="blocLeft">
      <h1>Pandor</h1>
      <p id="date">Janvier 2020</p>

      <div class="result resultName">
        <h2>Taux de mortalité</h2>
        <h2>Taux d'infecté</h2>
        <h2>Taux de guérison</h2>
      </div>
      <div class="result ">
        <p id="death"></p>
        <p id="infected"></p>
        <p id="heal"></p>
      </div>
      <div class="socialMedia">
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text="J&#39;ai perdu" data-lang="fr" data-show-count="false">Tweet</a>
      </div>
      <div class="fb-share-button" data-href="https://pandor-learn.000webhostapp.com/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpandor-learn.000webhostapp.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
    </div>

    
    <div class="marginRight">
      <button  onclick="validate()" class="btn btn-default" style="position: absolute;margin-top: 41%;width: 25%;">Lancer la simulation</button>
      <p><input type="text" placeholder="Nom du virus" size="30"></p>
      <div class="blocPere">
        <div id="bloc1" tabindex="0">
        <h2>Paramétrage du comportement moyen</h2>
          <div class="enfant">
              <div class="checkbox">
                <label><input type="checkbox" id="clean"> Lavages des mains </label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" id="confinement"> Confinement </label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" id="protection"> Gestes barrières </label>
              </div>
          </div>
        </div>
        <div id="bloc2" tabindex="0">
        <h2>Prises de mesures en temps réel</h2>
        <div class="enfant">
          <div class="checkbox">
            <label><input type="checkbox" id="financementSoignant"> Financement du personnel soignant </label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" id="financementRecherche"> Financement de la recherche </label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" id="mask"> Apport de masque </label>
          </div>
          </div>
        </div>
      </div>
     
    </div>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0"></script>
  </body>
</html>
