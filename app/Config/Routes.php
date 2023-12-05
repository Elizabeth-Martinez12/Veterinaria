<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->post('/home', 'Home::index');




$routes->get('/consultas', 'Consultas::index');
$routes->get('/consultas/mostrar', 'Consultas::mostrar');
$routes->get('/consultas/agregar', 'Consultas::agregar');
$routes->get('/consultas/buscar', 'Consultas::buscar');
$routes->get('/consultas/delete/(:num)', 'Consultas::delete/$1');
$routes->get('/consultas/editar/(:num)', 'Consultas::editar/$1');
$routes->post('/consultas/insert', 'Consultas::insert');
$routes->post('/consultas/update', 'Consultas::update');

$routes->get('/cliente', 'Cliente::index');
$routes->get('/cliente/mostrar', 'Cliente::mostrar');
$routes->get('/cliente/agregar', 'Cliente::agregar');
$routes->get('/cliente/buscar', 'Cliente::buscar');
$routes->post('/cliente/insert', 'Cliente::insert');



$routes->get('/medicamentos', 'Medicamentos::index');
$routes->get('/medicamentos/mostrar', 'Medicamentos::mostrar');
$routes->get('/medicamentos/agregar', 'Medicamentos::agregar');
$routes->get('/medicamentos/buscar', 'Medicamentos::buscar');
$routes->get('/medicamentos/delete/(:num)', 'Medicamentos::delete/$1');
$routes->get('/medicamentos/editar/(:num)', 'Medicamentos::editar/$1');
$routes->post('/medicamentos/insert', 'Medicamentos::insert');
$routes->post('/medicamentos/update', 'Medicamentos::update');

$routes->get('/medicamentosUsuario', 'MedicamentosUsuarios::index');
$routes->get('/medicamentosUsuario/mostrar', 'MedicamentosUsuarios::mostrar');
$routes->get('/medicamentosUsuario/buscar', 'MedicamentosUsuarios::buscar');



$routes->get('/veterinarios', 'Veterinarios::index');
$routes->get('/veterinarios/mostrar', 'Veterinarios::mostrar');
$routes->get('/veterinarios/agregar', 'Veterinarios::agregar');
$routes->get('/veterinarios/buscar', 'Veterinarios::buscar');
$routes->get('/veterinarios/delete/(:num)', 'Veterinarios::delete/$1');
$routes->get('/veterinarios/editar/(:num)', 'Veterinarios::editar/$1');
$routes->post('/veterinarios/insert', 'Veterinarios::insert');
$routes->post('/veterinarios/update', 'Veterinarios::update');


$routes->get('/accesorios', 'Accesorios::index');
$routes->get('/accesorios/mostrar', 'Accesorios::mostrar');
$routes->get('/accesorios/agregar', 'Accesorios::agregar');
$routes->get('/accesorios/buscar', 'Accesorios::buscar');
$routes->get('/accesorios/delete/(:num)', 'Accesorios::delete/$1');
$routes->get('/accesorios/editar/(:num)', 'Accesorios::editar/$1');
$routes->post('/accesorios/insert', 'Accesorios::insert');
$routes->post('/accesorios/update', 'Accesorios::update');

$routes->get('/accesoriosUsuarios', 'AccesoriosUsuarios::index');
$routes->get('/accesoriosUsuario/mostrar', 'AccesoriosUsuarios::mostrar');
$routes->get('/accesoriosUsuario/buscar', 'AccesoriosUsuarios::buscar');



$routes->get('/ventas', 'Ventas::index');
$routes->get('/ventas/mostrar', 'Ventas::mostrar');
$routes->get('/ventas/agregar', 'Ventas::agregar');
$routes->get('/ventas/buscar', 'Ventas::buscar');
$routes->get('/ventas/delete/(:num)', 'Ventas::delete/$1');
$routes->get('/ventas/editar/(:num)', 'Ventas::editar/$1');
$routes->post('/ventas/insert', 'Ventas::insert');
$routes->post('/ventas/update', 'Ventas::update');

$routes->get('/ventasUsuario', 'VentasUsuarios::index');
$routes->get('/ventasUsuario/mostrar', 'VentasUsuarios::mostrar');
$routes->get('/ventasUsuario/agregar', 'VentasUsuarios::agregar');
$routes->get('/ventasUsuario/buscar', 'VentasUsuarios::buscar');
$routes->post('/ventasUsuario/insert', 'VentasUsuarios::insert');



$routes->get('/historialMedico', 'HistorialMedico::index');
$routes->get('/historialMedico/mostrar/(:num)', 'HistorialMedico::mostrar/$1');
$routes->get('/historialMedico/mostrar1', 'HistorialMedico::mostrar1');
$routes->get('/historialMedico/agregar', 'HistorialMedico::agregar');
$routes->get('/historialMedico/buscar', 'HistorialMedico::buscar');
$routes->get('/historialMedico/delete/(:num)', 'HistorialMedico::delete/$1');
$routes->get('/historialMedico/editar/(:num)', 'HistorialMedico::editar/$1');
$routes->post('/historialMedico/insert', 'HistorialMedico::insert');
$routes->post('/historialMedico/update', 'HistorialMedico::update');

$routes->get('/historialMedicoUsuario', 'HistorialMedicoUsuario::index');
$routes->get('/historialMedicoUsuario/mostrar/(:num)', 'HistorialMedicoUsuario::mostrar/$1');
$routes->get('/historialMedicoUsuario/mostrar1', 'HistorialMedicoUsuario::mostrar1');
$routes->get('/historialMedicoUsuario/agregar', 'HistorialMedicoUsuario::agregar');
$routes->get('/historialMedicoUsuario/buscar', 'HistorialMedicoUsuario::buscar');
$routes->post('/historialMedicoUsuario/insert', 'HistorialMedicoUsuario::insert');