<?php
    function show_image($name)
    {
        header('Content-type: image/jpg');
        $foto = ROOTPATH . 'public/uploads/' . $name;
        $fp = fopen($foto,'r');
        echo fpassthru($fp);
    }
?>