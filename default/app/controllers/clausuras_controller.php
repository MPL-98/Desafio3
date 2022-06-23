<?php

class ClausurasController extends RestController{
    public function getAll()
    {
        $this->data = (new Clausuras())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Clausuras())->paginate("page: $page", 'order: id desc');
    }
