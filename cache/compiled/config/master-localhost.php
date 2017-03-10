<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1488577002,
    'checksum' => 'dc809a90df19654487110b22281c54fb',
    'files' => [
        'user/localhost/config' => [
            'plugins/admin' => [
                'file' => 'user/localhost/config/plugins/admin.yaml',
                'modified' => 1487166885
            ],
            'plugins/backup-manager' => [
                'file' => 'user/localhost/config/plugins/backup-manager.yaml',
                'modified' => 1488564015
            ],
            'plugins/mediaembed' => [
                'file' => 'user/localhost/config/plugins/mediaembed.yaml',
                'modified' => 1488571159
            ],
            'plugins/simplesearch' => [
                'file' => 'user/localhost/config/plugins/simplesearch.yaml',
                'modified' => 1488223922
            ],
            'security' => [
                'file' => 'user/localhost/config/security.yaml',
                'modified' => 1485781860
            ],
            'system' => [
                'file' => 'user/localhost/config/system.yaml',
                'modified' => 1488224132
            ],
            'themes/learn2' => [
                'file' => 'user/localhost/config/themes/learn2.yaml',
                'modified' => 1486568895
            ]
        ],
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1485776682
            ],
            'plugins/anchors' => [
                'file' => 'user/config/plugins/anchors.yaml',
                'modified' => 1484749008
            ],
            'plugins/highlight' => [
                'file' => 'user/config/plugins/highlight.yaml',
                'modified' => 1484749008
            ],
            'plugins/simplesearch' => [
                'file' => 'user/config/plugins/simplesearch.yaml',
                'modified' => 1484749008
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1485776670
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1486568220
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1485776682
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1488576949
            ],
            'themes/learn2' => [
                'file' => 'user/config/themes/learn2.yaml',
                'modified' => 1485778779
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1487963181
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1487963181
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1487963181
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1487963181
            ]
        ],
        'user/plugins' => [
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1488223297
            ],
            'plugins/anchors' => [
                'file' => 'user/plugins/anchors/anchors.yaml',
                'modified' => 1484749010
            ],
            'plugins/backup-manager' => [
                'file' => 'user/plugins/backup-manager/backup-manager.yaml',
                'modified' => 1487252760
            ],
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/breadcrumbs.yaml',
                'modified' => 1484749012
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1484674094
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1484749012
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1488223320
            ],
            'plugins/highlight' => [
                'file' => 'user/plugins/highlight/highlight.yaml',
                'modified' => 1484749014
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1485780476
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1484674094
            ],
            'plugins/mediaembed' => [
                'file' => 'user/plugins/mediaembed/mediaembed.yaml',
                'modified' => 1487075053
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1488223326
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1487166907
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => 'Maestrus - Documentação',
                'body_classes' => '',
                'sidebar' => [
                    'activate' => 'tab',
                    'hover_delay' => 100,
                    'size' => 'auto'
                ],
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'widgets' => [
                    'dashboard-maintenance' => true,
                    'dashboard-statistics' => true,
                    'dashboard-notifications' => true,
                    'dashboard-feed' => true,
                    'dashboard-pages' => true
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'show_github_msg' => true,
                'google_fonts' => true,
                'enable_auto_updates_check' => true,
                'notifications' => [
                    'feed' => true,
                    'dashboard' => true,
                    'plugins' => true,
                    'themes' => true
                ],
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => '30',
                        'monthly' => '12',
                        'visitors' => '20'
                    ]
                ]
            ],
            'anchors' => [
                'enabled' => true,
                'active' => true,
                'selectors' => '#body h2, #body h3, #body h4, #body h5',
                'placement' => 'right',
                'visible' => 'hover',
                'icon' => NULL,
                'class' => NULL
            ],
            'backup-manager' => [
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
            ],
            'breadcrumbs' => [
                'enabled' => true,
                'show_all' => true,
                'built_in_css' => true,
                'include_home' => true,
                'icon_home' => '',
                'icon_divider_classes' => 'fa fa-angle-right',
                'link_trailing' => false
            ],
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'filesize' => 5,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'highlight' => [
                'enabled' => true,
                'theme' => 'learn'
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => NULL,
                'route_register' => false,
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'redirect_after_login' => NULL,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'user_registration' => [
                    'enabled' => true,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => true,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ],
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ]
            ],
            'markdown-notices' => [
                'enabled' => true,
                'built_in_css' => true,
                'level_classes' => [
                    0 => 'yellow',
                    1 => 'red',
                    2 => 'blue',
                    3 => 'green'
                ]
            ],
            'mediaembed' => [
                'enabled' => true,
                'link' => false,
                'built_in_css' => true,
                'built_in_js' => true,
                'media' => [
                    'width' => 500,
                    'height' => 390,
                    'adjust' => true,
                    'preview' => true,
                    'responsive' => true,
                    'protocol' => 'http://'
                ],
                'services' => [
                    'SoundCloud' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'example' => 'https://soundcloud.com/semiseria/verruckert-ausschnitt',
                        'url' => 'w.soundcloud.com/player/?url=http://api.soundcloud.com/tracks/{:id}',
                        'canonical' => 'http://soundcloud.com/{:id}',
                        'endpoint' => 'http://soundcloud.com/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'soundcloud.com/*',
                            1 => 'soundcloud.com/*/*',
                            2 => 'soundcloud.com/*/sets/*',
                            3 => 'soundcloud.com/groups/*',
                            4 => 'snd.sc/*'
                        ],
                        'params' => [
                            'auto_play' => false,
                            'buying' => true,
                            'download' => true,
                            'hide_related' => false,
                            'liking' => true,
                            'sharing' => true,
                            'show_artwork' => true,
                            'show_comments' => true,
                            'show_playcount' => true,
                            'show_user' => true,
                            'visual' => false
                        ]
                    ],
                    'Spotify' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://open.spotify.com/track/{:id}',
                        'endpoint' => 'https://embed.spotify.com/oembed/?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'open.spotify.com/track/*',
                            1 => 'spoti.fi/*'
                        ]
                    ],
                    'Flickr' => [
                        'enabled' => true,
                        'type' => 'photo',
                        'canonical' => 'http://www.flickr.com/photos/{:id}',
                        'endpoint' => 'http://flickr.com/services/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'flickr.com/photos/*',
                            1 => 'flic.kr/*'
                        ]
                    ],
                    'Imgur' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://imgur.com/gallery/{:id}',
                        'endpoint' => 'http://api.imgur.com/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'imgur.com/gallery/*',
                            1 => 'imgur.com/a/*',
                            2 => 'imgur.com/*'
                        ]
                    ],
                    'Instagram' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://instagram.com/p/{:id}',
                        'endpoint' => 'http://api.instagram.com/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'instagr.am/p/*',
                            1 => 'instagram.com/p/*'
                        ]
                    ],
                    'Dailymotion' => [
                        'enabled' => true,
                        'type' => 'video',
                        'url' => 'www.dailymotion.com/embed/video/{:id}',
                        'canonical' => 'http://dailymotion.com/video/{:id}',
                        'endpoint' => 'http://www.dailymotion.com/services/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'dailymotion.com/video/*',
                            1 => 'dailymotion.com/*/video/*',
                            2 => 'dai\\.ly/*'
                        ],
                        'params' => [
                            'quality' => 1080
                        ]
                    ],
                    'YouTube' => [
                        'enabled' => true,
                        'type' => 'video',
                        'url' => 'www.youtube.com/embed/{:id}',
                        'canonical' => 'http://www.youtube.com/watch?v={:id}',
                        'endpoint' => 'http://www.youtube.com/oembed?url={:canonical}&format=json',
                        'schemes' => [
                            0 => 'youtube.com/watch?*v=*',
                            1 => 'youtube.com/embed/*',
                            2 => 'youtube.com/v/*',
                            3 => 'youtube.com/?*v=*',
                            4 => 'youtu.be/*'
                        ],
                        'params' => [
                            'autoplay' => 0,
                            'modestbranding' => 1,
                            'theme' => 'light'
                        ]
                    ],
                    'Vimeo' => [
                        'enabled' => true,
                        'type' => 'video',
                        'url' => 'player.vimeo.com/video/{:id}',
                        'canonical' => 'https://vimeo.com/{:id}',
                        'endpoint' => 'http://vimeo.com/api/oembed.json?url={:canonical}',
                        'schemes' => [
                            0 => 'vimeo.com/*',
                            1 => 'vimeo.com/channels/*/*',
                            2 => 'vimeo.com/groups/*/videos/*'
                        ],
                        'params' => [
                            'autoplay' => 0
                        ]
                    ],
                    'Github' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'https://gist.github.com/{:id}',
                        'endpoint' => 'https://gist.github.com/{:id}.json',
                        'schemes' => [
                            0 => 'gist.github.com/*',
                            1 => 'gist.github.com/*/*',
                            2 => 'gist.github.com/*?*'
                        ]
                    ],
                    'Slides' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'http://slides.com/{:id}',
                        'endpoint' => 'http://slides.com/{:id}',
                        'schemes' => [
                            0 => 'slides.com/*',
                            1 => 'slid.es/*'
                        ],
                        'params' => [
                            'style' => 'light',
                            'width' => 1920,
                            'height' => 1400
                        ]
                    ],
                    'Twitter' => [
                        'enabled' => true,
                        'type' => 'rich',
                        'canonical' => 'https://twitter.com/{:id}',
                        'endpoint' => 'https://api.twitter.com/1/statuses/oembed.json?url={:canonical}',
                        'schemes' => [
                            0 => 'twitter.com/*',
                            1 => 'twitter.com/*/*'
                        ]
                    ],
                    'GitHub' => [
                        'enabled' => true
                    ]
                ]
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'simplesearch' => [
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
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpeg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsm' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xld' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xla' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlc' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlw' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xll' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7zip.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'site' => [
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
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'custom_base_url' => '',
            'languages' => [
                'supported' => [
                    
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/introducao',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'learn2',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '301',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ],
                'markdown_extra' => true
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => '0',
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'stable',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true
            ]
        ],
        'security' => [
            'salt' => 'D4Quv50N16Zd9C'
        ],
        'themes' => [
            'learn2' => [
                'enabled' => true,
                'top_level_version' => true,
                'github' => [
                    'position' => 'off',
                    'tree' => 'https://github.com/getgrav/grav-skeleton-rtfm-site/blob/develop/',
                    'commits' => 'https://github.com/getgrav/grav-skeleton-rtfm-site/commits/develop/'
                ]
            ]
        ]
    ]
];
