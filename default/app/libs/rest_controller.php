<?php

/**
 * Controlador para manejar peticiones REST
 * 
 * Por defecto cada acción se llama como el método usado por el cliente
 * (GET, POST, PUT, DELETE, OPTIONS, HEADERS, PURGE...)
 * ademas se puede añadir mas acciones colocando delante el nombre del método
 * seguido del nombre de la acción put_cancel, post_reset...
 *
 * @category Kumbia
 * @package Controller
 * @author kumbiaPHP Team
 */
require_once CORE_PATH . 'kumbia/kumbia_rest.php';
abstract class RestController extends KumbiaRest {

    /**
     * Inicialización de la petición
     * ****************************************
     * Aqui debe ir la autenticación de la API
     * ****************************************
     */

    public $model;

    final protected function initialize() {
        
    }

    final protected function finalize() {
        
    }

    public function getall()
    {
        $this->data = (new $this->model)->find();
    }

    public function get($max, $page)
    {
        $this->data = (new $this->model)->paginate("per_page: $max", "page: $page");
    }

}