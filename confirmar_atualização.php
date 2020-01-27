<?php

include "conexao.php";

$conjugeEvangelico = $_POST["conjugeEvangelico"];
$obreiro = $_POST["obreiro"];

if($conjugeEvangelico == "Sim" and $obreiro == "Sim")
{
    $idMembro = $_POST["idMembro"];
    $nome = $_POST["nome"];
    $categoria = $_POST["categoria"];
    $sexo = $_POST["sexo"];
    $nomePai = $_POST["nomePai"];
    $nomeMae = $_POST["nomeMae"];
    $naturalidade = $_POST["naturalidade"];
    $fone = $_POST["fone"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $escolaridade = $_POST["escolaridade"];
    $profissao = $_POST["profissao"];
    $estadoCivil = $_POST["estadoCivil"];
    $conjugeEvangelico = $_POST["conjugeEvangelico"];
    $nomeConjuge = $_POST["nomeConjuge"];
    $dataCasamento = $_POST["dataCasamento"];
    $numeroFilhos = $_POST["numeroFilhos"];
    $dataNascimento = $_POST["dataNascimento"];
    $dataDecisao = $_POST["dataDecisao"];
    $dataBatismoAguas = $_POST["dataBatismoAguas"];
    $dataBatismoEspiritoSanto = $_POST["dataBatismoEspiritoSanto"];
    $situacao = $_POST["situacao"];
    $obreiro = $_POST["obreiro"];
    $funcaoObreiro = $_POST["funcaoObreiro"];
    $cargo = $_POST["cargo"];
    $observacoes = $_POST["observacoes"];
    $foto = $_FILES["foto"]["name"];

    $diretorio = "upload de fotos/";

    move_uploaded_file($_FILES["foto"]["tmp_name"], $diretorio . $foto);

    $sql = "UPDATE membros SET Nome='$nome', Categoria='$categoria', Sexo='$sexo', NomePai='$nomePai', 
    NomeMae='$nomeMae', Naturalidade='$naturalidade', Telefone='$fone',
    Endereco='$endereco', Bairro='$bairro', CEP='$cep', Escolaridade='$escolaridade', 
    Profissao='$profissao', EstadoCivil='$estadoCivil', ConjugeEvangelico='$conjugeEvangelico', 
    NomeConjuge='$nomeConjuge', DataCasamento='$dataCasamento', NumeroFilhos='$numeroFilhos', 
    DataNascimento='$dataNascimento', DataDecisao='$dataDecisao', 
    DataBatismoAguas='$dataBatismoAguas', DataBatismoEspiritoSanto='$dataBatismoEspiritoSanto',
    Situacao='$situacao', Obreiro='$obreiro', FuncaoObreiro='$funcaoObreiro', Cargo='$cargo', Observacoes='$observacoes', Foto='$foto' 
    WHERE Id='$idMembro'";

    if($conexao->query($sql) === TRUE)
    {   
        echo "<title>Bom Jardim - Confirmar Atualização</title>";

        echo"<link rel='icon' type='image/png' href='imagens/IEADEM(fundo).png'/>";

        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Membro atualizado com sucesso!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Voltar para a página inicial</button></label></a></center>';";
    }
    else
    {
        echo "<title>Bom Jardim - Confirmar Atualização</title>";
        
        echo"<link rel='icon' type='image/png' href='imagens/IEADEM(fundo).png'/>";
        
        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Erro ao atualizar membro!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Voltar para a página inicial</button></label></a></center>';";
    }

    $conexao->close();
}
else if($conjugeEvangelico == "Não" and $obreiro == "Sim")
{
    $idMembro = $_POST["idMembro"];
    $nome = $_POST["nome"];
    $categoria = $_POST["categoria"];
    $sexo = $_POST["sexo"];
    $nomePai = $_POST["nomePai"];
    $nomeMae = $_POST["nomeMae"];
    $naturalidade = $_POST["naturalidade"];
    $fone = $_POST["fone"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $escolaridade = $_POST["escolaridade"];
    $profissao = $_POST["profissao"];
    $estadoCivil = $_POST["estadoCivil"];
    $conjugeEvangelico = $_POST["conjugeEvangelico"];
    $dataCasamento = $_POST["dataCasamento"];
    $numeroFilhos = $_POST["numeroFilhos"];
    $dataNascimento = $_POST["dataNascimento"];
    $dataDecisao = $_POST["dataDecisao"];
    $dataBatismoAguas = $_POST["dataBatismoAguas"];
    $dataBatismoEspiritoSanto = $_POST["dataBatismoEspiritoSanto"];
    $situacao = $_POST["situacao"];
    $obreiro = $_POST["obreiro"];
    $funcaoObreiro = $_POST["funcaoObreiro"];
    $cargo = $_POST["cargo"];
    $observacoes = $_POST["observacoes"];
    $foto = $_FILES["foto"]["name"];


    $diretorio = "upload de fotos/";

    move_uploaded_file($_FILES["foto"]["tmp_name"], $diretorio . $foto);

    $sql = "UPDATE membros SET Nome='$nome', Categoria='$categoria', Sexo='$sexo', NomePai='$nomePai', 
    NomeMae='$nomeMae', Naturalidade='$naturalidade', Telefone='$fone',
    Endereco='$endereco', Bairro='$bairro', CEP='$cep', Escolaridade='$escolaridade', 
    Profissao='$profissao', EstadoCivil='$estadoCivil', ConjugeEvangelico='$conjugeEvangelico', 
    NomeConjuge='', DataCasamento='$dataCasamento', NumeroFilhos='$numeroFilhos', 
    DataNascimento='$dataNascimento', DataDecisao='$dataDecisao', 
    DataBatismoAguas='$dataBatismoAguas', DataBatismoEspiritoSanto='$dataBatismoEspiritoSanto',
    Situacao='$situacao', Obreiro='$obreiro', FuncaoObreiro='$funcaoObreiro', Cargo='$cargo', Observacoes='$observacoes', Foto='$foto' 
    WHERE Id='$idMembro'";

    if($conexao->query($sql) === TRUE)
    {   
        echo "<title>Bom Jardim - Atualizar Membro</title>";

        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Membro atualizado com sucesso!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Voltar para a página inicial</button></label></a></center>';";
    }
    else
    {
        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Erro ao atualizar membro!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Voltar para a página inicial</button></label></a></center>';";
    }

    $conexao->close();
}
else if($conjugeEvangelico == "Sim" and $obreiro == "Não")
{
    $idMembro = $_POST["idMembro"];
    $nome = $_POST["nome"];
    $categoria = $_POST["categoria"];
    $sexo = $_POST["sexo"];
    $nomePai = $_POST["nomePai"];
    $nomeMae = $_POST["nomeMae"];
    $naturalidade = $_POST["naturalidade"];
    $fone = $_POST["fone"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $escolaridade = $_POST["escolaridade"];
    $profissao = $_POST["profissao"];
    $estadoCivil = $_POST["estadoCivil"];
    $conjugeEvangelico = $_POST["conjugeEvangelico"];
    $nomeConjuge = $_POST["nomeConjuge"];
    $dataCasamento = $_POST["dataCasamento"];
    $numeroFilhos = $_POST["numeroFilhos"];
    $dataNascimento = $_POST["dataNascimento"];
    $dataDecisao = $_POST["dataDecisao"];
    $dataBatismoAguas = $_POST["dataBatismoAguas"];
    $dataBatismoEspiritoSanto = $_POST["dataBatismoEspiritoSanto"];
    $situacao = $_POST["situacao"];
    $obreiro = $_POST["obreiro"];
    $cargo = $_POST["cargo"];
    $observacoes = $_POST["observacoes"];
    $foto = $_FILES["foto"]["name"];

    $diretorio = "upload de fotos/";

    move_uploaded_file($_FILES["foto"]["tmp_name"], $diretorio . $foto);

    $sql = "UPDATE membros SET Nome='$nome', Categoria='$categoria', Sexo='$sexo', NomePai='$nomePai', 
    NomeMae='$nomeMae', Naturalidade='$naturalidade', Telefone='$fone',
    Endereco='$endereco', Bairro='$bairro', CEP='$cep', Escolaridade='$escolaridade', 
    Profissao='$profissao', EstadoCivil='$estadoCivil', ConjugeEvangelico='$conjugeEvangelico', 
    NomeConjuge='$nomeConjuge', DataCasamento='$dataCasamento', NumeroFilhos='$numeroFilhos', 
    DataNascimento='$dataNascimento', DataDecisao='$dataDecisao', 
    DataBatismoAguas='$dataBatismoAguas', DataBatismoEspiritoSanto='$dataBatismoEspiritoSanto',
    Situacao='$situacao', Obreiro='$obreiro', FuncaoObreiro='',Cargo='$cargo', Observacoes='$observacoes', Foto='$foto' 
    WHERE Id='$idMembro'";

    if($conexao->query($sql) === TRUE)
    {   
        echo "<title>Bom Jardim - Atualizar Membro</title>";

        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Membro atualizado com sucesso!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Voltar para a página inicial</button></label></a></center>';";
    }
    else
    {
        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Erro ao atualizar membro!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Voltar para a página inicial</button></label></a></center>';";
    }

    $conexao->close();
}
else if($conjugeEvangelico == "Não" and $obreiro == "Não")
{
    $idMembro = $_POST["idMembro"];
    $nome = $_POST["nome"];
    $categoria = $_POST["categoria"];
    $sexo = $_POST["sexo"];
    $nomePai = $_POST["nomePai"];
    $nomeMae = $_POST["nomeMae"];
    $naturalidade = $_POST["naturalidade"];
    $fone = $_POST["fone"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $escolaridade = $_POST["escolaridade"];
    $profissao = $_POST["profissao"];
    $estadoCivil = $_POST["estadoCivil"];
    $conjugeEvangelico = $_POST["conjugeEvangelico"];
    $dataCasamento = $_POST["dataCasamento"];
    $numeroFilhos = $_POST["numeroFilhos"];
    $dataNascimento = $_POST["dataNascimento"];
    $dataDecisao = $_POST["dataDecisao"];
    $dataBatismoAguas = $_POST["dataBatismoAguas"];
    $dataBatismoEspiritoSanto = $_POST["dataBatismoEspiritoSanto"];
    $situacao = $_POST["situacao"];
    $obreiro = $_POST["obreiro"];
    $cargo = $_POST["cargo"];
    $observacoes = $_POST["observacoes"];
    $foto = $_FILES["foto"]["name"];


    $diretorio = "upload de fotos/";

    move_uploaded_file($_FILES["foto"]["tmp_name"], $diretorio . $foto);

    $sql = "UPDATE membros SET Nome='$nome', Categoria='$categoria', Sexo='$sexo', NomePai='$nomePai', 
    NomeMae='$nomeMae', Naturalidade='$naturalidade', Telefone='$fone',
    Endereco='$endereco', Bairro='$bairro', CEP='$cep', Escolaridade='$escolaridade', 
    Profissao='$profissao', EstadoCivil='$estadoCivil', ConjugeEvangelico='$conjugeEvangelico', 
    NomeConjuge='', DataCasamento='$dataCasamento', NumeroFilhos='$numeroFilhos', 
    DataNascimento='$dataNascimento', DataDecisao='$dataDecisao', 
    DataBatismoAguas='$dataBatismoAguas', DataBatismoEspiritoSanto='$dataBatismoEspiritoSanto',
    Situacao='$situacao', Obreiro='$obreiro', FuncaoObreiro='', Cargo='$cargo', Observacoes='$observacoes', Foto='$foto' 
    WHERE Id='$idMembro'";

    if($conexao->query($sql) === TRUE)
    {   
        echo "<title>Bom Jardim - Atualizar Membro</title>";

        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Membro atualizado com sucesso!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Voltar para a página inicial</button></label></a></center>';";
    }
    else
    {
        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Erro ao atualizar membro!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Voltar para a página inicial</button></label></a></center>';";
    }

    $conexao->close();
}
?>