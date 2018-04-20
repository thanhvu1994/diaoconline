<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Table_widget extends MY_Widget 
{
    function index($controller_name, $models, $column, $id = 'index_grid-bulk'){
        $this->load->view('view', [
        	'controller_name' => $controller_name, 
        	'models' => $models,
        	'column' => $column,
        	'id' => $id,
    	]);
    }
}