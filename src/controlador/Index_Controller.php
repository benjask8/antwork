<?php

use benjamin\antwork\libs\Controlador;


class Index_Controller extends Controlador
{
  public function index()
  {
    $this->cargarVista("index/index");
  }
 
}