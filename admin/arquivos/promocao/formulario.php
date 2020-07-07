<?php
$id = $_GET['id'];

if(is_numeric($id) && !empty($id)){
    $titulo = "Formulário de alteração de promoções";
    $botao = 'Atualizar';
    $promocao = mysqli_query($link,"SELECT * FROM promocao WHERE id=$id");
    if(mysqli_num_rows($promocao)<1){
        echo 'Promocao não encontrada';
        exit();
    }
    $buscaPromocao = mysqli_fetch_object($promocao);
}else{
    $titulo = "Formulário de cadastro de promoções";
    $botao = 'Cadastrar';
    $id = '';
}

?>
<form enctype="multipart/form-data" method="POST" action="index.php?pagina=promocoes/acoes&id=<?=$id?>" class="form-horizontal">
    <h2 class="display-5" id="titleform"><?=$titulo?></h2>
    <div class="input-group mb-3">
        <input type="text" value="<?=$buscaPromocao->titulo?>" class="form-control" name="titulo" placeholder="Digite o titulo">
    </div>
    <div class="input-group mb-3">
        <input type="text" value="<?=$buscaPromocao->descricao?>" class="form-control" name="descricao" placeholder="Digite a descrição">
    </div>
        <div class="input-group mt-3">
        <?php
            if(!empty($buscaPromocao->arquivo) && !empty($id)){
                echo '<img src="../imagens pizza/promocao/'.$buscaPromocao->arquivo.'" width="150">';
                echo '<input type="hidden" name="arquivo_auxiliar" value="'.$buscaPromocao->arquivo.'">';
            }
        ?>
        <input type="file" name="arquivo">
    </div>
    <div class="mt-4 pb-4">
        <button type="submit" class="btn btn-success"><?=$botao?>Promoções</button>
        <button type="reset" class="btn btn-danger">Limpar formulário</button>
    </div>
</form>