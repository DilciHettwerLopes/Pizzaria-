$(document).ready(function () {

    $('#btn-abrir').click(function () {
        $('#meu-modal').modal('show');
    });

    $('#btn-fechar').click(function () {
        $('#meu-modal').modal('hide');
    });

    $('[data-toggle=tooltip]').tooltip();
    $('[data-toggle=popover]').popover({ placement: 'top' });

    $('.btn-excluir').click(function () {
        //remove a linha
        $(this).parents('tr').remove();

        //mostra a mensagem
        $('#message-cliente').toast({
            autohide: true,
            delay: 3000
        }).toast('show');
    });

    $('#form-user').validate({
        rules: {
            nome: "required",
            telefone: "required",
            pedido: "required",
            cep:  "required"
                   },
        messages: {
            nome: "Por favor, preencha seu nome...",
            telefone: "Por favor, preencha seu telefone...",
            pedido: "Por favor, descreva seu pedido...",
            cep: "Por favor, descreva o seu cep..."
        },

        errorPlacement: function (error, element) {
            error.insertAfter(element).addClass('text-danger');
        },
        errorClass: "is-invalid"
    });

    $('#btn-comprar').click(function (event) {
        event.preventDefault();
        if ($('#form-user').valid()) {   //formulario valido
            $.ajax({
                method: 'POST',
                url: 'page01.php',
                data: $('#form-user').serialize(),
                timeout: '15000', //milisegundos
                dataType: 'json'
            }).done(function (retorno) {
                $('#toast-retorno .toast-body').html(retorno);
                $('#toast-retorno').toast({
                    autohide: true,
                    delay: 5000
                }).toast('show');
            });
        }
       
    });
});