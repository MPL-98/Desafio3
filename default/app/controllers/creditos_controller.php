<?php

class CreditosController extends RestController{

    public function getAll()
    {
        $this->data = (new Creditos())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Creditos())->paginate("page: $page", 'order: id desc');
    }