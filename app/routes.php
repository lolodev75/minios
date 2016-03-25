<?php

$routes = [
    'index'       => [
        'url'        => '/index',
        'controller' => 'HomeController',
        'action'     => 'indexAction',
    ],
    'wiki'        => [
        'url'        => '/wiki',
        'controller' => 'HomeController',
        'action'     => 'wikiAction',
    ],
    'articles'         => [
        'url'        => '/articles',
        'controller' => 'HomeController',
        'action'     => 'articlesAction',
    ],
    'contact'         => [
        'url'        => '/contact',
        'controller' => 'HomeController',
        'action'     => 'contactAction',
    ],
    'contactSubmit'         => [
        'url'        => '/contact-submit',
        'controller' => 'HomeController',
        'action'     => 'contactSubmitAction',
    ],
    'delete'      => [
        'url'        => '/delete',
        'controller' => 'HomeController',
        'action'     => 'deleteAction',
    ],
    '404'         => [
        'url'        => '/404',
        'controller' => 'SecurityController',
        'action'     => '404Action',
    ],
];