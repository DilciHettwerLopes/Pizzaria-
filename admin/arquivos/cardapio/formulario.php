<?php
 $id = $_GET['id'];
if(is_numeric($id) && !empty($id)){
    $titulo = "Formulário de alteração de publicação";
    $botao = 'Atualizar';
    $cardapio = mysqli_query($link,"SELECT * FROM cardapio WHERE id=$id");
    if(mysqli_num_rows($cardapio)<1){
        echo 'Pizza não encontrada';
        exit();
    }
    $buscaCardapio = mysqli_fetch_object($cardapio);
}else{
    $titulo = "Formulário de cadastro de pizza";
    $botao = 'Cadastrar';
    $id = '';
}

?>
<div class="row">
    <div class="col-12 col-md-6">
        <form method="POST" action="index.php?pagina=cardapio/acoes&id=<?=$id?>" class="form-horizontal" id="form-cardapio">
            <h2 class="display-5" id="titleform"><?=$titulo?></h2>
            <div class="form-group mb-3">
                <input type="text" value="<?=$buscaCardapio->titulo?>" class="form-control" name="titulo" id="titulo" placeholder="Digite o titulo da pizza">
            </div>
            <div class="form-group mb-3">
                <input type="date" value="<?=$buscaCardapio->data?>" class="form-control col-12 col-md-5" name="data" id="data" placeholder="Selecione a data">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="descricao" id="descricao" placeholder="Digite a descrição da pizza"><?=trim($buscaCardapio->descricao)?></textarea>
            </div>
            <div class="mt-4 pb-4">
                <button type="submit" class="btn btn-success" id="btn-enviar"><?=$botao?> Pizza</button>
                <button type="reset" class="btn btn-danger">Limpar formulário</button>
            </div>
        </form>
    </div>
</div>