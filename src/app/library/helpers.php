<?php

if (! function_exists('dd')) {
    /**
     * Dump and die
     *
     * @param mixed $var
     *
     * @return void
     */
    function dd(mixed $var) {
        dump($var);

        die();
    }
}

if (! function_exists('dump')) {
    /**
     * Dump
     *
     * @param mixed $var
     *
     * @return void
     */
    function dump(mixed $var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
}
