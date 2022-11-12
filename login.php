<?php

    include("conexao.php");

    if (isset($_POST['enviar'])) {
        $user = $_POST['usuario'];
        $pass = $_POST['senha'];

        $result = mysqli_query($conect, "INSERT INTO usuarios(user,pass) VALUES ('$user', '$pass')");

    }

?>