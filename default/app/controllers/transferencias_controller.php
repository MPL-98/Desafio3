<?php

class TransferenciasController extends RestController{
    public function getAll()
    {
        $this->data = (new Transferencias())->find();
    }
    public function get_paginar($page=1)
    {
        $this->data = (new Transferencias())->paginate("page: $page", 'order: id desc');
    }
