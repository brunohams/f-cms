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

            /**
             * Páginas que não exibem menu e barra
             */
            $aPagina = array('login', 'modal');

            /** Verifica se o controller ja tem a informação */
            $this->naoExibeMenu == 1 ? $prArray['exibeMenu'] = 1 : $prArray['exibeMenu'] = 0;

            /** Verifica pela página */
            if ($prArray['pagina'] && in_array($prArray['pagina'], $aPagina))
            {
                $prArray['exibeMenu'] = false;
            }

            /**
             * Se vier do MODAL
             */
            $prArray['modal'] == true ? $prArray['caminho'] = '../' : $prArray['caminho'] = '';

            /**
             * Busca pelos menus
             */
            $menu = DB::table('menu')
                ->orderBy('ordem')
                ->select()->get();

            /** Varre os menus */
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