<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class IndexController extends AppController
{

    public function index()
    {

        $usrs = ( new usuarios)->find();
        $rls  = ( new roles)->find();
        View::select(null);

        echo var_dump( $rls );

    }
}
