<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'ux_entity_autocomplete' => [['alias'], ['_controller' => 'ux.autocomplete.entity_autocomplete_controller'], [], [['variable', '/', '[^/]++', 'alias', true], ['text', '/autocomplete']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'category_tree' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category-tree']], [], [], []],
    'app_homepage' => [[], ['_controller' => 'App\\Controller\\MainController::homepage'], [], [['text', '/']], [], [], []],
    'app_planet_index' => [[], ['_controller' => 'App\\Controller\\PlanetController::index'], [], [['text', '/planet/']], [], [], []],
    'app_planet_new' => [[], ['_controller' => 'App\\Controller\\PlanetController::new'], [], [['text', '/planet/new']], [], [], []],
    'app_planet_show' => [['id'], ['_controller' => 'App\\Controller\\PlanetController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planet']], [], [], []],
    'app_planet_edit' => [['id'], ['_controller' => 'App\\Controller\\PlanetController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/planet']], [], [], []],
    'app_planet_delete' => [['id'], ['_controller' => 'App\\Controller\\PlanetController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planet']], [], [], []],
    'app_voyage_index' => [[], ['_controller' => 'App\\Controller\\VoyageController::index'], [], [['text', '/voyage/']], [], [], []],
    'app_voyage_new' => [[], ['_controller' => 'App\\Controller\\VoyageController::new'], [], [['text', '/voyage/new']], [], [], []],
    'app_voyage_show' => [['id'], ['_controller' => 'App\\Controller\\VoyageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/voyage']], [], [], []],
    'app_voyage_edit' => [['id'], ['_controller' => 'App\\Controller\\VoyageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/voyage']], [], [], []],
    'app_voyage_delete' => [['id'], ['_controller' => 'App\\Controller\\VoyageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/voyage']], [], [], []],
    'App\Controller\CategoryController::index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category-tree']], [], [], []],
    'App\Controller\MainController::homepage' => [[], ['_controller' => 'App\\Controller\\MainController::homepage'], [], [['text', '/']], [], [], []],
    'App\Controller\PlanetController::index' => [[], ['_controller' => 'App\\Controller\\PlanetController::index'], [], [['text', '/planet/']], [], [], []],
    'App\Controller\PlanetController::new' => [[], ['_controller' => 'App\\Controller\\PlanetController::new'], [], [['text', '/planet/new']], [], [], []],
    'App\Controller\PlanetController::show' => [['id'], ['_controller' => 'App\\Controller\\PlanetController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planet']], [], [], []],
    'App\Controller\PlanetController::edit' => [['id'], ['_controller' => 'App\\Controller\\PlanetController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/planet']], [], [], []],
    'App\Controller\PlanetController::delete' => [['id'], ['_controller' => 'App\\Controller\\PlanetController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planet']], [], [], []],
    'App\Controller\VoyageController::index' => [[], ['_controller' => 'App\\Controller\\VoyageController::index'], [], [['text', '/voyage/']], [], [], []],
    'App\Controller\VoyageController::new' => [[], ['_controller' => 'App\\Controller\\VoyageController::new'], [], [['text', '/voyage/new']], [], [], []],
    'App\Controller\VoyageController::show' => [['id'], ['_controller' => 'App\\Controller\\VoyageController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/voyage']], [], [], []],
    'App\Controller\VoyageController::edit' => [['id'], ['_controller' => 'App\\Controller\\VoyageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/voyage']], [], [], []],
    'App\Controller\VoyageController::delete' => [['id'], ['_controller' => 'App\\Controller\\VoyageController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/voyage']], [], [], []],
];
