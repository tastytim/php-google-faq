<?php


$pageList = [
    "Introduzione"=>[
        "Come state" =>  [
            "paragraph" => "La recente <a href=''>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze ",
            "paragraph" => "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato",
        ],
        "title" => "Come fa Google",

    ] ,
    "Norme sulla privacy"=>[
        "Come state" =>  [
            "paragraph" => "La recente <a href=''>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze ",
            "paragraph" => "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato",
        ],
        "title" => "Come fa Google",

    ] ,
    "Termini di servizio"=>[
        "Come state" =>  [
            "paragraph" => "La recente <a href=''>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze ",
            "paragraph" => "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato",
        ],
        "title" => "Come fa Google",

    ] ,
    "Tecnologie"=>[
        "Come state" =>  [
            "paragraph" => "La recente <a href=''>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze ",
            "paragraph" => "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato",
        ],
        "title" => "Come fa Google",

    ] ,
    "Domande frequenti"=>[
        "Come state" =>  [
            "paragraph" => "La recente <a href=''>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze ",
            "paragraph" => "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato",
        ],
        "title" => "Come fa Google",

    ] ,
    
    ];

$activePage = "Introduzione";





?>

<!DOCTYPE html>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
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
                    <?php 
                    $titlePageList = array_keys($pageList);
                    foreach($titlePageList as $pageTitle){
                        echo "<li>$pageTitle</li>";
                        
                    }
                    ?>
                    </ul>


                </div>
            </div>
        </header>
        <main>
            
        </main>
        <footer></footer>
    </body>
</html>