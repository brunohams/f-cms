<?php
    namespace Controller;

    use Parvus\Date;
    use Parvus\DB;
    use Parvus\Input;
    use Parvus\Redirect;

    class Login extends Base
    {

        protected $session = false;
        protected $exibeMenu = false;

        public final function actionGetIndex ()
        {

            $this->view('login/index', array(
                'pagina'    =>  'login'
            ));

        }


    }