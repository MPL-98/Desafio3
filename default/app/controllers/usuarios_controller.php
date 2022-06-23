<?php

class UsuariosController extends RestController{
    public function getAll()
    {
        $this->data = (new Usuarios())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Usuarios())->paginate("page: $page", 'order: id desc');
    }