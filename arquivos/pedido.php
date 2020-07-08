<?php
$Pedido = $_GET['id'];
$Pedido= mysqli_query($link,'SELECT * FROM pedido WHERE id='.$Pedido);
if(mysqli_num_rows($Pedido)<1){
    echo 'Pedido não encontrado.';
}else{
    $row = mysqli_fetch_object($Pedido);
    ?>
    <div class="navigation">
        <!-- Barra de navegação -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Página Inicial</a></li>
                <li class="breadcrumb-item"><a href="index.php?pagina=pedidos">Pedido</a></li>
                <li class="breadcrumb-item" aria-current="page"><?=$row->nome?></li>
            </ol>
        </nav>
   <!-- Formulario de entrega-->
   <div class="row mt-2 mb-5">
            <div class="col-8">
                <h3>Meu Pedido</h3>
                <form name="pedido" method="GET" action="pedido.php" id="form-user">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="number" class="form-control" id="telefone" name="telefone">
                    </div>
                    <div class="form-group">
                        <label for="cep">CEP:</label>
                        <input type="text" class="form-control" id="cep" name="cep">
                    </div>
                    <div class="form-group">
                        <label for="rua">Rua:</label>
                        <input type="text" class="form-control" id="rua" name="rua">
                    </div>
                    <div class="form-group">
                        <label for="numero">Numero:</label>
                        <input type="text" class="form-control" id="numero" name="numero">
                    </div>
                    <div class="form-group">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" name="bairro">
                    </div>
                    <div class="form-group">
                    <label for="cidade"> Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
                      <div class="form-group">
                <label for="borda"></label>Borda:</label>
                <select class="form-inline" id="borda" name="borda">
                    <option selected>Sim</option>
                    <option>Não</option>
                </select>
            </div>
                       <div class="form-group">
                <label for="pedido">Descrição do pedido:</label>
                <input type="text" class="form-control" id="pedido" name="pedido">
            </div>
            <button type="comprar" class="btn btn-primary" id="btn-comprar">Comprar</button>
            </form>
            <hr class="featurette-divider">
        </div>
     <?php
}