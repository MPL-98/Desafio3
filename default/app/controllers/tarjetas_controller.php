<?php

class TarjetasController extends RestController{
    public function getAll()
    {
        $this->data = (new Tarjetas())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Tarjetas())->paginate("page: $page", 'order: id desc');
    }
