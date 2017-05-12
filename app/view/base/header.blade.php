<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>CMS</title>

        <!-- Bootstrap Core CSS -->
        <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="libs/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

    @if($_SESSION['mensagem'] && $pagina == 'login')

        <div class="alert {{$_SESSION['mensagem']['tipo']}}">
            {{$_SESSION['mensagem']['mensagem']}}
        </div>

    @endif

    {{--Se for a página de login--}}
    @if($pagina != 'login')

        <div id="wrapper">

            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="inicio">Fucking CMS</a>

                </div>

                <ul class="nav navbar-top-links navbar-right">

                    <li class="dropdown">

                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                            {{$_SESSION['usuario']['email']}}

                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>

                        </a>

                        <ul class="dropdown-menu dropdown-user">

                            <li>
                                <a href="perfil"><i class="fa fa-user fa-fw"></i> Meu perfil</a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i> Configurações </a>
                            </li>

                            <li class="divider"></li>
                            <li>
                                <a href="login"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>

                    </li>

                </ul>

                @if($_SESSION['mensagem'])

                    <div class="alert {{$_SESSION['mensagem']['tipo']}}">
                        {{$_SESSION['mensagem']['mensagem']}}
                    </div>

                @endif

                @include('base/sidebar')

            </nav>

    @endif