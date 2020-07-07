<?php
$sqlHistoria = mysqli_query($link, "SELECT * FROM historia");
if (mysqli_num_rows($sqlHistoria) > 0) {
    $rowHistoria = mysqli_fetch_object($sqlHistoria);
    ?>
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark" id="jumbotron">
        <div class="col-md-8 px-0">
            <h1 class="display-5"><em><?= $rowHistoria->titulo ?></em></h1>
            <p>
                <?= $rowHistoria->descricao ?>
            </p>
            <p class="lead mb-0"><a href="index.php?pagina=pizzaria" class="text-white font-weight-bold">Continue
                    lendo...</a></p>
        </div>
    </div>
<?php }
$sqlHistorias = mysqli_query($link, "SELECT * FROM historia ORDER BY titulo ASC");
if (mysqli_num_rows($sqlHistorias) > 0) {
    ?>
    <div class="table-responsive">
        <h2 class="display-5" id="title-table">Últimas publicações</h2>
        <table class="table">
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
            while ($rowHistorias = mysqli_fetch_object($sqlHistorias)) {
                $x++;
                ?>
                <tr>
                    <th scope="row"><?= $x ?></th>
                    <td><?= $rowHistorias->titulo; ?></td>
                    <td><?= $rowHistorias->descricao; ?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>