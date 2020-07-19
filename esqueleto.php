<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Orlando city</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    
</head>
<body>
    
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.php">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="materias">Add. Cards <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="esqueleto.php?file=noitesmaisdencas">Noites Mais Dencas</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Outros
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="esqueleto.php?file=materias">Materias</a>
                                    <a class="dropdown-item" href="esqueleto.php?file=card">Cards</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="esqueleto.php?file=historico">Historico</a>
                                </div>
                            </li>                        
                             <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </nav>
</header>

            <?php
                include(__DIR__ . "/{$_GET['file']}.php");
            ?>

</body>
<script type="text/javascript" src="lib/jquery/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
</html>