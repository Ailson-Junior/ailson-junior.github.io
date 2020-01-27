<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Bom Jardim - Editar Membro</title>
    <link rel="icon" type="image/png" href="imagens/IEADEM(fundo).png"/>
    <style>
        td {background-color: lightgray;}
        th, td {border-style: solid; border-color:lightgray;}
        tr:nth-child(odd) {background-color: white;}
        tr:nth-child(even) {background-color:lightgray;}
        tr th {text-align: end;}
    </style>
    <script type="text/javascript">
        function MascaraTelefone()
        {
            var CampoFone = document.getElementById("fone");
            var Fone = CampoFone.value;
            
            if(Fone.length == 1)
            {
                Fone = "(" + Fone
                CampoFone.value = Fone;
                return true;
            }
            if(Fone.length == 3)
            {
                Fone = Fone + ") "
                CampoFone.value = Fone;
                return true;
            }
            if(Fone.length == 10)
            {
                Fone = Fone + "-"
                CampoFone.value = Fone;
                return true;
            }

        }
        function MascaraCep()
        {
            var CampoCep = document.getElementById("cep")
            var Cep = CampoCep.value;

            if(Cep.length == 5)
            {
                Cep = Cep + "-"
                CampoCep.value = Cep;
                return true;
            }
        }

        document.getElementById("listarTodos").style.display = "none";

        function habilitarNomeConjuge()
        {
            if(document.getElementById('Sim').checked == true)
            {
                document.getElementById('nomeConjuge').disabled = false;
                document.getElementById('nomeConjuge').required = true;
            }
            if(document.getElementById('Não').checked == true)
            {
                document.getElementById('nomeConjuge').disabled = true;
                document.getElementById('nomeConjuge').value = ' ';
            }
        }
        function habilitarFuncaoObreiro()
        {
            if(document.getElementById('obreiroSim').checked == true)
            {
                document.getElementById('funcaoObreiro1').disabled = false;
                document.getElementById('funcaoObreiro2').disabled = false;
                document.getElementById('funcaoObreiro3').disabled = false;
                document.getElementById('funcaoObreiro4').disabled = false;
                document.getElementById('funcaoObreiro1').checked = true;
            }
            if(document.getElementById('obreiroNão').checked == true)
            {
                document.getElementById('funcaoObreiro1').disabled = true;
                document.getElementById('funcaoObreiro2').disabled = true;
                document.getElementById('funcaoObreiro3').disabled = true;
                document.getElementById('funcaoObreiro4').disabled = true;
                document.getElementById('funcaoObreiro1').checked = false;
                document.getElementById('funcaoObreiro2').checked = false;
                document.getElementById('funcaoObreiro3').checked = false;
                document.getElementById('funcaoObreiro4').checked = false;
            }
        }
    </script>
</head>
<body style="background-color: lightsteelblue;">
    <?php

    include "conexao.php";

    $editarMembro = $_GET["id"];

    $sql = "SELECT * from membros WHERE Id = '$editarMembro'";
    $busca = $conexao->query($sql);

    $conexao->close();

    ?>
    <center><img style='width:200px;' src="imagens/IEADEM(fundo).png"/></center>
    <br>
    <form action="atualizar_membro.php" method="POST" enctype="multipart/form-data">
        <center><?php
        if($busca->num_rows > 0)
        {
            while($resultado = $busca->fetch_assoc())
            {
                echo"<table>
                        <caption style='font-size:30px;'><b>Editar Membro<b></caption>
                            <tr>
                                <th>
                                    Nome:
                                </th>
                                <td>
                                    <input type='text' name='nome' value='".$resultado["Nome"]."' size='52' required>
                                </td>
                            </tr>";
                        if($resultado["Categoria"] == 'Crianças')
                        {
                            echo"<tr>
                                    <th>
                                        Sexo:
                                    </th>
                                    <td>
                                        <input type='radio' name='categoria' value='".$resultado["Categoria"]."' checked> Crianças
                                        <input type='radio' name='categoria' value='Adolescentes'> Adolescentes
                                        <input type='radio' name='categoria' value='Jovens'> Jovens
                                        <input type='radio' name='categoria' value='Adultos'> Adultos
                                    </td>
                                </tr>";
                        }
                        else if($resultado["Categoria"] == 'Adolescentes')
                        {
                            echo"<tr>
                                    <th>
                                        Sexo:
                                    </th>
                                    <td>
                                        <input type='radio' name='categoria' value='Crianças'> Crianças
                                        <input type='radio' name='categoria' value='".$resultado["Categoria"]."' checked> Adolescentes
                                        <input type='radio' name='categoria' value='Jovens'> Jovens
                                        <input type='radio' name='categoria' value='Adultos'> Adultos
                                    </td>
                                </tr>";
                        }
                        else if($resultado["Categoria"] == 'Jovens')
                        {
                            echo"<tr>
                                    <th>
                                        Sexo:
                                    </th>
                                    <td>
                                        <input type='radio' name='categoria' value='Crianças'> Crianças
                                        <input type='radio' name='categoria' value='Adolescentes'> Adolescentes
                                        <input type='radio' name='categoria' value='".$resultado["Categoria"]."' checked> Jovens
                                        <input type='radio' name='categoria' value='Adultos'> Adultos
                                    </td>
                                </tr>";
                        }
                        else if($resultado["Categoria"] == 'Adultos')
                        {
                            echo"<tr>
                                    <th>
                                        Sexo:
                                    </th>
                                    <td>
                                        <input type='radio' name='categoria' value='Crianças'> Crianças
                                        <input type='radio' name='categoria' value='Adolescentes'> Adolescentes
                                        <input type='radio' name='categoria' value='Jovens'> Jovens
                                        <input type='radio' name='categoria' value='".$resultado["Categoria"]."' checked> Adultos
                                    </td>
                                </tr>";
                        }
                        if($resultado["Sexo"] == 'Masculino')
                        {
                            echo"<tr>
                                    <th>
                                        Sexo:
                                    </th>
                                    <td>
                                        <input type='radio' name='sexo' value='".$resultado["Sexo"]."' checked> Masculino
                                        <input type='radio' name='sexo' value='Feminino'> Feminino
                                    </td>
                                </tr>";
                        }
                        else
                        {
                            echo"<tr>
                                    <th>
                                        Sexo:
                                    </th>
                                    <td>
                                        <input type='radio' name='sexo' value='Masculino'> Masculino
                                        <input type='radio' name='sexo' value='".$resultado["Sexo"]."' checked> Feminino
                                    </td>
                                </tr>";
                        }
                        echo"<tr>
                                <th>
                                    Nome do Pai:
                                </th>
                                <td>
                                    <input type='tex' name='nomePai' value='".$resultado["NomePai"]."' size='52' required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Nome do Mãe:
                                </th>
                                <td>
                                    <input type='text' name='nomeMae' value='".$resultado["NomeMae"]."' size='52' required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Naturalidade:
                                </th>
                                <td>
                                    <input type='text' name='naturalidade' value='".$resultado["Naturalidade"]."' size='52' required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Telefone:
                                </th>
                                <td>
                                    <input id='fone' type='text' name='fone' value='".$resultado["Telefone"]."'size='52' onkeyup='MascaraTelefone(this)' required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Endereco:
                                </th>
                                <td>
                                    <input type='text' name='endereco' value='".$resultado["Endereco"]."' size='52' required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Bairro:
                                </th>
                                <td>
                                    <input type='text' name='bairro' value='".$resultado["Bairro"]."' size='52' required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    CEP:
                                </th>
                                <td>
                                    <input id='cep' type='text' name='cep' value='".$resultado["CEP"]."' size='52' onkeyup='MascaraCep(this)' required>
                                </td>
                            </tr>";
                        if($resultado["Escolaridade"] == '1ºGrau')
                        {
                            echo"<tr>
                                    <th>
                                        Escolaridade:
                                    </th>
                                    <td>
                                        <input type='radio' name='escolaridade' value='".$resultado["Escolaridade"]."' checked> 1ºGrau
                                        <input type='radio' name='escolaridade' value='2ºGrau'> 2ºGrau
                                        <input type='radio' name='escolaridade' value='Técnico'> Técnico
                                        <input type='radio' name='escolaridade' value='Superior'> Superior
                                    </td>
                                </tr>";
                        }
                        else if($resultado["Escolaridade"] == '2ºGrau')
                        {
                            echo"<tr>
                                    <th>
                                        Escolaridade:
                                    </th>
                                    <td>
                                        <input type='radio' name='escolaridade' value='1ºGrau'> 1ºGrau
                                        <input type='radio' name='escolaridade' value='".$resultado["Escolaridade"]."' checked> 2ºGrau
                                        <input type='radio' name='escolaridade' value='Técnico'> Técnico
                                        <input type='radio' name='escolaridade' value='Superior'> Superior
                                    </td>
                                </tr>";
                        }
                        else if($resultado["Escolaridade"] == 'Técnico')
                        {
                            echo"<tr>
                                    <th>
                                        Escolaridade:
                                    </th>
                                    <td>
                                        <input type='radio' name='escolaridade' value='1ºGrau'> 1ºGrau
                                        <input type='radio' name='escolaridade' value='2ºGrau'> 2ºGrau
                                        <input type='radio' name='escolaridade' value='".$resultado["Escolaridade"]."' checked> Técnico
                                        <input type='radio' name='escolaridade' value='Superior'> Superior
                                    </td>
                                </tr>";
                        }
                        else if($resultado["Escolaridade"] == 'Superior')
                        {
                            echo"<tr>
                                    <th>
                                        Escolaridade:
                                    </th>
                                    <td>
                                        <input type='radio' name='escolaridade' value='1ºGrau'> 1ºGrau
                                        <input type='radio' name='escolaridade' value='2ºGrau'> 2ºGrau
                                        <input type='radio' name='escolaridade' value='Técnico'> Técnico
                                        <input type='radio' name='escolaridade' value='".$resultado["Escolaridade"]."' checked> Superior
                                    </td>
                                </tr>";
                        }
                        echo"<tr>
                                <th>
                                    Profissão:
                                </th>
                                <td>
                                    <input type='text' name='profissao' value='".$resultado["Profissao"]."' size='52' >
                                </td>
                            </tr>";
                        if($resultado["EstadoCivil"] == 'Solteiro(a)')
                        {
                            echo"<tr>
                                    <th>
                                        Estado Civil:
                                    </th>
                                    <td>
                                        <input type='radio' name='estadoCivil' value='".$resultado["EstadoCivil"]."' checked> Solteiro(a)
                                        <input type='radio' name='estadoCivil' value='Divorciado(a)'> Divorciado(a)
                                        <input type='radio' name='estadoCivil' value='Casado(a)'> Casado(a)
                                        <input type='radio' name='estadoCivil' value='Viúvo(a)'> Viúvo(a)
                                    </td>
                                </tr>";
                        }
                        else if($resultado["EstadoCivil"] == 'Divorciado(a)')
                        {
                            echo"<tr>
                                    <th>
                                        Estado Civil:
                                    </th>
                                    <td>
                                        <input type='radio' name='estadoCivil' value='Solteiro(a)'> Solteiro(a)
                                        <input type='radio' name='estadoCivil' value='".$resultado["EstadoCivil"]."' checked> Divorciado(a)
                                        <input type='radio' name='estadoCivil' value='Casado(a)'> Casado(a)
                                        <input type='radio' name='estadoCivil' value='Viúvo(a)'> Viúvo(a)
                                    </td>
                                </tr>";
                        }
                        else if($resultado["EstadoCivil"] == 'Casado(a)')
                        {
                            echo"<tr>
                                    <th>
                                        Estado Civil:
                                    </th>
                                    <td>
                                        <input type='radio' name='estadoCivil' value='Solteiro(a)' checked> Solteiro(a)
                                        <input type='radio' name='estadoCivil' value='Divorciado(a)' checked> Divorciado(a)
                                        <input type='radio' name='estadoCivil' value='".$resultado["EstadoCivil"]."' checked> Casado(a)
                                        <input type='radio' name='estadoCivil' value='Viúvo(a)'> Viúvo(a)
                                    </td>
                                </tr>";
                        }
                        else if($resultado["EstadoCivil"] == 'Viúvo(a)')
                        {
                            echo"<tr>
                                    <th>
                                        Estado Civil:
                                    </th>
                                    <td>
                                        <input type='radio' name='estadoCivil' value='Solteiro(a)' checked> Solteiro(a)
                                        <input type='radio' name='estadoCivil' value='Divorciado(a)' checked> Divorciado(a)
                                        <input type='radio' name='estadoCivil' value='Casado(a)'> Casado(a)
                                        <input type='radio' name='estadoCivil' value='".$resultado["EstadoCivil"]."'> Viúvo(a)
                                    </td>
                                </tr>";
                        }
                        if($resultado["ConjugeEvangelico"] == 'Sim')
                        {
                            echo"<tr>
                                    <th>
                                        Cônjuge Evangélico:
                                    </th>
                                    <td>
                                        <input type='radio' name='conjugeEvangelico' onclick='habilitarNomeConjuge()' id='Sim' value='".$resultado["ConjugeEvangelico"]."' checked> Sim
                                        <input type='radio' name='conjugeEvangelico' onclick='habilitarNomeConjuge()' id='Não' value='Não'> Não
                                    </td>
                                </tr>";
                            echo"<tr>
                                    <th>
                                        Nome do Cônjuge:
                                    </th>
                                    <td>
                                        <input type='text' name='nomeConjuge' value='".$resultado["NomeConjuge"]."' size='52' id='nomeConjuge' required>
                                    </td>
                                </tr>";
                        }
                        else
                        {
                            echo"<tr>
                                    <th>
                                        Cônjuge Evangélico:
                                    </th>
                                    <td>
                                        <input type='radio' name='conjugeEvangelico' onclick='habilitarNomeConjuge()' id='Sim' value='Sim'> Sim
                                        <input type='radio' name='conjugeEvangelico' onclick='habilitarNomeConjuge()' id='Não' value='".$resultado["ConjugeEvangelico"]."' checked> Não
                                    </td>
                                </tr>";
                            echo"<tr>
                                    <th>
                                        Nome do Cônjuge:
                                    </th>
                                    <td>
                                        <input type='text' name='nomeConjuge' size='52' id='nomeConjuge' disabled>
                                    </td>
                                </tr>";
                        }
                        echo"<tr>
                                <th>
                                    Data de Casamento:
                                </th>
                                <td>
                                    <input type='date' name='dataCasamento' value='".$resultado["DataCasamento"]."'>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Numero de Filhos:
                                </th>
                                <td>
                                    <input type='text' name='numeroFilhos' value='".$resultado["NumeroFilhos"]."' size='52'>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Data de Nascimento:
                                </th>
                                <td>
                                    <input type='date' name='dataNascimento' value='".$resultado["DataNascimento"]."' required>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Data de Decisão:
                                </th>
                                <td>
                                    <input type='date' name='dataDecisao' value='".$resultado["DataDecisao"]."'>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Data de Batismo em Águas:
                                </th>
                                <td>
                                    <input type='date' name='dataBatismoAguas' value='".$resultado["DataBatismoAguas"]."'>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Data de Batismo no Espírito Santo:
                                </th>
                                <td>
                                    <input type='date' name='dataBatismoEspiritoSanto' value='".$resultado["DataBatismoEspiritoSanto"]."'>
                                </td>
                            </tr>";
                        if($resultado["Situacao"] == 'Membro')
                        {
                            echo"<tr>
                                    <th>
                                        Situacão:
                                    </th>
                                    <td>
                                        <input type='radio' name='situacao' value='".$resultado["Situacao"]."' checked> Membro
                                        <input type='radio' name='situacao' value='Congregado'> Congregado
                                    </td>
                                </tr>";
                        }
                        else if($resultado["Situacao"] == 'Congregado')
                        {
                            echo"<tr>
                                    <th>
                                        Situacão:
                                    </th>
                                    <td>
                                        <input type='radio' name='situacao' value='Membro'> Membro
                                        <input type='radio' name='situacao' value='".$resultado["Situacao"]."' checked> Congregado
                                    </td>
                                </tr>";
                        }
                        if($resultado["Obreiro"] == 'Sim')
                        {
                            echo"<tr>
                                    <th>
                                        Obreiro:
                                    </th>
                                    <td>
                                        <input type='radio' name='obreiro' onclick='habilitarFuncaoObreiro()' id='obreiroSim' value='".$resultado["Obreiro"]."' checked> Sim
                                        <input type='radio' name='obreiro' onclick='habilitarFuncaoObreiro()' id='obreiroNão' value='Não'> Não
                                    </td>
                                </tr>";
                            if($resultado["FuncaoObreiro"] == 'Auxiliar')
                            {
                                echo"<tr>
                                        <th>
                                            Função do Obreiro:
                                        </th>
                                        <td>
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro1' value='".$resultado["FuncaoObreiro"]."' checked> Auxiliar
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro2' value='Diácono'> Diácono
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro3' value='Presbítero'> Presbítero
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro4' value='Evangelista'> Evangelista
                                        </td>
                                    </tr>";
                            }
                            else if($resultado["FuncaoObreiro"] == 'Diácono')
                            {
                                echo"<tr>
                                        <th>
                                            Função do Obreiro:
                                        </th>
                                        <td>
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro1' value='Auxiliar'> Auxiliar
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro2' value='".$resultado["FuncaoObreiro"]."' checked> Diácono
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro3' value='Presbítero'> Presbítero
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro4' value='Evangelista'> Evangelista
                                        </td>
                                    </tr>";
                            }
                            else if($resultado["FuncaoObreiro"] == 'Presbítero')
                            {
                                echo"<tr>
                                        <th>
                                            Função do Obreiro:
                                        </th>
                                        <td>
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro1' value='Auxiliar'> Auxiliar
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro2' value='Diácono'> Diácono
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro3' value='".$resultado["FuncaoObreiro"]."' checked> Presbítero
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro4' value='Evangelista'> Evangelista
                                        </td>
                                    </tr>";
                            }
                            if($resultado["FuncaoObreiro"] == 'Evangelista')
                            {
                                echo"<tr>
                                        <th>
                                            Função do Obreiro:
                                        </th>
                                        <td>
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro1' value='Auxiliar'> Auxiliar
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro2' value='Diácono'> Diácono
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro3' value='Presbítero'> Presbítero
                                            <input type='radio' name='funcaoObreiro' id='funcaoObreiro4' value='".$resultado["FuncaoObreiro"]."' checked> Evangelista
                                        </td>
                                    </tr>";
                            }
                        }
                        else
                        {
                            echo"<tr>
                                    <th>
                                        Obreiro:
                                    </th>
                                    <td>
                                        <input type='radio' name='obreiro' onclick='habilitarFuncaoObreiro()' id='obreiroSim' value='Sim'> Sim
                                        <input type='radio' name='obreiro' onclick='habilitarFuncaoObreiro()' id='obreiroNão' value='".$resultado["Obreiro"]."' checked> Não
                                    </td>
                                </tr>";
                            echo"<tr>
                                    <th>
                                        Função do Obreiro:
                                    </th>
                                    <td>
                                        <input type='radio' name='funcaoObreiro' id='funcaoObreiro1' value='Auxiliar' disabled> Auxiliar
                                        <input type='radio' name='funcaoObreiro' id='funcaoObreiro2' value='Diácono' disabled> Diácono
                                        <input type='radio' name='funcaoObreiro' id='funcaoObreiro3' value='Presbítero' disabled> Presbítero
                                        <input type='radio' name='funcaoObreiro' id='funcaoObreiro4' value='Evangelista' disabled> Evangelista
                                    </td>
                                </tr>";
                        }
                        echo"<tr>
                                <th>
                                    Cargo:
                                </th>
                                <td>
                                    <input type='text' name='cargo' value='".$resultado["Cargo"]."' size='52'>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Observações:
                                </th>
                                <td>
                                    <input type='text' name='observacoes' value='".$resultado["Observacoes"]."' size='52'>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Foto:
                                </th>
                                <td>
                                    <input type='file' name='foto' value='".$resultado["Foto"]."' >
                                </td>
                            </tr>
                    </table>";
                    $idMembro = $resultado["Id"];
            }
        }
        ?>
        <br>
        <input type="hidden" name="idMembro" value="<?php echo $idMembro ?>">
        <input type="submit" value="Atualizar Membro" style="width:200px; height:30px; margin-left:300px;">
    </form>
    <form action="excluir_membro.php" method="POST" style="margin-left:25px; margin-top:-25px;">
        <input type="hidden" name="idMembro" value="<?php echo $idMembro ?>">
        <input type="submit" value="Excluir Membro" onclick="return confirm('Deseja mesmo excluir esse membro ?')" style="width:200px; height:30px; margin-left:-300px; margin-top:-500px;">
    </form></center>
    <center><a href="index.html" style="color: inherit; text-decoration: none;" id="inicio"><label for="inicio"><button style="width:200px; height:30px; margin-top:10px;">Voltar para a página inicial</button></label></a></center>
</body>
</html>