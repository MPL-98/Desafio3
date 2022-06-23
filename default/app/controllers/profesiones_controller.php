<?php

class ProfesionesController extends RestController{
    public function getAll()
    {
        $this->data = (new Profesiones())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Profesiones())->paginate("page: $page", 'order: id desc');
    }