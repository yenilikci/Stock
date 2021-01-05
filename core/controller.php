<?php

class controller
{
    //2 parametre, view classına aktarmalı
    public function render($file,$param = []){
        return view::render($file,$param);
    }
}