    <div class="table-responsive">
        <h2 class="display-5" id="title-table">Últimas pizzas</h2>
        <a href="index.php?pagina=publicacoes/formulario" class="btn btn-info mb-4">Cadastrar nova pizza</a>
        <?php
        $sqlCardapios = mysqli_query($link, "SELECT cardapio.*,DATE_FORMAT(data,'%d/%m/%Y') data, titulo FROM cardapio ORDER BY titulo ASC");
        if (mysqli_num_rows($sqlCardapios) > 0) {
        ?>
        <table class="table table-striped" data-toggle="data-tables" style="width:100%">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descricao</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $x = 0;
            while ($rowCardapios = mysqli_fetch_object($sqlCardapios)) {
                $x++;
                ?>
                <tr>
                    <th scope="row"><?= $x ?></th>
                    <td><?= $rowCardapios->titulo; ?></td>
                    <td><?= $rowCardapios->descricao; ?></td>
                    <td>
                        <a class="btn btn-danger btn-apagar" href="index.php?pagina=cardapios/acoes&acao=apagar&id=<?= $rowCardapios->id; ?>">Apagar</a>
                        <a class="btn btn-info" href="index.php?pagina=cardapios/formulario&id=<?= $rowCardapios->id; ?>">Alterar</a>
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
