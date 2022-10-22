<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/adim/book' => [[['_route' => 'app_adim_book_index', '_controller' => 'App\\Controller\\AdimBookController::index'], null, ['GET' => 0], null, true, false, null]],
        '/adim/book/new' => [[['_route' => 'app_adim_book_new', '_controller' => 'App\\Controller\\AdimBookController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/author' => [[['_route' => 'app_admin_author_index', '_controller' => 'App\\Controller\\AdminAuthorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/author/new' => [[['_route' => 'app_admin_author_new', '_controller' => 'App\\Controller\\AdminAuthorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/book-category' => [[['_route' => 'app_admin_book_category_index', '_controller' => 'App\\Controller\\AdminBookCategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/book-category/new' => [[['_route' => 'app_admin_book_category_new', '_controller' => 'App\\Controller\\AdminBookCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/book-page' => [[['_route' => 'app_admin_book_page_index', '_controller' => 'App\\Controller\\AdminBookPageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/book-page/new' => [[['_route' => 'app_admin_book_page_new', '_controller' => 'App\\Controller\\AdminBookPageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/carousel' => [[['_route' => 'app_admin_carousel_index', '_controller' => 'App\\Controller\\AdminCarouselController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/carousel/new' => [[['_route' => 'app_admin_carousel_new', '_controller' => 'App\\Controller\\AdminCarouselController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/home' => [[['_route' => 'app_admin_home_index', '_controller' => 'App\\Controller\\AdminHomeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/home/new' => [[['_route' => 'app_admin_home_new', '_controller' => 'App\\Controller\\AdminHomeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontHomeController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_front_home', '_controller' => 'App\\Controller\\FrontHomeController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/ad(?'
                    .'|im/book/([^/]++)(?'
                        .'|(*:32)'
                        .'|/edit(*:44)'
                        .'|(*:51)'
                    .')'
                    .'|min/(?'
                        .'|author/([^/]++)(?'
                            .'|(*:84)'
                            .'|/edit(*:96)'
                            .'|(*:103)'
                        .')'
                        .'|book\\-(?'
                            .'|category/([^/]++)(?'
                                .'|(*:141)'
                                .'|/edit(*:154)'
                                .'|(*:162)'
                            .')'
                            .'|page/([^/]++)(?'
                                .'|(*:187)'
                                .'|/edit(*:200)'
                                .'|(*:208)'
                            .')'
                        .')'
                        .'|carousel/([^/]++)(?'
                            .'|(*:238)'
                            .'|/edit(*:251)'
                            .'|(*:259)'
                        .')'
                        .'|home/([^/]++)(?'
                            .'|(*:284)'
                            .'|/edit(*:297)'
                            .'|(*:305)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:347)'
                    .'|wdt/([^/]++)(*:367)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:413)'
                            .'|router(*:427)'
                            .'|exception(?'
                                .'|(*:447)'
                                .'|\\.css(*:460)'
                            .')'
                        .')'
                        .'|(*:470)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_adim_book_show', '_controller' => 'App\\Controller\\AdimBookController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_adim_book_edit', '_controller' => 'App\\Controller\\AdimBookController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_adim_book_delete', '_controller' => 'App\\Controller\\AdimBookController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        84 => [[['_route' => 'app_admin_author_show', '_controller' => 'App\\Controller\\AdminAuthorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        96 => [[['_route' => 'app_admin_author_edit', '_controller' => 'App\\Controller\\AdminAuthorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        103 => [[['_route' => 'app_admin_author_delete', '_controller' => 'App\\Controller\\AdminAuthorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        141 => [[['_route' => 'app_admin_book_category_show', '_controller' => 'App\\Controller\\AdminBookCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        154 => [[['_route' => 'app_admin_book_category_edit', '_controller' => 'App\\Controller\\AdminBookCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        162 => [[['_route' => 'app_admin_book_category_delete', '_controller' => 'App\\Controller\\AdminBookCategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        187 => [[['_route' => 'app_admin_book_page_show', '_controller' => 'App\\Controller\\AdminBookPageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'app_admin_book_page_edit', '_controller' => 'App\\Controller\\AdminBookPageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'app_admin_book_page_delete', '_controller' => 'App\\Controller\\AdminBookPageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_admin_carousel_show', '_controller' => 'App\\Controller\\AdminCarouselController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        251 => [[['_route' => 'app_admin_carousel_edit', '_controller' => 'App\\Controller\\AdminCarouselController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        259 => [[['_route' => 'app_admin_carousel_delete', '_controller' => 'App\\Controller\\AdminCarouselController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        284 => [[['_route' => 'app_admin_home_show', '_controller' => 'App\\Controller\\AdminHomeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        297 => [[['_route' => 'app_admin_home_edit', '_controller' => 'App\\Controller\\AdminHomeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        305 => [[['_route' => 'app_admin_home_delete', '_controller' => 'App\\Controller\\AdminHomeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        347 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        367 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        413 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        427 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        447 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        460 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        470 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
