<div class="table-responsive">
        <h2 class="display-5" id="title-table">Promoção</h2>
        <a href="index.php?pagina=promocoes/formulario" class="btn btn-info">Cadastrar uma nova promoção</a>
        <?php
        $sqlPromocoes = mysqli_query($link, "SELECT * FROM promocao ORDER BY titulo ASC");
        if (mysqli_num_rows($sqlPromocoes) > 0) {
        ?>
        <table class="table mt-3">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imagem</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descrição</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $x = 0;
            while ($rowPromocoes = mysqli_fetch_object($sqlPromocoes)) {
                $x++;
                ?>
                <tr>
                    <th scope="row"><?= $x ?></th>
                    <td> 
                    <img src = "../imagens pizza/promocao<?= $rowPromocoes->arquivo;?>" width= "80">
                    </td>
                    <td><?= $rowPromocoes->titulo; ?></td>
                    <td><?= $rowPromocoes->descricao; ?></td>
                    <td>
                    <?php
                      if($rowPromocoes->total<1){
                        ?>
                        <a class="btn btn-danger" href="index.php?pagina=promocoes/acoes&acao=apagar&id=<?= $rowPromocoes->id; ?>">Apagar</a>
                        <?php }?>
                        <a class="btn btn-info" href="index.php?pagina=promocoes/formulario&id=<?= $rowPromocoes->id; ?>">Alterar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php }else{
            ?>
            <div class="alert alert-warning mt-3 mb-3">Nenhum registro encontrado.</div>
            <?php
        }?>
    </div>
