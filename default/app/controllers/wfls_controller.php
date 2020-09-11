<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class WflsController extends AppController
{

    public function index()
    {
	View::select(null);
	echo 'hora perro';
    }
}

