<?php

class DependenciasController extends RestController{
    public function getAll()
    {
        $this->data = (new Dependencias())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Dependencias())->paginate("page: $page", 'order: id desc');
    }