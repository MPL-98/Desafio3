<?php

class ElementosController extends RestController{
    public function getAll()
    {
        $this->data = (new Elementos())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Elementos())->paginate("page: $page", 'order: id desc');
    }
