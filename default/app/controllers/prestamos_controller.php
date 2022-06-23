<?php

class PrestamosController extends RestController{
    public function getAll()
    {
        $this->data = (new Prestamos())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Prestamos())->paginate("page: $page", 'order: id desc');
    }