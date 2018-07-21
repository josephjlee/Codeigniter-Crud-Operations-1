<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = "CrudOps/index";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['crudops'] = "CrudOps/index";
$route['crudops/(:num)'] = "CrudOps/show/$1";
$route['crudopsCreate']['post'] = "CrudOps/store";
$route['crudopsEdit/(:any)'] = "CrudOps/edit/$1";
$route['crudopsUpdate/(:any)']['put'] = "CrudOps/update/$1";
$route['crudopsDelete/(:any)']['delete'] = "CrudOps/delete/$1";
