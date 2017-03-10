<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/sites/grav-admin/user/localhost/config/plugins/backup-manager.yaml',
    'modified' => 1488564015,
    'data' => [
        'enabled' => true,
        'backup' => [
            'testmode' => [
                'enabled' => true,
                'compressionratio' => 1.2
            ],
            'phptimeout' => 600,
            'storage' => [
                'maxspace' => 10,
                'keepdays' => 10,
                'showbackups' => 50
            ],
            'log' => true,
            'ignore' => [
                'foldercase' => true,
                'toplevelintersect' => false,
                'foldersintersect' => false,
                'forceaddasempty' => false
            ]
        ]
    ]
];
