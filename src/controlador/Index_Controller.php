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
 

  // noticias
  public function news()
  {
    $this->cargarVista("index/news");
  }

  public function new()
  {
    $this->cargarVista("index/new");
  }

  //contacto
  
  public function contact()
  {
    $this->cargarVista("index/contact");
  }

  //services
  
  public function services()
  {
    $this->cargarVista("index/services");
  }


  //work with us
  
  public function work_with_us()
  {
    $this->cargarVista("index/work_with_us");
  }


  //abot
  
  public function about()
  {
    $this->cargarVista("index/about");
  }
}