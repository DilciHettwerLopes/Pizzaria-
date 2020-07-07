    <div class="table-responsive">
        <h2 class="display-5" id="title-table">Pedido</h2>
        <a href="index.php?pagina=contatos/formulario" class="btn btn-info mb-4">Cadastrar novo pedido</a>
        <?php
        $sqlPedidos = mysqli_query($link, "SELECT contato.*,DATE_FORMAT(data,'%d/%m/%Y') data,contato.descricao FROM pedido INNER JOIN contato ON contato.id=pedido.contato ORDER BY data_pedido ASC");
        if (mysqli_num_rows($sqlContatos) > 0) {
        ?>
        <table class="table table-striped" data-toggle="data-tables" style="width:100%">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data do Pedidor</th>
                <th scope="col">Codigo Transacionador</th>
                <th scope="col">Valor Total</th>
                <th scope="col">Opções</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $x = 0;
            while ($rowPedidos = mysqli_fetch_object($sqlPedidos)) {
                $x++;
                ?>
                <tr>
                    <th scope="row"><?= $x ?></th>
                    <td><?= $rowPedidos->data_pedido; ?></td>
                    <td><?= $rowPedidos->codigo_transacionador; ?></td>
                    <td><?= $rowPedidos->valor_total; ?></td>
                    <td>
                        <a class="btn btn-danger btn-apagar" href="index.php?pagina=contatos/acoes&acao=apagar&id=<?= $rowPedidos->id; ?>">Apagar</a>
                        <a class="btn btn-info" href="index.php?pagina=contatos/formulario&id=<?= $rowPedidos->id; ?>">Alterar</a>
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
