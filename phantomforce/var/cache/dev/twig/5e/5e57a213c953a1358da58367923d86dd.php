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

/* tournament/list.html.twig */
class __TwigTemplate_42b36e5dee41c43698ad0b17b96e4f2a extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournament/list.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Phantom Force – Tournois";
        
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
        yield "<style>
    /* Design global amélioré */
    :root {
        --card-glow: rgba(239, 68, 68, 0.1);
        --hover-glow: rgba(239, 68, 68, 0.2);
        --transition-smooth: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hero {
        text-align: center;
        padding: 3rem 0 4rem;
        position: relative;
    }

    .hero h1 {
        font-size: 3.5rem;
        font-weight: 900;
        letter-spacing: 2px;
        margin-bottom: 1rem;
        background: var(--red-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 4px 20px rgba(239, 68, 68, 0.3);
    }

    .hero p {
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto 3rem;
        color: var(--text-muted);
        line-height: 1.6;
    }

    /* Boutons améliorés */
    .btn-organiser, .btn-secondary-pf {
        padding: 14px 28px;
        border-radius: 12px;
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        transition: var(--transition-smooth);
        display: inline-flex;
        align-items: center;
        gap: 10px;
        position: relative;
        overflow: hidden;
        border: 2px solid transparent;
    }

    .btn-organiser {
        background: var(--red-gradient);
        color: white;
        box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
    }

    .btn-organiser:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
        border-color: var(--red);
    }

    .btn-organiser::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.5s;
    }

    .btn-organiser:hover::after {
        left: 100%;
    }

    .btn-secondary-pf {
        background: rgba(255, 255, 255, 0.05);
        border: 2px solid var(--border);
        color: var(--text-muted);
        backdrop-filter: blur(10px);
    }

    .btn-secondary-pf:hover {
        border-color: var(--red);
        color: var(--red);
        background: rgba(239, 68, 68, 0.05);
        transform: translateY(-2px);
    }

    /* Carte de tournoi améliorée */
    .tournament-card {
        background: linear-gradient(145deg, var(--bg-card), rgba(255, 255, 255, 0.02));
        border: 1px solid var(--border);
        border-radius: 20px;
        padding: 25px;
        transition: var(--transition-smooth);
        height: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
        overflow: hidden;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .tournament-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: var(--red-gradient);
        transform: scaleX(0);
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        transform-origin: left;
    }

    .tournament-card:hover {
        transform: translateY(-8px);
        border-color: var(--red);
        box-shadow: 0 20px 40px var(--card-glow), 0 0 0 1px var(--hover-glow);
    }

    .tournament-card:hover::before {
        transform: scaleX(1);
    }

    .tournament-card::after {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 30% 20%, var(--hover-glow) 0%, transparent 50%);
        opacity: 0;
        transition: opacity 0.4s;
        pointer-events: none;
    }

    .tournament-card:hover::after {
        opacity: 1;
    }

    .game-badge {
        background: var(--red-soft);
        color: var(--red);
        padding: 8px 16px;
        border-radius: 10px;
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        display: inline-block;
        border: 1px solid rgba(239, 68, 68, 0.2);
    }

    .status-badge {
        font-size: 11px;
        font-weight: 800;
        padding: 6px 14px;
        border-radius: 50px;
        letter-spacing: 1px;
        border: 2px solid transparent;
    }

    .status-active { 
        background: var(--green-gradient); 
        color: black;
        border-color: rgba(34, 197, 94, 0.3);
        box-shadow: 0 0 15px rgba(34, 197, 94, 0.2);
    }
    
    .status-closed { 
        background: linear-gradient(135deg, var(--border), rgba(255,255,255,0.05));
        color: var(--text-muted);
        border-color: var(--border);
    }

    .tournament-title {
        font-size: 22px;
        font-weight: 800;
        margin: 20px 0 12px;
        color: white;
        line-height: 1.3;
        background: linear-gradient(to right, #fff 30%, var(--text-muted) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .tournament-info {
        font-size: 14px;
        color: var(--text-muted);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 8px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .tournament-info i {
        width: 20px;
        text-align: center;
        font-size: 16px;
    }

    .tournament-actions {
        margin-top: auto;
        display: flex;
        gap: 12px;
        padding-top: 20px;
        border-top: 1px solid var(--border-light);
    }

    .btn-action {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.05);
        color: var(--text-muted);
        border: 1px solid var(--border-light);
        transition: var(--transition-smooth);
        position: relative;
        overflow: hidden;
    }

    .btn-action::before {
        content: '';
        position: absolute;
        inset: 0;
        background: var(--red-gradient);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .btn-action:hover {
        border-color: var(--red);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(239, 68, 68, 0.2);
    }

    .btn-action:hover::before {
        opacity: 1;
    }

    .btn-action i {
        position: relative;
        z-index: 1;
    }

    .btn-action:hover i {
        color: white;
    }

    .btn-view {
        flex-grow: 1;
        background: transparent;
        border: 2px solid var(--red);
        color: var(--red);
        padding: 10px;
        border-radius: 10px;
        text-align: center;
        text-decoration: none;
        font-weight: 700;
        font-size: 13px;
        transition: var(--transition-smooth);
        letter-spacing: 0.5px;
        text-transform: uppercase;
        position: relative;
        overflow: hidden;
    }

    .btn-view::before {
        content: '';
        position: absolute;
        inset: 0;
        background: var(--red-gradient);
        opacity: 0;
        transition: opacity 0.3s;
        z-index: 1;
    }

    .btn-view span {
        position: relative;
        z-index: 2;
    }

    .btn-view:hover {
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(239, 68, 68, 0.3);
    }

    .btn-view:hover::before {
        opacity: 1;
    }

    /* Barre de filtre améliorée */
    .filter-bar {
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.05), rgba(0, 0, 0, 0.2));
        border: 1px solid var(--border);
        border-radius: 20px;
        padding: 25px;
        margin-bottom: 50px;
        backdrop-filter: blur(15px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .filter-bar::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: var(--red-gradient);
        opacity: 0.5;
    }

    .form-control-pf {
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid var(--border-light);
        color: white;
        padding: 14px 18px;
        border-radius: 12px;
        width: 100%;
        transition: var(--transition-smooth);
        font-size: 14px;
        backdrop-filter: blur(5px);
    }

    .form-control-pf:focus {
        border-color: var(--red);
        outline: none;
        box-shadow: 0 0 0 3px var(--red-soft), 0 4px 20px rgba(239, 68, 68, 0.2);
        background: rgba(0, 0, 0, 0.4);
    }

    .form-control-pf::placeholder {
        color: var(--text-muted);
        opacity: 0.7;
    }

    label.small {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
        display: block;
        color: var(--text-muted);
    }

    /* Message vide */
    .empty-state {
        padding: 80px 20px;
        text-align: center;
        border-radius: 20px;
        background: linear-gradient(145deg, var(--bg-card), rgba(255, 255, 255, 0.02));
        border: 2px dashed var(--border);
    }

    .empty-state p {
        font-size: 18px;
        color: var(--text-muted);
        margin: 20px 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2.5rem;
        }
        
        .hero p {
            font-size: 1rem;
            padding: 0 20px;
        }
        
        .d-flex.justify-content-center.gap-3 {
            flex-direction: column;
            gap: 15px !important;
            padding: 0 20px;
        }
        
        .btn-organiser, .btn-secondary-pf {
            width: 100%;
            justify-content: center;
        }
        
        .filter-bar {
            padding: 20px;
        }
        
        .tournament-actions {
            flex-wrap: wrap;
        }
        
        .btn-view {
            flex: 0 0 100%;
            order: -1;
            margin-bottom: 10px;
        }
    }

    /* Animation d'entrée pour les cartes */
    @keyframes cardEntrance {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .col-lg-4.col-md-6 {
        animation: cardEntrance 0.6s ease-out forwards;
        opacity: 0;
    }

    .col-lg-4.col-md-6:nth-child(1) { animation-delay: 0.1s; }
    .col-lg-4.col-md-6:nth-child(2) { animation-delay: 0.2s; }
    .col-lg-4.col-md-6:nth-child(3) { animation-delay: 0.3s; }
    .col-lg-4.col-md-6:nth-child(4) { animation-delay: 0.4s; }
    .col-lg-4.col-md-6:nth-child(5) { animation-delay: 0.5s; }
    .col-lg-4.col-md-6:nth-child(6) { animation-delay: 0.6s; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 443
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

        // line 444
        yield "<div class=\"container py-5\">
    <!-- En-tête amélioré -->
    <div class=\"hero\">
        <h1 class=\"mb-3\">NOS TOURNOIS</h1>
        <p class=\"mb-5\">Rejoignez l'élite, participez aux tournois les plus prestigieux et gagnez des récompenses légendaires.</p>
        
        <div class=\"d-flex justify-content-center gap-3\">
            ";
        // line 451
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
            // line 452
            yield "
            <a href=\"";
            // line 453
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournament_new");
            yield "\" class=\"btn-organiser\">
                <i class=\"fas fa-plus-circle\"></i> ORGANISER UN TOURNOI
            </a>
            ";
        }
        // line 457
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournament_stats");
        yield "\" class=\"btn-secondary-pf\">
                <i class=\"fas fa-chart-bar\"></i> STATISTIQUES GLOBALES
            </a>
        </div>
    </div>

    <!-- Filtres améliorés -->
    <div class=\"filter-bar\">
        <form action=\"";
        // line 465
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournaments");
        yield "\" method=\"get\" class=\"row g-4 align-items-end\">
            <div class=\"col-md-4\">
                <label class=\"small\">RECHERCHER</label>
                <div class=\"position-relative\">
                    <input type=\"text\" name=\"q\" class=\"form-control-pf\" placeholder=\"Nom du tournoi, jeu...\" value=\"";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 469, $this->source); })()), "html", null, true);
        yield "\">
                    <i class=\"fas fa-search position-absolute\" style=\"right: 15px; top: 50%; transform: translateY(-50%); color: var(--text-muted); pointer-events: none;\"></i>
                </div>
            </div>
            <div class=\"col-md-3\">
                <label class=\"small\">TRIER PAR</label>
                <select name=\"sort\" class=\"form-control-pf\">
                    <option value=\"startDate\" ";
        // line 476
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 476, $this->source); })()) == "startDate")) {
            yield "selected";
        }
        yield "><i class=\"far fa-calendar-alt me-2\"></i> Date de début</option>
                    <option value=\"name\" ";
        // line 477
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 477, $this->source); })()) == "name")) {
            yield "selected";
        }
        yield "><i class=\"fas fa-font me-2\"></i> Nom</option>
                    <option value=\"game\" ";
        // line 478
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 478, $this->source); })()) == "game")) {
            yield "selected";
        }
        yield "><i class=\"fas fa-gamepad me-2\"></i> Jeu</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"small\">ORDRE</label>
                <select name=\"order\" class=\"form-control-pf\">
                    <option value=\"DESC\" ";
        // line 484
        if (((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 484, $this->source); })()) == "DESC")) {
            yield "selected";
        }
        yield ">📉 Décroissant</option>
                    <option value=\"ASC\" ";
        // line 485
        if (((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 485, $this->source); })()) == "ASC")) {
            yield "selected";
        }
        yield ">📈 Croissant</option>
                </select>
            </div>
            <div class=\"col-md-3 d-flex gap-3 align-items-end\">
                <button type=\"submit\" class=\"btn-organiser py-3 flex-grow-1\" style=\"font-size: 13px;\">
                    <i class=\"fas fa-filter me-2\"></i> FILTRER
                </button>
                <a href=\"";
        // line 492
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournaments");
        yield "\" class=\"btn-action\" style=\"flex-shrink: 0; height: 50px; width: 50px;\" title=\"Réinitialiser\">
                    <i class=\"fas fa-sync-alt\"></i>
                </a>
            </div>
        </form>
    </div>

    <!-- Grille de cartes -->
    <div class=\"row g-4\">
        ";
        // line 501
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 501, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 502
            yield "            <div class=\"col-lg-4 col-md-6\">
                <div class=\"tournament-card\">
                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                        <span class=\"game-badge\">";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "game", [], "any", false, false, false, 505), "html", null, true);
            yield "</span>
                        ";
            // line 506
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "isActive", [], "any", false, false, false, 506)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 507
                yield "                            <span class=\"status-badge status-closed\">Fermé</span>
                        ";
            } else {
                // line 509
                yield "                            <span class=\"status-badge status-active\">Ouvert</span>
                        ";
            }
            // line 511
            yield "                    </div>
                    
                    <h3 class=\"tournament-title\">";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "name", [], "any", false, false, false, 513), "html", null, true);
            yield "</h3>
                    
                    <div class=\"tournament-info\">
                        <i class=\"far fa-calendar-alt\"></i>
                        <span>";
            // line 517
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "startDate", [], "any", false, false, false, 517), "d/m/Y"), "html", null, true);
            yield " – ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "endDate", [], "any", false, false, false, 517), "d/m/Y"), "html", null, true);
            yield "</span>
                    </div>

                    <div class=\"tournament-info\">
                        <i class=\"fas fa-layer-group\"></i>
                        <span>";
            // line 522
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "phase", [], "any", false, false, false, 522), "html", null, true);
            yield "</span>
                    </div>
                    
                    <div class=\"tournament-actions\">
                        <a href=\"";
            // line 526
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournament_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "id", [], "any", false, false, false, 526)]), "html", null, true);
            yield "\" class=\"btn-view\">
                            <span>VOIR PLUS</span>
                        </a>
                            ";
            // line 529
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                // line 530
                yield "
                        <a href=\"";
                // line 531
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournament_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "id", [], "any", false, false, false, 531)]), "html", null, true);
                yield "\" class=\"btn-action\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        ";
            }
            // line 535
            yield "                        
                        <form method=\"post\" action=\"";
            // line 536
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournament_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "id", [], "any", false, false, false, 536)]), "html", null, true);
            yield "\" style=\"display:inline-block;\">
                            <button type=\"submit\" class=\"btn-action\" title=\"";
            // line 537
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "isActive", [], "any", false, false, false, 537)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Masquer";
            } else {
                yield "Afficher";
            }
            yield "\">
                                <i class=\"fas ";
            // line 538
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "isActive", [], "any", false, false, false, 538)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "fa-eye-slash";
            } else {
                yield "fa-eye";
            }
            yield "\"></i>
                            </button>
                        </form>

                        <form method=\"post\" action=\"";
            // line 542
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournament_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "id", [], "any", false, false, false, 542)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce tournoi ?');\" style=\"display:inline-block;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 543
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "id", [], "any", false, false, false, 543))), "html", null, true);
            yield "\">
                                ";
            // line 544
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                // line 545
                yield "
                            <button type=\"submit\" class=\"btn-action\" title=\"Supprimer\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                            ";
            }
            // line 550
            yield "                        </form>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 554
        if (!$context['_iterated']) {
            // line 555
            yield "            <div class=\"col-12\">
                <div class=\"empty-state\">
                    <i class=\"fas fa-trophy fa-3x mb-3\" style=\"color: var(--border);\"></i>
                    <p class=\"text-muted mb-0\">Aucun tournoi n'a été trouvé.</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tournament'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 562
        yield "    </div>
</div>
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
        return "tournament/list.html.twig";
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
        return array (  798 => 562,  786 => 555,  784 => 554,  776 => 550,  769 => 545,  767 => 544,  763 => 543,  759 => 542,  748 => 538,  740 => 537,  736 => 536,  733 => 535,  726 => 531,  723 => 530,  721 => 529,  715 => 526,  708 => 522,  698 => 517,  691 => 513,  687 => 511,  683 => 509,  679 => 507,  677 => 506,  673 => 505,  668 => 502,  663 => 501,  651 => 492,  639 => 485,  633 => 484,  622 => 478,  616 => 477,  610 => 476,  600 => 469,  593 => 465,  581 => 457,  574 => 453,  571 => 452,  569 => 451,  560 => 444,  547 => 443,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Phantom Force – Tournois{% endblock %}

{% block stylesheets %}
<style>
    /* Design global amélioré */
    :root {
        --card-glow: rgba(239, 68, 68, 0.1);
        --hover-glow: rgba(239, 68, 68, 0.2);
        --transition-smooth: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hero {
        text-align: center;
        padding: 3rem 0 4rem;
        position: relative;
    }

    .hero h1 {
        font-size: 3.5rem;
        font-weight: 900;
        letter-spacing: 2px;
        margin-bottom: 1rem;
        background: var(--red-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 4px 20px rgba(239, 68, 68, 0.3);
    }

    .hero p {
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto 3rem;
        color: var(--text-muted);
        line-height: 1.6;
    }

    /* Boutons améliorés */
    .btn-organiser, .btn-secondary-pf {
        padding: 14px 28px;
        border-radius: 12px;
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        transition: var(--transition-smooth);
        display: inline-flex;
        align-items: center;
        gap: 10px;
        position: relative;
        overflow: hidden;
        border: 2px solid transparent;
    }

    .btn-organiser {
        background: var(--red-gradient);
        color: white;
        box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
    }

    .btn-organiser:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
        border-color: var(--red);
    }

    .btn-organiser::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.5s;
    }

    .btn-organiser:hover::after {
        left: 100%;
    }

    .btn-secondary-pf {
        background: rgba(255, 255, 255, 0.05);
        border: 2px solid var(--border);
        color: var(--text-muted);
        backdrop-filter: blur(10px);
    }

    .btn-secondary-pf:hover {
        border-color: var(--red);
        color: var(--red);
        background: rgba(239, 68, 68, 0.05);
        transform: translateY(-2px);
    }

    /* Carte de tournoi améliorée */
    .tournament-card {
        background: linear-gradient(145deg, var(--bg-card), rgba(255, 255, 255, 0.02));
        border: 1px solid var(--border);
        border-radius: 20px;
        padding: 25px;
        transition: var(--transition-smooth);
        height: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
        overflow: hidden;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .tournament-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: var(--red-gradient);
        transform: scaleX(0);
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        transform-origin: left;
    }

    .tournament-card:hover {
        transform: translateY(-8px);
        border-color: var(--red);
        box-shadow: 0 20px 40px var(--card-glow), 0 0 0 1px var(--hover-glow);
    }

    .tournament-card:hover::before {
        transform: scaleX(1);
    }

    .tournament-card::after {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 30% 20%, var(--hover-glow) 0%, transparent 50%);
        opacity: 0;
        transition: opacity 0.4s;
        pointer-events: none;
    }

    .tournament-card:hover::after {
        opacity: 1;
    }

    .game-badge {
        background: var(--red-soft);
        color: var(--red);
        padding: 8px 16px;
        border-radius: 10px;
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        display: inline-block;
        border: 1px solid rgba(239, 68, 68, 0.2);
    }

    .status-badge {
        font-size: 11px;
        font-weight: 800;
        padding: 6px 14px;
        border-radius: 50px;
        letter-spacing: 1px;
        border: 2px solid transparent;
    }

    .status-active { 
        background: var(--green-gradient); 
        color: black;
        border-color: rgba(34, 197, 94, 0.3);
        box-shadow: 0 0 15px rgba(34, 197, 94, 0.2);
    }
    
    .status-closed { 
        background: linear-gradient(135deg, var(--border), rgba(255,255,255,0.05));
        color: var(--text-muted);
        border-color: var(--border);
    }

    .tournament-title {
        font-size: 22px;
        font-weight: 800;
        margin: 20px 0 12px;
        color: white;
        line-height: 1.3;
        background: linear-gradient(to right, #fff 30%, var(--text-muted) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .tournament-info {
        font-size: 14px;
        color: var(--text-muted);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 8px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .tournament-info i {
        width: 20px;
        text-align: center;
        font-size: 16px;
    }

    .tournament-actions {
        margin-top: auto;
        display: flex;
        gap: 12px;
        padding-top: 20px;
        border-top: 1px solid var(--border-light);
    }

    .btn-action {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.05);
        color: var(--text-muted);
        border: 1px solid var(--border-light);
        transition: var(--transition-smooth);
        position: relative;
        overflow: hidden;
    }

    .btn-action::before {
        content: '';
        position: absolute;
        inset: 0;
        background: var(--red-gradient);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .btn-action:hover {
        border-color: var(--red);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(239, 68, 68, 0.2);
    }

    .btn-action:hover::before {
        opacity: 1;
    }

    .btn-action i {
        position: relative;
        z-index: 1;
    }

    .btn-action:hover i {
        color: white;
    }

    .btn-view {
        flex-grow: 1;
        background: transparent;
        border: 2px solid var(--red);
        color: var(--red);
        padding: 10px;
        border-radius: 10px;
        text-align: center;
        text-decoration: none;
        font-weight: 700;
        font-size: 13px;
        transition: var(--transition-smooth);
        letter-spacing: 0.5px;
        text-transform: uppercase;
        position: relative;
        overflow: hidden;
    }

    .btn-view::before {
        content: '';
        position: absolute;
        inset: 0;
        background: var(--red-gradient);
        opacity: 0;
        transition: opacity 0.3s;
        z-index: 1;
    }

    .btn-view span {
        position: relative;
        z-index: 2;
    }

    .btn-view:hover {
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(239, 68, 68, 0.3);
    }

    .btn-view:hover::before {
        opacity: 1;
    }

    /* Barre de filtre améliorée */
    .filter-bar {
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.05), rgba(0, 0, 0, 0.2));
        border: 1px solid var(--border);
        border-radius: 20px;
        padding: 25px;
        margin-bottom: 50px;
        backdrop-filter: blur(15px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .filter-bar::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: var(--red-gradient);
        opacity: 0.5;
    }

    .form-control-pf {
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid var(--border-light);
        color: white;
        padding: 14px 18px;
        border-radius: 12px;
        width: 100%;
        transition: var(--transition-smooth);
        font-size: 14px;
        backdrop-filter: blur(5px);
    }

    .form-control-pf:focus {
        border-color: var(--red);
        outline: none;
        box-shadow: 0 0 0 3px var(--red-soft), 0 4px 20px rgba(239, 68, 68, 0.2);
        background: rgba(0, 0, 0, 0.4);
    }

    .form-control-pf::placeholder {
        color: var(--text-muted);
        opacity: 0.7;
    }

    label.small {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
        display: block;
        color: var(--text-muted);
    }

    /* Message vide */
    .empty-state {
        padding: 80px 20px;
        text-align: center;
        border-radius: 20px;
        background: linear-gradient(145deg, var(--bg-card), rgba(255, 255, 255, 0.02));
        border: 2px dashed var(--border);
    }

    .empty-state p {
        font-size: 18px;
        color: var(--text-muted);
        margin: 20px 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2.5rem;
        }
        
        .hero p {
            font-size: 1rem;
            padding: 0 20px;
        }
        
        .d-flex.justify-content-center.gap-3 {
            flex-direction: column;
            gap: 15px !important;
            padding: 0 20px;
        }
        
        .btn-organiser, .btn-secondary-pf {
            width: 100%;
            justify-content: center;
        }
        
        .filter-bar {
            padding: 20px;
        }
        
        .tournament-actions {
            flex-wrap: wrap;
        }
        
        .btn-view {
            flex: 0 0 100%;
            order: -1;
            margin-bottom: 10px;
        }
    }

    /* Animation d'entrée pour les cartes */
    @keyframes cardEntrance {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .col-lg-4.col-md-6 {
        animation: cardEntrance 0.6s ease-out forwards;
        opacity: 0;
    }

    .col-lg-4.col-md-6:nth-child(1) { animation-delay: 0.1s; }
    .col-lg-4.col-md-6:nth-child(2) { animation-delay: 0.2s; }
    .col-lg-4.col-md-6:nth-child(3) { animation-delay: 0.3s; }
    .col-lg-4.col-md-6:nth-child(4) { animation-delay: 0.4s; }
    .col-lg-4.col-md-6:nth-child(5) { animation-delay: 0.5s; }
    .col-lg-4.col-md-6:nth-child(6) { animation-delay: 0.6s; }
</style>
{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <!-- En-tête amélioré -->
    <div class=\"hero\">
        <h1 class=\"mb-3\">NOS TOURNOIS</h1>
        <p class=\"mb-5\">Rejoignez l'élite, participez aux tournois les plus prestigieux et gagnez des récompenses légendaires.</p>
        
        <div class=\"d-flex justify-content-center gap-3\">
            {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}

            <a href=\"{{ path('app_tournament_new') }}\" class=\"btn-organiser\">
                <i class=\"fas fa-plus-circle\"></i> ORGANISER UN TOURNOI
            </a>
            {% endif %}
            <a href=\"{{ path('app_tournament_stats') }}\" class=\"btn-secondary-pf\">
                <i class=\"fas fa-chart-bar\"></i> STATISTIQUES GLOBALES
            </a>
        </div>
    </div>

    <!-- Filtres améliorés -->
    <div class=\"filter-bar\">
        <form action=\"{{ path('app_tournaments') }}\" method=\"get\" class=\"row g-4 align-items-end\">
            <div class=\"col-md-4\">
                <label class=\"small\">RECHERCHER</label>
                <div class=\"position-relative\">
                    <input type=\"text\" name=\"q\" class=\"form-control-pf\" placeholder=\"Nom du tournoi, jeu...\" value=\"{{ searchQuery }}\">
                    <i class=\"fas fa-search position-absolute\" style=\"right: 15px; top: 50%; transform: translateY(-50%); color: var(--text-muted); pointer-events: none;\"></i>
                </div>
            </div>
            <div class=\"col-md-3\">
                <label class=\"small\">TRIER PAR</label>
                <select name=\"sort\" class=\"form-control-pf\">
                    <option value=\"startDate\" {% if currentSort == 'startDate' %}selected{% endif %}><i class=\"far fa-calendar-alt me-2\"></i> Date de début</option>
                    <option value=\"name\" {% if currentSort == 'name' %}selected{% endif %}><i class=\"fas fa-font me-2\"></i> Nom</option>
                    <option value=\"game\" {% if currentSort == 'game' %}selected{% endif %}><i class=\"fas fa-gamepad me-2\"></i> Jeu</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <label class=\"small\">ORDRE</label>
                <select name=\"order\" class=\"form-control-pf\">
                    <option value=\"DESC\" {% if currentOrder == 'DESC' %}selected{% endif %}>📉 Décroissant</option>
                    <option value=\"ASC\" {% if currentOrder == 'ASC' %}selected{% endif %}>📈 Croissant</option>
                </select>
            </div>
            <div class=\"col-md-3 d-flex gap-3 align-items-end\">
                <button type=\"submit\" class=\"btn-organiser py-3 flex-grow-1\" style=\"font-size: 13px;\">
                    <i class=\"fas fa-filter me-2\"></i> FILTRER
                </button>
                <a href=\"{{ path('app_tournaments') }}\" class=\"btn-action\" style=\"flex-shrink: 0; height: 50px; width: 50px;\" title=\"Réinitialiser\">
                    <i class=\"fas fa-sync-alt\"></i>
                </a>
            </div>
        </form>
    </div>

    <!-- Grille de cartes -->
    <div class=\"row g-4\">
        {% for tournament in tournaments %}
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"tournament-card\">
                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                        <span class=\"game-badge\">{{ tournament.game }}</span>
                        {% if not tournament.isActive %}
                            <span class=\"status-badge status-closed\">Fermé</span>
                        {% else %}
                            <span class=\"status-badge status-active\">Ouvert</span>
                        {% endif %}
                    </div>
                    
                    <h3 class=\"tournament-title\">{{ tournament.name }}</h3>
                    
                    <div class=\"tournament-info\">
                        <i class=\"far fa-calendar-alt\"></i>
                        <span>{{ tournament.startDate|date('d/m/Y') }} – {{ tournament.endDate|date('d/m/Y') }}</span>
                    </div>

                    <div class=\"tournament-info\">
                        <i class=\"fas fa-layer-group\"></i>
                        <span>{{ tournament.phase }}</span>
                    </div>
                    
                    <div class=\"tournament-actions\">
                        <a href=\"{{ path('app_tournament_detail', {'id': tournament.id}) }}\" class=\"btn-view\">
                            <span>VOIR PLUS</span>
                        </a>
                            {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}

                        <a href=\"{{ path('app_tournament_edit', {'id': tournament.id}) }}\" class=\"btn-action\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        {% endif %}
                        
                        <form method=\"post\" action=\"{{ path('app_tournament_toggle', {'id': tournament.id}) }}\" style=\"display:inline-block;\">
                            <button type=\"submit\" class=\"btn-action\" title=\"{% if tournament.isActive %}Masquer{% else %}Afficher{% endif %}\">
                                <i class=\"fas {% if tournament.isActive %}fa-eye-slash{% else %}fa-eye{% endif %}\"></i>
                            </button>
                        </form>

                        <form method=\"post\" action=\"{{ path('app_tournament_delete', {'id': tournament.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce tournoi ?');\" style=\"display:inline-block;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ tournament.id) }}\">
                                {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}

                            <button type=\"submit\" class=\"btn-action\" title=\"Supprimer\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                            {% endif %}
                        </form>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <div class=\"empty-state\">
                    <i class=\"fas fa-trophy fa-3x mb-3\" style=\"color: var(--border);\"></i>
                    <p class=\"text-muted mb-0\">Aucun tournoi n'a été trouvé.</p>
                </div>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}", "tournament/list.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\tournament\\list.html.twig");
    }
}
