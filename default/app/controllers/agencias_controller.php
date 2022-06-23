<?php

class AgenciasController extends RestController{
     
    public function getAll()
    {
        $this->data = (new Agencias())->find();
    }
  
    public function get_paginar($page=1)
    {
        $this->data = (new Agencias())->paginate("page: $page", 'order: id desc');
    }
