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

/* back/matchy/index.html.twig */
class __TwigTemplate_4d85ced374b5e8bfbd7c2c633e81fa4c extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/matchy/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/matchy/index.html.twig"));

        $this->parent = $this->load("base_back.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "🎮 Admin - Gestion des matchs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-2\">🏆 Gestion des matchs</h1>
            <p class=\"mb-0 text-muted\">Administrez tous les matchs de l'arène e-sport</p>
        </div>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_new");
        yield "\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus\"></i> Nouveau match
        </a>
    </div>
</div>

<!-- Statistiques -->
<div class=\"row mb-4\">
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-trophy fa-2x\" style=\"color: var(--admin-accent);\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 28, $this->source); })())), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Matchs total</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-play-circle fa-2x\" style=\"color: #ffc107;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 42, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 42, $this->source); })()), "status", [], "any", false, false, false, 42) == "ongoing"); })), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">En cours</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-flag-checkered fa-2x\" style=\"color: var(--admin-success);\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 56, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 56, $this->source); })()), "status", [], "any", false, false, false, 56) == "finished"); })), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Terminés</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-crown fa-2x\" style=\"color: #9d00ff;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 70, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 70, $this->source); })()), "winnerTeam", [], "any", false, false, false, 70) != null); })), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Avec gagnant</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Deuxième ligne de statistiques (localisation) -->
<div class=\"row mb-4\">
    <div class=\"col-md-4\">
        <div class=\"admin-card\" style=\"background: rgba(255, 193, 7, 0.05); border-left: 3px solid #ffc107;\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-map-marker-alt fa-2x\" style=\"color: #ffc107;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 87, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 87, $this->source); })()), "location", [], "any", false, false, false, 87)); })), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Avec localisation</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-4\">
        <div class=\"admin-card\" style=\"background: rgba(40, 167, 69, 0.05); border-left: 3px solid #28a745;\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-map-pin fa-2x\" style=\"color: #28a745;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 101, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 101, $this->source); })()), "latitude", [], "any", false, false, false, 101)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 101, $this->source); })()), "longitude", [], "any", false, false, false, 101))); })), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Avec coordonnées GPS</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-4\">
        <div class=\"admin-card\" style=\"background: rgba(220, 53, 69, 0.05); border-left: 3px solid #dc3545;\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-map-marked-alt fa-2x\" style=\"color: #dc3545;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 115, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 115, $this->source); })()), "location", [], "any", false, false, false, 115)); })), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Sans localisation</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filtres rapides -->
<div class=\"row mb-3\">
    <div class=\"col-12\">
        <div class=\"admin-card p-2\">
            <div class=\"d-flex gap-2 flex-wrap\">
                <span class=\"badge-admin\" style=\"background: rgba(255,255,255,0.1); cursor: pointer;\" onclick=\"filterByStatus('all')\">
                    <i class=\"fas fa-list\"></i> Tous (";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 129, $this->source); })())), "html", null, true);
        yield ")
                </span>
                <span class=\"badge-admin badge-planned\" style=\"cursor: pointer;\" onclick=\"filterByStatus('planned')\">
                    <i class=\"fas fa-calendar\"></i> Planifiés (";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 132, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 132, $this->source); })()), "status", [], "any", false, false, false, 132) == "planned"); })), "html", null, true);
        yield ")
                </span>
                <span class=\"badge-admin badge-ongoing\" style=\"cursor: pointer;\" onclick=\"filterByStatus('ongoing')\">
                    <i class=\"fas fa-play\"></i> En cours (";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 135, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 135, $this->source); })()), "status", [], "any", false, false, false, 135) == "ongoing"); })), "html", null, true);
        yield ")
                </span>
                <span class=\"badge-admin badge-finished\" style=\"cursor: pointer;\" onclick=\"filterByStatus('finished')\">
                    <i class=\"fas fa-check\"></i> Terminés (";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 138, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 138, $this->source); })()), "status", [], "any", false, false, false, 138) == "finished"); })), "html", null, true);
        yield ")
                </span>
                <span class=\"badge-admin badge-cancelled\" style=\"cursor: pointer;\" onclick=\"filterByStatus('cancelled')\">
                    <i class=\"fas fa-ban\"></i> Annulés (";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 141, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 141, $this->source); })()), "status", [], "any", false, false, false, 141) == "cancelled"); })), "html", null, true);
        yield ")
                </span>
                <span class=\"badge-admin\" style=\"background: #ffc107; color: #000; cursor: pointer;\" onclick=\"filterByLocation('with')\">
                    <i class=\"fas fa-map-marker-alt\"></i> Avec localisation (";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 144, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 144, $this->source); })()), "location", [], "any", false, false, false, 144)); })), "html", null, true);
        yield ")
                </span>
                <span class=\"badge-admin\" style=\"background: #6c757d; cursor: pointer;\" onclick=\"filterByLocation('without')\">
                    <i class=\"fas fa-map-marker-alt\"></i> Sans localisation (";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 147, $this->source); })()), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 147, $this->source); })()), "location", [], "any", false, false, false, 147)); })), "html", null, true);
        yield ")
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Table des matchs -->
<div class=\"admin-card\">
    <div class=\"d-flex justify-content-between align-items-center mb-3\">
        <h5 class=\"mb-0\">Liste des matchs</h5>
        <div class=\"input-group\" style=\"max-width: 300px;\">
            <input type=\"text\" class=\"form-control form-admin\" id=\"searchInput\" placeholder=\"Rechercher un match...\">
            <button class=\"btn btn-admin-secondary\" type=\"button\" onclick=\"searchMatches()\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
    </div>
    
    <div class=\"table-responsive\">
        <table class=\"admin-table\" id=\"matchesTable\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jeu</th>
                    <th>Équipe 1</th>
                    <th>Équipe 2</th>
                    <th>Score</th>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Localisation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 182, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 183
            yield "                <tr class=\"match-row\" 
                    data-status=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 184), "html", null, true);
            yield "\"
                    data-has-location=\"";
            // line 185
            yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "location", [], "any", false, false, false, 185))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
            yield "\">
                    <td><strong>#";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 186), "html", null, true);
            yield "</strong></td>
                    <td>
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-gamepad me-2\"></i>
                            ";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 190), "html", null, true);
            yield "
                        </div>
                    </td>
                    <td>";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 193), "name", [], "any", true, true, false, 193)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 193), "name", [], "any", false, false, false, 193), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                    <td>";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 194), "name", [], "any", true, true, false, 194)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 194), "name", [], "any", false, false, false, 194), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                    <td>
                        <span class=\"badge-admin badge-planned me-1\">";
            // line 196
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", true, true, false, 196) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 196)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 196), "html", null, true)) : (0));
            yield "</span>
                        <span class=\"text-muted\">-</span>
                        <span class=\"badge-admin badge-planned ms-1\">";
            // line 198
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", true, true, false, 198) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 198)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 198), "html", null, true)) : (0));
            yield "</span>
                    </td>
                    <td>
                        ";
            // line 201
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 202
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 202), "d/m/Y H:i"), "html", null, true);
                yield "
                        ";
            } else {
                // line 204
                yield "                            <span class=\"text-muted\">Non définie</span>
                        ";
            }
            // line 206
            yield "                    </td>
                    <td>
                        ";
            // line 208
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 208) == "planned")) {
                // line 209
                yield "                            <span class=\"badge-admin badge-planned\">Planifié</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 210
$context["match"], "status", [], "any", false, false, false, 210) == "ongoing")) {
                // line 211
                yield "                            <span class=\"badge-admin badge-ongoing\">En cours</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 212
$context["match"], "status", [], "any", false, false, false, 212) == "finished")) {
                // line 213
                yield "                            <span class=\"badge-admin badge-finished\">Terminé</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 214
$context["match"], "status", [], "any", false, false, false, 214) == "cancelled")) {
                // line 215
                yield "                            <span class=\"badge-admin badge-cancelled\">Annulé</span>
                        ";
            }
            // line 217
            yield "                    </td>
                    <td>
                        ";
            // line 219
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "location", [], "any", false, false, false, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 220
                yield "                            <span class=\"badge-admin\" style=\"background: #ffc107; color: #000;\" 
                                  title=\"";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "location", [], "any", false, false, false, 221), "html", null, true);
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "latitude", [], "any", false, false, false, 221) && CoreExtension::getAttribute($this->env, $this->source, $context["match"], "longitude", [], "any", false, false, false, 221))) {
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "latitude", [], "any", false, false, false, 221), 4), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "longitude", [], "any", false, false, false, 221), 4), "html", null, true);
                    yield ")";
                }
                yield "\">
                                <i class=\"fas fa-map-marker-alt\"></i> Oui
                            </span>
                        ";
            } else {
                // line 225
                yield "                            <span class=\"badge-admin\" style=\"background: #6c757d;\">
                                <i class=\"fas fa-map-marker-alt\"></i> Non
                            </span>
                        ";
            }
            // line 229
            yield "                    </td>
                    <td>
                        <div class=\"btn-group\" role=\"group\">
                            <a href=\"";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 232)]), "html", null, true);
            yield "\" 
                               class=\"btn-admin btn-admin-secondary btn-sm\"
                               title=\"Voir les détails\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 237)]), "html", null, true);
            yield "\" 
                               class=\"btn-admin btn-admin-primary btn-sm\"
                               title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 242)]), "html", null, true);
            yield "\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce match ?');\"
                                  class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 245))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn-admin btn-admin-danger btn-sm\"
                                        title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 254
        if (!$context['_iterated']) {
            // line 255
            yield "                <tr>
                    <td colspan=\"9\" class=\"text-center py-4\">
                        <div class=\"py-4\">
                            <i class=\"fas fa-trophy fa-3x mb-3\" style=\"color: rgba(255,255,255,0.1);\"></i>
                            <h5 class=\"text-muted\">Aucun match trouvé</h5>
                            <p class=\"text-muted\">Commencez par créer un nouveau match</p>
                            <a href=\"";
            // line 261
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_new");
            yield "\" class=\"btn-admin btn-admin-primary\">
                                <i class=\"fas fa-plus\"></i> Créer le premier match
                            </a>
                        </div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        yield "            </tbody>
        </table>
    </div>
    
    <!-- Pagination (optionnelle) -->
    ";
        // line 273
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 273, $this->source); })())) > 10)) {
            // line 274
            yield "    <nav class=\"mt-3\">
        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Précédent\">
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Suivant\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    ";
        }
        // line 292
        yield "</div>

<script>
// Fonction de recherche
function searchMatches() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const rows = document.querySelectorAll('.match-row');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        if (text.includes(filter)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

// Filtre par statut
function filterByStatus(status) {
    const rows = document.querySelectorAll('.match-row');
    
    rows.forEach(row => {
        if (status === 'all') {
            row.style.display = '';
        } else {
            const rowStatus = row.dataset.status;
            if (rowStatus === status) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    });
    
    // Mettre à jour le compteur
    updateVisibleCount();
}

// Filtre par localisation
function filterByLocation(type) {
    const rows = document.querySelectorAll('.match-row');
    
    rows.forEach(row => {
        const hasLocation = row.dataset.hasLocation;
        
        if (type === 'with') {
            row.style.display = hasLocation === 'yes' ? '' : 'none';
        } else if (type === 'without') {
            row.style.display = hasLocation === 'no' ? '' : 'none';
        } else {
            row.style.display = '';
        }
    });
    
    updateVisibleCount();
}

// Mettre à jour le compteur de lignes visibles
function updateVisibleCount() {
    const visibleRows = document.querySelectorAll('.match-row[style=\"display: none;\"]');
    // Vous pouvez ajouter un compteur ici si nécessaire
}

// Recherche en temps réel
document.getElementById('searchInput')?.addEventListener('keyup', function(e) {
    searchMatches();
});

// Ajouter des raccourcis clavier
document.addEventListener('keydown', function(e) {
    // Ctrl+F pour focus recherche
    if (e.ctrlKey && e.key === 'f') {
        e.preventDefault();
        document.getElementById('searchInput')?.focus();
    }
});

// Animation des statistiques
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.admin-card');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });
});
</script>

<style>
.admin-card {
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateY(20px);
}

.admin-card:hover {
    transform: translateY(-5px) !important;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

/* Style pour les badges de filtre */
.badge-admin {
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.85rem;
    transition: all 0.2s;
}

.badge-admin:hover {
    filter: brightness(1.1);
    transform: scale(1.05);
}

/* Animation pour les lignes du tableau */
.match-row {
    transition: all 0.2s;
}

.match-row:hover {
    background: rgba(255, 255, 255, 0.05);
}

/* Style pour la recherche */
#searchInput:focus {
    border-color: var(--admin-accent);
    box-shadow: 0 0 0 3px rgba(157, 0, 255, 0.2);
}
</style>
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
        return "back/matchy/index.html.twig";
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
        return array (  530 => 292,  510 => 274,  508 => 273,  501 => 268,  488 => 261,  480 => 255,  478 => 254,  464 => 245,  458 => 242,  450 => 237,  442 => 232,  437 => 229,  431 => 225,  417 => 221,  414 => 220,  412 => 219,  408 => 217,  404 => 215,  402 => 214,  399 => 213,  397 => 212,  394 => 211,  392 => 210,  389 => 209,  387 => 208,  383 => 206,  379 => 204,  373 => 202,  371 => 201,  365 => 198,  360 => 196,  355 => 194,  351 => 193,  345 => 190,  338 => 186,  334 => 185,  330 => 184,  327 => 183,  322 => 182,  284 => 147,  278 => 144,  272 => 141,  266 => 138,  260 => 135,  254 => 132,  248 => 129,  231 => 115,  214 => 101,  197 => 87,  177 => 70,  160 => 56,  143 => 42,  126 => 28,  108 => 13,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/matchy/index.html.twig #}
{% extends 'base_back.html.twig' %}

{% block title %}🎮 Admin - Gestion des matchs{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-2\">🏆 Gestion des matchs</h1>
            <p class=\"mb-0 text-muted\">Administrez tous les matchs de l'arène e-sport</p>
        </div>
        <a href=\"{{ path('app_back_matchy_new') }}\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus\"></i> Nouveau match
        </a>
    </div>
</div>

<!-- Statistiques -->
<div class=\"row mb-4\">
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-trophy fa-2x\" style=\"color: var(--admin-accent);\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ matchies|length }}</h3>
                    <small class=\"text-muted\">Matchs total</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-play-circle fa-2x\" style=\"color: #ffc107;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ matchies|filter(m => m.status == 'ongoing')|length }}</h3>
                    <small class=\"text-muted\">En cours</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-flag-checkered fa-2x\" style=\"color: var(--admin-success);\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ matchies|filter(m => m.status == 'finished')|length }}</h3>
                    <small class=\"text-muted\">Terminés</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-crown fa-2x\" style=\"color: #9d00ff;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ matchies|filter(m => m.winnerTeam != null)|length }}</h3>
                    <small class=\"text-muted\">Avec gagnant</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Deuxième ligne de statistiques (localisation) -->
<div class=\"row mb-4\">
    <div class=\"col-md-4\">
        <div class=\"admin-card\" style=\"background: rgba(255, 193, 7, 0.05); border-left: 3px solid #ffc107;\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-map-marker-alt fa-2x\" style=\"color: #ffc107;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ matchies|filter(m => m.location is not empty)|length }}</h3>
                    <small class=\"text-muted\">Avec localisation</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-4\">
        <div class=\"admin-card\" style=\"background: rgba(40, 167, 69, 0.05); border-left: 3px solid #28a745;\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-map-pin fa-2x\" style=\"color: #28a745;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ matchies|filter(m => m.latitude is not null and m.longitude is not null)|length }}</h3>
                    <small class=\"text-muted\">Avec coordonnées GPS</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-4\">
        <div class=\"admin-card\" style=\"background: rgba(220, 53, 69, 0.05); border-left: 3px solid #dc3545;\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-map-marked-alt fa-2x\" style=\"color: #dc3545;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ matchies|filter(m => m.location is empty)|length }}</h3>
                    <small class=\"text-muted\">Sans localisation</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filtres rapides -->
<div class=\"row mb-3\">
    <div class=\"col-12\">
        <div class=\"admin-card p-2\">
            <div class=\"d-flex gap-2 flex-wrap\">
                <span class=\"badge-admin\" style=\"background: rgba(255,255,255,0.1); cursor: pointer;\" onclick=\"filterByStatus('all')\">
                    <i class=\"fas fa-list\"></i> Tous ({{ matchies|length }})
                </span>
                <span class=\"badge-admin badge-planned\" style=\"cursor: pointer;\" onclick=\"filterByStatus('planned')\">
                    <i class=\"fas fa-calendar\"></i> Planifiés ({{ matchies|filter(m => m.status == 'planned')|length }})
                </span>
                <span class=\"badge-admin badge-ongoing\" style=\"cursor: pointer;\" onclick=\"filterByStatus('ongoing')\">
                    <i class=\"fas fa-play\"></i> En cours ({{ matchies|filter(m => m.status == 'ongoing')|length }})
                </span>
                <span class=\"badge-admin badge-finished\" style=\"cursor: pointer;\" onclick=\"filterByStatus('finished')\">
                    <i class=\"fas fa-check\"></i> Terminés ({{ matchies|filter(m => m.status == 'finished')|length }})
                </span>
                <span class=\"badge-admin badge-cancelled\" style=\"cursor: pointer;\" onclick=\"filterByStatus('cancelled')\">
                    <i class=\"fas fa-ban\"></i> Annulés ({{ matchies|filter(m => m.status == 'cancelled')|length }})
                </span>
                <span class=\"badge-admin\" style=\"background: #ffc107; color: #000; cursor: pointer;\" onclick=\"filterByLocation('with')\">
                    <i class=\"fas fa-map-marker-alt\"></i> Avec localisation ({{ matchies|filter(m => m.location is not empty)|length }})
                </span>
                <span class=\"badge-admin\" style=\"background: #6c757d; cursor: pointer;\" onclick=\"filterByLocation('without')\">
                    <i class=\"fas fa-map-marker-alt\"></i> Sans localisation ({{ matchies|filter(m => m.location is empty)|length }})
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Table des matchs -->
<div class=\"admin-card\">
    <div class=\"d-flex justify-content-between align-items-center mb-3\">
        <h5 class=\"mb-0\">Liste des matchs</h5>
        <div class=\"input-group\" style=\"max-width: 300px;\">
            <input type=\"text\" class=\"form-control form-admin\" id=\"searchInput\" placeholder=\"Rechercher un match...\">
            <button class=\"btn btn-admin-secondary\" type=\"button\" onclick=\"searchMatches()\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
    </div>
    
    <div class=\"table-responsive\">
        <table class=\"admin-table\" id=\"matchesTable\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jeu</th>
                    <th>Équipe 1</th>
                    <th>Équipe 2</th>
                    <th>Score</th>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Localisation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for match in matchies %}
                <tr class=\"match-row\" 
                    data-status=\"{{ match.status }}\"
                    data-has-location=\"{{ match.location is not empty ? 'yes' : 'no' }}\">
                    <td><strong>#{{ match.id }}</strong></td>
                    <td>
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-gamepad me-2\"></i>
                            {{ match.game }}
                        </div>
                    </td>
                    <td>{{ match.team1.name|default('N/A') }}</td>
                    <td>{{ match.team2.name|default('N/A') }}</td>
                    <td>
                        <span class=\"badge-admin badge-planned me-1\">{{ match.scoreTeam1 ?? 0 }}</span>
                        <span class=\"text-muted\">-</span>
                        <span class=\"badge-admin badge-planned ms-1\">{{ match.scoreTeam2 ?? 0 }}</span>
                    </td>
                    <td>
                        {% if match.matchDate %}
                            {{ match.matchDate|date('d/m/Y H:i') }}
                        {% else %}
                            <span class=\"text-muted\">Non définie</span>
                        {% endif %}
                    </td>
                    <td>
                        {% if match.status == 'planned' %}
                            <span class=\"badge-admin badge-planned\">Planifié</span>
                        {% elseif match.status == 'ongoing' %}
                            <span class=\"badge-admin badge-ongoing\">En cours</span>
                        {% elseif match.status == 'finished' %}
                            <span class=\"badge-admin badge-finished\">Terminé</span>
                        {% elseif match.status == 'cancelled' %}
                            <span class=\"badge-admin badge-cancelled\">Annulé</span>
                        {% endif %}
                    </td>
                    <td>
                        {% if match.location %}
                            <span class=\"badge-admin\" style=\"background: #ffc107; color: #000;\" 
                                  title=\"{{ match.location }}{% if match.latitude and match.longitude %} ({{ match.latitude|number_format(4) }}, {{ match.longitude|number_format(4) }}){% endif %}\">
                                <i class=\"fas fa-map-marker-alt\"></i> Oui
                            </span>
                        {% else %}
                            <span class=\"badge-admin\" style=\"background: #6c757d;\">
                                <i class=\"fas fa-map-marker-alt\"></i> Non
                            </span>
                        {% endif %}
                    </td>
                    <td>
                        <div class=\"btn-group\" role=\"group\">
                            <a href=\"{{ path('app_back_matchy_show', {'id': match.id}) }}\" 
                               class=\"btn-admin btn-admin-secondary btn-sm\"
                               title=\"Voir les détails\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"{{ path('app_back_matchy_edit', {'id': match.id}) }}\" 
                               class=\"btn-admin btn-admin-primary btn-sm\"
                               title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('app_back_matchy_delete', {'id': match.id}) }}\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce match ?');\"
                                  class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ match.id) }}\">
                                <button type=\"submit\" class=\"btn-admin btn-admin-danger btn-sm\"
                                        title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"9\" class=\"text-center py-4\">
                        <div class=\"py-4\">
                            <i class=\"fas fa-trophy fa-3x mb-3\" style=\"color: rgba(255,255,255,0.1);\"></i>
                            <h5 class=\"text-muted\">Aucun match trouvé</h5>
                            <p class=\"text-muted\">Commencez par créer un nouveau match</p>
                            <a href=\"{{ path('app_back_matchy_new') }}\" class=\"btn-admin btn-admin-primary\">
                                <i class=\"fas fa-plus\"></i> Créer le premier match
                            </a>
                        </div>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    
    <!-- Pagination (optionnelle) -->
    {% if matchies|length > 10 %}
    <nav class=\"mt-3\">
        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Précédent\">
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Suivant\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    {% endif %}
</div>

<script>
// Fonction de recherche
function searchMatches() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const rows = document.querySelectorAll('.match-row');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        if (text.includes(filter)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

// Filtre par statut
function filterByStatus(status) {
    const rows = document.querySelectorAll('.match-row');
    
    rows.forEach(row => {
        if (status === 'all') {
            row.style.display = '';
        } else {
            const rowStatus = row.dataset.status;
            if (rowStatus === status) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    });
    
    // Mettre à jour le compteur
    updateVisibleCount();
}

// Filtre par localisation
function filterByLocation(type) {
    const rows = document.querySelectorAll('.match-row');
    
    rows.forEach(row => {
        const hasLocation = row.dataset.hasLocation;
        
        if (type === 'with') {
            row.style.display = hasLocation === 'yes' ? '' : 'none';
        } else if (type === 'without') {
            row.style.display = hasLocation === 'no' ? '' : 'none';
        } else {
            row.style.display = '';
        }
    });
    
    updateVisibleCount();
}

// Mettre à jour le compteur de lignes visibles
function updateVisibleCount() {
    const visibleRows = document.querySelectorAll('.match-row[style=\"display: none;\"]');
    // Vous pouvez ajouter un compteur ici si nécessaire
}

// Recherche en temps réel
document.getElementById('searchInput')?.addEventListener('keyup', function(e) {
    searchMatches();
});

// Ajouter des raccourcis clavier
document.addEventListener('keydown', function(e) {
    // Ctrl+F pour focus recherche
    if (e.ctrlKey && e.key === 'f') {
        e.preventDefault();
        document.getElementById('searchInput')?.focus();
    }
});

// Animation des statistiques
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.admin-card');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });
});
</script>

<style>
.admin-card {
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateY(20px);
}

.admin-card:hover {
    transform: translateY(-5px) !important;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

/* Style pour les badges de filtre */
.badge-admin {
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.85rem;
    transition: all 0.2s;
}

.badge-admin:hover {
    filter: brightness(1.1);
    transform: scale(1.05);
}

/* Animation pour les lignes du tableau */
.match-row {
    transition: all 0.2s;
}

.match-row:hover {
    background: rgba(255, 255, 255, 0.05);
}

/* Style pour la recherche */
#searchInput:focus {
    border-color: var(--admin-accent);
    box-shadow: 0 0 0 3px rgba(157, 0, 255, 0.2);
}
</style>
{% endblock %}", "back/matchy/index.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\back\\matchy\\index.html.twig");
    }
}
