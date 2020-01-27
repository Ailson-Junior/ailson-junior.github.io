<?php

include "conexao.php";

$idMembro = $_POST["idMembro"];

$sql = "DELETE from membros WHERE Id=$idMembro";

if($conexao->query($sql) === TRUE)
{
    echo "<title>Bom Jardim - Confirmar Exclusão</title>";

    echo"<link rel='icon' type='image/png' href='imagens/IEADEM(fundo).png'/>";

    echo "<body = style='background-color:lightsteelblue;'/>";
    
    echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

    echo "<center><h1>Membro excluído com sucesso!</h1></center>";

    echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Voltar para a página inicial</button></label></a></center>';";
}
else
{
    echo "<title>Bom Jardim - Confirmar Exclusão</title>";

    echo"<link rel='icon' type='image/png' href='imagens/IEADEM(fundo).png'/>";
    
    echo "<body = style='background-color:lightsteelblue;'/>";
    
    echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

    echo "<center><h1>Erro ao excluir membro!</h1></center>";

    echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Voltar para a página inicial</button></label></a></center>';";
}

$conexao->close();

?>