<?php
$promocao = $_GET['id'];
$promocao = mysqli_query($link,'SELECT * FROM promocao WHERE id='.$promocao);
if(mysqli_num_rows($promocao)<1){
    echo 'Promocao não encontrado.';
}else{
    $row = mysqli_fetch_object($promocao);
    ?>
    <div class="navigation">
        <!-- Barra de navegação -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="index.php?pagina=promocao">Promocao</a></li>
                <li class="breadcrumb-item" aria-current="page"><?=$row->nome?></li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col">
            <h1><?=$row->nome?></h1>
            <hr>
        </div>
    </div>
    <div class="row pb-5">
        <div class="col-6">
            <img class="img-fluid" src= "imagens pizza/promocao/11.jpg<?= $row->arquivo ?>"
                 alt="<?= $row->titulo ?>">
        </div>
        <div class="col-6">
            <?=$row->descricao?>
        </div>
    </div>
    <?php
}