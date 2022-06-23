<?php

class MueblesController extends RestController{
    public function getAll()
    {
        $this->data = (new Muebles())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Muebles())->paginate("page: $page", 'order: id desc');
    }
