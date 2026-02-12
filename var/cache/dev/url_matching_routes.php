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
        '/admin' => [
            [['_route' => 'app_back_dashboard', '_controller' => 'App\\Controller\\Back\\DashboardController::index'], null, null, null, true, false, null],
            [['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, ['GET' => 0], null, false, false, null],
        ],
        '/admin/matchy' => [[['_route' => 'app_back_matchy_index', '_controller' => 'App\\Controller\\Back\\MatchyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/matchy/new' => [[['_route' => 'app_back_matchy_new', '_controller' => 'App\\Controller\\Back\\MatchyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/payment' => [[['_route' => 'app_back_payment_index', '_controller' => 'App\\Controller\\Back\\PaymentBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/payment/new' => [[['_route' => 'app_back_payment_new', '_controller' => 'App\\Controller\\Back\\PaymentBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/entrainement/plans' => [[['_route' => 'app_back_training_plan_manage', '_controller' => 'App\\Controller\\Back\\PlanEntrainementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/back/entrainement/nouveau' => [[['_route' => 'app_back_training_plan_new', '_controller' => 'App\\Controller\\Back\\PlanEntrainementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/session-coaching/sessions' => [[['_route' => 'app_back_coaching_session_manage', '_controller' => 'App\\Controller\\Back\\SessionCoachingController::index'], null, ['GET' => 0], null, false, false, null]],
        '/back/session-coaching/nouvelle' => [[['_route' => 'app_back_coaching_session_new', '_controller' => 'App\\Controller\\Back\\SessionCoachingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/team' => [[['_route' => 'app_back_team_index', '_controller' => 'App\\Controller\\Back\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/team/new' => [[['_route' => 'app_back_team_new', '_controller' => 'App\\Controller\\Back\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/matchy' => [[['_route' => 'app_matchy_index', '_controller' => 'App\\Controller\\MatchyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/matchy/new' => [[['_route' => 'app_matchy_new', '_controller' => 'App\\Controller\\MatchyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/team' => [[['_route' => 'app_team_index', '_controller' => 'App\\Controller\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/team/new' => [[['_route' => 'app_team_new', '_controller' => 'App\\Controller\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/coaching/session' => [[['_route' => 'app_coaching_session_index', '_controller' => 'App\\Controller\\CoachingSessionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/coaching/session/new' => [[['_route' => 'app_coaching_session_new', '_controller' => 'App\\Controller\\CoachingSessionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/training/plan' => [[['_route' => 'app_training_plan_index', '_controller' => 'App\\Controller\\TrainingPlanController::index'], null, ['GET' => 0], null, false, false, null]],
        '/training/plan/new' => [[['_route' => 'app_training_plan_new', '_controller' => 'App\\Controller\\TrainingPlanController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/agent' => [[['_route' => 'app_agent_index', '_controller' => 'App\\Controller\\AgentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/agent/new' => [[['_route' => 'app_agent_new', '_controller' => 'App\\Controller\\AgentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/agents' => [[['_route' => 'front_agent_index', '_controller' => 'App\\Controller\\Front\\AgentProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/front/agents/new' => [[['_route' => 'front_agent_new', '_controller' => 'App\\Controller\\Front\\AgentProfileController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tournaments' => [[['_route' => 'app_tournaments', '_controller' => 'App\\Controller\\TournamentFrontController::list'], null, ['GET' => 0], null, false, false, null]],
        '/tournament/new' => [[['_route' => 'app_tournament_new', '_controller' => 'App\\Controller\\TournamentFrontController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stats' => [[['_route' => 'app_tournament_stats', '_controller' => 'App\\Controller\\TournamentFrontController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment_index', '_controller' => 'App\\Controller\\PaymentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/payment/new' => [[['_route' => 'app_payment_new', '_controller' => 'App\\Controller\\PaymentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/shop' => [[['_route' => 'app_shop_item_index', '_controller' => 'App\\Controller\\ShopItemController::index'], null, ['GET' => 0], null, false, false, null]],
        '/shop/new' => [[['_route' => 'app_shop_item_new', '_controller' => 'App\\Controller\\ShopItemController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'front_home', '_controller' => 'App\\Controller\\FrontController::home'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\AdminUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/acceuil' => [[['_route' => 'app_acceuil', '_controller' => 'App\\Controller\\AcceuilController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/export/csv' => [[['_route' => 'admin_user_export_csv', '_controller' => 'App\\Controller\\Admin\\AdminUserController::exportCsv'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/export/pdf' => [[['_route' => 'admin_user_export_pdf', '_controller' => 'App\\Controller\\Admin\\AdminUserController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/bulk/actions' => [[['_route' => 'admin_user_bulk_actions', '_controller' => 'App\\Controller\\Admin\\AdminUserController::bulkActions'], null, ['POST' => 0], null, false, false, null]],
        '/questionnaire/agent' => [[['_route' => 'app_questionnaire_agent_index', '_controller' => 'App\\Controller\\QuestionnaireAgentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/questionnaire/agent/new' => [[['_route' => 'app_questionnaire_agent_new', '_controller' => 'App\\Controller\\QuestionnaireAgentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/map' => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\MapController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|matchy/([^/]++)(?'
                            .'|(*:200)'
                            .'|/edit(*:213)'
                            .'|(*:221)'
                        .')'
                        .'|team/([^/]++)(?'
                            .'|(*:246)'
                            .'|/edit(*:259)'
                            .'|(*:267)'
                        .')'
                        .'|users/(?'
                            .'|([^/]++)(?'
                                .'|/edit(*:301)'
                                .'|(*:309)'
                            .')'
                            .'|export(*:324)'
                            .'|([^/]++)/toggle\\-status(*:355)'
                            .'|stats(*:368)'
                        .')'
                    .')'
                    .'|gent/([^/]++)(?'
                        .'|(*:394)'
                        .'|/edit(*:407)'
                        .'|(*:415)'
                    .')'
                .')'
                .'|/back/(?'
                    .'|payment/([^/]++)(?'
                        .'|(*:453)'
                        .'|/edit(*:466)'
                        .'|(*:474)'
                    .')'
                    .'|entrainement/([^/]++)(?'
                        .'|(*:507)'
                        .'|/modifier(*:524)'
                        .'|(*:532)'
                    .')'
                    .'|session\\-coaching/([^/]++)(?'
                        .'|(*:570)'
                        .'|/modifier(*:587)'
                        .'|(*:595)'
                    .')'
                .')'
                .'|/matchy/([^/]++)(?'
                    .'|(*:624)'
                    .'|/edit(*:637)'
                    .'|(*:645)'
                .')'
                .'|/t(?'
                    .'|eam/([^/]++)(?'
                        .'|(*:674)'
                        .'|/edit(*:687)'
                        .'|(*:695)'
                    .')'
                    .'|raining/plan/([^/]++)(?'
                        .'|(*:728)'
                        .'|/edit(*:741)'
                        .'|(*:749)'
                    .')'
                    .'|ournament/(?'
                        .'|(\\d+)/edit(*:781)'
                        .'|(\\d+)/delete(*:801)'
                        .'|(\\d+)/detail(*:821)'
                        .'|(\\d+)/toggle(*:841)'
                        .'|([^/]++)/reward(?'
                            .'|(*:867)'
                            .'|/(?'
                                .'|new(*:882)'
                                .'|([^/]++)(?'
                                    .'|/edit(*:906)'
                                    .'|(*:914)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/coaching/session/([^/]++)(?'
                    .'|(*:956)'
                    .'|/(?'
                        .'|edit(*:972)'
                        .'|meet(*:984)'
                    .')'
                    .'|(*:993)'
                .')'
                .'|/front/agents/([^/]++)(?'
                    .'|(*:1027)'
                    .'|/(?'
                        .'|edit(*:1044)'
                        .'|delete(*:1059)'
                        .'|questionnaire(?'
                            .'|(*:1084)'
                            .'|/edit(*:1098)'
                        .')'
                    .')'
                .')'
                .'|/payment/([^/]++)(?'
                    .'|(*:1130)'
                    .'|/edit(*:1144)'
                    .'|(*:1153)'
                .')'
                .'|/shop/([^/]++)(?'
                    .'|(*:1180)'
                    .'|/edit(*:1194)'
                    .'|(*:1203)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:1230)'
                    .'|/edit(*:1244)'
                    .'|(*:1253)'
                .')'
                .'|/questionnaire/agent/([^/]++)(?'
                    .'|(*:1295)'
                    .'|/edit(*:1309)'
                    .'|(*:1318)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'app_back_matchy_show', '_controller' => 'App\\Controller\\Back\\MatchyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'app_back_matchy_edit', '_controller' => 'App\\Controller\\Back\\MatchyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        221 => [[['_route' => 'app_back_matchy_delete', '_controller' => 'App\\Controller\\Back\\MatchyController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        246 => [[['_route' => 'app_back_team_show', '_controller' => 'App\\Controller\\Back\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        259 => [[['_route' => 'app_back_team_edit', '_controller' => 'App\\Controller\\Back\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        267 => [[['_route' => 'app_back_team_delete', '_controller' => 'App\\Controller\\Back\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        301 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        309 => [
            [['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\AdminUserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        324 => [[['_route' => 'admin_user_export', '_controller' => 'App\\Controller\\Admin\\AdminUserController::export'], [], ['GET' => 0], null, false, false, null]],
        355 => [[['_route' => 'admin_user_toggle_status', '_controller' => 'App\\Controller\\Admin\\AdminUserController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        368 => [[['_route' => 'admin_user_stats', '_controller' => 'App\\Controller\\Admin\\AdminUserController::stats'], [], ['GET' => 0], null, false, false, null]],
        394 => [[['_route' => 'app_agent_show', '_controller' => 'App\\Controller\\AgentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        407 => [[['_route' => 'app_agent_edit', '_controller' => 'App\\Controller\\AgentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        415 => [[['_route' => 'app_agent_delete', '_controller' => 'App\\Controller\\AgentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        453 => [[['_route' => 'app_back_payment_show', '_controller' => 'App\\Controller\\Back\\PaymentBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        466 => [[['_route' => 'app_back_payment_edit', '_controller' => 'App\\Controller\\Back\\PaymentBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        474 => [[['_route' => 'app_back_payment_delete', '_controller' => 'App\\Controller\\Back\\PaymentBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        507 => [[['_route' => 'app_back_training_plan_show', '_controller' => 'App\\Controller\\Back\\PlanEntrainementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        524 => [[['_route' => 'app_back_training_plan_edit', '_controller' => 'App\\Controller\\Back\\PlanEntrainementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        532 => [[['_route' => 'app_back_training_plan_delete', '_controller' => 'App\\Controller\\Back\\PlanEntrainementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        570 => [[['_route' => 'app_back_coaching_session_show', '_controller' => 'App\\Controller\\Back\\SessionCoachingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        587 => [[['_route' => 'app_back_coaching_session_edit', '_controller' => 'App\\Controller\\Back\\SessionCoachingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        595 => [[['_route' => 'app_back_coaching_session_delete', '_controller' => 'App\\Controller\\Back\\SessionCoachingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        624 => [[['_route' => 'app_matchy_show', '_controller' => 'App\\Controller\\MatchyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        637 => [[['_route' => 'app_matchy_edit', '_controller' => 'App\\Controller\\MatchyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        645 => [[['_route' => 'app_matchy_delete', '_controller' => 'App\\Controller\\MatchyController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        674 => [[['_route' => 'app_team_show', '_controller' => 'App\\Controller\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        687 => [[['_route' => 'app_team_edit', '_controller' => 'App\\Controller\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        695 => [[['_route' => 'app_team_delete', '_controller' => 'App\\Controller\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        728 => [[['_route' => 'app_training_plan_show', '_controller' => 'App\\Controller\\TrainingPlanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        741 => [[['_route' => 'app_training_plan_edit', '_controller' => 'App\\Controller\\TrainingPlanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        749 => [[['_route' => 'app_training_plan_delete', '_controller' => 'App\\Controller\\TrainingPlanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        781 => [[['_route' => 'app_tournament_edit', '_controller' => 'App\\Controller\\TournamentFrontController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        801 => [[['_route' => 'app_tournament_delete', '_controller' => 'App\\Controller\\TournamentFrontController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        821 => [[['_route' => 'app_tournament_detail', '_controller' => 'App\\Controller\\TournamentFrontController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        841 => [[['_route' => 'app_tournament_toggle', '_controller' => 'App\\Controller\\TournamentFrontController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        867 => [[['_route' => 'app_admin_reward_index', '_controller' => 'App\\Controller\\Admin\\TournamentRewardController::index'], ['tournamentId'], ['GET' => 0], null, true, false, null]],
        882 => [[['_route' => 'app_admin_reward_new', '_controller' => 'App\\Controller\\Admin\\TournamentRewardController::new'], ['tournamentId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        906 => [[['_route' => 'app_admin_reward_edit', '_controller' => 'App\\Controller\\Admin\\TournamentRewardController::edit'], ['tournamentId', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        914 => [[['_route' => 'app_admin_reward_delete', '_controller' => 'App\\Controller\\Admin\\TournamentRewardController::delete'], ['tournamentId', 'id'], ['POST' => 0], null, false, true, null]],
        956 => [[['_route' => 'app_coaching_session_show', '_controller' => 'App\\Controller\\CoachingSessionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        972 => [[['_route' => 'app_coaching_session_edit', '_controller' => 'App\\Controller\\CoachingSessionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        984 => [[['_route' => 'app_coaching_session_meet', '_controller' => 'App\\Controller\\CoachingSessionController::meet'], ['id'], ['GET' => 0], null, false, false, null]],
        993 => [[['_route' => 'app_coaching_session_delete', '_controller' => 'App\\Controller\\CoachingSessionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1027 => [[['_route' => 'front_agent_show', '_controller' => 'App\\Controller\\Front\\AgentProfileController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1044 => [[['_route' => 'front_agent_edit', '_controller' => 'App\\Controller\\Front\\AgentProfileController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1059 => [[['_route' => 'front_agent_delete', '_controller' => 'App\\Controller\\Front\\AgentProfileController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1084 => [[['_route' => 'front_agent_questionnaire_show', '_controller' => 'App\\Controller\\Front\\ReponseQuestionnaireController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1098 => [[['_route' => 'front_agent_questionnaire_edit', '_controller' => 'App\\Controller\\Front\\ReponseQuestionnaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1130 => [[['_route' => 'app_payment_show', '_controller' => 'App\\Controller\\PaymentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1144 => [[['_route' => 'app_payment_edit', '_controller' => 'App\\Controller\\PaymentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1153 => [[['_route' => 'app_payment_delete', '_controller' => 'App\\Controller\\PaymentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1180 => [[['_route' => 'app_shop_item_show', '_controller' => 'App\\Controller\\ShopItemController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1194 => [[['_route' => 'app_shop_item_edit', '_controller' => 'App\\Controller\\ShopItemController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1203 => [[['_route' => 'app_shop_item_delete', '_controller' => 'App\\Controller\\ShopItemController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1230 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1244 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1253 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1295 => [[['_route' => 'app_questionnaire_agent_show', '_controller' => 'App\\Controller\\QuestionnaireAgentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1309 => [[['_route' => 'app_questionnaire_agent_edit', '_controller' => 'App\\Controller\\QuestionnaireAgentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1318 => [
            [['_route' => 'app_questionnaire_agent_delete', '_controller' => 'App\\Controller\\QuestionnaireAgentController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
