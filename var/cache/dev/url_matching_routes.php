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
        '/buscador_subclase' => [[['_route' => 'app_buscador_subclase', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Subclases'], null, null, null, false, false, null]],
        '/ok_subclases' => [[['_route' => 'app_ok_subclases', '_controller' => 'App\\Controller\\BuscadorController::SubclasesOk'], null, null, null, false, false, null]],
        '/buscador_razas' => [[['_route' => 'app_buscador_razas', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Razas'], null, null, null, false, false, null]],
        '/razas_ok' => [[['_route' => 'app_razas_ok', '_controller' => 'App\\Controller\\BuscadorController::Razas_Ok'], null, null, null, false, false, null]],
        '/buscador_subraza' => [[['_route' => 'app_buscador_subraza', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Subrazas'], null, null, null, false, false, null]],
        '/ok_subrazas' => [[['_route' => 'app_ok_subrazas', '_controller' => 'App\\Controller\\BuscadorController::SubrazasOK'], null, null, null, false, false, null]],
        '/buscador_trasfondo' => [[['_route' => 'app_buscador_trasfondo', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Trasfondos'], null, null, null, false, false, null]],
        '/ok_trasfondos' => [[['_route' => 'app_ok_trasfondos', '_controller' => 'App\\Controller\\BuscadorController::Trasfondos_Ok'], null, null, null, false, false, null]],
        '/buscador_dotes' => [[['_route' => 'app_buscador_dotes', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Dotes'], null, null, null, false, false, null]],
        '/ok_dotes' => [[['_route' => 'app_ok_dotes', '_controller' => 'App\\Controller\\BuscadorController::Dotes_Ok'], null, null, null, false, false, null]],
        '/buscador_hechizos' => [[['_route' => 'app_buscador_hechizos', '_controller' => 'App\\Controller\\BuscadorController::Buscador_Hechizos'], null, null, null, false, false, null]],
        '/ok_hechizos' => [[['_route' => 'app_ok_hechizos', '_controller' => 'App\\Controller\\BuscadorController::Hechizos_Ok'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/public/test_public' => [[['_route' => 'test_public', '_controller' => 'App\\Controller\\SeguridadController::test_public'], null, null, null, false, false, null]],
        '/private/test_private' => [[['_route' => 'test_private', '_controller' => 'App\\Controller\\SeguridadController::test_private'], null, null, null, false, false, null]],
        '/solicitudes' => [[['_route' => 'app_solicitudes', '_controller' => 'App\\Controller\\SolicitudesController::index'], null, null, null, false, false, null]],
        '/revisiones' => [[['_route' => 'app_revisiones', '_controller' => 'App\\Controller\\SolicitudesController::revisiones'], null, null, null, false, false, null]],
        '/revisiones_clase' => [[['_route' => 'app_revisiones_clase', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_clase'], null, null, null, false, false, null]],
        '/solicitud_clase' => [[['_route' => 'app_solicitud_clase', '_controller' => 'App\\Controller\\SolicitudesController::Buscador_Clases'], null, null, null, false, false, null]],
        '/solicitud_clase_habilidades' => [[['_route' => 'app_solicitud_clase_habilidades', '_controller' => 'App\\Controller\\SolicitudesController::habilidades_clase'], null, null, null, false, false, null]],
        '/solicitud_ok' => [[['_route' => 'app_solicitud_ok', '_controller' => 'App\\Controller\\SolicitudesController::gestioneditarok'], null, null, null, false, false, null]],
        '/revisiones_subclase' => [[['_route' => 'app_revisiones_subclase', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_subclase'], null, null, null, false, false, null]],
        '/solicitudes_subclase' => [[['_route' => 'app_solicitudes_subclase', '_controller' => 'App\\Controller\\SolicitudesController::Buscador_Subclases'], null, null, null, false, false, null]],
        '/solicitud_subclase_habilidades' => [[['_route' => 'app_solicitud_subclase_habilidades', '_controller' => 'App\\Controller\\SolicitudesController::habilidades_subclase'], null, null, null, false, false, null]],
        '/solicitud_raza' => [[['_route' => 'app_solicitud_raza', '_controller' => 'App\\Controller\\SolicitudesController::Solicitudes_Razas'], null, null, null, false, false, null]],
        '/solicitud_raza_habilidades' => [[['_route' => 'app_solicitud_raza_habilidades', '_controller' => 'App\\Controller\\SolicitudesController::habilidades_raza'], null, null, null, false, false, null]],
        '/revisiones_razas' => [[['_route' => 'app_revisiones_raza', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_razas'], null, null, null, false, false, null]],
        '/solicitud_subraza' => [[['_route' => 'app_solicitud_subraza', '_controller' => 'App\\Controller\\SolicitudesController::Solicitudes_Subrazas'], null, null, null, false, false, null]],
        '/revisiones_subrazas' => [[['_route' => 'app_revisiones_subraza', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_subrazas'], null, null, null, false, false, null]],
        '/solicitud_subraza_habilidades' => [[['_route' => 'app_solicitud_subraza_habilidades', '_controller' => 'App\\Controller\\SolicitudesController::habilidades_subraza'], null, null, null, false, false, null]],
        '/solicitud_trasfondos' => [[['_route' => 'app_solicitud_trasfondos', '_controller' => 'App\\Controller\\SolicitudesController::Solicitudes_Trasfondos'], null, null, null, false, false, null]],
        '/solicitud_trasfondo_habilidades' => [[['_route' => 'app_solicitud_trasfondo_habilidades', '_controller' => 'App\\Controller\\SolicitudesController::habilidades_trasfondo'], null, null, null, false, false, null]],
        '/revisiones_trasfondos' => [[['_route' => 'app_revisiones_trasfondo', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_trasfondos'], null, null, null, false, false, null]],
        '/solicitud_dote' => [[['_route' => 'app_solicitud_dote', '_controller' => 'App\\Controller\\SolicitudesController::Solicitudes_Dotes'], null, null, null, false, false, null]],
        '/revisiones_dotes' => [[['_route' => 'app_revisiones_dote', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_dotes'], null, null, null, false, false, null]],
        '/solicitud_dote_habilidades' => [[['_route' => 'app_solicitud_dote_habilidades', '_controller' => 'App\\Controller\\SolicitudesController::habilidades_dote'], null, null, null, false, false, null]],
        '/solicitud_hechizo' => [[['_route' => 'app_solicitud_hechizo', '_controller' => 'App\\Controller\\SolicitudesController::Solicitudes_Hechizos'], null, null, null, false, false, null]],
        '/revisiones_hechizos' => [[['_route' => 'app_revisiones_hechizo', '_controller' => 'App\\Controller\\SolicitudesController::revisiones_hechizos'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', 'path' => '/login', 'permanent' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction'], null, null, null, false, false, null]],
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
                .'|/s(?'
                    .'|ub(?'
                        .'|clase/([^/]++)(*:249)'
                        .'|raza/([^/]++)(*:270)'
                    .')'
                    .'|olicitud_(?'
                        .'|clase/([^/]++)(*:305)'
                        .'|sub(?'
                            .'|clase/([^/]++)(*:333)'
                            .'|raza/([^/]++)(*:354)'
                        .')'
                        .'|raza/([^/]++)(*:376)'
                        .'|trasfondo/([^/]++)(*:402)'
                        .'|dote/([^/]++)(*:423)'
                        .'|hechizo/([^/]++)(*:447)'
                    .')'
                .')'
                .'|/raza/([^/]++)(*:471)'
                .'|/trasfondo/([^/]++)(*:498)'
                .'|/dote/([^/]++)(*:520)'
                .'|/hechizo/([^/]++)(*:545)'
                .'|/validar_(?'
                    .'|clase/([^/]++)(*:579)'
                    .'|sub(?'
                        .'|clase/([^/]++)(*:607)'
                        .'|raza/([^/]++)(*:628)'
                    .')'
                    .'|raza/([^/]++)(*:650)'
                    .'|trasfondo/([^/]++)(*:676)'
                    .'|dote/([^/]++)(*:697)'
                    .'|hechizo/([^/]++)(*:721)'
                .')'
                .'|/eliminar_(?'
                    .'|clase/([^/]++)(*:757)'
                    .'|sub(?'
                        .'|clase/([^/]++)(*:785)'
                        .'|raza/([^/]++)(*:806)'
                    .')'
                    .'|raza/([^/]++)(*:828)'
                    .'|trasfondo/([^/]++)(*:854)'
                    .'|dote/([^/]++)(*:875)'
                    .'|hechizos/([^/]++)(*:900)'
                .')'
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
        249 => [[['_route' => 'app_subclase', '_controller' => 'App\\Controller\\BuscadorController::subok'], ['id'], null, null, false, true, null]],
        270 => [[['_route' => 'app_subraza', '_controller' => 'App\\Controller\\BuscadorController::subzara'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'app_comprobar_clase', '_controller' => 'App\\Controller\\SolicitudesController::clasesok'], ['id'], null, null, false, true, null]],
        333 => [[['_route' => 'app_comprobar_subclase', '_controller' => 'App\\Controller\\SolicitudesController::subclaseok'], ['id'], null, null, false, true, null]],
        354 => [[['_route' => 'app_comprobar_subraza', '_controller' => 'App\\Controller\\SolicitudesController::subrazaok'], ['id'], null, null, false, true, null]],
        376 => [[['_route' => 'app_comprobar_raza', '_controller' => 'App\\Controller\\SolicitudesController::razaok'], ['id'], null, null, false, true, null]],
        402 => [[['_route' => 'app_comprobar_trasfondo', '_controller' => 'App\\Controller\\SolicitudesController::trasfondook'], ['id'], null, null, false, true, null]],
        423 => [[['_route' => 'app_comprobar_dote', '_controller' => 'App\\Controller\\SolicitudesController::doteok'], ['id'], null, null, false, true, null]],
        447 => [[['_route' => 'app_comprobar_hechizo', '_controller' => 'App\\Controller\\SolicitudesController::hechizook'], ['id'], null, null, false, true, null]],
        471 => [[['_route' => 'app_raza', '_controller' => 'App\\Controller\\BuscadorController::razasok'], ['id'], null, null, false, true, null]],
        498 => [[['_route' => 'app_trasfondo', '_controller' => 'App\\Controller\\BuscadorController::trasfondook'], ['id'], null, null, false, true, null]],
        520 => [[['_route' => 'app_dote', '_controller' => 'App\\Controller\\BuscadorController::doteok'], ['id'], null, null, false, true, null]],
        545 => [[['_route' => 'app_hechizo', '_controller' => 'App\\Controller\\BuscadorController::hechizook'], ['id'], null, null, false, true, null]],
        579 => [[['_route' => 'app_validar_clase', '_controller' => 'App\\Controller\\SolicitudesController::validarClase'], ['id'], null, null, false, true, null]],
        607 => [[['_route' => 'app_validar_subclase', '_controller' => 'App\\Controller\\SolicitudesController::validarSubclase'], ['id'], null, null, false, true, null]],
        628 => [[['_route' => 'app_validar_subraza', '_controller' => 'App\\Controller\\SolicitudesController::validarSubrazas'], ['id'], null, null, false, true, null]],
        650 => [[['_route' => 'app_validar_raza', '_controller' => 'App\\Controller\\SolicitudesController::validarRazas'], ['id'], null, null, false, true, null]],
        676 => [[['_route' => 'app_validar_trasfondo', '_controller' => 'App\\Controller\\SolicitudesController::validarTrasfondos'], ['id'], null, null, false, true, null]],
        697 => [[['_route' => 'app_validar_dote', '_controller' => 'App\\Controller\\SolicitudesController::validarDotes'], ['id'], null, null, false, true, null]],
        721 => [[['_route' => 'app_validar_hechizo', '_controller' => 'App\\Controller\\SolicitudesController::validarHechizos'], ['id'], null, null, false, true, null]],
        757 => [[['_route' => 'app_eliminar_clase', '_controller' => 'App\\Controller\\SolicitudesController::eliminarClase'], ['id'], null, null, false, true, null]],
        785 => [[['_route' => 'app_eliminar_subclase', '_controller' => 'App\\Controller\\SolicitudesController::eliminarSubclase'], ['id'], null, null, false, true, null]],
        806 => [[['_route' => 'app_eliminar_subraza', '_controller' => 'App\\Controller\\SolicitudesController::eliminarSubraza'], ['id'], null, null, false, true, null]],
        828 => [[['_route' => 'app_eliminar_raza', '_controller' => 'App\\Controller\\SolicitudesController::eliminarRaza'], ['id'], null, null, false, true, null]],
        854 => [[['_route' => 'app_eliminar_trasfondo', '_controller' => 'App\\Controller\\SolicitudesController::eliminarTrasfondo'], ['id'], null, null, false, true, null]],
        875 => [[['_route' => 'app_eliminar_dote', '_controller' => 'App\\Controller\\SolicitudesController::eliminarDote'], ['id'], null, null, false, true, null]],
        900 => [
            [['_route' => 'app_eliminar_hechizo', '_controller' => 'App\\Controller\\SolicitudesController::eliminarHechizo'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
