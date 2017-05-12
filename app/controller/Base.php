<?php

    namespace Controller;

    use Parvus\DB;
    use Parvus\Redirect;

    class Base
    {
        protected $session = true;

        public function __construct()
        {

            $this->usuario = unserialize($_SESSION['usuario']);

            /** Validate session */
            if ($this->session && !$this->usuario)
            {
                Redirect::to('login');
            }

        }

        public final function view ($prView,$prArray = array())
        {

            /** Busca pelos menus */
            $menu = DB::table('menu')
                ->orderBy('ordem')
                ->select()->get();

            foreach ($menu as $item)
            {

                /** Se for um menu filho */
                if ($item['filho'] != NULL)
                {

                    $prArray['menu'][$item['filho']]['filho'][] = $item;

                }
                else
                {

                    $prArray['menu'][$item['id']] = $item;

                }

            }

            $view = new \Parvus\View();

            print($view->render($prView,$prArray));

            unset($_SESSION['mensagem']);

        }

    }