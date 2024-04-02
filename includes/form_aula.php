    <div class="row">
        <?php 
            if (!isset($_GET['id']) && empty($id_materia)) {
                echo '
                <div class="col-12 justify-content-center align-items-center text-center my-3">
                    <h2>ADICIONAR NOVA AULA</h2>
                </div>
                ';
            } else {
                echo '
                <div class="col-12 justify-content-center align-items-center text-center my-3">
                    <h2>EDITAR AULA</h2>
                </div>
                ';
            }
        ?>

        <?php 
            if (!isset($_GET['id']) && empty($id_materia)) {
                echo '<form action="./bd/insert_aula.php" method="POST" class="py-3">';
            } else {
                echo '<form action="./bd/update_aula.php" method="POST" class="py-3">';
            }
        ?>
            <input type="hidden" name="id_aula" value="<?php echo $id_aula; ?>">

            <div class="row">

                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 my-2 mx-auto">
                    <label for="materia"><b>Selecione a matéria</b></label><br>
                    <?php include './bd/list_materias.php' ?>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 my-2 mx-auto">
                    <label for="data"><b>Data da aula</b></label>
                    <input type="date" id="data" name="data" value="<?php echo isset($data_aula) ? $data_aula : ''; ?>">
                </div>

                <div class="w-100"></div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-2 mx-auto">
                    <textarea id="anotacao" name="anotacao" maxlength="500" style="height:150px;" placeholder="Digite a anotação da aula"><?php echo isset($anotacao) ? htmlspecialchars($anotacao) : ''; ?></textarea>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 my-2 mx-auto">
                    <input type="text" class="my-2" placeholder="Link da aula" id="link_aula" name="link_aula" value="<?php echo isset($link_aula) ? $link_aula : ''; ?>"> 
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 my-2 mx-auto">
                    <input type="number" class="my-2" placeholder="Número da aula" id="numero_aula" name="numero_aula" value="<?php echo isset($numero_aula) ? $numero_aula : ''; ?>"> 
                </div>

                <div class="col-12">
                    <button type="submit" class="my-3 text-center btn-green">Adicionar aula <i class="fa-solid fa-circle-plus"></i></button>
                </div>

            </div>
        </form>

    </div>