<?php

class RutasController extends RestController{
    public function getAll()
    {
        $this->data = (new Rutas())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Rutas())->paginate("page: $page", 'order: id desc');
    }
