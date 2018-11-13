<?php

/* CONEXÃO USADA É PDO */
return [
    'path' =>'/',//deixe em branco caso seja a pasta raiz
    'database' => [
        'host' => 'localhost', //servidor BD
        'database_name' => 'integrador', //nome BD
        'user' => 'root', //usuario BD
        'password' =>'', //senha BD
        'options' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ]
    ]
];