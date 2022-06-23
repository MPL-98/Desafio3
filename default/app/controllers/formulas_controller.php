<?php

class FormulasController extends RestController{
    public function getAll()
    {
        $this->data = (new Formulas())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Formulas())->paginate("page: $page", 'order: id desc');
    }