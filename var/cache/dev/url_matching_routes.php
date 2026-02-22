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
        '/esport-analyst/test-api' => [[['_route' => 'app_analyst_test_api', '_controller' => 'App\\Controller\\AiEsportAnalystController::testApi'], null, null, null, false, false, null]],
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
        '/chatbot/ask' => [[['_route' => 'app_chatbot_ask', '_controller' => 'App\\Controller\\ChatbotController::ask'], null, ['POST' => 0], null, false, false, null]],
        '/chatbot/suggestions' => [[['_route' => 'app_chatbot_suggestions', '_controller' => 'App\\Controller\\ChatbotController::suggestions'], null, ['GET' => 0], null, false, false, null]],
        '/games' => [[['_route' => 'app_games_index', '_controller' => 'App\\Controller\\FreeToGameController::index'], null, null, null, true, false, null]],
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
        '/ai' => [[['_route' => 'app_ai', '_controller' => 'App\\Controller\\AiController::index'], null, null, null, false, false, null]],
        '/ai/generate' => [[['_route' => 'app_ai_generate', '_controller' => 'App\\Controller\\AiController::generate'], null, null, null, false, false, null]],
        '/ai/workout-form' => [[['_route' => 'app_ai_workout_form', '_controller' => 'App\\Controller\\AiController::workoutForm'], null, null, null, false, false, null]],
        '/ai/workout-generate' => [[['_route' => 'app_ai_workout_generate', '_controller' => 'App\\Controller\\AiController::workoutGenerate'], null, ['POST' => 0], null, false, false, null]],
        '/api/workout' => [[['_route' => 'api_workout', '_controller' => 'App\\Controller\\AiController::apiWorkout'], null, ['POST' => 0], null, false, false, null]],
        '/ai/analyst' => [[['_route' => 'app_analyst_dashboard', '_controller' => 'App\\Controller\\AiController::analystDashboard'], null, null, null, false, false, null]],
        '/ai/analyst/player/search' => [[['_route' => 'app_analyst_player_search', '_controller' => 'App\\Controller\\AiController::playerSearch'], null, null, null, false, false, null]],
        '/ai/analyst/team/search' => [[['_route' => 'app_analyst_team_search', '_controller' => 'App\\Controller\\AiController::teamSearch'], null, null, null, false, false, null]],
        '/esport-analyst' => [[['_route' => 'app_esport_analyst', '_controller' => 'App\\Controller\\AiEsportAnalystController::index'], null, null, null, false, false, null]],
        '/esport-analyst/predict-match' => [[['_route' => 'app_analyst_predict_match', '_controller' => 'App\\Controller\\AiEsportAnalystController::predictMatch'], null, ['POST' => 0], null, false, false, null]],
        '/esport-analyst/live-analysis' => [[['_route' => 'app_analyst_live', '_controller' => 'App\\Controller\\AiEsportAnalystController::liveAnalysis'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'app_calendar', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, false, false, null]],
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
                    .'|pi/esport/live\\-stats/([^/]++)(*:454)'
                .')'
                .'|/back/(?'
                    .'|payment/([^/]++)(?'
                        .'|(*:491)'
                        .'|/edit(*:504)'
                        .'|(*:512)'
                    .')'
                    .'|entrainement/([^/]++)(?'
                        .'|(*:545)'
                        .'|/modifier(*:562)'
                        .'|(*:570)'
                    .')'
                    .'|session\\-coaching/([^/]++)(?'
                        .'|(*:608)'
                        .'|/modifier(*:625)'
                        .'|(*:633)'
                    .')'
                .')'
                .'|/games/([^/]++)(*:658)'
                .'|/matchy/([^/]++)(?'
                    .'|(*:685)'
                    .'|/edit(*:698)'
                    .'|(*:706)'
                .')'
                .'|/t(?'
                    .'|eam/([^/]++)(?'
                        .'|(*:735)'
                        .'|/edit(*:748)'
                        .'|(*:756)'
                    .')'
                    .'|raining/plan/([^/]++)(?'
                        .'|(*:789)'
                        .'|/edit(*:802)'
                        .'|(*:810)'
                    .')'
                    .'|ournament/(?'
                        .'|(\\d+)/edit(*:842)'
                        .'|(\\d+)/delete(*:862)'
                        .'|(\\d+)/detail(*:882)'
                        .'|(\\d+)/toggle(*:902)'
                        .'|([^/]++)/reward(?'
                            .'|(*:928)'
                            .'|/(?'
                                .'|new(*:943)'
                                .'|([^/]++)(?'
                                    .'|/edit(*:967)'
                                    .'|(*:975)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/coaching/session/([^/]++)(?'
                    .'|(*:1017)'
                    .'|/(?'
                        .'|edit(*:1034)'
                        .'|meet(*:1047)'
                    .')'
                    .'|(*:1057)'
                .')'
                .'|/front/agents/([^/]++)(?'
                    .'|(*:1092)'
                    .'|/(?'
                        .'|edit(*:1109)'
                        .'|delete(*:1124)'
                        .'|questionnaire(?'
                            .'|(*:1149)'
                            .'|/edit(*:1163)'
                        .')'
                    .')'
                .')'
                .'|/payment/([^/]++)(?'
                    .'|(*:1195)'
                    .'|/edit(*:1209)'
                    .'|(*:1218)'
                .')'
                .'|/shop/([^/]++)(?'
                    .'|(*:1245)'
                    .'|/edit(*:1259)'
                    .'|(*:1268)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:1295)'
                    .'|/edit(*:1309)'
                    .'|(*:1318)'
                .')'
                .'|/questionnaire/agent/([^/]++)(?'
                    .'|(*:1360)'
                    .'|/edit(*:1374)'
                    .'|(*:1383)'
                .')'
                .'|/esport\\-analyst/(?'
                    .'|player/([^/]++)(*:1428)'
                    .'|team/([^/]++)(*:1450)'
                    .'|export\\-report/([^/]++)/([^/]++)(*:1491)'
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
        454 => [[['_route' => 'api_live_stats', '_controller' => 'App\\Controller\\AiEsportAnalystController::liveStats'], ['matchId'], null, null, false, true, null]],
        491 => [[['_route' => 'app_back_payment_show', '_controller' => 'App\\Controller\\Back\\PaymentBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        504 => [[['_route' => 'app_back_payment_edit', '_controller' => 'App\\Controller\\Back\\PaymentBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        512 => [[['_route' => 'app_back_payment_delete', '_controller' => 'App\\Controller\\Back\\PaymentBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        545 => [[['_route' => 'app_back_training_plan_show', '_controller' => 'App\\Controller\\Back\\PlanEntrainementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        562 => [[['_route' => 'app_back_training_plan_edit', '_controller' => 'App\\Controller\\Back\\PlanEntrainementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        570 => [[['_route' => 'app_back_training_plan_delete', '_controller' => 'App\\Controller\\Back\\PlanEntrainementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        608 => [[['_route' => 'app_back_coaching_session_show', '_controller' => 'App\\Controller\\Back\\SessionCoachingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        625 => [[['_route' => 'app_back_coaching_session_edit', '_controller' => 'App\\Controller\\Back\\SessionCoachingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        633 => [[['_route' => 'app_back_coaching_session_delete', '_controller' => 'App\\Controller\\Back\\SessionCoachingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        658 => [[['_route' => 'app_games_show', '_controller' => 'App\\Controller\\FreeToGameController::show'], ['id'], null, null, false, true, null]],
        685 => [[['_route' => 'app_matchy_show', '_controller' => 'App\\Controller\\MatchyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        698 => [[['_route' => 'app_matchy_edit', '_controller' => 'App\\Controller\\MatchyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        706 => [[['_route' => 'app_matchy_delete', '_controller' => 'App\\Controller\\MatchyController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        735 => [[['_route' => 'app_team_show', '_controller' => 'App\\Controller\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        748 => [[['_route' => 'app_team_edit', '_controller' => 'App\\Controller\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        756 => [[['_route' => 'app_team_delete', '_controller' => 'App\\Controller\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        789 => [[['_route' => 'app_training_plan_show', '_controller' => 'App\\Controller\\TrainingPlanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        802 => [[['_route' => 'app_training_plan_edit', '_controller' => 'App\\Controller\\TrainingPlanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        810 => [[['_route' => 'app_training_plan_delete', '_controller' => 'App\\Controller\\TrainingPlanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        842 => [[['_route' => 'app_tournament_edit', '_controller' => 'App\\Controller\\TournamentFrontController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        862 => [[['_route' => 'app_tournament_delete', '_controller' => 'App\\Controller\\TournamentFrontController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        882 => [[['_route' => 'app_tournament_detail', '_controller' => 'App\\Controller\\TournamentFrontController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        902 => [[['_route' => 'app_tournament_toggle', '_controller' => 'App\\Controller\\TournamentFrontController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        928 => [[['_route' => 'app_admin_reward_index', '_controller' => 'App\\Controller\\Admin\\TournamentRewardController::index'], ['tournamentId'], ['GET' => 0], null, true, false, null]],
        943 => [[['_route' => 'app_admin_reward_new', '_controller' => 'App\\Controller\\Admin\\TournamentRewardController::new'], ['tournamentId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        967 => [[['_route' => 'app_admin_reward_edit', '_controller' => 'App\\Controller\\Admin\\TournamentRewardController::edit'], ['tournamentId', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        975 => [[['_route' => 'app_admin_reward_delete', '_controller' => 'App\\Controller\\Admin\\TournamentRewardController::delete'], ['tournamentId', 'id'], ['POST' => 0], null, false, true, null]],
        1017 => [[['_route' => 'app_coaching_session_show', '_controller' => 'App\\Controller\\CoachingSessionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1034 => [[['_route' => 'app_coaching_session_edit', '_controller' => 'App\\Controller\\CoachingSessionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1047 => [[['_route' => 'app_coaching_session_meet', '_controller' => 'App\\Controller\\CoachingSessionController::meet'], ['id'], ['GET' => 0], null, false, false, null]],
        1057 => [[['_route' => 'app_coaching_session_delete', '_controller' => 'App\\Controller\\CoachingSessionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1092 => [[['_route' => 'front_agent_show', '_controller' => 'App\\Controller\\Front\\AgentProfileController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1109 => [[['_route' => 'front_agent_edit', '_controller' => 'App\\Controller\\Front\\AgentProfileController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1124 => [[['_route' => 'front_agent_delete', '_controller' => 'App\\Controller\\Front\\AgentProfileController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1149 => [[['_route' => 'front_agent_questionnaire_show', '_controller' => 'App\\Controller\\Front\\ReponseQuestionnaireController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        1163 => [[['_route' => 'front_agent_questionnaire_edit', '_controller' => 'App\\Controller\\Front\\ReponseQuestionnaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1195 => [[['_route' => 'app_payment_show', '_controller' => 'App\\Controller\\PaymentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1209 => [[['_route' => 'app_payment_edit', '_controller' => 'App\\Controller\\PaymentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1218 => [[['_route' => 'app_payment_delete', '_controller' => 'App\\Controller\\PaymentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1245 => [[['_route' => 'app_shop_item_show', '_controller' => 'App\\Controller\\ShopItemController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1259 => [[['_route' => 'app_shop_item_edit', '_controller' => 'App\\Controller\\ShopItemController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1268 => [[['_route' => 'app_shop_item_delete', '_controller' => 'App\\Controller\\ShopItemController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1295 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1309 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1318 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1360 => [[['_route' => 'app_questionnaire_agent_show', '_controller' => 'App\\Controller\\QuestionnaireAgentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1374 => [[['_route' => 'app_questionnaire_agent_edit', '_controller' => 'App\\Controller\\QuestionnaireAgentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1383 => [[['_route' => 'app_questionnaire_agent_delete', '_controller' => 'App\\Controller\\QuestionnaireAgentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1428 => [[['_route' => 'app_analyst_player', '_controller' => 'App\\Controller\\AiEsportAnalystController::analyzePlayer'], ['playerName'], null, null, false, true, null]],
        1450 => [[['_route' => 'app_analyst_team', '_controller' => 'App\\Controller\\AiEsportAnalystController::analyzeTeam'], ['teamName'], null, null, false, true, null]],
        1491 => [
            [['_route' => 'app_analyst_export', '_controller' => 'App\\Controller\\AiEsportAnalystController::exportReport'], ['type', 'name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
