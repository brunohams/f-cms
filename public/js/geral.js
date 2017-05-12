
/** Sobrescreve a função do alert */
function alert (prMensagem, prTitulo, prTipo, prFunction)
{

    if (prTitulo === undefined)
    {
        prTitulo = '';
    }

    if (prMensagem === undefined)
    {
        prMensagem = '';
    }

    if (prTipo === undefined)
    {
        prTipo = 'warning';
    }

    if (prFunction === undefined)
    {
        prFunction = function () {};
    }

    swal
    ({
        title: prTitulo,
        text: prMensagem,
        type: prTipo
    }).then(function (e) {
            prFunction(e)
        }
    );

}

/** Sobrescreve a função do confirm */
function confirm (prMensagem, prTitulo, prTipo, prFunction)
{

    /** Se vier com titulo undefinida, define como nula */
    if (prFunction === undefined)
    {
        prFunction = function () {};
    }

    swal
    ({
        title: prTitulo,
        text: prMensagem,
        type: prTipo,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar!'
    }).then(function () {},
        prFunction);
}


/** Remove as mensagens de erros, alerto, aviso após 8 segundos */
setTimeout(function ()
{

    $('.alert').hide();

}, 1500);

