<?php

return [

    'menu' => [
        'MAIN NAVIGATION',
        [
            'text' => 'Blog',
            'url'  => 'admin/blog',
        ],
        [
            'text' => 'Pages',
            'url'  => 'admin/pages',
            'icon' => 'fas fa-fw fa-file',
        ],
        [
            'text'   => 'Show my website',
            'url'    => '/',
            'target' => '_blank',
        ],
        [
            'header' => 'ACCOUNT SETTINGS',
        ],
        [
            'text'  => 'Profile',
            'route' => 'admin.profile',
            'icon'  => 'fas fa-fw fa-user',
        ],
        [
            'text'  => 'Change Password',
            'route' => 'admin.password',
            'icon'  => 'fas fa-fw fa-lock',
        ],
    ],
    [
        'text'   => 'Pages',
        'url'    => 'pages',
        'active' => ['pages', 'content', 'content*', 'regex:@^content/[0-9]+$@']
    ],
    [
    [
        'header' => 'BLOG',
        'can'    => 'manage-blog',
    ],
    [
        'text' => 'Add new post',
        'url'  => 'admin/blog/new',
        'can'  => ['add-blog-post', 'other-right'],
    ],
], [
        'header'   => 'account_settings',
        'classes'  => 'text-yellow text-bold text-center',
],
];
