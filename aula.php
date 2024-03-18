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

    <div class="container">

        <div class="homepage my-5 text-center">

            <div class="row">
                
                <h2 class="pb-3 text-logo-dark"> Adicionar/editar aula </h2>

                <form action="home.php" method="POST" class="px-3">
                    <div class="row">

                        <div class="col-12">
                            <select id="materias" name="materias" class="input-infos py-2 my-4" required>
                                <option value="materia">lista de materias</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <input type="date" id="data" name="data" class="input-infos py-2 my-4" required>
                        </div>

                        <div class="col-12">
                            <textarea id="texto" name="texto" rows="4" cols="50" class="input-infos py-2 my-4" required></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn-Login">Adicionar aula <i class="fa-solid fa-circle-plus"></i></button>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>
        
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>