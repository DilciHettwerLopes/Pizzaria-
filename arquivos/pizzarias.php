<?php
$Historia = $_GET['id'];
$Historia= mysqli_query($link,'SELECT * FROM historia WHERE id='.$Historia);
if(mysqli_num_rows($Historia)<1){
    echo 'Historia não encontrada.';
}else{
    $row = mysqli_fetch_object($Historia);
    ?>
    <div class="navigation">
        <!-- Barra de navegação -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="index.php?pagina=pizzaria">Pizzaria</a></li>
                <li class="breadcrumb-item" aria-current="page"><?=$row->nome?></li>
            </ol>
        </nav>
  
    <?php
}