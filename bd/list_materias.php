<select name="materia_id">
    <?php
    include 'conexao.php';

    $valor_selecionado = isset($_GET['materia_id']) ? $_GET['materia_id'] : '';

    $sql = "SELECT id, nome FROM materias";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $id_materia = $row['id'];
            $nome_materia = $row['nome'];

            $selected = ($id_materia == $valor_selecionado) ? 'selected' : '';

            echo "<option value=\"$id_materia\" $selected>$nome_materia</option>";
        }
    } else {
        echo "<option value=\"\">Nenhuma matéria encontrada</option>";
    }

    $conexao->close();
    ?>
</select>