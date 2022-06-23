<?php

class DescuentosController extends RestController{

    public function getAll()
    {
        $this->data = (new Descuentos())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Descuentos())->paginate("page: $page", 'order: id desc');
    }