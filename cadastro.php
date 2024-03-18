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

        <div class="cadastro my-5 text-center">

            <h1 class="py-2 text-logo-dark">Crie uma nova conta</h1>

            <p class="text-logo-dark">Crie uma nova conta para acessar o ClassNote e desfrutar de todas as funcionalidades disponíveis no sistema.</p>

            <form action="home.php" method="POST" class="px-3">

                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <input type="text" class="form-control my-3 mb-3 text-center" placeholder="digite o seu nome" id="nome" name="nome" required>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <input type="text" class="form-control my-3 mb-3 text-center" placeholder="digite o seu sobrenome" id="sobrenome" name="sobreome" required>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <input type="email" class="form-control my-3 mb-3 text-center" placeholder="digite o seu e-email" id="email" name="email" required>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <input type="password" class="form-control my-3 mb-3 text-center" placeholder="Digite a senha" id="senha" name="senha" required>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <input type="password" class="form-control my-3 mb-3 text-center" placeholder="Confirme a senha" id="senha2" name="senha2" required>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <input type="text" class="form-control my-3 mb-3 text-center" placeholder="Aonde você estuda?" id="escola" name="escola" required>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <button type="submit" class="btn-Login">Entrar</button>
                    </div>
                
                </div>
                
            </form>

        </div>

    </div>
        
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>