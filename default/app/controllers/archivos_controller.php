<?php

class ArchivosController extends RestController{
   
    public function getAll()
    {
        $this->data = (new Archivos())->find();
    }

    public function get_paginar($page=1)
    {
        $this->data = (new Archivos())->paginate("page: $page", 'order: id desc');
    }