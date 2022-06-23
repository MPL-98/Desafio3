<?php

class PaisesController extends RestController{
    public function getAll()
    {
        $this->data = (new  Paises())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Paises())->paginate("page: $page", 'order: id desc');
    }