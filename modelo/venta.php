<?php
class venta
{
 private $id;
 private $fecha;
 private $cliente;


 public function getId()
 {
  return $this->id;
 }

 public function setId($id)
 {
  $this->id = $id;
 }

 public function getFecha()
 {
  return $this->fecha;
 }

 public function setFecha($fecha)
 {
  $this->fecha = $fecha;
 }

  public function getCliente()
  {
    return $this->cliente;
  }

  
  public function setCliente($cliente)
  {
    $this->cliente = $cliente;
  }

 
 public function MostrarDatos()
 {
     echo 'fecha de venta : '. $this ->getFecha();
     echo '<br>';
     echo 'codigo del cliente : '. $this ->getCliente()->getCodigo();
 }
}