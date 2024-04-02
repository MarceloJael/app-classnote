    <div class="row">
        <?php 
            if (!isset($_GET['id']) && empty($id_materia)) {
                echo '
                <div class="col-12 justify-content-center align-items-center text-center my-3">
                    <h2>ADICIONAR NOVA ENTREGA</h2>
                </div>
                ';
            } else {
                echo '
                <div class="col-12 justify-content-center align-items-center text-center my-3">
                    <h2>EDITAR ENTREGA</h2>
                </div>
                ';
            }
        ?>

        <?php 
            if (!isset($_GET['id']) && empty($id_entrega)) {
                echo '<form action="./bd/insert_entrega.php" method="POST" class="py-3">';
            } else {
                echo '<form action="./bd/update_entrega.php" method="POST" class="py-3">';
            }
        ?>
            <input type="hidden" name="id_entrega" value="<?php echo $id_entrega; ?>">

            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-2 mx-auto">
                    <label for="materia"><b>Selecione a matéria</b></label><br>
                    <?php include './bd/list_materias.php' ?>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 my-2 mx-auto">
                    <label for="tipo_entrega"><b>Selecione o tipo da entrega</b></label><br>
                    <select name="tipo_entrega">
                        <option value="Trabalho">Trabalho</option>
                        <option value="Prova">Prova</option>
                    </select>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 my-2 mx-auto">
                    <label for="data"><b>Data da entrega</b></label>
                    <input type="date" id="data" name="data" value="<?php echo isset($data_entrega) ? $data_entrega : ''; ?>">
                </div>

                <div class="w-100"></div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-2 mx-auto">
                    <textarea id="anotacao" name="anotacao" maxlength="500" style="height:150px;" placeholder="Digite a anotação da entrega"><?php echo isset($anotacao_entrega) ? htmlspecialchars($anotacao_entrega) : ''; ?></textarea>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-2 mx-auto">
                    <input type="text" class="my-2" placeholder="Link da entrega" id="link_entrega" name="link_entrega" value="<?php echo isset($link_entrega) ? $link_entrega : ''; ?>"> 
                </div>

                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 my-2 mx-auto">
                    <input type="text" class="my-2" placeholder="Nota da entrega" id="nota_entrega" name="nota_entrega" value="<?php echo isset($nota_entrega) ? $nota_entrega : ''; ?>"> 
                </div>


                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 my-2 mx-auto">
                    <select name="status_entrega">
                        <option value="Pra entregar">Pra entregar</option>
                        <option value="Já feito">Já feito</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="my-3 text-center btn-green">Adicionar entrega <i class="fa-solid fa-circle-plus"></i></button>
                </div>

            </div>
        </form>

    </div>