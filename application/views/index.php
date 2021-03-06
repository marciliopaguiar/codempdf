<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Relatórios do Almoxarifado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?=('assets/css/bootstrap-4.1.1.css') ?>">  
  <link rel="stylesheet" href="<?=('assets/css/bootstrap-datepicker.css') ?>">  
  <link rel="stylesheet" href="<?=('assets/css/estilo.css') ?>">

</head>
<body>

<script src="<?=('assets/js/jquery.min.js') ?>"></script>
<script src="<?=('assets/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?=('assets/js/jquery-3.3.1.slim.min.js') ?>"></script>
<script src="<?=('assets/js/popper.min.js') ?>"></script>
<script src="<?=('assets/js/bootstrap-4.1.1.min.js') ?>"></script>
<script src="<?=('assets/js/bootstrap-datepicker.min.js') ?>"></script>
<script src="<?=('assets/js/funcoes.js') ?>"></script>

<nav class="navbar-right navbar-expand-lg navbar navbar-dark bg-primary">  
    <div class="dropdown">
        <!--<button onclick="dropdownMenu()" class="dropbtn">Relatórios do Almoxarifado</button>-->
        <input type="text"  placeholder="Pesquisar... " onclick="dropdownMenu()" id="myInput" onkeyup="filterFunction()" data-toggle="tooltip" data-placement="bottom" title="Selecione o relatório desejado">
        <div id="myDropdown" class="dropdown-content">
            <a id="a_escritorio" href="./index.php?p=material_escritorio"><img src="<?='assets/img/folder.png'?>" height="17" width="17"/> Material de Escritório</a>
            <a id="a_almoxarifado" href="./index.php?p=material_almoxarifado"><img src="<?='assets/img/stock.png'?>" height="17" width="17"/> Material do Almoxarifado</a>
            <a id="a_servico_vascular" href="./index.php?p=material_servico_vascular"><img src="<?='assets/img/medicine.png'?>" height="17" width="17"/> Material de Serviço Vascular</a>
            <a id="a_entrada" href="./index.php?p=material_entrada"><img src="<?='assets/img/input.png'?>" height="17" width="17"/> Material de Entrada</a>
        </div>
    </div>
    <!-- Implementar depois...
    <div class="row justify-content-around">
        <div class="col-1">
            <a class="btn btn-danger" href="./index.php">Início</a>
        </div>
        <div class="col-1">
            <a class="btn btn-danger" onclick="window.history.go(-1); return false;">Voltar</a>
        </div>
        <div class="col-1">
            <a class="btn btn-danger" onclick="window.history.go(1); return false;">Avançar</a>
        </div> 
    -->
    <div class="col-1">
        <a href="./index.php"><img data-toggle="tooltip" data-placement="right" title="Página Inicial" height="40px" width="100px" src="<?=('assets/img/MARCA PMVC_2017_COLOR.png')?>"></a>    
    </div>
        <!-- <a href="http://www.pmvc.ba.gov.br" target="_blank"><img height="40px" width="130px" src="<?=('assets/img/MARCA PMVC_2017_COLOR.png')?>"></a> -->
    <!--
         </div>
    <div class="row justify-content-around">
        <div class="row">
            <div class="col-sm-4">
                <a id="inicio" class="btn btn-danger" href="./index.php">Início</a>
            </div>
            <div class="col-sm-4">
                <?=@$liberaImpressao?>
            </div>
            <div class="col-sm-4">
                <input action="action" class="btn btn-danger" onclick="window.history.go(-1); return false;" type="button" value="Voltar" />
            </div>
        </div> 
    </div>
    -->
</nav>
<div id="conteudo">
    <?=@$setTitulo?>
    <?=@$liberaConteudo?>
</div>
</body>
</html>
