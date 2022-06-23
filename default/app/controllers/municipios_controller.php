<?php

class MunicipiosController extends RestController
{
    public function getAll()
    {
        $this->data = (new Municipios())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Municipios())->paginate("page: $page", 'order: id desc');
    }