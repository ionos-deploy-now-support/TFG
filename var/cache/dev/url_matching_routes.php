<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/buscador' => [[['_route' => 'app_buscador', '_controller' => 'App\\Controller\\BuscadorController::index'], null, null, null, false, false, null]],
        '/buscador_clase' => [[['_route' => 'app_buscador_clase', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Clases'], null, null, null, false, false, null]],
        '/ok' => [[['_route' => 'app_ok', '_controller' => 'App\\Controller\\BuscadorController::gestioneditarok'], null, null, null, false, false, null]],
        '/buscador_razas' => [[['_route' => 'app_buscador_razas', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Razas'], null, null, null, false, false, null]],
        '/razas_ok' => [[['_route' => 'app_razas_ok', '_controller' => 'App\\Controller\\BuscadorController::Razas_Ok'], null, null, null, false, false, null]],
        '/buscador_trasfondo' => [[['_route' => 'app_buscador_trasfondo', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Trasfondos'], null, null, null, false, false, null]],
        '/ok_trasfondos' => [[['_route' => 'app_ok_trasfondos', '_controller' => 'App\\Controller\\BuscadorController::Trasfondos_Ok'], null, null, null, false, false, null]],
        '/buscador_dotes' => [[['_route' => 'app_buscador_dotes', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Dotes'], null, null, null, false, false, null]],
        '/ok_dotes' => [[['_route' => 'app_ok_dotes', '_controller' => 'App\\Controller\\BuscadorController::Dotes_Ok'], null, null, null, false, false, null]],
        '/buscador_hechizos' => [[['_route' => 'app_buscador_hechizos', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Hechizos'], null, null, null, false, false, null]],
        '/ok_hechizos' => [[['_route' => 'app_ok_hechizos', '_controller' => 'App\\Controller\\BuscadorController::Hechizos_Ok'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/public/test_public' => [[['_route' => 'test_public', '_controller' => 'App\\Controller\\SeguridadController::test_public'], null, null, null, false, false, null]],
        '/private/test_private' => [[['_route' => 'test_private', '_controller' => 'App\\Controller\\SeguridadController::test_private'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/clase/([^/]++)(*:217)'
                .'|/raza/([^/]++)(*:239)'
                .'|/trasfondo/([^/]++)(*:266)'
                .'|/dote/([^/]++)(*:288)'
                .'|/hechizo/([^/]++)(*:313)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        217 => [[['_route' => 'app_clase', '_controller' => 'App\\Controller\\BuscadorController::clasesok'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'app_raza', '_controller' => 'App\\Controller\\BuscadorController::razasok'], ['id'], null, null, false, true, null]],
        266 => [[['_route' => 'app_trasfondo', '_controller' => 'App\\Controller\\BuscadorController::trasfondook'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'app_dote', '_controller' => 'App\\Controller\\BuscadorController::doteok'], ['id'], null, null, false, true, null]],
        313 => [
            [['_route' => 'app_hechizo', '_controller' => 'App\\Controller\\BuscadorController::hechizook'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
