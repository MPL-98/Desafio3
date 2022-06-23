<?php

class HorariosController extends RestController{
    public function getAll()
    {
        $this->data = (new Horarios())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Horarios())->paginate("page: $page", 'order: id desc');
    }