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
        
    <div class="pag-login">
        <div class="container d-flex justify-content-center align-items-center vh-100">

            <div class="login p-5">

                <div class="row justify-content-center">
                    <img src="./assests/img/logo-classnote-light.png" alt="Logo do sistema do ClassNote" title="Logo ClassNote" class="logo pb-3">
                    <p class="text-logo-light pt-3">Um sistema para ajudá-lo a alcançar seu sonho e objetivo: a sua formatura. Gerencie o conteúdo de suas aulas, e nunca esqueça da suas para provas e entregas de trabalhos, tudo isso em um único local.</p>
                </div>

                <div class="row">

                    <form action="home.php" method="POST" class="px-3">
                        <input type="text" class="form-control my-3 mb-3 text-center" placeholder="digite o usuario" id="username" name="username" required>
                        <input type="password" class="form-control my-3 mb-3 text-center" placeholder="digite a senha" id="password" name="password" required>
                        <button type="submit" class="btn-Login">Entrar <i class="fa-solid fa-circle-right"></i></button>
                    </form>

                </div>

                <div class="div-cadastro my-5 p-3">
                    <div class="row">
                        <div class="ol-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                            <h3>Ainda não possuo conta ?</h3>
                        </div>
                        <div class="ol-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                            <a href="cadastro.php"><button class="btn-cadastro p-3">Quero criar uma conta</button></a>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
        
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>