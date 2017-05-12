<?php

    namespace Base;

    class Mensagem
    {

        /**
         * @param string $prMensagem Mensagem
         * @param string $prTipo Tipo de mensagem (acerto, erro, aviso)
         */
        public final static function mensagem($prMensagem, $prTipo = 'alert-danger')
        {

            $_SESSION['mensagem'] = array(
                'tipo'      => $prTipo,
                'mensagem'  => $prMensagem
            );

        }

    }