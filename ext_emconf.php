<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Improve processed filenames',
    'description' => 'This package removes the csm prefix from generated fal files.',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'author' => 'Tim Schreiner',
    'author_email' => 'dev@arndtteunissen.de',
    'author_company' => 'arndtteunissen GmbH',
    'version' => '1.0.0',
];
