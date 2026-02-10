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

/* back/dashboard/index.html.twig */
class __TwigTemplate_572aa9526ad5ada5d2938a928350bcd3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/dashboard/index.html.twig"));

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

        yield "🎮 Admin - Tableau de bord";
        
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
    <h1 class=\"h3 mb-2\">Tableau de bord</h1>
    <p class=\"mb-0 text-muted\">Bienvenue dans l'administration de l'arène e-sport</p>
</div>

<!-- Statistiques -->
<div class=\"row mb-4\">
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <div style=\"width: 50px; height: 50px; background: rgba(0, 243, 255, 0.2); 
                          border-radius: 10px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"fas fa-trophy\" style=\"color: var(--admin-accent); font-size: 1.5rem;\"></i>
                    </div>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 24, $this->source); })()), "total_matches", [], "any", false, false, false, 24), "html", null, true);
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
                    <div style=\"width: 50px; height: 50px; background: rgba(255, 193, 7, 0.2); 
                          border-radius: 10px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"fas fa-play-circle\" style=\"color: #ffc107; font-size: 1.5rem;\"></i>
                    </div>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 41, $this->source); })()), "ongoing_matches", [], "any", false, false, false, 41), "html", null, true);
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
                    <div style=\"width: 50px; height: 50px; background: rgba(0, 255, 136, 0.2); 
                          border-radius: 10px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"fas fa-flag-checkered\" style=\"color: var(--admin-success); font-size: 1.5rem;\"></i>
                    </div>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 58, $this->source); })()), "finished_matches", [], "any", false, false, false, 58), "html", null, true);
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
                    <div style=\"width: 50px; height: 50px; background: rgba(157, 0, 255, 0.2); 
                          border-radius: 10px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"fas fa-users\" style=\"color: #9d00ff; font-size: 1.5rem;\"></i>
                    </div>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 75, $this->source); })()), "teams_count", [], "any", false, false, false, 75), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Équipes</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Matchs récents -->
    <div class=\"col-md-8\">
        <div class=\"admin-card\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <h5 class=\"mb-0\">Matchs récents</h5>
                <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary btn-sm\">
                    Voir tous
                </a>
            </div>
            
            <div class=\"table-responsive\">
                <table class=\"admin-table\">
                    <thead>
                        <tr>
                            <th>Match</th>
                            <th>Date</th>
                            <th>Score</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recent_matches"]) || array_key_exists("recent_matches", $context) ? $context["recent_matches"] : (function () { throw new RuntimeError('Variable "recent_matches" does not exist.', 105, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 106
            yield "                        <tr>
                            <td>
                                <div>
                                    <strong>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 109), "html", null, true);
            yield "</strong>
                                    <div class=\"text-muted\" style=\"font-size: 0.85rem;\">
                                        ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 111), "name", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "Éq1")) : ("Éq1")), "html", null, true);
            yield " vs ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 111), "name", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "Éq2")) : ("Éq2")), "html", null, true);
            yield "
                                    </div>
                                </div>
                            </td>
                            <td>
                                ";
            // line 116
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 117
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 117), "d/m H:i"), "html", null, true);
                yield "
                                ";
            } else {
                // line 119
                yield "                                    <span class=\"text-muted\">-</span>
                                ";
            }
            // line 121
            yield "                            </td>
                            <td>
                                ";
            // line 123
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", true, true, false, 123) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 123)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 123), "html", null, true)) : (0));
            yield " - ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", true, true, false, 123) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 123)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 123), "html", null, true)) : (0));
            yield "
                            </td>
                            <td>
                                ";
            // line 126
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 126) == "planned")) {
                // line 127
                yield "                                    <span class=\"badge-admin badge-planned\">Planifié</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 128
$context["match"], "status", [], "any", false, false, false, 128) == "ongoing")) {
                // line 129
                yield "                                    <span class=\"badge-admin badge-ongoing\">En cours</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 130
$context["match"], "status", [], "any", false, false, false, 130) == "finished")) {
                // line 131
                yield "                                    <span class=\"badge-admin badge-finished\">Terminé</span>
                                ";
            }
            // line 133
            yield "                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 135
        if (!$context['_iterated']) {
            // line 136
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center py-3\">
                                <span class=\"text-muted\">Aucun match récent</span>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Actions rapides -->
    <div class=\"col-md-4\">
        <div class=\"admin-card\">
            <h5 class=\"mb-3\">Actions rapides</h5>
            
            <div class=\"d-grid gap-2\">
                <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_new");
        yield "\" class=\"btn-admin btn-admin-primary\">
                    <i class=\"fas fa-plus\"></i> Nouveau match
                </a>
                
                <a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_new");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                    <i class=\"fas fa-user-plus\"></i> Nouvelle équipe
                </a>
                
                <a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary\" target=\"_blank\">
                    <i class=\"fas fa-external-link-alt\"></i> Voir le site
                </a>
            </div>
        </div>
        
        <!-- Statut système -->
        <div class=\"admin-card\">
            <h5 class=\"mb-3\">Statut du système</h5>
            
            <div class=\"mb-3\">
                <div class=\"d-flex justify-content-between mb-1\">
                    <span>Performance</span>
                    <span>98%</span>
                </div>
                <div style=\"height: 5px; background: rgba(255,255,255,0.1); border-radius: 3px;\">
                    <div style=\"width: 98%; height: 100%; background: var(--admin-success); border-radius: 3px;\"></div>
                </div>
            </div>
            
            <div class=\"mb-3\">
                <div class=\"d-flex justify-content-between mb-1\">
                    <span>Stockage</span>
                    <span>65%</span>
                </div>
                <div style=\"height: 5px; background: rgba(255,255,255,0.1); border-radius: 3px;\">
                    <div style=\"width: 65%; height: 100%; background: var(--admin-accent); border-radius: 3px;\"></div>
                </div>
            </div>
            
            <div>
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-circle text-success me-2\" style=\"font-size: 0.7rem;\"></i>
                    <span>Système en ligne</span>
                </div>
            </div>
        </div>
    </div>
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
        return "back/dashboard/index.html.twig";
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
        return array (  327 => 162,  320 => 158,  313 => 154,  299 => 142,  288 => 136,  286 => 135,  280 => 133,  276 => 131,  274 => 130,  271 => 129,  269 => 128,  266 => 127,  264 => 126,  256 => 123,  252 => 121,  248 => 119,  242 => 117,  240 => 116,  230 => 111,  225 => 109,  220 => 106,  215 => 105,  196 => 89,  179 => 75,  159 => 58,  139 => 41,  119 => 24,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/dashboard/index.html.twig #}
{% extends 'base_back.html.twig' %}

{% block title %}🎮 Admin - Tableau de bord{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <h1 class=\"h3 mb-2\">Tableau de bord</h1>
    <p class=\"mb-0 text-muted\">Bienvenue dans l'administration de l'arène e-sport</p>
</div>

<!-- Statistiques -->
<div class=\"row mb-4\">
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <div style=\"width: 50px; height: 50px; background: rgba(0, 243, 255, 0.2); 
                          border-radius: 10px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"fas fa-trophy\" style=\"color: var(--admin-accent); font-size: 1.5rem;\"></i>
                    </div>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ stats.total_matches }}</h3>
                    <small class=\"text-muted\">Matchs total</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <div style=\"width: 50px; height: 50px; background: rgba(255, 193, 7, 0.2); 
                          border-radius: 10px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"fas fa-play-circle\" style=\"color: #ffc107; font-size: 1.5rem;\"></i>
                    </div>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ stats.ongoing_matches }}</h3>
                    <small class=\"text-muted\">En cours</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <div style=\"width: 50px; height: 50px; background: rgba(0, 255, 136, 0.2); 
                          border-radius: 10px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"fas fa-flag-checkered\" style=\"color: var(--admin-success); font-size: 1.5rem;\"></i>
                    </div>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ stats.finished_matches }}</h3>
                    <small class=\"text-muted\">Terminés</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <div style=\"width: 50px; height: 50px; background: rgba(157, 0, 255, 0.2); 
                          border-radius: 10px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"fas fa-users\" style=\"color: #9d00ff; font-size: 1.5rem;\"></i>
                    </div>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ stats.teams_count }}</h3>
                    <small class=\"text-muted\">Équipes</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Matchs récents -->
    <div class=\"col-md-8\">
        <div class=\"admin-card\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <h5 class=\"mb-0\">Matchs récents</h5>
                <a href=\"{{ path('app_back_matchy_index') }}\" class=\"btn-admin btn-admin-secondary btn-sm\">
                    Voir tous
                </a>
            </div>
            
            <div class=\"table-responsive\">
                <table class=\"admin-table\">
                    <thead>
                        <tr>
                            <th>Match</th>
                            <th>Date</th>
                            <th>Score</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for match in recent_matches %}
                        <tr>
                            <td>
                                <div>
                                    <strong>{{ match.game }}</strong>
                                    <div class=\"text-muted\" style=\"font-size: 0.85rem;\">
                                        {{ match.team1.name|default('Éq1') }} vs {{ match.team2.name|default('Éq2') }}
                                    </div>
                                </div>
                            </td>
                            <td>
                                {% if match.matchDate %}
                                    {{ match.matchDate|date('d/m H:i') }}
                                {% else %}
                                    <span class=\"text-muted\">-</span>
                                {% endif %}
                            </td>
                            <td>
                                {{ match.scoreTeam1 ?? 0 }} - {{ match.scoreTeam2 ?? 0 }}
                            </td>
                            <td>
                                {% if match.status == 'planned' %}
                                    <span class=\"badge-admin badge-planned\">Planifié</span>
                                {% elseif match.status == 'ongoing' %}
                                    <span class=\"badge-admin badge-ongoing\">En cours</span>
                                {% elseif match.status == 'finished' %}
                                    <span class=\"badge-admin badge-finished\">Terminé</span>
                                {% endif %}
                            </td>
                        </tr>
                        {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center py-3\">
                                <span class=\"text-muted\">Aucun match récent</span>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Actions rapides -->
    <div class=\"col-md-4\">
        <div class=\"admin-card\">
            <h5 class=\"mb-3\">Actions rapides</h5>
            
            <div class=\"d-grid gap-2\">
                <a href=\"{{ path('app_back_matchy_new') }}\" class=\"btn-admin btn-admin-primary\">
                    <i class=\"fas fa-plus\"></i> Nouveau match
                </a>
                
                <a href=\"{{ path('app_back_team_new') }}\" class=\"btn-admin btn-admin-secondary\">
                    <i class=\"fas fa-user-plus\"></i> Nouvelle équipe
                </a>
                
                <a href=\"{{ path('app_matchy_index') }}\" class=\"btn-admin btn-admin-secondary\" target=\"_blank\">
                    <i class=\"fas fa-external-link-alt\"></i> Voir le site
                </a>
            </div>
        </div>
        
        <!-- Statut système -->
        <div class=\"admin-card\">
            <h5 class=\"mb-3\">Statut du système</h5>
            
            <div class=\"mb-3\">
                <div class=\"d-flex justify-content-between mb-1\">
                    <span>Performance</span>
                    <span>98%</span>
                </div>
                <div style=\"height: 5px; background: rgba(255,255,255,0.1); border-radius: 3px;\">
                    <div style=\"width: 98%; height: 100%; background: var(--admin-success); border-radius: 3px;\"></div>
                </div>
            </div>
            
            <div class=\"mb-3\">
                <div class=\"d-flex justify-content-between mb-1\">
                    <span>Stockage</span>
                    <span>65%</span>
                </div>
                <div style=\"height: 5px; background: rgba(255,255,255,0.1); border-radius: 3px;\">
                    <div style=\"width: 65%; height: 100%; background: var(--admin-accent); border-radius: 3px;\"></div>
                </div>
            </div>
            
            <div>
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-circle text-success me-2\" style=\"font-size: 0.7rem;\"></i>
                    <span>Système en ligne</span>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "back/dashboard/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\dashboard\\index.html.twig");
    }
}
