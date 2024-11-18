<?php
include "../db.class.php";


    $db = new db();

    if(!empty($_POST)) {
        $db->insert($_POST);
        echo "<b>Regitro inserido com sucesso</b>";
        header("location: CategoriaList.php");
    }
?>
<form action="" methd="post">

    <h4>Formulario Categoria</h4>

    <label for="">Nome</label> <br>
    <input type="text" name="nome">

    <button type="submit">Salvar</button>

</form>