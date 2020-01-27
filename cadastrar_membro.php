<?php

include "conexao.php";

$conjugeEvangelico = $_POST["conjugeEvangelico"];
$obreiro = $_POST["obreiro"];

if($conjugeEvangelico == "Sim" and $obreiro == "Sim")
{
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

    $sql = "INSERT INTO membros (Nome, Categoria, Sexo, NomePai, NomeMae, Naturalidade, Telefone,
    Endereco, Bairro, CEP, Escolaridade, Profissao, EstadoCivil, ConjugeEvangelico, NomeConjuge, DataCasamento, 
    NumeroFilhos, DataNascimento, DataDecisao, DataBatismoAguas, DataBatismoEspiritoSanto, 
    Situacao, Obreiro, FuncaoObreiro, Cargo, Observacoes, Foto)
    VALUES ('$nome', '$categoria', '$sexo', '$nomePai', '$nomeMae', '$naturalidade', '$fone', 
    '$endereco', '$bairro', '$cep', '$escolaridade', '$profissao', '$estadoCivil', 
    '$conjugeEvangelico', '$nomeConjuge', '$dataCasamento', '$numeroFilhos', '$dataNascimento', 
    '$dataDecisao', '$dataBatismoAguas', '$dataBatismoEspiritoSanto', '$situacao', 
    '$obreiro', '$funcaoObreiro', '$cargo', '$observacoes', '$foto')";

    if($conexao->query($sql) === TRUE)
    {
        echo "<title>Bom Jardim - Confirmar Cadastro</title>";
        
        echo "<body = style='background-color:lightsteelblue;'/>";

        echo"<link rel='icon' type='image/png' href='imagens/IEADEM(fundo).png'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Membro cadastrado com sucesso!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Clique aqui para voltar</button></label></a></center>';";
    }
    else
    {
        echo"<title>Bom Jardim - Confirmar Cadastro</title>";

        echo"<link rel='icon' type='image/png' href='imagens/IEADEM(fundo).png'/>";
        
        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Erro ao cadastrar membro!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Clique aqui para voltar</button></label></a></center>';";
    }

    $conexao->close();
}
else if($conjugeEvangelico == "Não" and $obreiro == "Sim")
{
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

    $sql = "INSERT INTO membros (Nome, Categoria, Sexo, NomePai, NomeMae, Naturalidade, Telefone,
    Endereco, Bairro, CEP, Escolaridade, Profissao, EstadoCivil, ConjugeEvangelico, DataCasamento, 
    NumeroFilhos, DataNascimento, DataDecisao, DataBatismoAguas, DataBatismoEspiritoSanto, 
    Situacao, Obreiro, FuncaoObreiro, Cargo, Observacoes, Foto)
    VALUES ('$nome', '$categoria', '$sexo', '$nomePai', '$nomeMae', '$naturalidade', '$fone', 
    '$endereco', '$bairro', '$cep', '$escolaridade', '$profissao', '$estadoCivil', 
    '$conjugeEvangelico', '$dataCasamento', '$numeroFilhos', '$dataNascimento', 
    '$dataDecisao', '$dataBatismoAguas', '$dataBatismoEspiritoSanto', '$situacao', 
    '$obreiro', '$funcaoObreiro', '$cargo', '$observacoes', '$foto')";

    if($conexao->query($sql) === TRUE)
    {
        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Membro cadastrado com sucesso!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Clique aqui para voltar</button></label></a></center>';";
    }
    else
    {
        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Erro ao cadastrar membro!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Clique aqui para voltar</button></label></a></center>';";
    }

    $conexao->close();
}
else if($conjugeEvangelico == "Sim" and $obreiro == "Não")
{
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

    $sql = "INSERT INTO membros (Nome, Categoria, Sexo, NomePai, NomeMae, Naturalidade, Telefone,
    Endereco, Bairro, CEP, Escolaridade, Profissao, EstadoCivil, ConjugeEvangelico, NomeConjuge, DataCasamento, 
    NumeroFilhos, DataNascimento, DataDecisao, DataBatismoAguas, DataBatismoEspiritoSanto, 
    Situacao, Obreiro, Cargo, Observacoes, Foto)
    VALUES ('$nome', '$categoria', '$sexo', '$nomePai', '$nomeMae', '$naturalidade', '$fone', 
    '$endereco', '$bairro', '$cep', '$escolaridade', '$profissao', '$estadoCivil', 
    '$conjugeEvangelico', '$nomeConjuge', '$dataCasamento', '$numeroFilhos', '$dataNascimento', 
    '$dataDecisao', '$dataBatismoAguas', '$dataBatismoEspiritoSanto', '$situacao', 
    '$obreiro', '$cargo', '$observacoes', '$foto')";

    if($conexao->query($sql) === TRUE)
    {
        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Membro cadastrado com sucesso!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Clique aqui para voltar</button></label></a></center>';";
    }
    else
    {
        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Erro ao cadastrar membro!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Clique aqui para voltar</button></label></a></center>';";
    }

    $conexao->close();
}
else if($conjugeEvangelico == "Não" and $obreiro == "Não")
{
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

    $sql = "INSERT INTO membros (Nome, Categoria, Sexo, NomePai, NomeMae, Naturalidade, Telefone,
    Endereco, Bairro, CEP, Escolaridade, Profissao, EstadoCivil, ConjugeEvangelico, DataCasamento, 
    NumeroFilhos, DataNascimento, DataDecisao, DataBatismoAguas, DataBatismoEspiritoSanto, 
    Situacao, Obreiro, Cargo, Observacoes, Foto)
    VALUES ('$nome', '$categoria', '$sexo', '$nomePai', '$nomeMae', '$naturalidade', '$fone', 
    '$endereco', '$bairro', '$cep', '$escolaridade', '$profissao', '$estadoCivil', 
    '$conjugeEvangelico', '$dataCasamento', '$numeroFilhos', '$dataNascimento', 
    '$dataDecisao', '$dataBatismoAguas', '$dataBatismoEspiritoSanto', '$situacao', 
    '$obreiro', '$cargo', '$observacoes', '$foto')";

    if($conexao->query($sql) === TRUE)
    {
        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Membro cadastrado com sucesso!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Clique aqui para voltar</button></label></a></center>';";
    }
    else
    {
        echo "<body = style='background-color:lightsteelblue;'/>";
        
        echo "<p style='text-align:center'><img style='width:200px;' src='imagens/IEADEM(fundo).png'></p>";

        echo "<center><h1>Erro ao cadastrar membro!</h1></center>";

        echo "<center><a href='index.html' style='color: inherit; text-decoration: none;' id='inicio'><label for='inicio'><button style='width:200px; height:30px; margin-top:10px;'>Clique aqui para voltar</button></label></a></center>';";
    }

    $conexao->close();
}

?>