<?php

$container->loadFromExtension('framework', [
    'annotations' => false,
    'http_method_override' => false,
    'html_sanitizer' => [
        'sanitizers' => [
            'custom_default' => null,
        ],
    ],
]);
