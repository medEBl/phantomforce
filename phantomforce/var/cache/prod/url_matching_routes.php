<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_back_dashboard', '_controller' => 'App\\Controller\\Back\\DashboardController::index'], null, null, null, true, false, null]],
        '/admin/matchy' => [[['_route' => 'app_back_matchy_index', '_controller' => 'App\\Controller\\Back\\MatchyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/matchy/new' => [[['_route' => 'app_back_matchy_new', '_controller' => 'App\\Controller\\Back\\MatchyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/team' => [[['_route' => 'app_back_team_index', '_controller' => 'App\\Controller\\Back\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/team/new' => [[['_route' => 'app_back_team_new', '_controller' => 'App\\Controller\\Back\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/matchy' => [[['_route' => 'app_matchy_index', '_controller' => 'App\\Controller\\MatchyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/matchy/new' => [[['_route' => 'app_matchy_new', '_controller' => 'App\\Controller\\MatchyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/team' => [[['_route' => 'app_team_index', '_controller' => 'App\\Controller\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/team/new' => [[['_route' => 'app_team_new', '_controller' => 'App\\Controller\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|matchy/([^/]++)(?'
                        .'|(*:35)'
                        .'|/edit(*:47)'
                        .'|(*:54)'
                    .')'
                    .'|team/([^/]++)(?'
                        .'|(*:78)'
                        .'|/edit(*:90)'
                        .'|(*:97)'
                    .')'
                .')'
                .'|/matchy/([^/]++)(?'
                    .'|(*:125)'
                    .'|/edit(*:138)'
                    .'|(*:146)'
                .')'
                .'|/team/([^/]++)(?'
                    .'|(*:172)'
                    .'|/edit(*:185)'
                    .'|(*:193)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_back_matchy_show', '_controller' => 'App\\Controller\\Back\\MatchyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'app_back_matchy_edit', '_controller' => 'App\\Controller\\Back\\MatchyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        54 => [[['_route' => 'app_back_matchy_delete', '_controller' => 'App\\Controller\\Back\\MatchyController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        78 => [[['_route' => 'app_back_team_show', '_controller' => 'App\\Controller\\Back\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        90 => [[['_route' => 'app_back_team_edit', '_controller' => 'App\\Controller\\Back\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        97 => [[['_route' => 'app_back_team_delete', '_controller' => 'App\\Controller\\Back\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        125 => [[['_route' => 'app_matchy_show', '_controller' => 'App\\Controller\\MatchyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        138 => [[['_route' => 'app_matchy_edit', '_controller' => 'App\\Controller\\MatchyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        146 => [[['_route' => 'app_matchy_delete', '_controller' => 'App\\Controller\\MatchyController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        172 => [[['_route' => 'app_team_show', '_controller' => 'App\\Controller\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        185 => [[['_route' => 'app_team_edit', '_controller' => 'App\\Controller\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        193 => [
            [['_route' => 'app_team_delete', '_controller' => 'App\\Controller\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
