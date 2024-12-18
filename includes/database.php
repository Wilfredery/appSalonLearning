<?php

$db = mysqli_connect('localhost', 'root', 'root', 'prueba');

if(!$db) {
    echo "Error.";
    Exit;
}