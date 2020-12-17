<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'admin_users' => [[], ['_controller' => 'App\\Controller\\AdminController::listUsersAdmin'], [], [['text', '/admin/users']], [], []],
    'admin_edit_users' => [['id'], ['_controller' => 'App\\Controller\\AdminController::adminEditUsers'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/edit/user']], [], []],
    'admin_delete_users' => [['id'], ['_controller' => 'App\\Controller\\AdminController::adminDeleteUsers'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/delete/user']], [], []],
    'admin_brasseurs' => [[], ['_controller' => 'App\\Controller\\AdminController::listBrasseursAdmin'], [], [['text', '/admin/brasseurs']], [], []],
    'admin_edit_brasseurs' => [['id'], ['_controller' => 'App\\Controller\\AdminController::adminEditBrasseurs'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/edit/brasseur']], [], []],
    'form' => [[], ['_controller' => 'App\\Controller\\FormController::index'], [], [['text', '/form']], [], []],
    'form_biere' => [[], ['_controller' => 'App\\Controller\\FormController::addBiere'], [], [['text', '/formulaire/biere']], [], []],
    'form_brasserie' => [[], ['_controller' => 'App\\Controller\\FormController::addBrasserie'], [], [['text', '/formulaire/brasserie']], [], []],
    'home_index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'inscription_index' => [[], ['_controller' => 'App\\Controller\\InscriptionController::index'], [], [['text', '/inscription']], [], []],
    'mentions_legales' => [[], ['_controller' => 'App\\Controller\\MentionsLegalesController::index'], [], [['text', '/mentionsLegales']], [], []],
    'orm_index' => [[], ['_controller' => 'App\\Controller\\ORMController::index'], [], [['text', '/orm']], [], []],
    'orm_bieres' => [[], ['_controller' => 'App\\Controller\\ORMController::listBieres'], [], [['text', '/orm/bieres']], [], []],
    'orm_bieres_details' => [['id'], ['_controller' => 'App\\Controller\\ORMController::listBieresDetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/orm/bieres']], [], []],
    'orm_brasseries' => [[], ['_controller' => 'App\\Controller\\ORMController::listBrasseries'], [], [['text', '/orm/brasseries']], [], []],
    'orm_detailBrasserie' => [['id'], ['_controller' => 'App\\Controller\\ORMController::detailBrasseries'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/orm/brasseries/detail']], [], []],
    'orm_list_brasserie_biere' => [['id'], ['_controller' => 'App\\Controller\\ORMController::listBrasserieBieres'], [], [['text', '/biere'], ['variable', '/', '[^/]++', 'id', true], ['text', '/orm/brasseries']], [], []],
    'profil_index' => [['id'], ['_controller' => 'App\\Controller\\ProfilController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profil']], [], []],
    'profil_settings' => [['id'], ['_controller' => 'App\\Controller\\ProfilController::settings'], [], [['text', '/settings'], ['variable', '/', '[^/]++', 'id', true], ['text', '/profil']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_forgotten_password' => [[], ['_controller' => 'App\\Controller\\RegistrationController::oubliPass'], [], [['text', '/oubli-pass']], [], []],
    'app_reset_password' => [['token'], ['_controller' => 'App\\Controller\\RegistrationController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset_pass']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/logout']], [], []],
];
