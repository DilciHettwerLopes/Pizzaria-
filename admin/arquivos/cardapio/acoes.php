<?php
$id = @$_GET['id'];

if(is_numeric($id) && !empty($id) && $_GET['acao']=="apagar"){
    mysqli_query($link,"DELETE FROM cardapio WHERE id=$id");
    if(mysqli_affected_rows($link)>0){
        $retorno = array(
            'result' => true,
            'mensagem' => 'Pizza apagada com sucesso.'
        );
    }else{
        $retorno = array(
            'result' => false,
            'mensagem' => 'Falha ao apagar, atualize sua página.'
        );
    }
    echo json_encode($retorno);
}

if($pagina=='cardapio/acoes' && $_POST) {
    extract($_POST);
    if(empty($titulo) || empty($descricao)){
        $_SESSION['mensagem'] = '<div class="alert alert-danger">Preencha corretamente todos os campos obrigatórios.</div>';
        if (!empty($id)) {
            header('Location:index.php?pagina=cardapio/formulario&id='.$id);
        }else{
            header('Location:index.php?pagina=cardapio/formulario');
        }
    }else {
        if (!empty($id)) {
            $update = mysqli_query($link, "UPDATE cardapio SET titulo='$titulo',descricao='$descricao' WHERE id=$id");
            if (mysqli_affected_rows($link) > 0) {
                $retorno = array(
                    'result' => true,
                    'mensagem' => 'Pizza alterada com sucesso',
                    'url' => 'index.php?pagina=cardapio/listagem'
                );
                $_SESSION['mensagem'] = '<div class="alert alert-success">Pizza alterada com sucesso.</div>';
            } else {
                $retorno = array(
                    'result' => false,
                    'mensagem' => 'Falha ao gravar, verifique seus dados e tente novamente'
                );
                $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao gravar</div>';
            }
        } else {
            $insert = mysqli_query($link, "INSERT INTO cardapio VALUES (null,'$titulo','$descricao')");
            if (mysqli_affected_rows($link) > 0) {
                $retorno = array(
                    'result' => true,
                    'mensagem' => 'Pizza cadastrada com sucesso',
                    'url' => 'index.php?pagina=cardapio/listagem'
                );
                $_SESSION['mensagem'] = '<div class="alert alert-success">Pizza cadastrada com sucesso.</div>';
            } else {
                $retorno = array(
                    'result' => false,
                    'mensagem' => 'Falha ao gravar, verifique seus dados e tente novamente'
                );
                $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao gravar</div>';
            }
        }        

        echo json_encode($retorno);
    }
}