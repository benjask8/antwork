<?php

use benjamin\antwork\libs\Controlador;


class Index_Controller extends Controlador
{
  // index
  public function index()
  {
    $this->cargarVista("index/index");
  }


  // preguntas frecuentes
  public function frequent_questions()
  {
    $this->cargarVista("index/frequent_questions");
  }
 

}