<?php 

include './bd/verificar_autenticacao.php';
include './includes/head.php'; 

?>

    <div class="home">
        <div class="container justify-content-center align-items-center">

            <?php include './includes/header.php'; ?>

            <div class="row my-5">

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 my-2">
                    <a href="materia.php">
                        <div class="cards justify-content-center align-items-center p-5 div-sombra text-center">
                            <h3><i class="fa-solid fa-book"></i><br />
                            Adicionar/Editar Matéria</h3>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 my-2">
                    <a href="aula.php">
                        <div class="cards justify-content-center align-items-center p-5 div-sombra text-center">
                            <h3><i class="fa-solid fa-chalkboard-user"></i><br />
                            Adicionar/Editar Aula</h3>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 my-2">
                    <a href="entrega.php">
                        <div class="cards justify-content-center align-items-center p-5 div-sombra text-center">
                            <h3><i class="fa-solid fa-file-pen"></i><br/>
                            Adicionar/Editar Avaliação ou Trabalho</h3>
                        </div>
                    </a>
                </div>

                <div class="col-12 my-3">
                    <div class="alunos p-3 text-center">
                        <p>Trabalho para a disciplina de Projeto de Bloco: Engenharia Disciplinada de Softwares, ministrada pelo professor Armênio Cardoso, na Faculdade INFNET. O projeto foi elaborado pelos alunos:</p>
                        <br />
                        <div class="row">

                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mx-auto">
                                <a href="https://www.linkedin.com/in/diogo-erie-49395921b/" target="_blank"><div class="btn-alunos p-3 m-2"><i class="fa-brands fa-linkedin"></i>/Diogo Erie</div></a>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mx-auto">
                                <a href="https://www.linkedin.com/in/luiz-gustavo-santos/" target="_blank"><div class="btn-alunos p-3 m-2"><i class="fa-brands fa-linkedin"></i>/Luiz Gustavo</div></a>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mx-auto">
                                <a href="https://www.linkedin.com/in/marcelojael/" target="_blank"><div class="btn-alunos p-3 m-2"><i class="fa-brands fa-linkedin"></i>/Marcelo Jael</div></a>
                            </div>
                        
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

<?php include './includes/footer.php'; ?>