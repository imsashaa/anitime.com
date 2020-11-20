<?php

    function redirect($url)
    {
        header('Location:'.BASEURL.'/'.$url);
    }