<div class="navigation">
    <!-- Barra de navegação -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Página Inicial</a></li>
            <li class="breadcrumb-item" aria-current="page">Pedido</li>
        </ol>
    </nav>
</div>
<div class="row">
    <?php
    $sqlPedido = mysqli_query($link, "SELECT * FROM pedido GROUP BY nome ASC");
    if (mysqli_num_rows($sqlPedido) < 1) {
        echo '<div class="col"><div class="alert alert-info col">Nenhum pedido cadastrado.</div></div>';
    } else {
        while ($rowPedido = mysqli_fetch_object($sqlPedido)) {
        } ?>
    </div>
</div>