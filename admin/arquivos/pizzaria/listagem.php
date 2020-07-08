<div class="table-responsive">
        <h2 class="display-5" id="title-table">Pizzaria</h2>
        <a href="index.php?pagina=pizzaria/formulario" class="btn btn-info">Cadastrar uma nova publicacao</a>
        <?php
        $sqlHistorias = mysqli_query($link, "SELECT * FROM historia ORDER BY titulo ASC");
        if (mysqli_num_rows($sqlHistorias) > 0) {
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
            while ($rowHistorias = mysqli_fetch_object($sqlHistorias)) {
                $x++;
                ?>
                <tr>
                    <th scope="row"><?= $x ?></th>
                    <td> 
                    <img src = "../imagens pizza<?= $rowHistorias->arquivo;?>" width= "80">
                    </td>
                    <td><?= $rowHistorias->titulo; ?></td>
                    <td><?= $rowHistorias->descricao; ?></td>
                    <tb><?= $rowHistorias->imagem; ?></td>
                    <td>
                    <?php
                      if($rowHistorias->total<1){
                        ?>
                        <a class="btn btn-danger" href="index.php?pagina=pizzaria/acoes&acao=apagar&id=<?= $rowHistorias->id; ?>">Apagar</a>
                        <?php }?>
                        <a class="btn btn-info" href="index.php?pagina=pizzaria/formulario&id=<?= $rowHistorias->id; ?>">Alterar</a>
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
