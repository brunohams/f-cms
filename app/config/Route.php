<?php
return array (
    array (
        '/ano/{ano}',
        array(
            '_controller' => '\\Controller\\Login::actionGetLogin'
        ),
        array (
            'ano' => '[0-9]{1,4}'
        )
    )
);
