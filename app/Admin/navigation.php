<?php

use SleepingOwl\Admin\Navigation\Page;

// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\User::class)->setTitle('test')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Dashboard')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//
//	  $page->addPage(\App\User::class);
// });
//
// // or
//
// AdminSection::addMenuPage(\App\User::class)

return [
    [
        'title' => 'Мета теги',
        'icon'  => ' fa fa-tags',
        'pages' => [
            (new Page(\App\Meta_tags::class))
                ->setIcon('fa fa-tags')
                ->setPriority(0),
        ]
    ],
    [
        'title' => 'Dashboard',
        'icon'  => 'fa fa-dashboard',
        'url'   => route('admin.dashboard'),
    ],

    [
        'title' => 'Information',
        'icon'  => 'fa fa-exclamation-circle',
        'url'   => route('admin.information'),
    ],
    [
        'title' => 'Спеціалісти',
        'icon'  => 'fa fa-user-md',
        'pages' => [
            (new Page(\App\Specialist::class))
                ->setIcon('fa fa-user-md')
                ->setPriority(0),
            (new Page(\App\Speciality::class))
                ->setIcon('fa fa-group')
                ->setPriority(0),
        ]
    ],
    [
        'title' => 'Пользователи',
        'icon'  => ' fa fa-user',
        'pages' => [
            (new Page(\App\Permit::class))
                ->setIcon('fa fa-key')
                ->setPriority(0),
            (new Page(\App\Role::class))
                ->setIcon('fa fa-graduation-cap')
                ->setPriority(0),
            (new Page(\App\User::class))
                ->setIcon('fa fa-user')
                ->setPriority(0),

        ]
    ],
    [
        'title' => 'Стоірнки',
        'icon'  => ' fa fa-file',
        'pages' => [
            (new Page(\App\Article::class))
                ->setIcon('fa fa-file-o')
                ->setPriority(0),
        ]
    ],


    // Examples
    // [
    //    'title' => 'Content',
    //    'pages' => [
    //
    //        \App\User::class,
    //
    //        // or
    //
    //        (new Page(\App\User::class))
    //            ->setPriority(100)
    //            ->setIcon('fa fa-user')
    //            ->setUrl('users')
    //            ->setAccessLogic(function (Page $page) {
    //                return auth()->user()->isSuperAdmin();
    //            }),
    //
    //        // or
    //
    //        new Page([
    //            'title'    => 'News',
    //            'priority' => 200,
    //            'model'    => \App\News::class
    //        ]),
    //
    //        // or
    //        (new Page(/* ... */))->setPages(function (Page $page) {
    //            $page->addPage([
    //                'title'    => 'Blog',
    //                'priority' => 100,
    //                'model'    => \App\Blog::class
	//		      ));
    //
	//		      $page->addPage(\App\Blog::class);
    //	      }),
    //
    //        // or
    //
    //        [
    //            'title'       => 'News',
    //            'priority'    => 300,
    //            'accessLogic' => function ($page) {
    //                return $page->isActive();
    //		      },
    //            'pages'       => [
    //
    //                // ...
    //
    //            ]
    //        ]
    //    ]
    // ]
];