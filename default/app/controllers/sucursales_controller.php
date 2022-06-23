<?php

class SucursalesController extends RestController{
    public function getAll()
    {
        $this->data = (new Sucursales())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Sucursales())->paginate("page: $page", 'order: id desc');
    }