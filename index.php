<?php
require_once 'modelo/Cliente.php';
require_once 'modelo/venta.php';
require_once 'modelo/datospersona.php';

$c= new Cliente();
$c->setCodigo('321432');

$v= new venta();
$v->setFecha('31/07');
$v->setCliente($c);

$v->MostrarDatos();