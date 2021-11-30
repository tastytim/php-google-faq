<?php


$leftColumnList = [
        "Pubblicita",
        "In che modo Google utilizza i cookie",
        "In che modo Google utilizza il riconoscimento di pattern",
         "Come funziona Google voice",
         "Guida alla privacy nei prodotti Google",
         "Modalita di conservazione dei dati raccolti da Google"
    ];



$rightColumnList = [
    [
        "title" => "TECNOLOGIE",
        "p" => "Noi di Google perseguiamo idee e prodotti che spesso superano i limiti dell’attuale tecnologia. Siamo una società che agisce responsabilmente, pertanto lavoriamo con impegno per conciliare l’innovazione con un’adeguata tutela della privacy e della sicurezza dei nostri utenti. I princìpi sulla privacy guidano le nostre decisioni a ogni livello. In questo modo siamo in grado di proteggere gli utenti e dare loro gli strumenti di cui hanno bisogno, mentre perseguiamo la nostra mission di organizzare le informazioni mondiali."
    ]
]





?>

<!DOCTYPE html>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/tech.css">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <head>
<title>PHP GOOGLE</title>
    </head>
    <body>
        <header>
            <div class="container-fluid logo-bar">
                <div class="row">
                    <div class="col d-flex">
                        <img src="img/google.png" alt="google">
                        <h3>Privacy e termini</h3>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <img class="me-2"src="img/nine-dots.png" alt="dots">
                        <img src="img/user.png" alt="user">
                        
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <ul class="navbar-custom">
                    <li><a href="">Introduzione</a></li>
                    <li><a href="">Norme sulla privacy</a></li>
                    <li><a href="">Termini di servizio</a></li>
                    <li><a href="tecnologie.php">Tecnologie</a></li>
                    <li><a href="index.php">Domande frequenti</a></li>
                    </ul>
                </div>
               
            </div>
        </header>
        <main>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-2">
                        <ul>
                        <?php 
            foreach($leftColumnList as $key=>$value){
                echo "<p>".$value."</p>";
            }
          ?>
                        </ul>
                    </div>
                    <div class="col-10">
                    <?php 
            foreach($rightColumnList as $key=>$value){
                echo "<h1>".$value['title']."</h1>";
                echo "<p>".$value['p']."</p>";
            }
          ?>
                    </div>
                </div>





            </div>
            
        </main>
        <footer></footer>
    </body>
</html>