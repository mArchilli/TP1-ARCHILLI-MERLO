<?PHP 

    // echo "<pre>";
    // print_r($_GET);
    // echo "</pre>";

    //  ASIGNAMOS EN SECCION EL VALOR DE LA PROPIEDAD SEC DE LA SUPERGLOBAR GET
    $seccion = isset($_GET['sec']) ? $_GET['sec'] : 'home';
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- CSS PROPIO -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- FONT ROBOTO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <title>TP 1 - ARCHILLI - MERLO</title>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?sec=home">Camisetas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?sec=home">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?sec=quienes_somos">Quienes Somos?</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?sec=catalogo">Catalogo</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?sec=contacto">Contacto</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Lista deplegable
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Camisetas</a></li>
                    <li><a class="dropdown-item" href="#">Shorts</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Botines</a></li>
                </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main class="container"> 
        <!-- CONTENIDO VARIABLE -->
        <?PHP require_once "views/$seccion.php" ?>
    </main>
    <!-- MAIN -->

    <!-- FOOTER -->
    <div class="container">
        <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Inicio</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Quienes Somos?</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Catalogo</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contacto</a></li>
        </ul>
        <p class="text-center text-muted">&copy; Programacion II 2023 - Archilli - Merlo</p>
        </footer>
    </div>
    <!-- FOOTER -->

    <!-- BOOSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>