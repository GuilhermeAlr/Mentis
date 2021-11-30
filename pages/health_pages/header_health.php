<?php
    session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentis</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="../../resources/favicon.png">
</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light navbar-font pt-3 pb-3">
            <div class="container-fluid">
                <a class="navbar-brand dash-title" href="../../index.php">
                    <div class="logo me-3">Mentis<span class="logo-ponto">.</span></div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../../index.php">Início</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="../../index.php#quem">Sobre</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link active" href="saude_mental.php">Saúde Mental</a>
                        </li>
                    </ul>
                    <?php
                        if(isset($_SESSION["idpaciente"])){
                            echo "<form class='d-flex'>";
                            echo "<a href='../dashboard_paciente/dashboard_paciente.php' class='navbar-font btn me-2 section-btn2' type='button'><i class='bi bi-arrow-return-right'></i> Área do Paciente</a>";
                            echo "<a href='../../includes/logout_inc.php' class='navbar-font btn navbar-login_sair' type='button'>Sair</a>";
                            echo "</form>";
                        }
                        else if(isset($_SESSION["idpsicologo"])){
                            echo "<form class='d-flex'>";
                            echo "<a href='../dashboard_psicologo/dashboard_psicologo.php' class='navbar-font btn me-2 section-btn2' type='button'><i class='bi bi-arrow-return-right'></i> Área do Psicólogo</a>";
                            echo  "<a href='../../includes/logout_inc.php' class='navbar-font btn navbar-login_sair' type='button'>Sair</a>";
                            echo "</form>";
                        }
                        else{
                            echo "<form class='d-flex'>";
                            echo "<a href='../cadastrar.php' class='navbar-font btn me-2 section-btn2' type='button'><i class='bi bi-arrow-return-right'></i> Cadastrar</a>";
                            echo "<a href='../login.php' class='navbar-font btn navbar-login_sair' type='button'>Login</a>";
                            echo "</form>";
                        }
                    ?>
                </div>
            </div>
        </nav>
    </div>