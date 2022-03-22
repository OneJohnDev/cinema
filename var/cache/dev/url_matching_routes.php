<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/cinema' => [[['_route' => 'app_cinema', '_controller' => 'App\\Controller\\CinemaController::index'], null, null, null, false, false, null]],
        '/cinema/realisateurs' => [[['_route' => 'app_cinema_liste_realisateurs', '_controller' => 'App\\Controller\\CinemaController::cinema_list_realisateur'], null, null, null, false, false, null]],
        '/admin/film' => [[['_route' => 'app_film', '_controller' => 'App\\Controller\\FilmController::index'], null, null, null, false, false, null]],
        '/admin/genre' => [[['_route' => 'app_genre', '_controller' => 'App\\Controller\\GenreController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/admin/realisateur' => [[['_route' => 'app_realisateur', '_controller' => 'App\\Controller\\RealisateurController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/cinema/([^/]++)(*:23)'
                .'|/admin/(?'
                    .'|film_(?'
                        .'|update/([^/]++)(*:63)'
                        .'|delete/([^/]++)(*:85)'
                    .')'
                    .'|genre_(?'
                        .'|update/([^/]++)(*:117)'
                        .'|delete/([^/]++)(*:140)'
                    .')'
                    .'|realisateur_(?'
                        .'|update/([^/]++)(*:179)'
                        .'|delete/([^/]++)(*:202)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:240)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'app_cinema_realisateur', '_controller' => 'App\\Controller\\CinemaController::cinema_realisateur'], ['id'], null, null, false, true, null]],
        63 => [[['_route' => 'app_film_update', '_controller' => 'App\\Controller\\FilmController::update'], ['id'], null, null, false, true, null]],
        85 => [[['_route' => 'app_film_delete', '_controller' => 'App\\Controller\\FilmController::delete'], ['id'], null, null, false, true, null]],
        117 => [[['_route' => 'app_genre_update', '_controller' => 'App\\Controller\\GenreController::update'], ['id'], null, null, false, true, null]],
        140 => [[['_route' => 'app_genre_delete', '_controller' => 'App\\Controller\\GenreController::delete'], ['id'], null, null, false, true, null]],
        179 => [[['_route' => 'app_realisateur_update', '_controller' => 'App\\Controller\\RealisateurController::update'], ['id'], null, null, false, true, null]],
        202 => [[['_route' => 'app_realisateur_delete', '_controller' => 'App\\Controller\\RealisateurController::delete'], ['id'], null, null, false, true, null]],
        240 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
