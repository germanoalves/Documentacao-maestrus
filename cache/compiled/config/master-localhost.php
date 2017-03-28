<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1490667321,
    'checksum' => '104080ba527d9c56f05b8f5c04c8ab66',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1489674632
            ],
            'plugins/assets' => [
                'file' => 'user/config/plugins/assets.yaml',
                'modified' => 1490287346
            ],
            'plugins/bootstrapper' => [
                'file' => 'user/config/plugins/bootstrapper.yaml',
                'modified' => 1490287586
            ],
            'plugins/custom-css' => [
                'file' => 'user/config/plugins/custom-css.yaml',
                'modified' => 1490635737
            ],
            'plugins/flex-directory' => [
                'file' => 'user/config/plugins/flex-directory.yaml',
                'modified' => 1490287602
            ],
            'plugins/mediaembed' => [
                'file' => 'user/config/plugins/mediaembed.yaml',
                'modified' => 1489697760
            ],
            'plugins/tidyhtml' => [
                'file' => 'user/config/plugins/tidyhtml.yaml',
                'modified' => 1490287933
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1489674630
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1489695907
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1489674632
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1490646445
            ],
            'themes/learn2' => [
                'file' => 'user/config/themes/learn2.yaml',
                'modified' => 1489696857
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
                'modified' => 1490279021
            ],
            'plugins/assets' => [
                'file' => 'user/plugins/assets/assets.yaml',
                'modified' => 1490279858
            ],
            'plugins/count-views' => [
                'file' => 'user/plugins/count-views/count-views.yaml',
                'modified' => 1490275001
            ],
            'plugins/custom-css' => [
                'file' => 'user/plugins/custom-css/custom-css.yaml',
                'modified' => 1490626061
            ],
            'plugins/devtools' => [
                'file' => 'user/plugins/devtools/devtools.yaml',
                'modified' => 1490625849
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1484677694
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1484677694
            ],
            'plugins/flex-directory' => [
                'file' => 'user/plugins/flex-directory/flex-directory.yaml',
                'modified' => 1490279988
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1490279031
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1490279034
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1484677694
            ],
            'plugins/mediaembed' => [
                'file' => 'user/plugins/mediaembed/mediaembed.yaml',
                'modified' => 1489697604
            ],
            'plugins/mobile-detect' => [
                'file' => 'user/plugins/mobile-detect/mobile-detect.yaml',
                'modified' => 1490281281
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1490274993
            ],
            'plugins/readingtime' => [
                'file' => 'user/plugins/readingtime/readingtime.yaml',
                'modified' => 1490275001
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/relatedpages.yaml',
                'modified' => 1490274999
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1490275000
            ],
            'plugins/tidyhtml' => [
                'file' => 'user/plugins/tidyhtml/tidyhtml.yaml',
                'modified' => 1490286340
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
                'logo_text' => '',
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
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'count-views' => [
                'enabled' => true,
                'datafile' => 'count-views.yaml'
            ],
            'custom-css' => [
                'enabled' => true,
                'css_inline' => '#sidebar ul.topics ul {
             padding-bottom: 1rem; }'
            ],
            'devtools' => [
                'enabled' => true
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
            'flex-directory' => [
                'enabled' => false,
                'built_in_css' => true,
                'json_file' => 'user://data/flex-directory/entries.json',
                'blueprint_file' => 'plugin://flex-directory/blueprints/entries.yaml',
                'extra_admin_twig_path' => 'theme://admin/templates',
                'extra_site_twig_path' => NULL
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
                    'width' => 640,
                    'height' => 390,
                    'adjust' => false,
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
            'mobile-detect' => [
                'enabled' => true
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'readingtime' => [
                'enabled' => true,
                'words_per_minute' => 200,
                'format' => '{minutes_short_count} {minutes_text}, {seconds_short_count} {seconds_text}',
                'round' => 'seconds'
            ],
            'relatedpages' => [
                'enabled' => true,
                'limit' => 5,
                'show_score' => true,
                'score_threshold' => 20,
                'filter' => [
                    'items' => [
                        '@page' => '/blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ]
                ],
                'page_in_filter' => true,
                'explicit_pages' => [
                    'process' => true,
                    'score' => 100
                ],
                'taxonomy_match' => [
                    'taxonomy' => 'tag',
                    'taxonomy_taxonomy' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 50,
                            2 => 75,
                            3 => 100
                        ]
                    ],
                    'taxonomy_content' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 20,
                            2 => 30,
                            3 => 45,
                            4 => 60,
                            5 => 70,
                            6 => 80,
                            7 => 90,
                            8 => 100
                        ]
                    ]
                ],
                'content_match' => [
                    'process' => false
                ]
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'display_button' => false,
                'min_query_length' => 3,
                'route' => '/search',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and',
                'ignore_accented_characters' => true,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ],
            'tidyhtml' => [
                'enabled' => false,
                'hide_comments' => true,
                'indent' => true,
                'wrap' => 0,
                'indent_spaces' => 4,
                'blocklevel_tags' => [
                    0 => 'article',
                    1 => 'header',
                    2 => 'aside',
                    3 => 'audio',
                    4 => 'bdi',
                    5 => 'canvas',
                    6 => 'details',
                    7 => 'dialog',
                    8 => 'figcaption',
                    9 => 'figure',
                    10 => 'footer',
                    11 => 'hgroup',
                    12 => 'main',
                    13 => 'menu',
                    14 => 'menuitem',
                    15 => 'nav',
                    16 => 'section',
                    17 => 'source',
                    18 => 'summary',
                    19 => 'template',
                    20 => 'track',
                    21 => 'video'
                ],
                'empty_tags' => [
                    0 => 'command',
                    1 => 'embed',
                    2 => 'keygen',
                    3 => 'source',
                    4 => 'track',
                    5 => 'wbr'
                ],
                'inline_tags' => [
                    0 => 'audio',
                    1 => 'command',
                    2 => 'datalist',
                    3 => 'embed',
                    4 => 'keygen',
                    5 => 'mark',
                    6 => 'menuitem',
                    7 => 'meter',
                    8 => 'output',
                    9 => 'progress',
                    10 => 'source',
                    11 => 'time',
                    12 => 'video',
                    13 => 'wbr',
                    14 => 'data'
                ],
                'ignore_pages' => [
                    0 => 'sitemap'
                ]
            ],
            'bootstrapper' => [
                'enabled' => true,
                'always_load' => true,
                'use_cdn' => true,
                'mode' => 'production',
                'load_core_css' => true,
                'load_theme_css' => true,
                'load_core_js' => true
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
            'default_lang' => 'en',
            'author' => [
                'name' => 'Joe Bloggs',
                'email' => 'joe@test.com'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'Maestrus'
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
                'alias' => '/introducao-2',
                'hide_in_urls' => true
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
                ]
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
                'display' => '1',
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
            'salt' => '6azCRsH8cqV0Sy'
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
