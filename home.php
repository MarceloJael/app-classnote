<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ClassNote - Sistema de gerenciamento de notas</title>

        <!-- FAVICON -->
        <link rel="icon" type="image/png" href="./assests/img/favicon-classnote.png">

        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- ICONS AWESOME -->
        <script src="https://kit.fontawesome.com/5bdb09f0fb.js" crossorigin="anonymous"></script>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Style CSS -->
        <link href="./assests/style.css" rel="stylesheet">
    </head>
    <body>

    <div class="container d-flex justify-content-center align-items-center vh-100">

        <div class="homepage my-5 text-center">

            <img src="./assests/img/logo-classnote.png" alt="Logo do sistema do ClassNote" title="Logo ClassNote" class="logo pb-3">

            <div class="row">
                
                <div class="col-12">
                    <a href="materia.php">
                        <div class="card-home p-3 m-3 text-center">
                            <h2><i class="fa-solid fa-book"></i> Adicionar/editar Matéria
                        </div>
                    </a>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <a href="aula.php">
                        <div class="card-home p-3 m-3 text-center">
                            <h2><i class="fa-solid fa-pen"></i> Adicionar/editar Aula
                        </div>
                    </a>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <a href="avaliacao.php">
                        <div class="card-home p-3 m-3 text-center">
                            <h2><i class="fa-solid fa-clock"></i> Adicionar/editar Prova ou trabalho
                        </div>
                    </a>
                </div>

            </div>

        </div>

    </div>
        
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>