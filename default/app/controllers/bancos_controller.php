<?php

class BancosController extends RestController{
    public function getAll()
    {
        $this->data = (new Bancos())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Bancos())->paginate("page: $page", 'order: id desc');
    }
