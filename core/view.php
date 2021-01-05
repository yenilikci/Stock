<?php

class View
{
    //iki değer alır , dosya adresi ~ parametreler
    static function render($file,$params=[])
    {
        if (file_exists(VIEWS_PATH."/".$file.".php"))
        {
            extract($params); //gelen değerlerin keyleri değişken olarak oluşturur
            require_once VIEWS_PATH."/".$file.".php";
        }
        else
        {
            exit($file."Görüntü dosyası bulunamadı");
        }
    }
}