<?php
/**
 * Front Controller + modeles + datas
 * Date: 19/09/2018
 * Time: 16:01
 */

// create datas
$datas = [
    1=>[
        "title"=>"Bienvenue Chez Twig",
        "desc"=>"Twig is a modern template engine for PHP
Fast: Twig compiles templates down to plain optimized PHP code. The overhead compared to regular PHP code was reduced to the very minimum.
Secure: Twig has a sandbox mode to evaluate untrusted template code. This allows Twig to be used as a template language for applications where users may modify the template design.
Flexible: Twig is powered by a flexible lexer and parser. This allows the developer to define its own custom tags and filters, and create its own DSL."
    ],
    2=>[
        "title"=>"Documentation",
        "desc"=>"Twig Documentation - Read the online documentation to learn more about Twig."
    ],
    3=>[
        "title"=>"Twig for Developers",
        "desc"=>"This chapter describes the API to Twig and not the template language. It will be most useful as reference to those implementing the template interface to the application and not those who are creating Twig templates."
    ]

];

// For loading Twig and other libraries (composer)
require_once './vendor/autoload.php';

// directory that contains .twig's files
$loader = new Twig_Loader_Filesystem('./View');

// create environment twig
$twig = new Twig_Environment($loader, array(
    // link for cache
    //'cache' => '/path/to/compilation_cache',

));

// first render
echo $twig->render("base.html.twig");

//var_dump($datas);