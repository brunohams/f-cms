<?php
    /**
     * The Parvus Framework
     *
     * A small but strong framework
     *
     * Author: Adriano dos Santos Júnior <adriano@adrianojr.com>
     * Data: 10/11/2014
     * Version: 1.0.0
     */

    /** Include the Composer files */
    include_once ('../vendor/autoload.php');

    /** Define the base path **/
    define ('path',__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR);

    /** Init the application  */
    $app = new Parvus\Parvus();
	$app->controller();