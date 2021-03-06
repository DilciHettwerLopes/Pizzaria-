<?php
$id = $_GET['id'];

if(is_numeric($id) && !empty($id)){
    $titulo = "Formulário de alteração de publicação";
    $botao = 'Atualizar';
    $cardapio = mysqli_query($link,"SELECT * FROM pedido WHERE id=$id");
    if(mysqli_num_rows($pedido)<1){
        echo 'Pedido não encontrado';
        exit();
    }
    $buscaPedido = mysqli_fetch_object($pedido);
}else{
    $titulo = "Formulário de pedido";
    $botao = 'Cadastrar';
    $id = '';
}

?>
<div class="row">
    <div class="col-12 col-md-6">
        <form method="POST" action="index.php?pagina=contato/acoes&id=<?=$id?>" class="form-horizontal" id="form-cardapio">
            <h2 class="display-5" id="titleform"><?=$titulo?></h2>
            <div class="form-group mb-3">
                <input type="text" value="<?=$buscaPedido->titulo?>" class="form-control" name="titulo" id="titulo" placeholder="Digite o titulo da pizza">
            </div>
            <div class="form-group mb-3">
                <select name="pizza" class="form-control" required>
                    <option value="">selecione a pizza</option>
                    <?php
                        $cardapios = mysqli_query($link,'SELECT * FROM pedido ORDER BY titulo ASC');
                        while($pedido= mysqli_fetch_object($pedidos)){
                           echo '<option value="'.$cardapio->id.'" '.($buscaPedido->cardapio==$cardapio->id?"selected":null).'>'.$cardapio->titulo.'</option>';
                        }
                    ?>
                </select>
            <!--  <input type="text" value="<?=$buscaPedido->cardapio?>" class="form-control" name="pizza" id="pizza" placeholder="Digite o nome da pizza"> -->
            </div>
            <div class="form-group mb-3">
                <input type="date" value="<?=$buscaPedido->data?>" class="form-control col-12 col-md-5" name="data" id="data" placeholder="Selecione a data">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="descricao" id="descricao" placeholder="Digite a descrição do pedido"><?=trim($buscaPedido->descricao)?></textarea>
            </div>
            <div class="mt-4 pb-4">
                <button type="submit" class="btn btn-success" id="btn-enviar"><?=$botao?> Pizza</button>
                <button type="reset" class="btn btn-danger">Limpar formulário</button>
            </div>
        </form>
    </div>
</div>