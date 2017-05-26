$(function ()
{

    /**
     * jQuery validator
     */
    // validate signup form on keyup and submit
    $("form").validate(
    {
        rules:
        {
            firstname: "required",
            lastname: "required",
            username:
            {
                required: true,
                minlength: 2
            },
            password:
            {
                required: true,
                minlength: 5
            },
            confirm_password:
            {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            email:
            {
                required: true,
                email: true
            },
            topic:
            {
                required: "#newsletter:checked",
                minlength: 2
            },
            agree: "required"
        },
        messages:
        {

            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",

            username:
            {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            password:
            {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password:
            {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },

            email: "Informe um endereço de e-mail válido",
            agree: "Please accept our policy",
            topic: "Please select at least 2 topics"
        }

    });

    // propose username by combining first- and lastname
    $("#username").focus(function() {
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        if (firstname && lastname && !this.value)
        {
            this.value = firstname + "." + lastname;
        }
    });

    //code to hide topic selection, disable for demo
    var newsletter = $("#newsletter");

    // newsletter topics are optional, hide at first
    var inital = newsletter.is(":checked");
    var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
    var topicInputs = topics.find("input").attr("disabled", !inital);

    // show when newsletter is checked
    newsletter.click(function()
    {
        topics[this.checked ? "removeClass" : "addClass"]("gray");
        topicInputs.attr("disabled", !this.checked);
    });


});


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

