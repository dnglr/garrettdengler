<?php

return [
    'production' => false,
    'baseUrl' => '',
    'siteName' => 'Garrett Dengler',
    'siteDescription' => 'Garrett Dengler is a Charlotte, NC based Senior Full Stack Web Developer focused on Laravel PHP development.',
    'siteKeywords' => 'web developer, charlotte nc, charlotte web developer, laravel, php',
    'siteAuthor' => 'Garrett Dengler',
    'collections' => [
        'posts' => [
            'author' => 'Garrett Dengler', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ]
    ],
    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        $content = $page->excerpt ?? $page->getContent();
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content),
            '<code>'
        );

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
];
