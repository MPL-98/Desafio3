<?php

class CiudadesController extends RestController{
    public function getAll()
    {
        $this->data = (new Ciudades())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Ciudades())->paginate("page: $page", 'order: id desc');
    }
