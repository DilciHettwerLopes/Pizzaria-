<?php
$id = @$_GET['id'];

if(is_numeric($id) && !empty($id) && $_GET['acao']=="apagar"){
    $busca = mysqli_query($link,'SELECT arquivo FROM promocao WHERE id='.$id);
    $busca = mysqli_fetch_object($busca);
    if(unlink('../imagens pizza/promocao/'.$busca->arquivo)) {
        mysqli_query($link, "DELETE FROM promocao WHERE id=$id");
        if (mysqli_affected_rows($link) > 0) {
            $_SESSION['mensagem'] = '<div class="alert alert-success">Promoção apagada com sucesso.</div>';
        } else {
            $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao apagar</div>';
        }
    }else{
        $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao apagar o arquivo no servidor.</div>';
    }
    header('Location:index.php?pagina=promocoes/listagem');
}

if($pagina=='promocoes/acoes' && $_POST) {
    extract($_POST);
    if(empty($titulo) || empty($descricao)){
        $_SESSION['mensagem'] = '<div class="alert alert-danger">Preencha corretamente todos os campos obrigatórios.</div>';
        if (!empty($id)) {
            header('Location:index.php?pagina=promocoes/formulario&id='.$id);
        }else{
            header('Location:index.php?pagina=promocoes/formulario');
        }
    }else {
        $arquivo =  $_FILES['arquivo'];
        $nomeArquivo = md5($arquivo['name'].date('YmdHis')).'.'. pathinfo($arquivo['name'], PATHINFO_EXTENSION);
        if (!empty($id)) {
            $arquivoDB = $arquivo_auxiliar;
            if(!empty($nomeArquivo)) {
                if (move_uploaded_file($arquivo['tmp_name'], '../imagens pizza/promocao/' . $nomeArquivo)) {
                    unlink('../imagens pizza/promocao/'.$arquivo_auxiliar);
                    $arquivoDB = $nomeArquivo;
                }
            }
            $update = mysqli_query($link, "UPDATE promocao SET arquivo='$arquivoDB',titulo='$titulo',descricao='$descricao' WHERE id=$id");
            if (mysqli_affected_rows($link) > 0) {
                $_SESSION['mensagem'] = '<div class="alert alert-success">Promoção alterada com sucesso.</div>';
            } else {
                $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao gravar</div>';
            }
        } else {
            if(!empty($nomeArquivo)) {
                if (move_uploaded_file($arquivo['tmp_name'], '../imagens pizza/promocao/' . $nomeArquivo)) {
                    $insert = mysqli_query($link, "INSERT INTO promocao VALUES (null,'$titulo','$descricao','$nomeArquivo')");
                    if (mysqli_affected_rows($link) > 0) {
                        $_SESSION['mensagem'] = '<div class="alert alert-success">Promoção cadastrada com sucesso.</div>';
                    } else {
                        $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao gravar</div>';
                    }
                } else {
                    $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao enviar o arquivo.</div>';
                }
            }else{
                $_SESSION['mensagem'] = '<div class="alert alert-danger">Selecione um arquivo.</div>';
                header('Location:index.php?pagina=promocoes/formulario');
                exit();
            }
        }
        header('Location:index.php?pagina=promocoes/listagem');
    }
}