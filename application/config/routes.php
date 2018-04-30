<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['news/create'] = 'news/create';
// $route['news/(:any)'] = 'news/view/$1';
// $route['news'] = 'news';
// $route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'sites/index';
$route['admin'] = 'admin/login';

//Users
$route['dang-ky.html'] = 'sites/register';
$route['dang-nhap.html'] = 'sites/login';
$route['dang-xuat.html'] = 'sites/logout';

$route['tai-khoan-cua-toi.html'] = 'members/myAccount';
$route['doi-mat-khau.html'] = 'members/changePassword';
$route['quen-mat-khau.html'] = 'sites/forgot';
$route['dang-tai-san-moi.html'] = 'members/newProperty';
$route['tai-san-da-dang.html'] = 'members/postedProperty';
$route['tai-san-da-luu.html'] = 'members/savedProperty';
$route['(tim-kiem).html'] = 'sites/search';

$route['thanh-vien/tai-khoan-cua-toi.html'] = 'members/myAccount';
$route['thanh-vien/doi-mat-khau.html'] = 'members/changePassword';
$route['thanh-vien/quen-mat-khau.html'] = 'sites/forgot';
$route['thanh-vien/dang-tai-san-moi.html'] = 'members/newProperty';
$route['thanh-vien/tai-san-da-dang.html'] = 'members/postedProperty';
$route['thanh-vien/tai-san-da-luu.html'] = 'members/savedProperty';
$route['thanh-vien/xoa-tai-san.html/(:any)'] = 'members/deleteProperty/$1';
$route['thanh-vien/tai-san.html/(:any)'] = 'members/property/$1';



$route['(:any)/(:any).html'] = 'sites/actionLevelTwo/$1/$2';
$route['(:any)/(:any).html/(:num)'] = 'sites/actionLevelTwo/$1/$2/$3';
$route['(:any).html'] = 'sites/actionLevelOne/$1';
$route['(:any).html/(:num)'] = 'sites/actionLevelOne/$1/$2';

// $route['tin-tuc.html/(:num)'] = 'newsSite/index/$1';
// $route['(:any)n.html'] = 'newsSite/index/$1';
// $route['(:any)n.html/(:num)'] = 'newsSite/index/$1/$2';
// $route['(:any)nd.html'] = 'newsSite/detail/$1';