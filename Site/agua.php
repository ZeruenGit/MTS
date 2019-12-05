<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    .text-center {
        text-align: center;
      }
      body {
        background: #CEE29D;
      }
      </style>
</head>
<body>

<div class="container">
        <div class="row">
            <div class="col-sm">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-left d-flex logo" href="index.html">
                        <img src="./imagens/logo.png" alt="" style="width: 70%;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dicas.html">Dicas Sustentáveis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="noticias.php">Notícias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="coleta.html">Pontos de Coletas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cadastro.html">Cadastre-se</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class=dicas>
            <center><h1>ÁGUA</h1></center>
        <?php
        include_once('conexao.php');
        //receber o número da página
        $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);
        $pagina =  (!empty ($pagina_atual))  ? $pagina_atual : 1;
        
        //setar a quantidade de itens por pagina

        $qnt_result_pagina = 2;

        //calcular o inicio da visualização
        $inicio = ($qnt_result_pagina * $pagina) - $qnt_result_pagina;

        //mostrar as inserções
        $result_noticias = "SELECT * FROM agua LIMIT $inicio, $qnt_result_pagina";
        $resultado_noticias = mysqli_query($conexao, $result_noticias);
        
        while($row_noticia = mysqli_fetch_assoc($resultado_noticias)){
            echo "<b>" . $row_noticia['titulo'] . "</b><br><br>";
            echo "" . $row_noticia['texto'] . "<br><br><hr>";
        }

        //Paginação - Somar a quantidade de inserções
        $result_pg = "SELECT COUNT(cod) AS num_result FROM agua";
        $resultado_pg = mysqli_query($conexao, $result_pg);
        $row_pg = mysqli_fetch_assoc($resultado_pg);
        //echo $row_pg['num_result'];

        //Quantidade de paginas
        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pagina);

        //Limitar os links antes e depois
        $max_links = 2;
        echo "<a href='agua.php?pagina=1'> Primeira </a>";

        for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
            if($pag_ant >= 1){
            echo "<a href='agua.php?pagina=$pag_ant'>$pag_ant </a>";
        }
    }

        echo "$pagina";

        for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep ++){
            if($pag_dep <= $quantidade_pg){
                echo "<a href='agua.php?pagina=$pag_dep'>$pag_dep </a>";
            }
        }

        echo "<a href='agua.php?pagina=$quantidade_pg'> Ultima </a>";
       
       ?>
    </div>
    </div>
</body>
</html>