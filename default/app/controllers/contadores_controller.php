<?php

class ContadoresController extends RestController{

    public function getAll()
    {
        $this->data = (new Contadores())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Contadores())->paginate("page: $page", 'order: id desc');
    }
