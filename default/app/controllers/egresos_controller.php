<?php

class EgresosController extends RestController{

    public function getAll()
    {
        $this->data = (new Egresos())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Egresos())->paginate("page: $page", 'order: id desc');
    }
