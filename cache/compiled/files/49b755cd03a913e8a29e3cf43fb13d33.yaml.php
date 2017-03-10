<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/sites/grav-admin/user/localhost/config/plugins/simplesearch.yaml',
    'modified' => 1488223922,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'display_button' => true,
        'min_query_length' => 3,
        'route' => '/search',
        'template' => 'simplesearch_results',
        'filters' => [
            'category' => [
                0 => 'docs'
            ]
        ],
        'filter_combinator' => 'and',
        'ignore_accented_characters' => true,
        'order' => [
            'by' => 'date',
            'dir' => 'asc'
        ]
    ]
];
