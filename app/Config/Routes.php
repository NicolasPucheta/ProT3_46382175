<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('legal', 'Home::legal');

$routes->get('quienesSomos', 'Home::quienesSomos');

$routes->get('productos', 'Home::Productos');

$routes->get('/login', 'Home::login');

/*rutas para el login*/
$routes->get('/login', 'Home::login');
$routes->post('/enviarlogin', 'Login_controller::auth');
$routes->post('/panel', 'Panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/principal', 'Home::principal');

//RUTAS PARA USUARIOS 
/*rutas del registro de Usuario*/

$routes->get('/registro', 'Home::registro');
$routes->get('registrate', 'Usuario_controller::create');
$routes->post('/enviar-form','Usuario_controller::formValidation');
$routes->post('/actualizarPerfil', 'Usuario_controller::actualizarPerfil');
$routes->get('/usuarioData', 'Usuario_controller::usuarioData');
/*Cambair estado de usuario*/
$routes->get('Usuario_controller/darDeBaja/(:num)', 'Usuario_controller::darDeBaja/$1');
$routes->get('Usuario_controller/reactivar/(:num)', 'Usuario_controller::reactivar/$1');

/*rutas navbar <Administrador></Administrador>*/
$routes->get('crudUsuarios', 'Usuario_Controller::index');