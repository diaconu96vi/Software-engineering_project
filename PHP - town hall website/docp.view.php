<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primarie</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body{
            background-image: url("background.jpg");
            background-size: cover;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Documente</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Primarie
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="membrii.view.php">Membrii primarie</a>
                    <a class="dropdown-item" href="organigrama.view.php">Organigrama</a>
                    <a class="dropdown-item" href="contact.view.php">Contact</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Audiente online
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Program de audiente</a>
                    <a class="dropdown-item" href="#">Cerere de audiente</a>
                    <a class="dropdown-item" href="#">Chat online</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Documente
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="docp.view.php">Documente informative</a>
                    <a class="dropdown-item" href="doca.view.php">Documente aprobate</a>
                    <a class="dropdown-item" href="#">Cauta document</a>
                    <div class="dropdown-divider"></div>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Cauta document" aria-label="Search">
                        <!-- <button type="submit">Search</button></input> -->
                    </form>

                </div>
            </li>


        </ul>

        <ul class="navbar-nav ml-lg-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cont
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Date</a>
                    <a class="dropdown-item" href="#">Schimbare date</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
            <li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cautare" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>

        </ul>

    </div>
</nav>
<div class="container">
    <h1><span class="badge badge-secondary">Documente <br>
            Documente utile</span></h1>
</div>
<div class="container" style="background-color:lightgray; margin-top:15px;">
    <h1>DIRECTIA RELATII CU PUBLICUL</h1>
    <li><a target="_blank" href="8229.pdf">Vizualizare document1</a></li>
    <li><a href="8229.pdf" download>Descarcare document1</a></li>
    <li><a target="_blank" href="8230.pdf">Vizualizare document2</a></li>
    <li><a href="8230.pdf" download>Descarcare document2</a></li>
    <h1>DIRECTIA IMPOZITE SI TAXE</h1>
    <li><a target="_blank" href="cit1.pdf">Vizualizare cerere1</a></li>
    <li><a href="cit1.pdf" download>Descarcare cerere1</a></li>
    <li><a target="_blank" href="cit2".pdf">Vizualizare cerere2</a></li>
    <li><a href="cit2.pdf" download>Descarcare cerere2</a></li>
    <h1>DIRECTIA SERVICII CU PUBLICUL</h1>
    <li><a target="_blank" href="csp.pdf">Vizualizare cerere1</a></li>
    <li><a href="csp.pdf" download>Descarcare cerere1</a></li>
    <li><a target="_blank" href="csp2.pdf">Vizualizare cerere2</a></li>
    <li><a href="csp2.pdf" download>Descarcare cerere2</a></li>
</div>
</body>
</html>