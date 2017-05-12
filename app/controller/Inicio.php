<?php
    namespace Controller;

    use Base\Mensagem;
    use Lib\User;
    use Parvus\DB;
    use Parvus\Input;
    use Parvus\Redirect;

    class Inicio extends Base
    {

        protected $session = false;
        protected $exibeMenu = false;

        public final function actionGetIndex ()
        {

            $this->view('user/inicio');

        }


        public final function actionPostVerificaLogin ()
        {

            /**
             * Verifica Login
             */
            $login = DB::table('usuario')
                ->select()
                ->where('email', '=', Input::get('email'))
                ->where('senha', '=', md5(Input::get('senha')))
                ->first();

            /***
             * Verifica se existe login
             */
            if ($login)
            {

                unset($_SESSION['mensagem']);

                $_SESSION['usuario'] = $login;

                Redirect::to('inicio');

            }
            else
            {

                Mensagem::mensagem('Login ou senha inválidos');

                Redirect::to('login');

            }

        }


    }