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
class __TwigTemplate_f23c5a71d26a2a9b562a69d436701b72 extends Template
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

<!-- Table des matchs -->
<div class=\"admin-card\">
    <div class=\"d-flex justify-content-between align-items-center mb-3\">
        <h5 class=\"mb-0\">Liste des matchs</h5>
        <div class=\"input-group\" style=\"max-width: 300px;\">
            <input type=\"text\" class=\"form-control form-admin\" placeholder=\"Rechercher un match...\">
            <button class=\"btn btn-admin-secondary\" type=\"button\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
    </div>
    
    <div class=\"table-responsive\">
        <table class=\"admin-table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jeu</th>
                    <th>Équipe 1</th>
                    <th>Équipe 2</th>
                    <th>Score</th>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 105, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 106
            yield "                <tr>
                    <td><strong>#";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 107), "html", null, true);
            yield "</strong></td>
                    <td>
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-gamepad me-2\"></i>
                            ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 111), "html", null, true);
            yield "
                        </div>
                    </td>
                    <td>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 114), "name", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                    <td>";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 115), "name", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 115), "name", [], "any", false, false, false, 115), "N/A")) : ("N/A")), "html", null, true);
            yield "</td>
                    <td>
                        <span class=\"badge-admin badge-planned me-1\">";
            // line 117
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", true, true, false, 117) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 117)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 117), "html", null, true)) : (0));
            yield "</span>
                        <span class=\"text-muted\">-</span>
                        <span class=\"badge-admin badge-planned ms-1\">";
            // line 119
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", true, true, false, 119) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 119)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 119), "html", null, true)) : (0));
            yield "</span>
                    </td>
                    <td>
                        ";
            // line 122
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 123
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 123), "d/m/Y H:i"), "html", null, true);
                yield "
                        ";
            } else {
                // line 125
                yield "                            <span class=\"text-muted\">Non définie</span>
                        ";
            }
            // line 127
            yield "                    </td>
                    <td>
                        ";
            // line 129
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 129) == "planned")) {
                // line 130
                yield "                            <span class=\"badge-admin badge-planned\">Planifié</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 131
$context["match"], "status", [], "any", false, false, false, 131) == "ongoing")) {
                // line 132
                yield "                            <span class=\"badge-admin badge-ongoing\">En cours</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 133
$context["match"], "status", [], "any", false, false, false, 133) == "finished")) {
                // line 134
                yield "                            <span class=\"badge-admin badge-finished\">Terminé</span>
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 135
$context["match"], "status", [], "any", false, false, false, 135) == "cancelled")) {
                // line 136
                yield "                            <span class=\"badge-admin badge-cancelled\">Annulé</span>
                        ";
            }
            // line 138
            yield "                    </td>
                    <td>
                        <div class=\"btn-group\" role=\"group\">
                            <a href=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 141)]), "html", null, true);
            yield "\" 
                               class=\"btn-admin btn-admin-secondary btn-sm\"
                               title=\"Voir les détails\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 146)]), "html", null, true);
            yield "\" 
                               class=\"btn-admin btn-admin-primary btn-sm\"
                               title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 151)]), "html", null, true);
            yield "\" 
                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce match ?');\"
                                  class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 154))), "html", null, true);
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
        // line 163
        if (!$context['_iterated']) {
            // line 164
            yield "                <tr>
                    <td colspan=\"8\" class=\"text-center py-4\">
                        <div class=\"py-4\">
                            <i class=\"fas fa-trophy fa-3x mb-3\" style=\"color: rgba(255,255,255,0.1);\"></i>
                            <h5 class=\"text-muted\">Aucun match trouvé</h5>
                            <p class=\"text-muted\">Commencez par créer un nouveau match</p>
                            <a href=\"";
            // line 170
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
        // line 177
        yield "            </tbody>
        </table>
    </div>
    
    <!-- Pagination (optionnelle) -->
    ";
        // line 182
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 182, $this->source); })())) > 10)) {
            // line 183
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
        // line 201
        yield "</div>
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
        return array (  386 => 201,  366 => 183,  364 => 182,  357 => 177,  344 => 170,  336 => 164,  334 => 163,  320 => 154,  314 => 151,  306 => 146,  298 => 141,  293 => 138,  289 => 136,  287 => 135,  284 => 134,  282 => 133,  279 => 132,  277 => 131,  274 => 130,  272 => 129,  268 => 127,  264 => 125,  258 => 123,  256 => 122,  250 => 119,  245 => 117,  240 => 115,  236 => 114,  230 => 111,  223 => 107,  220 => 106,  215 => 105,  177 => 70,  160 => 56,  143 => 42,  126 => 28,  108 => 13,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
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

<!-- Table des matchs -->
<div class=\"admin-card\">
    <div class=\"d-flex justify-content-between align-items-center mb-3\">
        <h5 class=\"mb-0\">Liste des matchs</h5>
        <div class=\"input-group\" style=\"max-width: 300px;\">
            <input type=\"text\" class=\"form-control form-admin\" placeholder=\"Rechercher un match...\">
            <button class=\"btn btn-admin-secondary\" type=\"button\">
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
    </div>
    
    <div class=\"table-responsive\">
        <table class=\"admin-table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jeu</th>
                    <th>Équipe 1</th>
                    <th>Équipe 2</th>
                    <th>Score</th>
                    <th>Date</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for match in matchies %}
                <tr>
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
                    <td colspan=\"8\" class=\"text-center py-4\">
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
{% endblock %}", "back/matchy/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\matchy\\index.html.twig");
    }
}
