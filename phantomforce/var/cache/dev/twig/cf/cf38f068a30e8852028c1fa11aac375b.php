<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/user/index.html.twig */
class __TwigTemplate_e87d682b7ee276acb1f37f47c4baaa3b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $this->parent = $this->load("base_back.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Admin - Users Management";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        :root {
            --admin-accent: #00f3ff;
            --admin-success: #00ff88;
            --admin-danger: #ff003c;
            --admin-warning: #ffcc00;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: linear-gradient(135deg, rgba(0, 243, 255, 0.1), rgba(0, 200, 255, 0.05));
            border: 1px solid rgba(0, 243, 255, 0.2);
            border-radius: 10px;
            padding: 20px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0, 243, 255, 0.15);
            border-color: var(--admin-accent);
        }
        
        .stat-value {
            font-size: 32px;
            font-weight: 800;
            color: var(--admin-accent);
            margin-bottom: 5px;
            text-shadow: 0 0 10px rgba(0, 243, 255, 0.3);
        }
        
        .stat-label {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .filter-form {
            background: rgba(26, 26, 46, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            border: 1px solid rgba(0, 243, 255, 0.1);
            backdrop-filter: blur(10px);
        }
        
        .filter-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            align-items: end;
        }
        
        .form-group {
            margin-bottom: 0;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            font-weight: 500;
        }
        
        /* Search input */
        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 12px 15px;
            border-radius: 8px;
            width: 100%;
            font-size: 14px;
            transition: all 0.3s ease;
            font-family: inherit;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 2px rgba(0, 243, 255, 0.2);
            background: rgba(255, 255, 255, 0.08);
        }
        
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }
        
        /* FIXED: Table actions */
        .table-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            background: rgba(26, 26, 46, 0.5);
            border-radius: 8px;
            border: 1px solid rgba(0, 243, 255, 0.1);
        }
        
        .bulk-actions {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            flex: 1;
        }
        
        .bulk-select-controls {
            display: flex;
            align-items: center;
            gap: 10px;
            white-space: nowrap;
        }
        
        .select-all-label {
            margin: 0;
            color: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            user-select: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        /* FIXED: Bulk action select */
        .bulk-action-select {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff !important;
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 14px;
            min-width: 180px;
            height: 40px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .bulk-action-select:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 2px rgba(0, 243, 255, 0.2);
        }
        
        /* FIXED: Options visibility */
        .bulk-action-select option {
            background: rgba(26, 26, 46, 0.95) !important;
            color: #fff !important;
            padding: 10px;
        }
        
        /* FIXED: Apply button */
        #apply-bulk-action {
            padding: 10px 20px;
            background: var(--admin-accent);
            color: #000;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            height: 40px;
            white-space: nowrap;
        }
        
        #apply-bulk-action:hover:not(:disabled) {
            background: #00e5ff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 243, 255, 0.3);
        }
        
        #apply-bulk-action:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            background: rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.5);
        }
        
        .export-buttons {
            display: flex;
            gap: 10px;
            flex-shrink: 0;
        }
        
        .sortable {
            cursor: pointer;
            position: relative;
            user-select: none;
            padding-right: 20px;
            display: inline-block;
        }
        
        .sortable:hover {
            color: var(--admin-accent);
        }
        
        .sortable::after {
            content: '↕';
            position: absolute;
            right: 5px;
            opacity: 0.5;
            font-size: 12px;
        }
        
        .sortable.sorted-asc::after {
            content: '↑';
            opacity: 1;
            color: var(--admin-accent);
        }
        
        .sortable.sorted-desc::after {
            content: '↓';
            opacity: 1;
            color: var(--admin-accent);
        }
        
        .badge-role {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 0.8em;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .badge-admin {
            background: linear-gradient(135deg, rgba(255, 45, 85, 0.2), rgba(255, 45, 85, 0.1));
            color: #ff2d55;
            border: 1px solid rgba(255, 45, 85, 0.3);
        }
        
        .badge-moderator {
            background: linear-gradient(135deg, rgba(90, 200, 250, 0.2), rgba(90, 200, 250, 0.1));
            color: #5ac8fa;
            border: 1px solid rgba(90, 200, 250, 0.3);
        }
        
        .badge-user {
            background: linear-gradient(135deg, rgba(100, 210, 255, 0.2), rgba(100, 210, 255, 0.1));
            color: #64d2ff;
            border: 1px solid rgba(100, 210, 255, 0.3);
        }
        
        .badge-player {
            background: linear-gradient(135deg, rgba(255, 149, 0, 0.2), rgba(255, 149, 0, 0.1));
            color: #ff9500;
            border: 1px solid rgba(255, 149, 0, 0.3);
        }
        
        .badge-coach {
            background: linear-gradient(135deg, rgba(76, 217, 100, 0.2), rgba(76, 217, 100, 0.1));
            color: #4cd964;
            border: 1px solid rgba(76, 217, 100, 0.3);
        }
        
        input[type=\"checkbox\"] {
            accent-color: var(--admin-accent);
            width: 18px;
            height: 18px;
            cursor: pointer;
            margin: 0;
        }
        
        .admin-table th:first-child,
        .admin-table td:first-child {
            text-align: center;
            vertical-align: middle;
            width: 50px;
        }
        
        /* FIXED: Filter select styling - VISIBLE TEXT */
        .form-select {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            color: #fff !important;
            padding: 12px 15px;
            border-radius: 8px;
            width: 100%;
            font-size: 14px;
            cursor: pointer;
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23ffffff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E\") !important;
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px;
            padding-right: 40px;
        }
        
        .form-select:focus {
            outline: none !important;
            border-color: var(--admin-accent) !important;
            box-shadow: 0 0 0 2px rgba(0, 243, 255, 0.2) !important;
            background-color: rgba(255, 255, 255, 0.08) !important;
        }
        
        /* FIXED: Make options visible */
        .form-select option {
            background: rgba(26, 26, 46, 0.95) !important;
            color: #fff !important;
            padding: 12px !important;
        }
        
        .datepicker {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 12px 15px;
            border-radius: 8px;
            width: 100%;
            font-size: 14px;
            cursor: pointer;
        }
        
        .datepicker::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }
        
        .datepicker:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 2px rgba(0, 243, 255, 0.2);
            background: rgba(255, 255, 255, 0.08);
        }
        
        /* FIXED: Select2 custom styling for visible text */
        .select2-container--default .select2-selection--single {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 8px !important;
            height: 46px !important;
        }
        
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #fff !important;
            line-height: 46px !important;
            padding-left: 15px !important;
        }
        
        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #fff transparent transparent transparent !important;
        }
        
        .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
            border-color: transparent transparent #fff transparent !important;
        }
        
        .select2-dropdown {
            background: rgba(26, 26, 46, 0.95) !important;
            border: 1px solid rgba(0, 243, 255, 0.2) !important;
            border-radius: 8px !important;
        }
        
        .select2-container--default .select2-results__option {
            color: #fff !important;
            background: rgba(26, 26, 46, 0.95) !important;
            padding: 10px 15px !important;
        }
        
        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background: rgba(0, 243, 255, 0.2) !important;
            color: var(--admin-accent) !important;
        }
        
        .select2-container--default .select2-results__option[aria-selected=true] {
            background: rgba(0, 243, 255, 0.1) !important;
            color: var(--admin-accent) !important;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .filter-row {
                grid-template-columns: 1fr;
                gap: 12px;
            }
            
            .table-actions {
                flex-direction: column;
                align-items: stretch;
                gap: 15px;
            }
            
            .bulk-actions {
                flex-direction: column;
                align-items: stretch;
                gap: 12px;
            }
            
            .bulk-select-controls {
                justify-content: space-between;
            }
            
            .export-buttons {
                width: 100%;
                justify-content: center;
            }
            
            .bulk-action-select {
                min-width: 100%;
            }
            
            #apply-bulk-action {
                width: 100%;
            }
        }
        
        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .stat-card {
                padding: 15px;
            }
            
            .stat-value {
                font-size: 28px;
            }
            
            .table-actions {
                padding: 12px;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 450
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 451
        yield "<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 style=\"color: var(--admin-accent);\">Users Management</h1>
            <p class=\"mb-0\" style=\"color: rgba(255, 255, 255, 0.7);\">Manage all users in the system</p>
        </div>
        <a href=\"";
        // line 457
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_new");
        yield "\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus\"></i>
            New User
        </a>
    </div>
</div>

";
        // line 464
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 464, $this->source); })()), "flashes", ["success"], "method", false, false, false, 464));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 465
            yield "    <div style=\"background: rgba(0, 255, 136, 0.1); color: var(--admin-success); padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid rgba(0, 255, 136, 0.3); display: flex; align-items: center; gap: 10px;\">
        <i class=\"fas fa-check-circle\"></i> 
        <span>";
            // line 467
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        yield "
";
        // line 471
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 471, $this->source); })()), "flashes", ["error"], "method", false, false, false, 471));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 472
            yield "    <div style=\"background: rgba(255, 0, 60, 0.1); color: var(--admin-danger); padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid rgba(255, 0, 60, 0.3); display: flex; align-items: center; gap: 10px;\">
        <i class=\"fas fa-exclamation-circle\"></i> 
        <span>";
            // line 474
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 477
        yield "
<!-- Statistics Cards -->
<div class=\"stats-grid\">
    <div class=\"stat-card\">
        <div class=\"stat-value\">";
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 481)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 481, $this->source); })()), "total", [], "any", false, false, false, 481), 0)) : (0)), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Total Users</div>
    </div>
    <div class=\"stat-card\">
        <div class=\"stat-value\">";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active", [], "any", true, true, false, 485)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 485, $this->source); })()), "active", [], "any", false, false, false, 485), 0)) : (0)), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Active Users</div>
    </div>
    <div class=\"stat-card\">
        <div class=\"stat-value\">";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "inactive", [], "any", true, true, false, 489)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 489, $this->source); })()), "inactive", [], "any", false, false, false, 489), 0)) : (0)), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">Inactive Users</div>
    </div>
    <div class=\"stat-card\">
        <div class=\"stat-value\">";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "recent_registrations", [], "any", true, true, false, 493)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 493, $this->source); })()), "recent_registrations", [], "any", false, false, false, 493), 0)) : (0)), "html", null, true);
        yield "</div>
        <div class=\"stat-label\">New (7 days)</div>
    </div>
</div>

<!-- Filter Form -->
<div class=\"filter-form\">
    ";
        // line 500
        if (array_key_exists("filter_form", $context)) {
            // line 501
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 501, $this->source); })()), 'form_start', ["attr" => ["id" => "filter-form"]]);
            yield "
        <div class=\"filter-row\">
            <div class=\"form-group\">
                ";
            // line 504
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 504, $this->source); })()), "search", [], "any", false, false, false, 504), 'label');
            yield "
                ";
            // line 505
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 505, $this->source); })()), "search", [], "any", false, false, false, 505), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Search by email, username..."]]);
            yield "
            </div>
            <div class=\"form-group\">
                ";
            // line 508
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 508, $this->source); })()), "role", [], "any", false, false, false, 508), 'label');
            yield "
                ";
            // line 509
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 509, $this->source); })()), "role", [], "any", false, false, false, 509), 'widget', ["attr" => ["class" => "form-select"]]);
            yield "
            </div>
            <div class=\"form-group\">
                ";
            // line 512
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 512, $this->source); })()), "status", [], "any", false, false, false, 512), 'label');
            yield "
                ";
            // line 513
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 513, $this->source); })()), "status", [], "any", false, false, false, 513), 'widget', ["attr" => ["class" => "form-select"]]);
            yield "
            </div>
            <div class=\"form-group\">
                ";
            // line 516
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 516, $this->source); })()), "country", [], "any", false, false, false, 516), 'label');
            yield "
                ";
            // line 517
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 517, $this->source); })()), "country", [], "any", false, false, false, 517), 'widget', ["attr" => ["class" => "form-select"]]);
            yield "
            </div>
            <div class=\"form-group\">
                ";
            // line 520
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 520, $this->source); })()), "startDate", [], "any", false, false, false, 520), 'label');
            yield "
                ";
            // line 521
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 521, $this->source); })()), "startDate", [], "any", false, false, false, 521), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
            yield "
            </div>
            <div class=\"form-group\">
                ";
            // line 524
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 524, $this->source); })()), "endDate", [], "any", false, false, false, 524), 'label');
            yield "
                ";
            // line 525
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 525, $this->source); })()), "endDate", [], "any", false, false, false, 525), 'widget', ["attr" => ["class" => "form-control datepicker"]]);
            yield "
            </div>
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn-admin btn-admin-primary\" style=\"width: 100%;\">
                    <i class=\"fas fa-filter\"></i> Filter
                </button>
            </div>
            <div class=\"form-group\">
                <a href=\"";
            // line 533
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
            yield "\" class=\"btn-admin btn-admin-secondary\" style=\"width: 100%;\">
                    <i class=\"fas fa-times\"></i> Clear
                </a>
            </div>
        </div>
        ";
            // line 538
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new RuntimeError('Variable "filter_form" does not exist.', 538, $this->source); })()), 'form_end');
            yield "
    ";
        } else {
            // line 540
            yield "        <div class=\"filter-row\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search by email, username...\" id=\"search-input\">
            </div>
            <div class=\"form-group\">
                <select class=\"form-select\">
                    <option value=\"\">All Roles</option>
                    <option value=\"admin\">Admin</option>
                    <option value=\"user\">User</option>
                    <option value=\"moderator\">Moderator</option>
                </select>
            </div>
            <div class=\"form-group\">
                <select class=\"form-select\">
                    <option value=\"\">All Status</option>
                    <option value=\"active\">Active</option>
                    <option value=\"inactive\">Inactive</option>
                </select>
            </div>
            <div class=\"form-group\">
                <button type=\"button\" class=\"btn-admin btn-admin-primary\" style=\"width: 100%;\">
                    <i class=\"fas fa-filter\"></i> Filter
                </button>
            </div>
            <div class=\"form-group\">
                <a href=\"";
            // line 565
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
            yield "\" class=\"btn-admin btn-admin-secondary\" style=\"width: 100%;\">
                    <i class=\"fas fa-times\"></i> Clear
                </a>
            </div>
        </div>
    ";
        }
        // line 571
        yield "</div>

<!-- Table Actions -->
<div class=\"table-actions\">
    <div class=\"bulk-actions\">
        <div class=\"bulk-select-controls\">
            <label class=\"select-all-label\">
                <input type=\"checkbox\" id=\"select-all\" class=\"select-all\">
                Select All
            </label>
        </div>
        
        <div class=\"bulk-action-controls\" style=\"display: flex; gap: 10px; align-items: center; flex: 1;\">
            <select id=\"bulk-action-select\" class=\"bulk-action-select\">
                <option value=\"\">Bulk Actions</option>
                <option value=\"activate\">Activate Selected</option>
                <option value=\"deactivate\">Deactivate Selected</option>
                <option value=\"delete\">Delete Selected</option>
            </select>
            
            <button type=\"button\" id=\"apply-bulk-action\" class=\"btn-admin btn-admin-primary\" disabled>
                Apply
            </button>
        </div>
    </div>
    
    <div class=\"export-buttons\">
        <a href=\"";
        // line 598
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_export_csv");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-file-csv\"></i> CSV
        </a>
        <a href=\"";
        // line 601
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_export_pdf");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-file-pdf\"></i> PDF
        </a>
    </div>
</div>

<!-- Users Table -->
<div style=\"background: rgba(26, 26, 46, 0.5); border-radius: 10px; padding: 20px; border: 1px solid rgba(0, 243, 255, 0.1); backdrop-filter: blur(10px); overflow-x: auto;\">
    <table class=\"admin-table\">
        <thead>
            <tr>
                <th>
                    <input type=\"checkbox\" id=\"header-select\">
                </th>
                <th>
                    <a href=\"";
        // line 616
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index", ["sort" => "u.id", "direction" => (((((isset($context["sort_field"]) || array_key_exists("sort_field", $context) ? $context["sort_field"] : (function () { throw new RuntimeError('Variable "sort_field" does not exist.', 616, $this->source); })()) == "u.id") && ((isset($context["sort_direction"]) || array_key_exists("sort_direction", $context) ? $context["sort_direction"] : (function () { throw new RuntimeError('Variable "sort_direction" does not exist.', 616, $this->source); })()) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\" 
                       class=\"sortable ";
        // line 617
        yield ((((isset($context["sort_field"]) || array_key_exists("sort_field", $context) ? $context["sort_field"] : (function () { throw new RuntimeError('Variable "sort_field" does not exist.', 617, $this->source); })()) == "u.id")) ? (((((isset($context["sort_direction"]) || array_key_exists("sort_direction", $context) ? $context["sort_direction"] : (function () { throw new RuntimeError('Variable "sort_direction" does not exist.', 617, $this->source); })()) == "asc")) ? ("sorted-asc") : ("sorted-desc"))) : (""));
        yield "\">
                        ID
                    </a>
                </th>
                <th>
                    <a href=\"";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index", ["sort" => "u.email", "direction" => (((((isset($context["sort_field"]) || array_key_exists("sort_field", $context) ? $context["sort_field"] : (function () { throw new RuntimeError('Variable "sort_field" does not exist.', 622, $this->source); })()) == "u.email") && ((isset($context["sort_direction"]) || array_key_exists("sort_direction", $context) ? $context["sort_direction"] : (function () { throw new RuntimeError('Variable "sort_direction" does not exist.', 622, $this->source); })()) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\"
                       class=\"sortable ";
        // line 623
        yield ((((isset($context["sort_field"]) || array_key_exists("sort_field", $context) ? $context["sort_field"] : (function () { throw new RuntimeError('Variable "sort_field" does not exist.', 623, $this->source); })()) == "u.email")) ? (((((isset($context["sort_direction"]) || array_key_exists("sort_direction", $context) ? $context["sort_direction"] : (function () { throw new RuntimeError('Variable "sort_direction" does not exist.', 623, $this->source); })()) == "asc")) ? ("sorted-asc") : ("sorted-desc"))) : (""));
        yield "\">
                        Email
                    </a>
                </th>
                <th>
                    <a href=\"";
        // line 628
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index", ["sort" => "u.username", "direction" => (((((isset($context["sort_field"]) || array_key_exists("sort_field", $context) ? $context["sort_field"] : (function () { throw new RuntimeError('Variable "sort_field" does not exist.', 628, $this->source); })()) == "u.username") && ((isset($context["sort_direction"]) || array_key_exists("sort_direction", $context) ? $context["sort_direction"] : (function () { throw new RuntimeError('Variable "sort_direction" does not exist.', 628, $this->source); })()) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\"
                       class=\"sortable ";
        // line 629
        yield ((((isset($context["sort_field"]) || array_key_exists("sort_field", $context) ? $context["sort_field"] : (function () { throw new RuntimeError('Variable "sort_field" does not exist.', 629, $this->source); })()) == "u.username")) ? (((((isset($context["sort_direction"]) || array_key_exists("sort_direction", $context) ? $context["sort_direction"] : (function () { throw new RuntimeError('Variable "sort_direction" does not exist.', 629, $this->source); })()) == "asc")) ? ("sorted-asc") : ("sorted-desc"))) : (""));
        yield "\">
                        Username
                    </a>
                </th>
                <th>
                    <a href=\"";
        // line 634
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index", ["sort" => "u.role", "direction" => (((((isset($context["sort_field"]) || array_key_exists("sort_field", $context) ? $context["sort_field"] : (function () { throw new RuntimeError('Variable "sort_field" does not exist.', 634, $this->source); })()) == "u.role") && ((isset($context["sort_direction"]) || array_key_exists("sort_direction", $context) ? $context["sort_direction"] : (function () { throw new RuntimeError('Variable "sort_direction" does not exist.', 634, $this->source); })()) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\"
                       class=\"sortable ";
        // line 635
        yield ((((isset($context["sort_field"]) || array_key_exists("sort_field", $context) ? $context["sort_field"] : (function () { throw new RuntimeError('Variable "sort_field" does not exist.', 635, $this->source); })()) == "u.role")) ? (((((isset($context["sort_direction"]) || array_key_exists("sort_direction", $context) ? $context["sort_direction"] : (function () { throw new RuntimeError('Variable "sort_direction" does not exist.', 635, $this->source); })()) == "asc")) ? ("sorted-asc") : ("sorted-desc"))) : (""));
        yield "\">
                        Role
                    </a>
                </th>
                <th>Country</th>
                <th>Status</th>
                <th>
                    <a href=\"";
        // line 642
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index", ["sort" => "u.createdAt", "direction" => (((((isset($context["sort_field"]) || array_key_exists("sort_field", $context) ? $context["sort_field"] : (function () { throw new RuntimeError('Variable "sort_field" does not exist.', 642, $this->source); })()) == "u.createdAt") && ((isset($context["sort_direction"]) || array_key_exists("sort_direction", $context) ? $context["sort_direction"] : (function () { throw new RuntimeError('Variable "sort_direction" does not exist.', 642, $this->source); })()) == "asc"))) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\"
                       class=\"sortable ";
        // line 643
        yield ((((isset($context["sort_field"]) || array_key_exists("sort_field", $context) ? $context["sort_field"] : (function () { throw new RuntimeError('Variable "sort_field" does not exist.', 643, $this->source); })()) == "u.createdAt")) ? (((((isset($context["sort_direction"]) || array_key_exists("sort_direction", $context) ? $context["sort_direction"] : (function () { throw new RuntimeError('Variable "sort_direction" does not exist.', 643, $this->source); })()) == "asc")) ? ("sorted-asc") : ("sorted-desc"))) : (""));
        yield "\">
                        Created
                    </a>
                </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 651
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 651, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 652
            yield "            <tr data-user-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 652), "html", null, true);
            yield "\">
                <td>
                    <input type=\"checkbox\" class=\"user-checkbox\" value=\"";
            // line 654
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 654), "html", null, true);
            yield "\">
                </td>
                <td>";
            // line 656
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 656), "html", null, true);
            yield "</td>
                <td>
                    <div style=\"display: flex; align-items: center; gap: 8px;\">
                        ";
            // line 659
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 659), "html", null, true);
            yield "
                        ";
            // line 660
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 660)) == Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 660, $this->source); })()), "user", [], "any", false, false, false, 660), "email", [], "any", false, false, false, 660)))) {
                // line 661
                yield "                            <span style=\"color: #ff9500; font-size: 0.7em; background: rgba(255, 149, 0, 0.1); padding: 2px 6px; border-radius: 10px;\">You</span>
                        ";
            }
            // line 663
            yield "                    </div>
                </td>
                <td>
                    <strong>";
            // line 666
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 666), "html", null, true);
            yield "</strong>
                    ";
            // line 667
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 667)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 668
                yield "                        <br>
                        <small style=\"color: rgba(255, 255, 255, 0.5);\">";
                // line 669
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 669), "html", null, true);
                yield "</small>
                    ";
            }
            // line 671
            yield "                </td>
                <td>
                    ";
            // line 673
            $context["roleClass"] = ("badge-" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 673)));
            // line 674
            yield "                    <span class=\"badge-role ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["roleClass"]) || array_key_exists("roleClass", $context) ? $context["roleClass"] : (function () { throw new RuntimeError('Variable "roleClass" does not exist.', 674, $this->source); })()), "html", null, true);
            yield "\">
                        ";
            // line 675
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 675), "html", null, true);
            yield "
                    </span>
                </td>
                <td>
                    ";
            // line 679
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 679)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 680
                yield "                        <span style=\"color: rgba(255, 255, 255, 0.8);\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 680), "html", null, true);
                yield "</span>
                    ";
            } else {
                // line 682
                yield "                        <span style=\"color: rgba(255, 255, 255, 0.3); font-style: italic; font-size: 0.9em;\">Not set</span>
                    ";
            }
            // line 684
            yield "                </td>
                <td>
                    ";
            // line 686
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 686)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 687
                yield "                        <span style=\"color: var(--admin-success); display: flex; align-items: center; gap: 5px;\">
                            <i class=\"fas fa-circle\" style=\"font-size: 0.6em;\"></i> Active
                        </span>
                    ";
            } else {
                // line 691
                yield "                        <span style=\"color: var(--admin-danger); display: flex; align-items: center; gap: 5px;\">
                            <i class=\"fas fa-circle\" style=\"font-size: 0.6em;\"></i> Inactive
                        </span>
                    ";
            }
            // line 695
            yield "                </td>
                <td>
                    <span style=\"color: rgba(255, 255, 255, 0.8);\">";
            // line 697
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 697), "Y-m-d"), "html", null, true);
            yield "</span>
                    <br>
                    <small style=\"color: rgba(255, 255, 255, 0.5);\">";
            // line 699
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 699), "H:i"), "html", null, true);
            yield "</small>
                </td>
                <td>
                    <div style=\"display: flex; gap: 8px; flex-wrap: wrap;\">
                        <a href=\"";
            // line 703
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 703)]), "html", null, true);
            yield "\" 
                           class=\"btn-admin btn-admin-secondary\" 
                           title=\"View Details\"
                           style=\"padding: 6px 10px; font-size: 0.85em;\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"";
            // line 709
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 709)]), "html", null, true);
            yield "\" 
                           class=\"btn-admin btn-admin-primary\" 
                           title=\"Edit User\"
                           style=\"padding: 6px 10px; font-size: 0.85em;\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        
                        <!-- Toggle Status Form -->
                        <form method=\"post\" 
                              action=\"";
            // line 718
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 718)]), "html", null, true);
            yield "\" 
                              style=\"display: inline;\"
                              onsubmit=\"return confirm('Are you sure you want to ";
            // line 720
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 720)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("deactivate") : ("activate"));
            yield " this user?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 721
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 721))), "html", null, true);
            yield "\">
                            <button type=\"submit\" 
                                    class=\"btn-admin ";
            // line 723
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 723)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-admin-warning") : ("btn-admin-success"));
            yield "\" 
                                    title=\"";
            // line 724
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 724)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Deactivate") : ("Activate"));
            yield "\"
                                    style=\"padding: 6px 10px; font-size: 0.85em;\">
                                <i class=\"fas ";
            // line 726
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 726)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-user-slash") : ("fa-user-check"));
            yield "\"></i>
                            </button>
                        </form>
                        
                        <!-- Delete Form -->
                        ";
            // line 731
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 731) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 731, $this->source); })()), "user", [], "any", false, false, false, 731), "id", [], "any", false, false, false, 731))) {
                // line 732
                yield "                        <form method=\"post\" 
                              action=\"";
                // line 733
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 733)]), "html", null, true);
                yield "\" 
                              onsubmit=\"return confirm('Are you sure you want to delete this user?');\" 
                              style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 736
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 736))), "html", null, true);
                yield "\">
                            <button type=\"submit\" 
                                    class=\"btn-admin btn-admin-danger\" 
                                    title=\"Delete User\"
                                    style=\"padding: 6px 10px; font-size: 0.85em;\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                        ";
            }
            // line 745
            yield "                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 748
        if (!$context['_iterated']) {
            // line 749
            yield "            <tr>
                <td colspan=\"9\" style=\"text-align: center; padding: 40px; color: rgba(255, 255, 255, 0.5);\">
                    <i class=\"fas fa-users\" style=\"font-size: 2em; margin-bottom: 10px; display: block; opacity: 0.3;\"></i>
                    No users found
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 756
        yield "        </tbody>
    </table>
    
    <!-- Pagination -->
    ";
        // line 760
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 760, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 760) > 0)) {
            // line 761
            yield "        <div class=\"pagination-container\" style=\"margin-top: 20px;\">
            ";
            // line 762
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 762, $this->source); })()));
            yield "
        </div>
    ";
        }
        // line 765
        yield "</div>

<!-- Bulk Actions Form - FIXED WITH CSRF TOKEN -->
<form id=\"bulk-actions-form\" method=\"post\" action=\"";
        // line 768
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_bulk_actions");
        yield "\">
    <input type=\"hidden\" id=\"bulk-user-ids\" name=\"user_ids\">
    <input type=\"hidden\" id=\"bulk-action\" name=\"action\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 771
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("bulk_actions"), "html", null, true);
        yield "\">
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 775
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 776
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Select2 for filter selects
            \$('.form-select').select2({
                theme: 'dark',
                minimumResultsForSearch: 10,
                width: '100%',
                placeholder: 'Select...'
            });
            
            // Force white text in select2
            \$('.select2-selection__rendered').css('color', '#fff');
            
            // Initialize date pickers
            flatpickr('.datepicker', {
                dateFormat: 'Y-m-d',
                theme: 'dark',
                allowInput: true
            });
            
            // Bulk actions - FIXED
            const headerSelect = document.getElementById('header-select');
            const selectAll = document.getElementById('select-all');
            const userCheckboxes = document.querySelectorAll('.user-checkbox');
            const bulkActionSelect = document.getElementById('bulk-action-select');
            const applyBulkAction = document.getElementById('apply-bulk-action');
            const bulkActionsForm = document.getElementById('bulk-actions-form');
            const bulkUserIds = document.getElementById('bulk-user-ids');
            const bulkAction = document.getElementById('bulk-action');
            
            console.log('Bulk action elements loaded:', {
                headerSelect: !!headerSelect,
                selectAll: !!selectAll,
                userCheckboxes: userCheckboxes.length,
                bulkActionSelect: !!bulkActionSelect,
                applyBulkAction: !!applyBulkAction,
                bulkActionsForm: !!bulkActionsForm
            });
            
            // Header checkbox
            if (headerSelect) {
                headerSelect.addEventListener('change', function() {
                    console.log('Header checkbox changed:', this.checked);
                    userCheckboxes.forEach(checkbox => {
                        checkbox.checked = this.checked;
                    });
                    if (selectAll) {
                        selectAll.checked = this.checked;
                        selectAll.indeterminate = false;
                    }
                    headerSelect.indeterminate = false;
                    updateBulkActionButton();
                });
            }
            
            // Select all checkbox
            if (selectAll) {
                selectAll.addEventListener('change', function() {
                    console.log('Select all checkbox changed:', this.checked);
                    userCheckboxes.forEach(checkbox => {
                        checkbox.checked = this.checked;
                    });
                    if (headerSelect) {
                        headerSelect.checked = this.checked;
                        headerSelect.indeterminate = false;
                    }
                    selectAll.indeterminate = false;
                    updateBulkActionButton();
                });
            }
            
            // Individual checkboxes
            userCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    console.log('Individual checkbox changed:', this.value, this.checked);
                    updateSelectAllState();
                    updateBulkActionButton();
                });
            });
            
            // Bulk action select
            if (bulkActionSelect) {
                bulkActionSelect.addEventListener('change', function() {
                    console.log('Bulk action selected:', this.value);
                    updateBulkActionButton();
                });
            }
            
            // Apply bulk action - FIXED
            if (applyBulkAction) {
                applyBulkAction.addEventListener('click', function(e) {
                    e.preventDefault();
                    console.log('Apply bulk action clicked');
                    
                    const selectedUserIds = Array.from(userCheckboxes)
                        .filter(cb => cb.checked)
                        .map(cb => cb.value);
                    
                    console.log('Selected user IDs:', selectedUserIds);
                    console.log('Selected action:', bulkActionSelect.value);
                    
                    if (selectedUserIds.length === 0 || !bulkActionSelect.value) {
                        alert('Please select users and an action.');
                        return;
                    }
                    
                    const action = bulkActionSelect.value;
                    let confirmMessage = '';
                    
                    switch (action) {
                        case 'activate':
                            confirmMessage = `Activate \${selectedUserIds.length} user(s)?`;
                            break;
                        case 'deactivate':
                            confirmMessage = `Deactivate \${selectedUserIds.length} user(s)?`;
                            break;
                        case 'delete':
                            confirmMessage = `Delete \${selectedUserIds.length} user(s)? This action cannot be undone.`;
                            break;
                    }
                    
                    if (confirm(confirmMessage)) {
                        bulkUserIds.value = JSON.stringify(selectedUserIds);
                        bulkAction.value = action;
                        
                        console.log('Submitting bulk form with:', {
                            user_ids: bulkUserIds.value,
                            action: bulkAction.value
                        });
                        
                        bulkActionsForm.submit();
                    }
                });
            }
            
            function updateSelectAllState() {
                const checkedCount = Array.from(userCheckboxes).filter(cb => cb.checked).length;
                const totalCount = userCheckboxes.length;
                
                console.log('Update select all:', checkedCount, '/', totalCount);
                
                if (selectAll) {
                    selectAll.checked = checkedCount === totalCount;
                    selectAll.indeterminate = checkedCount > 0 && checkedCount < totalCount;
                }
                if (headerSelect) {
                    headerSelect.checked = checkedCount === totalCount;
                    headerSelect.indeterminate = checkedCount > 0 && checkedCount < totalCount;
                }
            }
            
            function updateBulkActionButton() {
                const checkedCount = Array.from(userCheckboxes).filter(cb => cb.checked).length;
                const hasAction = bulkActionSelect && bulkActionSelect.value;
                
                console.log('Update bulk button:', checkedCount, 'selected, action:', hasAction);
                
                if (applyBulkAction) {
                    applyBulkAction.disabled = checkedCount === 0 || !hasAction;
                }
            }
            
            // Quick search
            const searchInput = document.querySelector('#user_filter_search');
            if (searchInput) {
                searchInput.addEventListener('keyup', function(e) {
                    if (e.key === 'Enter') {
                        this.form.submit();
                    }
                });
                
                let searchTimeout;
                searchInput.addEventListener('input', function() {
                    clearTimeout(searchTimeout);
                    searchTimeout = setTimeout(() => {
                        if (this.value.length >= 3 || this.value.length === 0) {
                            document.getElementById('filter-form').submit();
                        }
                    }, 500);
                });
            }
            
            // Row click handler
            document.querySelectorAll('tbody tr').forEach(row => {
                row.addEventListener('click', function(e) {
                    if (e.target.type !== 'checkbox' && !e.target.closest('a, button, form')) {
                        const userId = this.dataset.userId;
                        window.location.href = `";
        // line 966
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => "__ID__"]);
        yield "`.replace('__ID__', userId);
                    }
                });
            });
            
            // Initialize bulk action button state
            updateBulkActionButton();
            updateSelectAllState();
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/user/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1363 => 966,  1169 => 776,  1156 => 775,  1142 => 771,  1136 => 768,  1131 => 765,  1125 => 762,  1122 => 761,  1120 => 760,  1114 => 756,  1102 => 749,  1100 => 748,  1093 => 745,  1081 => 736,  1075 => 733,  1072 => 732,  1070 => 731,  1062 => 726,  1057 => 724,  1053 => 723,  1048 => 721,  1044 => 720,  1039 => 718,  1027 => 709,  1018 => 703,  1011 => 699,  1006 => 697,  1002 => 695,  996 => 691,  990 => 687,  988 => 686,  984 => 684,  980 => 682,  974 => 680,  972 => 679,  965 => 675,  960 => 674,  958 => 673,  954 => 671,  949 => 669,  946 => 668,  944 => 667,  940 => 666,  935 => 663,  931 => 661,  929 => 660,  925 => 659,  919 => 656,  914 => 654,  908 => 652,  903 => 651,  892 => 643,  888 => 642,  878 => 635,  874 => 634,  866 => 629,  862 => 628,  854 => 623,  850 => 622,  842 => 617,  838 => 616,  820 => 601,  814 => 598,  785 => 571,  776 => 565,  749 => 540,  744 => 538,  736 => 533,  725 => 525,  721 => 524,  715 => 521,  711 => 520,  705 => 517,  701 => 516,  695 => 513,  691 => 512,  685 => 509,  681 => 508,  675 => 505,  671 => 504,  664 => 501,  662 => 500,  652 => 493,  645 => 489,  638 => 485,  631 => 481,  625 => 477,  616 => 474,  612 => 472,  608 => 471,  605 => 470,  596 => 467,  592 => 465,  588 => 464,  578 => 457,  570 => 451,  557 => 450,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Admin - Users Management{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\">
    <style>
        :root {
            --admin-accent: #00f3ff;
            --admin-success: #00ff88;
            --admin-danger: #ff003c;
            --admin-warning: #ffcc00;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: linear-gradient(135deg, rgba(0, 243, 255, 0.1), rgba(0, 200, 255, 0.05));
            border: 1px solid rgba(0, 243, 255, 0.2);
            border-radius: 10px;
            padding: 20px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0, 243, 255, 0.15);
            border-color: var(--admin-accent);
        }
        
        .stat-value {
            font-size: 32px;
            font-weight: 800;
            color: var(--admin-accent);
            margin-bottom: 5px;
            text-shadow: 0 0 10px rgba(0, 243, 255, 0.3);
        }
        
        .stat-label {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .filter-form {
            background: rgba(26, 26, 46, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            border: 1px solid rgba(0, 243, 255, 0.1);
            backdrop-filter: blur(10px);
        }
        
        .filter-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            align-items: end;
        }
        
        .form-group {
            margin-bottom: 0;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            font-weight: 500;
        }
        
        /* Search input */
        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 12px 15px;
            border-radius: 8px;
            width: 100%;
            font-size: 14px;
            transition: all 0.3s ease;
            font-family: inherit;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 2px rgba(0, 243, 255, 0.2);
            background: rgba(255, 255, 255, 0.08);
        }
        
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }
        
        /* FIXED: Table actions */
        .table-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            background: rgba(26, 26, 46, 0.5);
            border-radius: 8px;
            border: 1px solid rgba(0, 243, 255, 0.1);
        }
        
        .bulk-actions {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            flex: 1;
        }
        
        .bulk-select-controls {
            display: flex;
            align-items: center;
            gap: 10px;
            white-space: nowrap;
        }
        
        .select-all-label {
            margin: 0;
            color: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            user-select: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        /* FIXED: Bulk action select */
        .bulk-action-select {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff !important;
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 14px;
            min-width: 180px;
            height: 40px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .bulk-action-select:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 2px rgba(0, 243, 255, 0.2);
        }
        
        /* FIXED: Options visibility */
        .bulk-action-select option {
            background: rgba(26, 26, 46, 0.95) !important;
            color: #fff !important;
            padding: 10px;
        }
        
        /* FIXED: Apply button */
        #apply-bulk-action {
            padding: 10px 20px;
            background: var(--admin-accent);
            color: #000;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            height: 40px;
            white-space: nowrap;
        }
        
        #apply-bulk-action:hover:not(:disabled) {
            background: #00e5ff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 243, 255, 0.3);
        }
        
        #apply-bulk-action:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            background: rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.5);
        }
        
        .export-buttons {
            display: flex;
            gap: 10px;
            flex-shrink: 0;
        }
        
        .sortable {
            cursor: pointer;
            position: relative;
            user-select: none;
            padding-right: 20px;
            display: inline-block;
        }
        
        .sortable:hover {
            color: var(--admin-accent);
        }
        
        .sortable::after {
            content: '↕';
            position: absolute;
            right: 5px;
            opacity: 0.5;
            font-size: 12px;
        }
        
        .sortable.sorted-asc::after {
            content: '↑';
            opacity: 1;
            color: var(--admin-accent);
        }
        
        .sortable.sorted-desc::after {
            content: '↓';
            opacity: 1;
            color: var(--admin-accent);
        }
        
        .badge-role {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 0.8em;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .badge-admin {
            background: linear-gradient(135deg, rgba(255, 45, 85, 0.2), rgba(255, 45, 85, 0.1));
            color: #ff2d55;
            border: 1px solid rgba(255, 45, 85, 0.3);
        }
        
        .badge-moderator {
            background: linear-gradient(135deg, rgba(90, 200, 250, 0.2), rgba(90, 200, 250, 0.1));
            color: #5ac8fa;
            border: 1px solid rgba(90, 200, 250, 0.3);
        }
        
        .badge-user {
            background: linear-gradient(135deg, rgba(100, 210, 255, 0.2), rgba(100, 210, 255, 0.1));
            color: #64d2ff;
            border: 1px solid rgba(100, 210, 255, 0.3);
        }
        
        .badge-player {
            background: linear-gradient(135deg, rgba(255, 149, 0, 0.2), rgba(255, 149, 0, 0.1));
            color: #ff9500;
            border: 1px solid rgba(255, 149, 0, 0.3);
        }
        
        .badge-coach {
            background: linear-gradient(135deg, rgba(76, 217, 100, 0.2), rgba(76, 217, 100, 0.1));
            color: #4cd964;
            border: 1px solid rgba(76, 217, 100, 0.3);
        }
        
        input[type=\"checkbox\"] {
            accent-color: var(--admin-accent);
            width: 18px;
            height: 18px;
            cursor: pointer;
            margin: 0;
        }
        
        .admin-table th:first-child,
        .admin-table td:first-child {
            text-align: center;
            vertical-align: middle;
            width: 50px;
        }
        
        /* FIXED: Filter select styling - VISIBLE TEXT */
        .form-select {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            color: #fff !important;
            padding: 12px 15px;
            border-radius: 8px;
            width: 100%;
            font-size: 14px;
            cursor: pointer;
            appearance: none;
            background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23ffffff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E\") !important;
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px;
            padding-right: 40px;
        }
        
        .form-select:focus {
            outline: none !important;
            border-color: var(--admin-accent) !important;
            box-shadow: 0 0 0 2px rgba(0, 243, 255, 0.2) !important;
            background-color: rgba(255, 255, 255, 0.08) !important;
        }
        
        /* FIXED: Make options visible */
        .form-select option {
            background: rgba(26, 26, 46, 0.95) !important;
            color: #fff !important;
            padding: 12px !important;
        }
        
        .datepicker {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 12px 15px;
            border-radius: 8px;
            width: 100%;
            font-size: 14px;
            cursor: pointer;
        }
        
        .datepicker::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }
        
        .datepicker:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 2px rgba(0, 243, 255, 0.2);
            background: rgba(255, 255, 255, 0.08);
        }
        
        /* FIXED: Select2 custom styling for visible text */
        .select2-container--default .select2-selection--single {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 8px !important;
            height: 46px !important;
        }
        
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #fff !important;
            line-height: 46px !important;
            padding-left: 15px !important;
        }
        
        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #fff transparent transparent transparent !important;
        }
        
        .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
            border-color: transparent transparent #fff transparent !important;
        }
        
        .select2-dropdown {
            background: rgba(26, 26, 46, 0.95) !important;
            border: 1px solid rgba(0, 243, 255, 0.2) !important;
            border-radius: 8px !important;
        }
        
        .select2-container--default .select2-results__option {
            color: #fff !important;
            background: rgba(26, 26, 46, 0.95) !important;
            padding: 10px 15px !important;
        }
        
        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background: rgba(0, 243, 255, 0.2) !important;
            color: var(--admin-accent) !important;
        }
        
        .select2-container--default .select2-results__option[aria-selected=true] {
            background: rgba(0, 243, 255, 0.1) !important;
            color: var(--admin-accent) !important;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .filter-row {
                grid-template-columns: 1fr;
                gap: 12px;
            }
            
            .table-actions {
                flex-direction: column;
                align-items: stretch;
                gap: 15px;
            }
            
            .bulk-actions {
                flex-direction: column;
                align-items: stretch;
                gap: 12px;
            }
            
            .bulk-select-controls {
                justify-content: space-between;
            }
            
            .export-buttons {
                width: 100%;
                justify-content: center;
            }
            
            .bulk-action-select {
                min-width: 100%;
            }
            
            #apply-bulk-action {
                width: 100%;
            }
        }
        
        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .stat-card {
                padding: 15px;
            }
            
            .stat-value {
                font-size: 28px;
            }
            
            .table-actions {
                padding: 12px;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 style=\"color: var(--admin-accent);\">Users Management</h1>
            <p class=\"mb-0\" style=\"color: rgba(255, 255, 255, 0.7);\">Manage all users in the system</p>
        </div>
        <a href=\"{{ path('admin_user_new') }}\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus\"></i>
            New User
        </a>
    </div>
</div>

{% for message in app.flashes('success') %}
    <div style=\"background: rgba(0, 255, 136, 0.1); color: var(--admin-success); padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid rgba(0, 255, 136, 0.3); display: flex; align-items: center; gap: 10px;\">
        <i class=\"fas fa-check-circle\"></i> 
        <span>{{ message }}</span>
    </div>
{% endfor %}

{% for message in app.flashes('error') %}
    <div style=\"background: rgba(255, 0, 60, 0.1); color: var(--admin-danger); padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid rgba(255, 0, 60, 0.3); display: flex; align-items: center; gap: 10px;\">
        <i class=\"fas fa-exclamation-circle\"></i> 
        <span>{{ message }}</span>
    </div>
{% endfor %}

<!-- Statistics Cards -->
<div class=\"stats-grid\">
    <div class=\"stat-card\">
        <div class=\"stat-value\">{{ stats.total|default(0) }}</div>
        <div class=\"stat-label\">Total Users</div>
    </div>
    <div class=\"stat-card\">
        <div class=\"stat-value\">{{ stats.active|default(0) }}</div>
        <div class=\"stat-label\">Active Users</div>
    </div>
    <div class=\"stat-card\">
        <div class=\"stat-value\">{{ stats.inactive|default(0) }}</div>
        <div class=\"stat-label\">Inactive Users</div>
    </div>
    <div class=\"stat-card\">
        <div class=\"stat-value\">{{ stats.recent_registrations|default(0) }}</div>
        <div class=\"stat-label\">New (7 days)</div>
    </div>
</div>

<!-- Filter Form -->
<div class=\"filter-form\">
    {% if filter_form is defined %}
        {{ form_start(filter_form, {'attr': {'id': 'filter-form'}}) }}
        <div class=\"filter-row\">
            <div class=\"form-group\">
                {{ form_label(filter_form.search) }}
                {{ form_widget(filter_form.search, {'attr': {'class': 'form-control', 'placeholder': 'Search by email, username...'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(filter_form.role) }}
                {{ form_widget(filter_form.role, {'attr': {'class': 'form-select'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(filter_form.status) }}
                {{ form_widget(filter_form.status, {'attr': {'class': 'form-select'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(filter_form.country) }}
                {{ form_widget(filter_form.country, {'attr': {'class': 'form-select'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(filter_form.startDate) }}
                {{ form_widget(filter_form.startDate, {'attr': {'class': 'form-control datepicker'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(filter_form.endDate) }}
                {{ form_widget(filter_form.endDate, {'attr': {'class': 'form-control datepicker'}}) }}
            </div>
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn-admin btn-admin-primary\" style=\"width: 100%;\">
                    <i class=\"fas fa-filter\"></i> Filter
                </button>
            </div>
            <div class=\"form-group\">
                <a href=\"{{ path('admin_user_index') }}\" class=\"btn-admin btn-admin-secondary\" style=\"width: 100%;\">
                    <i class=\"fas fa-times\"></i> Clear
                </a>
            </div>
        </div>
        {{ form_end(filter_form) }}
    {% else %}
        <div class=\"filter-row\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search by email, username...\" id=\"search-input\">
            </div>
            <div class=\"form-group\">
                <select class=\"form-select\">
                    <option value=\"\">All Roles</option>
                    <option value=\"admin\">Admin</option>
                    <option value=\"user\">User</option>
                    <option value=\"moderator\">Moderator</option>
                </select>
            </div>
            <div class=\"form-group\">
                <select class=\"form-select\">
                    <option value=\"\">All Status</option>
                    <option value=\"active\">Active</option>
                    <option value=\"inactive\">Inactive</option>
                </select>
            </div>
            <div class=\"form-group\">
                <button type=\"button\" class=\"btn-admin btn-admin-primary\" style=\"width: 100%;\">
                    <i class=\"fas fa-filter\"></i> Filter
                </button>
            </div>
            <div class=\"form-group\">
                <a href=\"{{ path('admin_user_index') }}\" class=\"btn-admin btn-admin-secondary\" style=\"width: 100%;\">
                    <i class=\"fas fa-times\"></i> Clear
                </a>
            </div>
        </div>
    {% endif %}
</div>

<!-- Table Actions -->
<div class=\"table-actions\">
    <div class=\"bulk-actions\">
        <div class=\"bulk-select-controls\">
            <label class=\"select-all-label\">
                <input type=\"checkbox\" id=\"select-all\" class=\"select-all\">
                Select All
            </label>
        </div>
        
        <div class=\"bulk-action-controls\" style=\"display: flex; gap: 10px; align-items: center; flex: 1;\">
            <select id=\"bulk-action-select\" class=\"bulk-action-select\">
                <option value=\"\">Bulk Actions</option>
                <option value=\"activate\">Activate Selected</option>
                <option value=\"deactivate\">Deactivate Selected</option>
                <option value=\"delete\">Delete Selected</option>
            </select>
            
            <button type=\"button\" id=\"apply-bulk-action\" class=\"btn-admin btn-admin-primary\" disabled>
                Apply
            </button>
        </div>
    </div>
    
    <div class=\"export-buttons\">
        <a href=\"{{ path('admin_user_export_csv') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-file-csv\"></i> CSV
        </a>
        <a href=\"{{ path('admin_user_export_pdf') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-file-pdf\"></i> PDF
        </a>
    </div>
</div>

<!-- Users Table -->
<div style=\"background: rgba(26, 26, 46, 0.5); border-radius: 10px; padding: 20px; border: 1px solid rgba(0, 243, 255, 0.1); backdrop-filter: blur(10px); overflow-x: auto;\">
    <table class=\"admin-table\">
        <thead>
            <tr>
                <th>
                    <input type=\"checkbox\" id=\"header-select\">
                </th>
                <th>
                    <a href=\"{{ path('admin_user_index', {sort: 'u.id', direction: sort_field == 'u.id' and sort_direction == 'asc' ? 'desc' : 'asc'}) }}\" 
                       class=\"sortable {{ sort_field == 'u.id' ? (sort_direction == 'asc' ? 'sorted-asc' : 'sorted-desc') }}\">
                        ID
                    </a>
                </th>
                <th>
                    <a href=\"{{ path('admin_user_index', {sort: 'u.email', direction: sort_field == 'u.email' and sort_direction == 'asc' ? 'desc' : 'asc'}) }}\"
                       class=\"sortable {{ sort_field == 'u.email' ? (sort_direction == 'asc' ? 'sorted-asc' : 'sorted-desc') }}\">
                        Email
                    </a>
                </th>
                <th>
                    <a href=\"{{ path('admin_user_index', {sort: 'u.username', direction: sort_field == 'u.username' and sort_direction == 'asc' ? 'desc' : 'asc'}) }}\"
                       class=\"sortable {{ sort_field == 'u.username' ? (sort_direction == 'asc' ? 'sorted-asc' : 'sorted-desc') }}\">
                        Username
                    </a>
                </th>
                <th>
                    <a href=\"{{ path('admin_user_index', {sort: 'u.role', direction: sort_field == 'u.role' and sort_direction == 'asc' ? 'desc' : 'asc'}) }}\"
                       class=\"sortable {{ sort_field == 'u.role' ? (sort_direction == 'asc' ? 'sorted-asc' : 'sorted-desc') }}\">
                        Role
                    </a>
                </th>
                <th>Country</th>
                <th>Status</th>
                <th>
                    <a href=\"{{ path('admin_user_index', {sort: 'u.createdAt', direction: sort_field == 'u.createdAt' and sort_direction == 'asc' ? 'desc' : 'asc'}) }}\"
                       class=\"sortable {{ sort_field == 'u.createdAt' ? (sort_direction == 'asc' ? 'sorted-asc' : 'sorted-desc') }}\">
                        Created
                    </a>
                </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr data-user-id=\"{{ user.id }}\">
                <td>
                    <input type=\"checkbox\" class=\"user-checkbox\" value=\"{{ user.id }}\">
                </td>
                <td>{{ user.id }}</td>
                <td>
                    <div style=\"display: flex; align-items: center; gap: 8px;\">
                        {{ user.email }}
                        {% if user.email|lower == app.user.email|lower %}
                            <span style=\"color: #ff9500; font-size: 0.7em; background: rgba(255, 149, 0, 0.1); padding: 2px 6px; border-radius: 10px;\">You</span>
                        {% endif %}
                    </div>
                </td>
                <td>
                    <strong>{{ user.username }}</strong>
                    {% if user.fullName %}
                        <br>
                        <small style=\"color: rgba(255, 255, 255, 0.5);\">{{ user.fullName }}</small>
                    {% endif %}
                </td>
                <td>
                    {% set roleClass = 'badge-' ~ (user.role|lower) %}
                    <span class=\"badge-role {{ roleClass }}\">
                        {{ user.role }}
                    </span>
                </td>
                <td>
                    {% if user.country %}
                        <span style=\"color: rgba(255, 255, 255, 0.8);\">{{ user.country }}</span>
                    {% else %}
                        <span style=\"color: rgba(255, 255, 255, 0.3); font-style: italic; font-size: 0.9em;\">Not set</span>
                    {% endif %}
                </td>
                <td>
                    {% if user.isActive %}
                        <span style=\"color: var(--admin-success); display: flex; align-items: center; gap: 5px;\">
                            <i class=\"fas fa-circle\" style=\"font-size: 0.6em;\"></i> Active
                        </span>
                    {% else %}
                        <span style=\"color: var(--admin-danger); display: flex; align-items: center; gap: 5px;\">
                            <i class=\"fas fa-circle\" style=\"font-size: 0.6em;\"></i> Inactive
                        </span>
                    {% endif %}
                </td>
                <td>
                    <span style=\"color: rgba(255, 255, 255, 0.8);\">{{ user.createdAt|date('Y-m-d') }}</span>
                    <br>
                    <small style=\"color: rgba(255, 255, 255, 0.5);\">{{ user.createdAt|date('H:i') }}</small>
                </td>
                <td>
                    <div style=\"display: flex; gap: 8px; flex-wrap: wrap;\">
                        <a href=\"{{ path('admin_user_show', {'id': user.id}) }}\" 
                           class=\"btn-admin btn-admin-secondary\" 
                           title=\"View Details\"
                           style=\"padding: 6px 10px; font-size: 0.85em;\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"{{ path('admin_user_edit', {'id': user.id}) }}\" 
                           class=\"btn-admin btn-admin-primary\" 
                           title=\"Edit User\"
                           style=\"padding: 6px 10px; font-size: 0.85em;\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        
                        <!-- Toggle Status Form -->
                        <form method=\"post\" 
                              action=\"{{ path('admin_user_toggle_status', {'id': user.id}) }}\" 
                              style=\"display: inline;\"
                              onsubmit=\"return confirm('Are you sure you want to {{ user.isActive ? 'deactivate' : 'activate' }} this user?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle-status' ~ user.id) }}\">
                            <button type=\"submit\" 
                                    class=\"btn-admin {{ user.isActive ? 'btn-admin-warning' : 'btn-admin-success' }}\" 
                                    title=\"{{ user.isActive ? 'Deactivate' : 'Activate' }}\"
                                    style=\"padding: 6px 10px; font-size: 0.85em;\">
                                <i class=\"fas {{ user.isActive ? 'fa-user-slash' : 'fa-user-check' }}\"></i>
                            </button>
                        </form>
                        
                        <!-- Delete Form -->
                        {% if user.id != app.user.id %}
                        <form method=\"post\" 
                              action=\"{{ path('admin_user_delete', {'id': user.id}) }}\" 
                              onsubmit=\"return confirm('Are you sure you want to delete this user?');\" 
                              style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                            <button type=\"submit\" 
                                    class=\"btn-admin btn-admin-danger\" 
                                    title=\"Delete User\"
                                    style=\"padding: 6px 10px; font-size: 0.85em;\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                        {% endif %}
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\" style=\"text-align: center; padding: 40px; color: rgba(255, 255, 255, 0.5);\">
                    <i class=\"fas fa-users\" style=\"font-size: 2em; margin-bottom: 10px; display: block; opacity: 0.3;\"></i>
                    No users found
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    
    <!-- Pagination -->
    {% if users.getTotalItemCount() > 0 %}
        <div class=\"pagination-container\" style=\"margin-top: 20px;\">
            {{ knp_pagination_render(users) }}
        </div>
    {% endif %}
</div>

<!-- Bulk Actions Form - FIXED WITH CSRF TOKEN -->
<form id=\"bulk-actions-form\" method=\"post\" action=\"{{ path('admin_user_bulk_actions') }}\">
    <input type=\"hidden\" id=\"bulk-user-ids\" name=\"user_ids\">
    <input type=\"hidden\" id=\"bulk-action\" name=\"action\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('bulk_actions') }}\">
</form>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Select2 for filter selects
            \$('.form-select').select2({
                theme: 'dark',
                minimumResultsForSearch: 10,
                width: '100%',
                placeholder: 'Select...'
            });
            
            // Force white text in select2
            \$('.select2-selection__rendered').css('color', '#fff');
            
            // Initialize date pickers
            flatpickr('.datepicker', {
                dateFormat: 'Y-m-d',
                theme: 'dark',
                allowInput: true
            });
            
            // Bulk actions - FIXED
            const headerSelect = document.getElementById('header-select');
            const selectAll = document.getElementById('select-all');
            const userCheckboxes = document.querySelectorAll('.user-checkbox');
            const bulkActionSelect = document.getElementById('bulk-action-select');
            const applyBulkAction = document.getElementById('apply-bulk-action');
            const bulkActionsForm = document.getElementById('bulk-actions-form');
            const bulkUserIds = document.getElementById('bulk-user-ids');
            const bulkAction = document.getElementById('bulk-action');
            
            console.log('Bulk action elements loaded:', {
                headerSelect: !!headerSelect,
                selectAll: !!selectAll,
                userCheckboxes: userCheckboxes.length,
                bulkActionSelect: !!bulkActionSelect,
                applyBulkAction: !!applyBulkAction,
                bulkActionsForm: !!bulkActionsForm
            });
            
            // Header checkbox
            if (headerSelect) {
                headerSelect.addEventListener('change', function() {
                    console.log('Header checkbox changed:', this.checked);
                    userCheckboxes.forEach(checkbox => {
                        checkbox.checked = this.checked;
                    });
                    if (selectAll) {
                        selectAll.checked = this.checked;
                        selectAll.indeterminate = false;
                    }
                    headerSelect.indeterminate = false;
                    updateBulkActionButton();
                });
            }
            
            // Select all checkbox
            if (selectAll) {
                selectAll.addEventListener('change', function() {
                    console.log('Select all checkbox changed:', this.checked);
                    userCheckboxes.forEach(checkbox => {
                        checkbox.checked = this.checked;
                    });
                    if (headerSelect) {
                        headerSelect.checked = this.checked;
                        headerSelect.indeterminate = false;
                    }
                    selectAll.indeterminate = false;
                    updateBulkActionButton();
                });
            }
            
            // Individual checkboxes
            userCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    console.log('Individual checkbox changed:', this.value, this.checked);
                    updateSelectAllState();
                    updateBulkActionButton();
                });
            });
            
            // Bulk action select
            if (bulkActionSelect) {
                bulkActionSelect.addEventListener('change', function() {
                    console.log('Bulk action selected:', this.value);
                    updateBulkActionButton();
                });
            }
            
            // Apply bulk action - FIXED
            if (applyBulkAction) {
                applyBulkAction.addEventListener('click', function(e) {
                    e.preventDefault();
                    console.log('Apply bulk action clicked');
                    
                    const selectedUserIds = Array.from(userCheckboxes)
                        .filter(cb => cb.checked)
                        .map(cb => cb.value);
                    
                    console.log('Selected user IDs:', selectedUserIds);
                    console.log('Selected action:', bulkActionSelect.value);
                    
                    if (selectedUserIds.length === 0 || !bulkActionSelect.value) {
                        alert('Please select users and an action.');
                        return;
                    }
                    
                    const action = bulkActionSelect.value;
                    let confirmMessage = '';
                    
                    switch (action) {
                        case 'activate':
                            confirmMessage = `Activate \${selectedUserIds.length} user(s)?`;
                            break;
                        case 'deactivate':
                            confirmMessage = `Deactivate \${selectedUserIds.length} user(s)?`;
                            break;
                        case 'delete':
                            confirmMessage = `Delete \${selectedUserIds.length} user(s)? This action cannot be undone.`;
                            break;
                    }
                    
                    if (confirm(confirmMessage)) {
                        bulkUserIds.value = JSON.stringify(selectedUserIds);
                        bulkAction.value = action;
                        
                        console.log('Submitting bulk form with:', {
                            user_ids: bulkUserIds.value,
                            action: bulkAction.value
                        });
                        
                        bulkActionsForm.submit();
                    }
                });
            }
            
            function updateSelectAllState() {
                const checkedCount = Array.from(userCheckboxes).filter(cb => cb.checked).length;
                const totalCount = userCheckboxes.length;
                
                console.log('Update select all:', checkedCount, '/', totalCount);
                
                if (selectAll) {
                    selectAll.checked = checkedCount === totalCount;
                    selectAll.indeterminate = checkedCount > 0 && checkedCount < totalCount;
                }
                if (headerSelect) {
                    headerSelect.checked = checkedCount === totalCount;
                    headerSelect.indeterminate = checkedCount > 0 && checkedCount < totalCount;
                }
            }
            
            function updateBulkActionButton() {
                const checkedCount = Array.from(userCheckboxes).filter(cb => cb.checked).length;
                const hasAction = bulkActionSelect && bulkActionSelect.value;
                
                console.log('Update bulk button:', checkedCount, 'selected, action:', hasAction);
                
                if (applyBulkAction) {
                    applyBulkAction.disabled = checkedCount === 0 || !hasAction;
                }
            }
            
            // Quick search
            const searchInput = document.querySelector('#user_filter_search');
            if (searchInput) {
                searchInput.addEventListener('keyup', function(e) {
                    if (e.key === 'Enter') {
                        this.form.submit();
                    }
                });
                
                let searchTimeout;
                searchInput.addEventListener('input', function() {
                    clearTimeout(searchTimeout);
                    searchTimeout = setTimeout(() => {
                        if (this.value.length >= 3 || this.value.length === 0) {
                            document.getElementById('filter-form').submit();
                        }
                    }, 500);
                });
            }
            
            // Row click handler
            document.querySelectorAll('tbody tr').forEach(row => {
                row.addEventListener('click', function(e) {
                    if (e.target.type !== 'checkbox' && !e.target.closest('a, button, form')) {
                        const userId = this.dataset.userId;
                        window.location.href = `{{ path('admin_user_show', {'id': '__ID__'}) }}`.replace('__ID__', userId);
                    }
                });
            });
            
            // Initialize bulk action button state
            updateBulkActionButton();
            updateSelectAllState();
        });
    </script>
{% endblock %}", "admin/user/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\admin\\user\\index.html.twig");
    }
}
