<?php
    return array (
        /** Active driver */
        'driver' => 'mysql',

        /** Default options */
        'default' => array (
            'prefix'    => '',
            'host'      => ';localhost',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ),

        /** Local connection */
        'local' => array (
            'mysql' => array (
                'host'      => '127.0.0.1',
                'database'  => 'banco',
                'username'  => 'root',
                'password'  => 'root'
            )
        ),

        /** Production connection */
        'production' => array (
            'mysql' => array (
                'host'      => 'servidoraqui',
                'database'  => 'banco',
                'username'  => 'root',
                'password'  => 'root'
            )
        )
    );