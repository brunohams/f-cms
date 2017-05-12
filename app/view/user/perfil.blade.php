@extends('base/section')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Alterar meu perfil</h1>
        </div>

    </div>

    <div class="row">

        <form action="perfil/salva" method="post">

            <div class="col-lg-6 col-md-6">

                <div class="form-group">

                    <label>Nome</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input type="text" class="form-control" name="nome" value="{{$nome}}" required>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-6">

                <div class="form-group">

                    <label>E-mail</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon">@</span>
                        <input type="email" class="form-control" name="email" value="{{$email}}" required>
                    </div>

                </div>

            </div>

            <div class="col-lg-12 col-md-12 text-center">
                <button type="submit" class="btn btn-default">Salvar</button>
                <button type="button" class="btn btn-default" onClick="alteraSenha();" >Alterar minha senha</button>
            </div>

        </form>


    </div>

    <div class="row">

        <div class="col-lg-12 col-md-12">
        </div>

    </div>

@endsection