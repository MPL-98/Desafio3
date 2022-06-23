<?php

class SociosController extends RestController{
    public function getAll()
    {
        $this->data = (new Socios())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Socios())->paginate("page: $page", 'order: id desc');
    }
