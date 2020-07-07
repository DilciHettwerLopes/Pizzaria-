<div class="navigation">
    <!-- Barra de navegação -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Página Inicial</a></li>
            <li class="breadcrumb-item" aria-current="page">Promoção</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="input-group mb-3">
            <form method="POST" action="index.php?pagina=promocao" class="input-group mb-3">
                <input name="busca" type="text" class="form-control" placeholder="Digite sua busca">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <?php
    $busca='';
    if($_POST){
        extract($_POST);
        if(!empty($busca)){
            $busca = " WHERE titulo LIKE '%$busca%' OR conteudo LIKE '%$busca%'";
        }
    }

    $sqlPromocao = mysqli_query($link, "SELECT * FROM promocao $busca GROUP BY nome ASC");
    if (mysqli_num_rows($sqlPromocao) < 1) {
        echo '<div class="col"><div class="alert alert-info col">Nenhuma promoção cadastrada.</div></div>';
    } else {
        while ($rowPromocao = mysqli_fetch_object($sqlPromocao)) {
            ?>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" height="200" src="imagens pizza/promocao<?= $rowPromocoes->arquivo ?>"
                         alt="<?= $rowPromocoes->nome ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $rowPromocoes->nome ?></h5>
                        <p class="card-text"><?= $rowPromocoes->descricao ?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="index.php?pagina=promocao&id=<?=$rowPromocoes->id?>" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    } ?>
</div>