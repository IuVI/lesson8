<?php
    $str = 'Hello, <b><u>world</b></u>';
    $str = strip_tags($str, '<b>');
    echo $str;