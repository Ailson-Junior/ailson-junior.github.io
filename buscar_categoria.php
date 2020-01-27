<?php

include "conexao.php";

$categoriaMembro = $_POST["categoriaMembro"];

$sql = "SELECT * from membros WHERE Categoria = '$categoriaMembro'";
$busca = $conexao->query($sql);

$conexao->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bom Jardim - Buscar por Categoria</title>
    <link rel="icon" type="image/png" href="imagens/IEADEM(fundo).png"/>
</head>
<style>
th, td {border-style: solid; border-color: lightgray;}
tr {text-align: justify;}
tr:nth-child(odd) {background-color: white;}
tr:nth-child(even) {background-color: lightgray;}
caption {font-size: 30px;}
table {width: 600px}
</style>
<body style="background-color: lightsteelblue;">
    <p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>
    <br>
    <?php
        if($busca->num_rows > 0)
        {
            while($resultado = $busca->fetch_assoc())
            {
                echo "<center><table>
                        <caption><b>Dados do Membro<b></caption>
                        <tr>
                            <th>Nome:</th>
                            <td>".$resultado["Nome"]."</td>
                        </tr>
                        <tr>
                            <th>Categoria:</th>
                            <td>".$resultado["Categoria"]."</td>
                        </tr>
                        <tr>
                            <th>Sexo:</th>
                            <td>".$resultado["Sexo"]."</td>
                        </tr>
                        <tr>
                            <th>Nome do Pai:</th>
                            <td>".$resultado["NomePai"]."</td>
                        </tr>
                        <tr>
                            <th>Nome da Mãe:</th>
                            <td>".$resultado["NomeMae"]."</td>
                        </tr>
                        <tr>
                            <th>Naturalidade:</th>
                            <td>".$resultado["Naturalidade"]."</td>
                        </tr>
                        <tr>
                            <th>Telefone:</th>
                            <td>".$resultado["Telefone"]."</td>
                        </tr>
                        <tr>
                            <th>Endereço:</th>
                            <td>".$resultado["Endereco"]."</td>
                        </tr>
                        <tr>
                            <th>Bairro:</th>
                            <td>".$resultado["Bairro"]."</td>
                        </tr>
                        <tr>
                            <th>CEP:</th>
                            <td>".$resultado["CEP"]."</td>
                        </tr>
                        <tr>
                            <th>Escolaridade:</th>
                            <td>".$resultado["Escolaridade"]."</td>
                        </tr>
                        <tr>
                            <th>Profissão:</th>
                            <td>".$resultado["Profissao"]."</td>
                        </tr>
                        <tr>
                            <th>Estado Civil:</th>
                            <td>".$resultado["EstadoCivil"]."</td>
                        </tr>
                        <tr>
                            <th>Cônjuge Evangélico:</th>
                            <td>".$resultado["ConjugeEvangelico"]."</td>
                        </tr>
                        <tr>
                            <th>Nome do Cônjuge:</th>
                            <td>".$resultado["NomeConjuge"]."</td>
                        </tr>
                        <tr>
                            <th>Data de Casamento:</th>
                            <td>".$resultado["DataCasamento"]."</td>
                        </tr>
                        <tr>
                            <th>Numero de Filhos:</th>
                            <td>".$resultado["NumeroFilhos"]."</td>
                        </tr>
                        <tr>
                            <th>Data de Nascimento:</th>
                            <td>".$resultado["DataNascimento"]."</td>
                        </tr>
                        <tr>
                            <th>Data de Decisão:</th>
                            <td>".$resultado["DataDecisao"]."</td>
                        </tr>
                        <tr>
                            <th>Data do Batismo em Águas:</th>
                            <td>".$resultado["DataBatismoAguas"]."</td>
                        </tr>
                        <tr>
                            <th>Data do Batismo no Espirito Santo:</th>
                            <td>".$resultado["DataBatismoEspiritoSanto"]."</td>
                        </tr>
                        <tr>
                            <th>Situação:</th>
                            <td>".$resultado["Situacao"]."</td>
                        </tr>
                        <tr>
                            <th>Obreiro:</th>
                            <td>".$resultado["Obreiro"]."</td>
                        </tr>
                        <tr>
                            <th>Função do Obreiro:</th>
                            <td>".$resultado["FuncaoObreiro"]."</td>
                        </tr>
                        <tr>
                            <th>Cargo:</th>
                            <td>".$resultado["Cargo"]."</td>
                        </tr>
                        <tr>
                            <th>Observações:</th>
                            <td>".$resultado["Observacoes"]."</td>
                        </tr>
                        <tr>
                            <th>Foto:</th>
                            <td>".'<img style="width:200px;" src="upload de imagens/' . $resultado['Foto'].'"/>'."</td>
                        </tr>
                      </table>
                      <br>";?>
                      <a href="editar_membro.php?id=<?php echo $resultado["Id"] ?>" id="editarMembro"><label for="editarMembro"><button style="width:200px; height:30px;">Editar Membro</button></label></a>
                      <?php
                      echo"<center>
                      <br>";
            }
        }
        else
        {
            echo "<h1 style='text-align:center;'>Nenhum membro com esta categoria!</h1>";
        }
        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px;'>Voltar para a página inicial</button></label></a></center>";
    ?>
</body>
</html>