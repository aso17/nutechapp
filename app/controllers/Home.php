<?php
class  Home extends controller
{
    public function index()
    {
        $this->views('home/index');
    }

    public function store()
    {
        echo "Store";
    }
}