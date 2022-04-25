<?php
    function view($document, $vars = array())
    {
        $path = PATH_VIEW . "/{$document}.php";
        extract($vars, EXTR_PREFIX_SAME, '__var_');
        require($path);
    }

    function asDollars($value) {
        if ($value<0) return "-".asDollars(-$value);
        return number_format($value);
    }
