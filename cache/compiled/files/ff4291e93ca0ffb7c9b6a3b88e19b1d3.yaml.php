<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/sites/grav-admin/user/config/site.yaml',
    'modified' => 1486568220,
    'data' => [
        'title' => 'Maestrus - Documentação',
        'default_lang' => 'pt',
        'author' => [
            'name' => 'Leonardo Miranda',
            'email' => 'leomir@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'RTFM Skeleton'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
