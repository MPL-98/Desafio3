<?php

class AccesosController extends RestController{
    
    public function getAll()
    {
        $this->data = (new Accesos())->find();
    }
    
    public function get_paginar($page=1)
    {
        $this->data = (new Accesos())->paginate("page: $page", 'order: id desc');
    }