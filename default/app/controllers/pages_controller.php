<?php

class PagesController extends AppController
{
    protected function before_filter()
    {
        // Si es AJAX enviar solo el view
        if (Input::isAjax()) {
          View::template(null);
        }
    }

    public function __call($name, $params)
    {
        array_unshift($params, $name);
        View::select(implode('/', $params));
    }
}
