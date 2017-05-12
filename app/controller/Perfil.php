<?php
    namespace Controller;

    use Base\Mensagem;
    use Parvus\DB;
    use Parvus\Input;
    use Parvus\Redirect;

    class Perfil extends Base
    {

        protected $session = false;

        public final function actionGetIndex ()
        {

            $usuario = DB::table('usuario')
                ->select()
                ->where('id', '=', $_SESSION['usuario']['id'])->first();

            $this->view('user/perfil', array(
                'nome'  => $usuario['nome'],
                'email' => $usuario['email'],
            ));

        }

        /** Salva novos valores */
        public final function actionPostSalva ()
        {

            DB::table('usuario')
                ->where('id', '=', $_SESSION['usuario']['id'])
                ->update(array(
                    'email' => Input::get('email'),
                    'nome' => Input::get('nome')
                ));

            Mensagem::mensagem('Perfil alterado com sucesso!', 'alert-success');

            Redirect::to('perfil');

        }




    }