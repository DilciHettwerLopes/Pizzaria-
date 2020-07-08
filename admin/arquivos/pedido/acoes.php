<?php
$id = @$_GET['id'];

if(is_numeric($id) && !empty($id) && $_GET['acao']=="apagar"){
    mysqli_query($link,"DELETE FROM pedido WHERE id=$id");
    if(mysqli_affected_rows($link)>0){
        $retorno = array(
            'result' => true,
            'mensagem' => 'Pedido apagado com sucesso.'
        );
    }else{
        $retorno = array(
            'result' => false,
            'mensagem' => 'Falha ao apagar, atualize sua página.'
        );
    }
    echo json_encode($retorno);
}

if($pagina=='pedido/acoes' && $_POST) {
    extract($_POST);
    if(empty($titulo) || empty($descricao)){
        $_SESSION['mensagem'] = '<div class="alert alert-danger">Preencha corretamente todos os campos obrigatórios.</div>';
        if (!empty($id)) {
            header('Location:index.php?pagina=pedido/formulario&id='.$id);
        }else{
            header('Location:index.php?pagina=pedido/formulario');
        }
    }else {
        if (!empty($id)) {
            $update = mysqli_query($link, "UPDATE pedido SET titulo='$titulo',descricao='$descricao' WHERE id=$id");
            if (mysqli_affected_rows($link) > 0) {
                $retorno = array(
                    'result' => true,
                    'mensagem' => 'Pedido alterado com sucesso',
                    'url' => 'index.php?pagina=pedido/listagem'
                );
                $_SESSION['mensagem'] = '<div class="alert alert-success">Pedido alterado com sucesso.</div>';
            } else {
                $retorno = array(
                    'result' => false,
                    'mensagem' => 'Falha ao gravar, verifique seus dados e tente novamente'
                );
                $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao gravar</div>';
            }
        } else {
            $insert = mysqli_query($link, "INSERT INTO pedido VALUES (null,'$titulo','$descricao')");
            if (mysqli_affected_rows($link) > 0) {
                $retorno = array(
                    'result' => true,
                    'mensagem' => 'Pedido cadastrado com sucesso',
                    'url' => 'index.php?pagina=pedidos/listagem'
                );
                $_SESSION['mensagem'] = '<div class="alert alert-success">Pedido cadastrado com sucesso.</div>';
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