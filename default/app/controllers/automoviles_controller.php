<?php

class AutomovilesController extends RestController{
    public function getAll()
    {
        $this->data = (new Automoviles())->find();
    }

    public function get_paginar($page=1)
    {
        $this->data = (new Automoviles())->paginate("page: $page", 'order: id desc');
    }
