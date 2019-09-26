<?php

function loader($class) {
    require __DIR__ . '/App/Classes/' . $class . '.php';
}

spl_autoload_register("loader");
