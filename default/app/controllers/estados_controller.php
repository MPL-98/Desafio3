<?php

class EstadosController extends RestController{
    public function getAll()
    {
        $this->data = (new Estados())->find();
    }

    public function get_paginar($page=1)
    {
        $this->data = (new Estados())->paginate("page: $page", 'order: id desc');
    }