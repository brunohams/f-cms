@extends('base/section')

@section('content')

    <div class="col-lg-12">
        <h3>Alterar minha senha</h3>
    </div>

    <form action="perfil/salva" method="post">

        <div class="col-md-6">

            <div class="form-group">

                <label>Senha atual</label>

                <div class="form-group input-group">

                    <span class="input-group-addon">
                        <i class="fa fa-key"></i>
                    </span>

                    <input id="senha-atual" type="password" class="form-control" name="senha-atual" required>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">

                <label>Confirme sua senha</label>

                <div class="form-group input-group">

                    <span class="input-group-addon">
                        <i class="fa fa-key"></i>
                    </span>

                    <input id="senha-atual-confirmacao" type="password" class="form-control" name="senha-atual-confirmacao" required>

                </div>

            </div>

        </div>

        <div class="confirm-modal text-center" style="padding: 50px">

            <button type="submit" class="btn btn-default">Continuar</button>

        </div>

    </form>

@endsection

@section('javascript')

    <script>

        $(function ()
        {

            $('#senha-atual, #senha-atual-confirmacao').on('change', function () {

                var senhaAtual      = $('#senha-atual');
                var senhaConfirma   = $('#senha-atual-confirmacao');

                /** Quando campos estiverem preenchidos */
                if (senhaAtual.val() != '' && senhaConfirma.val() !== '')
                {

                    /** Verifica se são iguais */
                    if (senhaAtual.val() !== senhaConfirma.val())
                    {


                        alert('As senhas não coencidem', 'Erro', 'error', function ()
                        {

                            senhaAtual.val('');
                            senhaConfirma.val('');

                        });

                        return false;

                    }

                }

            });

        });

    </script>

@endsection