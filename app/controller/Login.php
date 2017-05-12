<?php
    namespace Controller;

    use Parvus\Date;
    use Parvus\DB;
    use Parvus\Input;
    use Parvus\Redirect;

    class Login extends Base
    {

        protected $session = false;
        protected $naoExibeMenu = true;

        public final function actionGetIndex ()
        {

            $this->view('login/index');

        }


    }